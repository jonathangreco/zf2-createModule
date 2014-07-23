<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="width : 960px; margin: auto;">

</body>
</html>
<?php

if($_POST['module']) {
	$str = $_POST['module'];
	$lowerStr = strtolower($str);
	$ucFirstStr = ucfirst($str);
	$string2 = "mkdir -pv ".$ucFirstStr."/{config,tests/".$ucFirstStr."Test/{Controller,Framework,Util,Service},src/".$ucFirstStr."/{Controller,Form,Entity,Factory,Service},view/".$lowerStr."/".$lowerStr.",language}
	|touch ".$ucFirstStr."/Module.php
	|touch ".$ucFirstStr."/autoload_classmap.php
	|touch ".$ucFirstStr."/config/module.config.php
	|touch ".$ucFirstStr."/language/FlashMessage/en_US-flashMessage.php
	|touch ".$ucFirstStr."/language/FlashMessage/fr_FR.flashMessage.php
	|touch ".$ucFirstStr."/language/fr_FR.global.php
	|touch ".$ucFirstStr."/language/en_US.global.php
	|touch ".$ucFirstStr."/src/".$ucFirstStr."/Controller/".$ucFirstStr."Controller.php
	|touch ".$ucFirstStr."/tests/".$ucFirstStr."Bootstrap.php
	|touch ".$ucFirstStr."/tests/TestConfig.php
	|touch ".$ucFirstStr."/tests/".$ucFirstStr."Test/Framework/TestCase.php
	|touch ".$ucFirstStr."/tests/".$ucFirstStr."Test/Util/ServiceManagerFactory.php
	|touch ".$ucFirstStr."/tests/".$ucFirstStr."Test/Service/".$ucFirstStr."ServiceTest.php";

	echo '--------------------------------------------------<br/>';
	echo '<h1>Version &agrave; jeter</h1>';
	echo "<div style='width : 900px; background-color:red;'>";
	echo $string2;
	echo "</div>";
	echo '<br/>--------------------------------------------------';
	echo '<br/>';
}


if($_POST['module']) {
	$str = $_POST['module'];
	$lowerStr = strtolower($str);
	$ucFirstStr = ucfirst($str);

	$string = 'cp -r C:/wamp/www/Tools/Provider module/'.$ucFirstStr. '
	| chmod -R 777 module/' . $ucFirstStr .'
	| find . -type f -exec sed -i "s/Provider/'.$ucFirstStr.'/g" {} \;
	| mv module/'. $ucFirstStr . '/src/Provider/ module/'. $ucFirstStr . '/src/'. $ucFirstStr . '
	| mv module/'. $ucFirstStr . '/src/'. $ucFirstStr . '/Controller/ProviderController.php 
		module/'. $ucFirstStr . '/src/'. $ucFirstStr . '/Controller/'. $ucFirstStr . 'Controller.php
	| mv module/'. $ucFirstStr . '/src/'. $ucFirstStr . '/Factory/ProviderControllerFactory.php 
		module/'. $ucFirstStr . '/src/'. $ucFirstStr . '/Factory/'. $ucFirstStr . 'ControllerFactory.php
	| mv module/'. $ucFirstStr . '/src/'. $ucFirstStr . '/Factory/ProviderServiceFactory.php 
		module/'. $ucFirstStr . '/src/'. $ucFirstStr . '/Factory/'. $ucFirstStr . 'ServiceFactory.php
	| mv module/'. $ucFirstStr . '/src/'. $ucFirstStr . '/Service/ProviderService.php 
		module/'. $ucFirstStr . '/src/'. $ucFirstStr . '/Service/'. $ucFirstStr . 'Service.php
	| mv module/'. $ucFirstStr . '/view/provider/ module/'. $ucFirstStr . '/view/'. $lowerStr . '
	| mv module/'. $ucFirstStr . '/view/'. $lowerStr . '/provider/ module/'. $ucFirstStr . '/view/'. $lowerStr . '/' . $lowerStr .'
	| mv module/'. $ucFirstStr . '/tests/ProviderTest module/'. $ucFirstStr .'/tests/'. $ucFirstStr .'Test
	| mv module/'. $ucFirstStr . '/tests/ProviderBootstrap.php module/'. $ucFirstStr .'/tests/' . $ucFirstStr.'Bootstrap.php
	| mv module/'. $ucFirstStr . '/tests/' .$ucFirstStr . 'Test/Controller/ProviderControllerTest.php
		module/'. $ucFirstStr . '/tests/' .$ucFirstStr . 'Test/Controller/' . $ucFirstStr . 'ControllerTest.php
	| mv module/'. $ucFirstStr . '/tests/' .$ucFirstStr . 'Test/Service/ProviderServiceTest.php
		module/'. $ucFirstStr . '/tests/' .$ucFirstStr . 'Test/Service/' . $ucFirstStr . 'ServiceTest.php'
	;

	echo '--------------------------------------------------<br/>';
	echo '<h1>Version &agrave; pr&eacute;f&eacute;rer</h1>';
	echo "<div style='width : 900px; background-color:green;'> ";
	echo $string;
	echo "</div>";
	echo '<br/>--------------------------------------------------';
	echo '<br/>';
}