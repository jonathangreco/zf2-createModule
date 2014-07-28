zf2-createModule
================

UPDATE
======

New feature available, you can easily duplicade The Provider Module for create a new module with all generic code.
This line Command will rename all the file with PSR-0 friendly, and folder too. All generic file will be modified with namespace and class names
This lineCommand is not tested yet for module with name like MyModule. Only module with one Words are tested.

This tools is far from perfect, if you have some hint to provide feel free to do it.
______
Information
===========

This line Command tool works only with WampServer and  suppose that you have a default path for your www directory
___________
Installation
============

You have to create in your www directory a folder named : Tools. Paste all this files and /Provider in it.

Go with line command on tools directory then go to newModule. And paste the result of this tool. This will make a tree of you new module then you have just to copy this folder into your module folder on your application. And of course activate this new module.

And Enjoy. :)

Please : be aware that you have to check first if your module name doesn't exist already, if yes, it may be a problem (rewrite possible)

___________
