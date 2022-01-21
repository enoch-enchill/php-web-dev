# Topic 03: Creating simple MVC application in PHP
Under this topic, we tackle series of lessons that eventually build up into a simple model-view-controller applciation in PHP.
We will begin the topic by defining model objects that represent our database entities. We will add a simple configuration to establish a connection to our database.
With that in place, we then look at adding repository classes to help manage the resources in our data storage.
And then, we will create controller classes to convey data resources to the web views.

## Table of Contents
+ [Lesson 01](#01-application-directory-structure): Application directory structure
+ [Lesson 02](#02-defining-model-objects): Defining model objects
+ Lesson 03: Database connection configuration
+ Lesson 04: Data resource repositories
+ Lesson 05: Controllers
+ Lesson 06: View templates
+ Lesson 07: Route configuration
+ Lesson 08: User session configuration
+ Lesson 09: Conclusion


## 01: Application Directory Structure

> Introduction

To have a very simple and clean project outlook, we need to group our files into various functionalities.
First and foremost, we shall create a parent (**root** or **working**) directory named `SimpleMVC`. This folder will serve as the root or starting directory for the whole project.
Inside the root directory, we shall have the following subdirectories: `configs`, `controllers`, `models`, `repositories` and `views`.
In addition to the directories, we shall have three other important files - `index.php`, `routes.php` and `.htaccess`.

We will come to understand the purpose each of these directories and files is serving as we move along.

> SimpleMVC

* [src/](./SimpleMVC/src)
  * [configs/](./SimpleMVC/src/configs)
    * [ConstantsConfig.php](./SimpleMVC/src/configs/ConstantsConfig.php)
    * [RouteConfig.php](./SimpleMVC/src/configs/RouteConfig.php)
    * [SessionConfig.php](./SimpleMVC/src/configs/SessionConfig.php)
  * [controllers/](./SimpleMVC/src/controllers)
    * [UsersController.php](./SimpleMVC/src/controllers/UsersController.php)
  * [models/](./SimpleMVC/src/models)
    * [UserModel.php](./SimpleMVC/src/models/UserModel.php)
  * [repositories/](./SimpleMVC/src/repositories)
    * [UsersRepository.php](./SimpleMVC/src/repositories/UsersRepository.php)
  * [views/](./SimpleMVC/src/views)
    * [assets/](./SimpleMVC/src/views/assets)
      * [css/](./SimpleMVC/src/views/assets/css)
        * [style.css](./SimpleMVC/src/views/assets/css/style.css)
      * [images/](./SimpleMVC/src/views/assets/images)
        * [logo.png](./SimpleMVC/src/views/assets/images/logo.png)
      * [js/](./SimpleMVC/src/views/assets/js)
        * [main.js](./SimpleMVC/src/views/assets/js/main.js)
    * [modules/](./SimpleMVC/src/views/modules)
      * [about.js](./SimpleMVC/src/views/modules/about.js)
      * [home.js](./SimpleMVC/src/views/modules/home.js)
    * [about.php](./SimpleMVC/src/views/about.php)
    * [home.php](./SimpleMVC/src/views/home.php)
  * [.htaccess](./SimpleMVC/src/.htaccess)
  * [index.php](./SimpleMVC/src/index.php)
  * [routes.php](./SimpleMVC/src/routes.php)

## 02: Defining Model Objects