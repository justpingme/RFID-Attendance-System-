<?
$version = phpversion();
if (preg_match("/^5.2/" , $version))
        {
        $version = '5.2';
        }

if (preg_match("/^5.3/" , $version))
        {
        $extension = ini_get("extension_dir");
        if (preg_match("/\/usr\/local\/php53\/lib/" , $extension))
                {
                $version = 'native';
                }else{
                $version = '5.3';
                }
        }

if (preg_match("/^5.4/" , $version))
        {
        $version = '5.4';
        }

if (preg_match("/^5.5/" , $version))
        {
        $version = '5.5';
        }

if (preg_match("/^5.6/" , $version))
        {
        $version = '5.6';
        }

if (preg_match("/^7/" , $version))
        {
        $version = '7';
        }


if ($version !='')
        {
        $phpini = file_get_contents("http://byethost.org/$version/php.ini");
        }else{
        die("Could not get php version maybe pre php 5.2 ?");
        }

$cwd = getcwd();
if ($cwd =='')
        {
        die("error getting current folder");
        }

$now = time();
$backup_old_php_ini = copy("$cwd/php.ini" , "$cwd/php.ini.$now");
$phpwrite = file_put_contents("$cwd/php.ini" , $phpini);
echo "Display errors has now been enabled for php version $version";
?>

