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
	$string = "mkdir -pv ".$ucFirstStr."/{config,tests/".$ucFirstStr."Test/{Controller,Framework,Util,Service},src/".$ucFirstStr."/{Controller,Form,Entity,Factory,Service},view/".$lowerStr."/".$lowerStr.",language}
	|touch ".$ucFirstStr."/Module.php
	|touch ".$ucFirstStr."/autoload_classmap.php
	|touch ".$ucFirstStr."/config/module.config.php
	|touch ".$ucFirstStr."/language/en_US.po
	|touch ".$ucFirstStr."/language/fr_FR.po
	|touch ".$ucFirstStr."/src/".$ucFirstStr."/Controller/".$ucFirstStr."Controller.php
	|touch ".$ucFirstStr."/tests/".$ucFirstStr."Bootstrap.php
	|touch ".$ucFirstStr."/tests/TestConfig.php
	|touch ".$ucFirstStr."/tests/".$ucFirstStr."Test/Framework/TestCase.php
	|touch ".$ucFirstStr."/tests/".$ucFirstStr."Test/Util/ServiceManagerFactory.php
	|touch ".$ucFirstStr."/tests/".$ucFirstStr."Test/Service/".$ucFirstStr."ServiceTest.php";

	echo '--------------------------------------------------<br/>';
	echo "<div style='width : 500px;'>";
	echo $string;
	echo "</div>";
	echo '<br/>--------------------------------------------------';
	echo '<br/>';
}