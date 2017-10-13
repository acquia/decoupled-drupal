## Decoupled Drupal Site Repository

This is a codebase constructed with the intent to display a decoupled architecture. Follow the instructions below to setup your Drupal website, and then the steps for the JS app at [https://github.com/jenter/decoupled-js](https://github.com/jenter/decoupled-js).

### Setup Instructions

#### Download and install dependencies
- Fork this repository and download locally with ```git clone [YOUR REPO]```
- Once the code has finished downloading, cd into the folder with ```cd decoupled-drupal```
- If you do not have composer installed yet, install using the [website instructions](https://getcomposer.org/download/)
- Run the command ```composer install``` to install the required dependencies
- Restrict permissions on the provided snakeoil keys: ```chmod og-wrx keys/snakeoil*```

#### Setup the site locally

Next you will set up the local Drupal site using [BLT](http://blt.readthedocs.io/en/latest/readme/onboarding/#initial-setup) & [DrupalVM](https://www.drupalvm.com) by following the next steps.

- You will now install the BLT alias with ```composer run-script blt-alias```
- The next step will utilize DrupalVM, so first install [Vagrant](https://www.vagrantup.com/downloads.html) & [VirtualBox](https://www.virtualbox.org/wiki/Downloads).
- You will now setup your VM using the BLT command: ```blt vm```
- Next you will build and install the Drupal installation: ```blt setup```
- You will now have the initial Drupal website ready  at ```http://local.drupaldecoupled.com```

### Preview

#### JavaScript Application

![js](https://content.screencast.com/users/BedimStudios/folders/Jing/media/18e9dfca-970a-45a5-b1b8-5f62a52d1439/00002386.png)

#### Drupal Website

![Drupal](https://content.screencast.com/users/BedimStudios/folders/Jing/media/0558f78c-39fa-4204-bd8f-d27598b0d29d/00002387.png)
