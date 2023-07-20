# Contact System
 Contact Management Web application

 ----------------------------------------------------------------------------------------
EN
----------------------------------------------------------------------------------------
# AllSites Showcase

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/albertomaffeii/contact-system/blob/main/LICENSE)

## Project Description

Contact System is a functional example of a web application to manage contacts built with PHP. It was developed using PHP version 8.2.4, Laravel framework version 10.15.0, and MySQL database version 10.4.28-MariaDB.

## Features

1 - An index page with a list of existing contacts.
2 - A page with a form for adding new contacts.
3 - A page for showing contact details.
4 - Allow editing an existing record.
5 - Allow deletion of an existing record.
6 - Search contact.


## Considerations

A contact is an entity with 4 fields: ID, Name, Contact and email address. Name should be a string of any size greater than 5, contact should be 9 digits, and email should be a valid email.

Each row in the index page should have a link to edit the contact, and a button to delete the contact. The delete should perform a soft delete of the record, using Laravel features.

The contact details page should show all the fields of the contact plus the edit link and the delete button.

Contact and email address should be unique, two contacts cannot have the same.


## Prerequisites

Make sure you have the following prerequisites before starting the project:

- PHP 8.2 installed
- Laravel 10 installed
- MySQL 8 installed

## Installation

Follow the steps below to set up and run the project:

1. Clone this repository: `git clone https://github.com/albertomaffeii/contact-system.git`
2. Navigate to the project directory: `cd contact-system`
3. Install Composer dependencies: `composer install`
4. Configure the `.env` file with your database information
5. Run the database migrations: `php artisan migrate`
6. Start the local server: `php artisan serve`

## How to Contribute

This project is an open example and welcomes contributions. You can use this code as a base for developing your own application. If you wish to contribute to this project, follow the steps below:

1. Fork this repository
2. Create a new branch for your contribution: `git checkout -b your-branch`
3. Make the necessary changes
4. Commit your changes: `git commit -m "Description of the changes"`
5. Push your changes to the remote repository: `git push origin your-branch`
6. Open a Pull Request for review

Thank you in advance for any contribution you can make to improve this example. Your support is greatly appreciated!

## License

This project is licensed under the [MIT License](https://github.com/albertomaffeii/contact-system/blob/main/LICENSE).