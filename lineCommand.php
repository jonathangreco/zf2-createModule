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
	$string = "mkdir -pv ".ucfirst($str)."/{config,tests/".ucfirst($str)."Test/{Controller,Framework,Util,Service},src/".ucfirst($str)."/{Controller,Form,Entity,Factory,Service},view/".$str."/".$str.",language}
	|touch ".ucfirst($str)."/Module.php
	|touch ".ucfirst($str)."/autoload_classmap.php
	|touch ".ucfirst($str)."/config/module.config.php
	|touch ".ucfirst($str)."/language/en_US.po
	|touch ".ucfirst($str)."/language/fr_FR.po
	|touch ".ucfirst($str)."/src/".ucfirst($str)."/Controller/".ucfirst($str)."Controller.php
	|touch ".ucfirst($str)."/tests/".ucfirst($str)."Bootstrap.php
	|touch ".ucfirst($str)."/tests/TestConfig.php
	|touch ".ucfirst($str)."/tests/".ucfirst($str)."Test/Framework/TestCase.php
	|touch ".ucfirst($str)."/tests/".ucfirst($str)."Test/Util/ServiceManagerFactory.php
	|touch ".ucfirst($str)."/tests/".ucfirst($str)."Test/Service/".ucfirst($str)."ServiceTest.php";

	echo '--------------------------------------------------<br/>';
	echo "<div style='width : 500px;'>";
	echo $string;
	echo "</div>";
	echo '<br/>--------------------------------------------------';
	echo '<br/>';
}