# ubunifu-template
starter template utilizing the ubunifu php web framework

Clone or download this project

Remember to run composer install to install dependecies which include the Ubunifu PHP framework

## Getting Started 
Open the apps folder. To create a new app create a folder inside the apps folder name your app(the folders name will be the name of the app).

inside the controller create the model,controller and views folder.

Create your controllers inside the controller folder. Each Controller should extend Ucontroller found inthe apps/ubunufu.ext  folder.

Done:

## Configuration
All default confguartion files are located in apps/ubunifu.ext/config.
 1. Database configuration
 2. Application Configuration
 3. Mail Configuration

Review all configuration files.

## URL structure

http://host/appname/controller/actions/param1/param2/paramn

  1. appname - the name of the app essentialy a folder containig model ,controller and views folder.
  2. controller - controller inside   apps/appname/controller/controllerName
  3  Action - a method inside the controller

example: http://triposhub.com/usermanagementsystem/user-groups/read/is-active
