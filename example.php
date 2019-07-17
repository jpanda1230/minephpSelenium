<?php



require_once "phpwebdriver/WebDriver.php";

$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect("chrome");                            
$webdriver->get("https://carcostcanada.com/Account/Login?ReturnUrl=%2F");

$elementUser = $webdriver->findElementBy(LocatorStrategy::name, "UserName");
sleep(7);
if ($elementUser) {
	sleep(2);
    $elementUser->sendKeys(array("todd@guideofsecrets.com" ) );
	sleep(2);
    $elementUser->submit();
}

$elementPwd = $webdriver->findElementBy(LocatorStrategy::name, "Password");
sleep(2);
if ($elementPwd) {
	sleep(1);
    $elementPwd->sendKeys(array("Password1" ) );
	sleep(1);
    $elementPwd->submit();
}
//$elementButton=$webdriver->findElementBy(LocatorStrategy::xpath,"//*[@id="loginForm"]/div/form/div[7]/div/input");
$elementButton=$webdriver->findElementBy(LocatorStrategy::alt,"Sign in with Email");
sleep(1);
if ($elementButton){
	$elementButton->click();
}
sleep(2);
$webdriver->close();

?>