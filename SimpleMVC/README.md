# Topic 03: Creating simple MVC application in PHP
Under this topic, we tackle series of lessons that eventually build up into a simple model-view-controller applciation in PHP.
We will begin the topic by defining model objects that represent our database entities. We will add a simple configuration to establish a connection to our database.
With that in place, we then look at adding repository classes to help manage the resources in our data storage.
And then, we will create controller classes to convey data resources to the web views.

## Table of Contents
+ [Lesson 01](lesson_01): Application directory structure
+ [Lesson 02](lesson_02): Defining model objects
+ Lesson 03: Database connection configuration
+ Lesson 04: Data resource repositories
+ Lesson 05: Controllers
+ Lesson 06: View templates
+ Lesson 07: Route configuration
+ Lesson 08: User session configuration
+ Lesson 09: Conclusion



## Lesson 01: Application Directory Structure

To have a very simple and clean project outlook, we need to group our files into various functionalities.
First and foremost, we shall create a parent (initial) working directory name `SimpleMVC`. This folder will serve as the root or starting directory for the whole project.
Inside the root directory, we shall have the following subdirectories: `configs`, `controllers`, `models`, `repositories` and `views`.
In addition to the directories, we shall have two important files - `index.php`, `routes.php` and `.htaccess`.

We will come to understand the purpose each of these directories and files is serving as we move along.