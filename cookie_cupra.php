<?php
setcookie("auto","Cupra", time()+48*60*60);
?>
<?php
$cookie_name="auto";
if(!isset($_COOKIE[$cookie_name])){
    echo "cookie name '".$cookie_name. "' is not set!";
}else{
    echo "cookie '".$cookie_name. "' is set!<br>";
    echo "Value is: ".$_COOKIE[$cookie_name];
}
?>
