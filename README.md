simple-mvc-in-php
======

Out of boredome and becaue of interest in the topic of __MVC IN PHP__, I've created this very basic framework. 
Because of lacking comments in the code, I've provided this readme to explain what's going on at least a little bit.

## Introduction
The concept of this framework is to allow better looking URLs and seperate the data from the view as good as possible.
The URLs should look like **local.tld/Controller/methode/parameters/1** 
The HTACCESS files provided will prevent the User from Visiting the /app, to access the filelist and will rewrite the URL to local.tld/public/index.php?url=controller/methode/paramerts/1 
From there, the Core.php will seperate the URL in an array with the controller, method and params seperated. After checking if all values are given (It will use pre-set values if not, you can change those in the Core.php!) the method will be loaded and the view returned by the call_user_func_array method. 

## File structure
```
│   .htaccess
├───app
│   │   .htaccess
│   │   bootstrap.php //Included the autoloader & config.php
│   ├───config
│   │       config.php //Has a variety of CONSTANTS definied which have to be changed
│   ├───controllers
│   │       Examples.php //Example Controller
│   ├───helpers //if you want to include other frameworks
│   ├───libraries //The Core files, don't need to be touched
│   │       Controller.php
│   │       Core.php //prepares the URL given by the HTACCESS and 
│   │       Database.php
│   ├───models
│   │       Example.php //Example Model
│   └───views
│       ├───Examples 
│       │       index.php 
│       └───inc
│               footer.php //Includes the JS and the </body> tag
│               header.php //Included the entire header and the CSS file
└───public
    │   .htaccess
    │   index.php //will include the bootstrap.php and create a new Instance of the Core
    ├───css //For CSS files you want to include - incldued in the inc/header.php file
    │       main.css
    ├───images
    └───js //For JS files you want to include - included in the inc/footer.php file
            functions.js
```
### Naming
1. Controllers should be in plural and capitalized.
2. Methods have to be in lowercased
3. Views should be seperated by folders, the folgers should be capitalized.

## Important methods

Controllers come with a pre-written modal() and view() method.
$this->model($modelname) will return a new instance of the required model. It will also require it.
$this->view($view, $data[]) will return the view if it exists. If not, the application will die. You might want to rewrite that to a 404
The Database.php comes with a variety of methos.



