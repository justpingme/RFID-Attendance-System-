<style>
    .footer #fbutton{
	width:35px;
	height:35px;
	border: #fff 12px solid;
	border-radius:35px;
	margin:0 auto;
	position:relative
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
.footer #fbutton:hover{
	width:35px;
	height:35px;
	border: #3A3A3A 12px solid;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	position:relative;
}
@media screen and (max-width:767px){
    .footer #fbutton{
	width:15px;
	height:15px;
	border: #727172 5px solid;
	border-radius:35px;
	margin:0 auto;
	position:relative
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
    }
.footer {
	bottom:0;
	left:0;
	position:fixed;
    width: 100%;
    height: 2em;
    overflow:hidden;
    margin:0 auto;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	z-index:999;
}
    
.footer:hover {
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	height: 15em;
}
.footer #fcontainer{
	margin-top:5px;
	width:100%;
height:100%;
  position:relative;
  top:0;
  left:0;
	background: #fff;
}
.copyright {
    border-top: solid 1px #ccc;
    border-top-width: 1px;
    border-top-style: solid;
    border-top-color: rgb(204, 204, 204);
    padding: 0px 0;
    padding-top: 5px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    margin: 5px 10px 0;
    margin-top: 5px;
    margin-right: 10px;
    margin-bottom: 0px;
    margin-left: 10px;
    font-size: 1.5em;
    font-family: 'Open Sans', sans-serif !important;
    line-height: 1.5em;
}
    
@media screen and (max-width:767px){
     .copyright {
     border-top: solid 0.5px #ccc;
    border-top-width: 0.5px;
    border-top-style: solid;
    border-top-color: rgb(204, 204, 204);
    padding: 0px 0;
    padding-top: 2px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    margin: 2px 5px 0;
    margin-top: 2px;
    margin-right: 4px;
    margin-bottom: 0px;
    margin-left: 4px;
    font-size: 1.2em;
    font-family: 'Open Sans', sans-serif !important;
    line-height: 1.0em;
            }
        }
    
h1{
    font-family: cursive;
    font-size: 0.7em;
}

.copyright .first {
    float: left;
    font-family: cursive;
    color: #000;
}
.copyright .second {
    font-family: sans-serif;
    float: left;
    text-align: right;
    color: #000;
    

}
a {
    color: #000;
}




.social-btns .btn,
.social-btns .btn:before,
.social-btns .btn .fa {
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
  -webkit-transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
          transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
}
.social-btns .btn:before {
  top: 90%;
  left: -110%;
}
.social-btns .btn .fa {
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
}
.social-btns .btn.facebook:before {
  background-color: #3b5998;
}
.social-btns .btn.facebook .fa {
  color: #3b5998;
}
.social-btns .btn.twitter:before {
  background-color: #3cf;
}
.social-btns .btn.twitter .fa {
  color: #3cf;
}
.social-btns .btn.google:before {
  background-color: #dc4a38;
}
.social-btns .btn.google .fa {
  color: #dc4a38;
}
.social-btns .btn.instagram:before {
  background-color: deeppink;
}
.social-btns .btn.instagram .fa {
  color: #f26798;
}
.social-btns .btn.skype:before {
  background-color: #00aff0;
}
.social-btns .btn.skype .fa {
  color: #00aff0;
}
.social-btns .btn.linkedin:before {
  background-color: #0077B5;
}
.social-btns .btn.linkedin .fa {
  color: #0077B5;
}
.social-btns .btn:focus:before,
.social-btns .btn:hover:before {
  top: -10%;
  left: -10%;
}
.social-btns .btn:focus .fa,
.social-btns .btn:hover .fa {
  color: #fff;
  -webkit-transform: scale(1);
          transform: scale(1);
}
.social-btns {
  height: 100px;
  margin: 10px 10px;
  font-size: 0;
  text-align: center;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 600px;
  right: 0;
}
@media screen and (max-width:767px){
    .social-btns {
  height: 50px;
  margin: 0px 0px;
  font-size: 0;
  text-align: center;
  position: relative;
  top: 0;
  bottom: 0;
  left: 0px;
  right: 0px;
}
    }
    
.social-btns .btn {
  display: inline-block;
  background-color: #fff;
  width: 90px;
  height: 90px;
  line-height: 90px;
  margin: 0 10px;
  text-align: center;
  position: relative;
  overflow: hidden;
  border-radius: 28%;

  -webkit-box-shadow: 0 5px 15px -5px  #0027ff   ;
          box-shadow: 0 5px 15px -5px  #0027ff   ;
  opacity: 0.99;
}
@media screen and (max-width:767px){
    .social-btns .btn {
  display: inline-block;
  background-color: #fff;
  width: 40px;
  height: 40px;
  line-height: 45px;
  margin: 10px;
  text-align: center;
  position: relative;
  overflow: hidden;
  border-radius: 28%;
  -webkit-box-shadow: 0 5px 15px -5px #0027ff ;
          box-shadow: 0 5px 15px -5px  #0027ff ;
}
    }
    
.social-btns .btn:before {
  content: '';
  width: 120%;
  height: 120%;
  position: absolute;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.social-btns .btn .fa {
  font-size: 38px;
  vertical-align: middle;
}
    .admin{
        font-family: fantasy;
        color:#000;
        text-align: center;
    }
    .admin:hover{
        color: #fff;
        cursor: not-allowed;
    }
    
    
    #fbutton a:hover{
        cursor: not-allowed;
    }
</style>
<div class="footer">
  <div id="fbutton";><a class="admin" href="register/super_adminregister.php">........</a></div>
<div id="fcontainer">
    <div class="social-btns"><a class="btn facebook" href="#"><i class="fa fa-facebook"></i></a><a class="btn twitter" href="#"><i class="fa fa-twitter"></i></a><a class="btn google" href="#"><i class="fa fa-google"></i></a><a class="btn instagram" href="#"><i class="fa fa-instagram"></i></a><a class="btn skype" href="#"><i class="fa fa-skype"></i></a><a class="btn linkedin" href="#"><i class="fa fa-linkedin"></i></a>
</div>
    <div class="copyright">
        
<span class="first">Copyright <i class="fa fa-copyright" role="copyright">
 
    </i>; 2017 <a class="admin" href="register/adminregister.php"><b>Abhinay Raj Design</b></a>.<br /><span><h1>All Rights Reserved. No unauthorized duplication of content or design permitted.<br/></h1></span>
             <span class="second"><a href="#">Terms of Service</a> | <a href="#">Privacy Policy</a><br /><span>TEL: +91 7858826816 </span>
        </span>
        </span>
         </div>
    </div>
</div>
    
</body>
</html>

<?php
// close the database connection
if (isset($connection)){
 mysqli_close($connection);
}
?>