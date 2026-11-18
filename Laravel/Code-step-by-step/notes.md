# installation for laravel 13

- can be done using xamp or installing php separately
- https://laravel.com/framework/docs/installation docs give php and laravel dependencies
- runnin laravel with mysql with no first migration can throw and exception
  - need changes in .env

## blade components
- Don't need to create a whole file to show information in blade, just adding html elements to route is enough
- to refer  files use view('file path')
- dont need blade extension, .php files are fine

## Model View Controller MVC
software desiign pattern to develop reliable software app
Model, write bussines logic, database comunication
View, User interface
Controller, Handle user interaction and select a view to render, communicate model and view

## File structure

## Laravel works internally
- User sends request
  - public/index is entry point of the application
- request enters
- composer autoload loads all classes
  - automatically loads all the classes define in project
  - load all dependencies
  - so laravel can use controllers, model packages
- Laravel bootstraps app
  - laravel get prepared
  - set ups, core bindings and config
- middleware runs
  - checks request before it reaches route
  - authentication check, csrf protection, logging etc
- route matching happens
  - web.php/ console.php route files contains the routing for each point of the application
  - if matched go to controller
- controller method executes
- view renders response
- response sent back to browser

## Routing in Laravel
routing a path for opening a webpage

for every route a corresponging resource file should be created so we can display to the user
view function does not need extension only file path
Passing params in route is the second param for view method, an eay key added in the array will be consider a variable in blade template
Route class contains a lot of methods to use for routing, get/post/view/put/delete/options/match/any/redirect

## Controlers

two tipes Basic controllers and Resource Controller CRUD

## Blade templates

Faster than normal php and have a simpler syntax.
withouth the extension balde, the blade sintax is not gonna show

## SubViews

