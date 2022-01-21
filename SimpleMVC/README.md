# Topic 03: Creating simple MVC application in PHP
Under this topic, we tackle series of lessons that eventually build up into a simple model-view-controller applciation in PHP.
We will begin the topic by defining model objects that represent our database entities. We will add a simple configuration to establish a connection to our database.
With that in place, we then look at adding repository classes to help manage the resources in our data storage.
And then, we will create controller classes to convey data resources to the web views.

## Table of Contents
+ [Lesson 01](#01-application-directory-structure): Application directory structure
+ [Lesson 02](#defining-model-objects): Defining model objects
+ Lesson 03: Database connection configuration
+ Lesson 04: Data resource repositories
+ Lesson 05: Controllers
+ Lesson 06: View templates
+ Lesson 07: Route configuration
+ Lesson 08: User session configuration
+ Lesson 09: Conclusion


## 01: Application Directory Structure

To have a very simple and clean project outlook, we need to group our files into various functionalities.
First and foremost, we shall create a parent (**root** or **working**) directory named `SimpleMVC`. This folder will serve as the root or starting directory for the whole project.
Inside the root directory, we shall have the following subdirectories: `configs`, `controllers`, `models`, `repositories` and `views`.
In addition to the directories, we shall have three other important files - `index.php`, `routes.php` and `.htaccess`.

We will come to understand the purpose each of these directories and files is serving as we move along.

+ `SimpleMVC`
    + `-- configs`
        + `ConstantsConfig.php`
        + `RouteConfig.php`
        + `SessionConfig.php`        
    + `-- controllers`
        + `UsersController.php`
        + `...`
    + `models`
        + `UserModel.php`
        + `...`
    + `repositories`
        + `UsersRepository.php`
        + `...`
    + `views`
        + `assets`
            + `css`
                + `style.css`
                + `bootstrap.min.css`
                + `...`
            + `imgs`
                + `logo.png`
                + `...`
            + `js`
                + `main.js`
                + `bootstrap.min.js`
                + `...`
        + `home.php`
        + `about.php`
        + `...`
    + `.htaccess`
    + `index.php`
    + `routes.php`