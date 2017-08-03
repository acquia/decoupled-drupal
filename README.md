## Decoupled Drupal Site Repository

This is a codebase constructed with the intent to display a decoupled architecture. Follow the instructions below to setup your Drupal website, and then the steps for the JS app at [https://github.com/jenter/decoupled-js](https://github.com/jenter/decoupled-js).

### Setup Instructions

#### Download and install dependencies
- Fork this  repository and download locally with ```git clone [YOUR REPO]```
- Once the code has finished downloading, cd into the folder with ```cd decoupled-drupal```
- If you do not have composer installed yet, install using the [website instructions](https://getcomposer.org/download/) 
- Run the command ```composer install``` to install the required dependencies  

#### Setup the site locally

Next you will set up the local Drupal site using [BLT](http://blt.readthedocs.io/en/latest/readme/onboarding/#initial-setup) & [DrupalVM](https://www.drupalvm.com) by following the next steps.
 
- You will now install the BLT alias with ```composer run-script blt-alias```
- The next step will utilize DrupalVM, so first install [Vagrant](https://www.vagrantup.com/downloads.html) & [VirtualBox](https://www.virtualbox.org/wiki/Downloads).
- You will now setup your VM using the BLT command: ```blt vm```
- Next you will build and install the Drupal installation: ```blt setup```
- You will now have the initial Drupal website ready  at ```http://local.drupaldecoupled.com```

#### Installing the test database

The next steps you allow you to import the database so you can use the test content for quick display in your JS app.

- You will ssh into the VM with the command ```vagrant ssh``` and then go in the drupal root with ```cd docroot/```
- Import the database with the command ``drush sqlc < ../_backup/db/default.sql``
- You can now login with the command ``drush uli`` which will provide a URL to paste into your browser
- You can now exit out of vagrant with ``exit`` and view your test content at ``http://local.drupaldecoupled.com/admin/content`` 
