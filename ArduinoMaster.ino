

#include <EEPROM.h>
#include <SPI.h>     
#include <MFRC522.h> 
#include <LiquidCrystal.h> 

boolean match = false; 
boolean programMode = false; 
int successRead; 
byte storedCard[4];   // Stores an ID read from EEPROM
byte readCard[4];           // Stores scanned ID read from RFID Module
byte masterCard[4]; // Stores master card's ID read from EEPROM
#define SS_PIN 10
#define RST_PIN 9
MFRC522 mfrc522(SS_PIN, RST_PIN);  // Create MFRC522 instance.
LiquidCrystal lcd(7, 6, 5, 4, 3, 2); //Initializing LCD PINS as (RS,EN,D4,D5,D6,D7)
void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);  // Initialize serial communications with PC
  lcd.begin(16, 2);    //Initializing LCD 16x2
  pinMode(8, OUTPUT);  //LED and Buzzer PIN OUT
  SPI.begin();           // MFRC522 Hardware uses SPI protocol
  mfrc522.PCD_Init();    // Initialize MFRC522 Hardware
  mfrc522.PCD_SetAntennaGain(mfrc522.RxGain_max);
  if (EEPROM.read(1) != 1) {  // Look EEPROM if Master Card defined, EEPROM address 1 holds if defined
    Serial.println("No Master Card Defined"); //When no Master Card in Your EEROM (Serial Display)
    Serial.println("Scan A PICC to Define as Master Card");
    lcd.clear();
    lcd.setCursor(0, 0);
    lcd.println("SET MASTERCARD   "); //When no Master Card in Your EEROM (LCD Display)
    lcd.setCursor(0, 1);
    lcd.println("SCAN A PICC....."); //Scan any RFID CARD to set Your Master Card in Your EEROM (LCD Display)
    delay(1500);
    do {
      successRead = getID(); // sets successRead to 1 when we get read from reader otherwise 0
    }
    while (!successRead); //the program will not go further while you not get a successful read
    for ( int j = 0; j < 4; j++ ) { // Loop 4 times
      EEPROM.write( 2 + j, readCard[j] ); // Write scanned PICC's UID to EEPROM, start from address 3
    }
    EEPROM.write(1, 1); //Write to EEPROM we defined Master Card.
    Serial.println("Master Card Defined");
    
  }
  Serial.println("Master Card's UID");
  for ( int i = 0; i < 4; i++ ) {     // Read Master Card's UID from EEPROM
    masterCard[i] = EEPROM.read(2 + i); // Write it to masterCard
    Serial.print(masterCard[i], HEX); //Master Card only view in serial
     Serial.println("Waiting PICCs to bo scanned :)"); 
  }
  //WAITING TO SCAN THE RFID CARDS:
  Serial.println("");
  Serial.println("Waiting PICCs to bo scanned :)");
  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.println("WAITING         ");
  lcd.setCursor(0, 1);
  lcd.println("FOR PICC....     ");
  delay(1500);
}
void loop() {
  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("      SWIPE");
  lcd.setCursor(0, 1);
  lcd.print("    YOUR CARD");

 /* 
 if (digitalRead(BUTTON) == HIGH);                     //To Delete the EEROM USE the below command just run it
  {
  // for (int i = 0 ; i < EEPROM.length() ; i++) {
  // EEPROM.write(i, 0);
  // }
  // }                                     */
  do {
    successRead = getID(); // sets successRead to 1 when we get read from reader otherwise 0
    if (programMode) {
      // Program Mode cycles through RGB waiting to read a new card
    }
    else {
   }}
  while (!successRead); //the program will not go further while you not get a successful read
  if (programMode) {
    if ( isMaster(readCard) ) {  //If master card scanned again exit program mode
      Serial.println("This is Master Card");
      Serial.println("Exiting Program Mode");
      lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("EXITING FROM");
      lcd.setCursor(0, 1);
      lcd.print("MASTERCARD MODE");
      delay(2000);
      programMode = false;
      return;
    }
    else {
      if ( findID(readCard) ) { //If scanned card is known delete it
        Serial.println("I know this PICC, so removing");
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("AVAILABLE!");
        lcd.setCursor(0, 1);
        lcd.print("SO DELETING.....");
        delay(5000);
        deleteID(readCard);
        Serial.println("-----------------------------");
      }
      else {                    // If scanned card is not known add it
        Serial.println("I do not know this PICC, adding...");
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("Card no:");
        lcd.setCursor(0, 1);
        lcd.print(readCard[0], HEX);
        lcd.print(readCard[1], HEX);
        lcd.print(readCard[2], HEX);
        lcd.print(readCard[3], HEX);
        lcd.print(readCard[4], HEX);
        delay(4000);
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("NOT AVAILABLE");
        lcd.setCursor(0, 1);
        lcd.print("SO ADDING.......");
        delay(5000);
        writeID(readCard);
        Serial.println("-----------------------------");
      }} }
  else {
    if ( isMaster(readCard) ) {  // If scanned card's ID matches Master Card's ID enter program mode
      programMode = true;
      Serial.println("Welcome to Mastercard Mode");
      lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("WELCOME TO");
      lcd.setCursor(0, 1);
      lcd.print("MASTERCARD MODE");
      delay(3000);
      int count = EEPROM.read(0); // Read the first Byte of EEPROM that
      Serial.print("I have ");    // stores the number of ID's in EEPROM
      Serial.print(count);
      Serial.print(" record(s) on EEPROM");
      Serial.println("");
      Serial.println("Scan a PICC to ADD or REMOVE");
      Serial.println("-----------------------------");
      lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("SCAN PICC TO");
      lcd.setCursor(0, 1);
      lcd.print("ADD OR REMOVE...");
      delay(2500);
    }
    else {
      if ( findID(readCard) ) {        // If not, see if the card is in the EEPROM
        Serial.println("Acces Granted");
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print(" CONGRATULATION");
        lcd.setCursor(0, 1);
        lcd.print(" ACCESS GRANTED");
        digitalWrite(8, HIGH);
        delay(1500);
        digitalWrite(8, LOW);
        lcd.clear();
      }
      else {        // If not, show that the ID was not valid
        Serial.println("Access Denied");
        for (int abcd = 0; abcd < 6; abcd++)
        {
          lcd.clear();
          lcd.setCursor(0, 0);
          lcd.print("     SORRY");
          lcd.setCursor(0, 1);
          lcd.print("  ACCESS DENIED");
          digitalWrite(8, HIGH);
          delay(700);
          digitalWrite(8, LOW);
          lcd.clear();
          lcd.print("   YOU'RE NOT  ");
          lcd.setCursor(0, 1);
          lcd.print("   AUTHORIZED   ");
          delay(700);
        }
        lcd.clear();
      }}}}
int getID() {
  // Getting ready for Reading PICCs
  if ( ! mfrc522.PICC_IsNewCardPresent()) { //If a new PICC placed to RFID reader continue
    return 0;
  }
  if ( ! mfrc522.PICC_ReadCardSerial()) { //Since a PICC placed get Serial and continue
    return 0;
  }
  // There are Mifare PICCs which have 4 byte or 7 byte UID care if you use 7 byte PICC
  // I think we should assume every PICC as they have 4 byte UID
  // Until we support 7 byte PICCs

  Serial.println("Scanning PICC's UID.........");
  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("SCANNING");
  lcd.setCursor(0, 1);
  lcd.print("PICC's UID.....");
  delay(2000);
  for (int i = 0; i < 4; i++) {  //
    readCard[i] = mfrc522.uid.uidByte[i];
    Serial.print(readCard[i], HEX);
  }
  Serial.println("");
  mfrc522.PICC_HaltA(); // Stop reading
  return 1;
}
boolean isMaster( byte test[] ) {
  if ( checkTwo( test, masterCard ) )
    return true;
  else
    return false;
}

boolean checkTwo ( byte a[], byte b[] ) {
  if ( a[0] != NULL ) // Make sure there is something in the array first
    match = true; // Assume they match at first
  for ( int k = 0; k < 4; k++ ) { // Loop 4 times
    if ( a[k] != b[k] ) // IF a != b then set match = false, one fails, all fail
      match = false;
  }
  if ( match ) { // Check to see if if match is still true
    return true; // Return true
  }
  else  {
    return false; // Return false
  }}
boolean findID( byte find[] ) {
  int count = EEPROM.read(0); // Read the first Byte of EEPROM that
  for ( int i = 1; i <= count; i++ ) {  // Loop once for each EEPROM entry
    readID(i); // Read an ID from EEPROM, it is stored in storedCard[4]
    if ( checkTwo( find, storedCard ) ) { // Check to see if the storedCard read from EEPROM
      return true;
      break; // Stop looking we found it
    }
    else {  // If not, return false
    }}
  return false;
}
void readID( int number ) {
  int start = (number * 4 ) + 2; // Figure out starting position
  for ( int i = 0; i < 4; i++ ) { // Loop 4 times to get the 4 Bytes
    storedCard[i] = EEPROM.read(start + i); // Assign values read from EEPROM to array
  }
}
void deleteID( byte a[] ) {
  if ( !findID( a ) ) { // Before we delete from the EEPROM, check to see if we have this card!
    failedWrite(); // If not
  }
  else {
    int num = EEPROM.read(0); // Get the numer of used spaces, position 0 stores the number of ID cards
    int slot; // Figure out the slot number of the card
    int start;// = ( num * 4 ) + 6; // Figure out where the next slot starts
    int looping; // The number of times the loop repeats
    int j;
    int count = EEPROM.read(0); // Read the first Byte of EEPROM that stores number of cards
    slot = findIDSLOT( a ); //Figure out the slot number of the card to delete
    start = (slot * 4) + 2;
    looping = ((num - slot) * 4);
    num--; // Decrement the counter by one
    EEPROM.write( 0, num ); // Write the new count to the counter
    for ( j = 0; j < looping; j++ ) { // Loop the card shift times
      EEPROM.write( start + j, EEPROM.read(start + 4 + j)); // Shift the array values to 4 places earlier in the EEPROM
    }
    for ( int k = 0; k < 4; k++ ) { //Shifting loop
      EEPROM.write( start + j + k, 0);
    }
    successDelete();
  }}
  //For Failed to add the card:
void failedWrite() {

  Serial.println("something wrong with Card");
  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("SOMETHING WRONG");
  lcd.setCursor(0, 1);
  lcd.print("WITH CARD");
  delay(2000);
}
//For Sucessfully Deleted:
void successDelete() {
  Serial.println("Succesfully removed");
  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("SUCCESFULLY");
  lcd.setCursor(0, 1);
  lcd.print("REMOVED");
  delay(2000);
}
int findIDSLOT( byte find[] ) {
  int count = EEPROM.read(0); // Read the first Byte of EEPROM that
  for ( int i = 1; i <= count; i++ ) { // Loop once for each EEPROM entry
    readID(i); // Read an ID from EEPROM, it is stored in storedCard[4]
    if ( checkTwo( find, storedCard ) ) { // Check to see if the storedCard read from EEPROM
      // is the same as the find[] ID card passed
      return i; // The slot number of the card
      break; // Stop looking we found it
    }
  }
}
//For Sucessfully Added:
void successWrite() {

  Serial.println("Succesfully added");
  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("SUCCESFULLY");
  lcd.setCursor(0, 1);
  lcd.print("ADDED");
  delay(2000);
}
//For Adding card to EEROM:
void writeID( byte a[] ) {
  if ( !findID( a ) ) { // Before we write to the EEPROM, check to see if we have seen this card before!
    int num = EEPROM.read(0); // Get the numer of used spaces, position 0 stores the number of ID cards
    int start = ( num * 4 ) + 6; // Figure out where the next slot starts
    num++; // Increment the counter by one
    EEPROM.write( 0, num ); // Write the new count to the counter
    for ( int j = 0; j < 4; j++ ) { // Loop 4 times
      EEPROM.write( start + j, a[j] ); // Write the array values to EEPROM in the right position
    }
    successWrite();
  }
  else {
    failedWrite();
  }
}

