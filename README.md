zf2-createModule
================

Introduction
------------
This is a simple script wich allow you to create a full tree for a new module.
This tree is fully compatible with my getting started tutorial.


Installation
------------
Nothing to do for install, you have just run the index.php on your localhost and give the name of your module :

`MyModule`

will give :

```
mkdir -pv 
MyModule/{config,tests/MyModuleTest/{Controller,Framework,Util},src/MyModule/{Controller,Form,Entity,Factory,Service},view/MyModule/MyModule,language} 
|touch MyModule/Module.php 
|touch MyModule/autoload_classmap.php 
|touch MyModule/config/module.config.php 
|touch MyModule/language/en_US.po 
|touch MyModule/language/fr_FR.po 
|touch MyModule/src/MyModule/Controller/MyModuleController.php 
|touch MyModule/tests/MyModuleBootstrap.php 
|touch MyModule/tests/TestConfig.php 
|touch MyModule/tests/MyModuleTest/Framework/TestCase.php 
|touch MyModule/tests/MyModuleTest/Util/ServiceManagerFactory.php

```
Go into you module directory in command line and paste it, 
your tree will be generated.
