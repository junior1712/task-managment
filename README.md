# Task Management Application

## Project Overview

The Task Management Application is a small-scale web application built using Laravel 10. It focuses on essential CRUD (Create, Read, Update, Delete) operations for managing tasks, coupled with user authentication.

## Technical Details

### Project Structure

The project follows the standard Laravel framework structure, which includes:

* Controllers: Handle the logic of the application.
* Models: Represent the data structure of the application.
* Views: Present the data to the user.
* Routes: Direct incoming requests to the appropriate controller methods.

### Database Schema

The application uses a MySQL database with two main tables:

| Table Name | Description |
| --- | --- |
| Users | Stores user information such as user ID, name, email, password, and timestamps for when the user was created and last updated. |
| Tasks | Stores task information such as task ID, user ID (to associate tasks with specific users), title, description, due date, status (e.g., pending, in-progress, completed), and timestamps for when the task was created and last updated. |

### Controllers

The application has several controllers:

* Authentication Controllers: Manage user registration, login, logout, and session management.
* Task Controller: Manages the CRUD operations for tasks.

### Models

The application has two main models:

* User Model: Represents the users table in the database.
* Task Model: Represents the tasks table in the database.

### Views

Views are stored in the resources/views directory and include:

* Task List View: Displays the list of tasks created by the user, with pagination to handle multiple tasks efficiently.
* Task Create View: Provides a form for users to create new tasks.
* Task Edit View: Provides a form for users to edit existing tasks.

### Routes

Routes are defined in the routes/web.php file and map URLs to specific actions in the controllers.

### Validation Rules

Validation rules are implemented in the controller methods to ensure data integrity.

## Running the Code

### Prerequisites

The application was built using:

* Laravel Framework: 10.48.15
* PHP Version: 8.1
* Laragon Version: 6.0 with Node.js v20.12.2 and npm 10.5.2


### Dependencies

To run the project on Laravel 10 with PHP 8.1, install the following software ,assuming a clean installation:

* PHP 8.1
* Composer
* Laravel Installer
* Node.js and npm 
* MySQL or other database
* Laragon (optional but recommended) Download and install Laragon from the official Laragon website: https://laragon.org/ ,
* Laragon provides a convenient and easy-to-use development environment for PHP, MySQL, and other tools. 
* Git (optional but recommended)
* PHP Extensions: openssl, pdo_mysql (or your preferred database extension), tokenizer, xml, zip

## Installation

1. Clone the repository: `git clone https://github.com/junior1712/task-managment.git` and `cd task-managment`
2. Install dependencies: `composer install` and `npm install`
3. Copy the .env file in your project directory : `cp .env.example .env`
4. Configure your database settings in the .env file 
5. Run database migrations: `php artisan migrate`
6. Generate an application key: `php artisan key:generate`
7. Run the development server for your web application by running the command: `npm run dev`
8. Avoid running `npm run dev` and `php artisan serve` in the same terminal, as it can cause conflicts and errors. This is because `npm run dev` starts the development server for your web application, while `php artisan serve` initiates a local development server for the application. Running both commands simultaneously in the same terminal can lead to port conflicts and other issues. Instead, use separate terminals or a tool like concurrently to run them independently and avoid any conflicts.
10. Serve the application: `php artisan serve` 
11. Open your web browser and navigate to the provided local URL (e.g., http://localhost:8000)


## Running the Application with Laragon on localhost

1. Start Laragon and start the necessary services (e.g., Apache and MySQL).
2. Create a new database with a name of your choice in laragon (e.g., task_managment).
3. Open the built-in terminal in Laragon to run the Laravel development server.
4. Clone the repository in Laragon terminal (e.g., C:\laragon\www): `git clone https://github.com/junior1712/task-managment.git` and `cd task-managment`
5. Install dependencies: `composer install` and `npm install`
6. Copy the .env file in your task-managment directory by running the command-line: `cp .env.example .env`
7. Open visual studio code:in laragon terminal run the command `code .` (e.g., C:\laragon\www\task-managment `code .`)
8. Configure your database settings in the .env file (e.g., DB_DATABASE=task_managment) in visual studio code.
9. Run database migrations in laragon terminal : `php artisan migrate`  (e.g., C:\laragon\www\task-managment `php artisan migrate` )
10. Generate an application key in laragon terminal: `php artisan key:generate` (e.g., C:\laragon\www\task-managment `php artisan key:generate`)
11.  run: `npm run dev` in largon terminal: (e.g., C:\laragon\www\task-managment `npm run dev`) and `run php artisan` in visual code terminal to serve the application serve.DO not run these two command on the same terminal,it will cause conflict and errors as they might use the same port or resources.. run: `npm run dev` in largon terminal and `run php artisan` in visual studio  code terminal.


## Additional Features

* Pagination: The task list view includes pagination to efficiently handle multiple tasks and improve the user experience.pagination is set to display three tasks per page.
* AJAX: Used for enhancing user interactions, such as submitting forms without reloading the page.
* Responsive Design: The application is designed to work well on both desktop and mobile devices, ensuring a consistent user experience across different screen sizes.

## Summary of Security Measures Implemented

* Authentication and Authorization: Secure user authentication and session management.
* Input Validation and Sanitization: Validating and sanitizing user inputs to prevent malicious data.
* CSRF Protection: Using CSRF tokens to prevent cross-site request forgery attacks.
* Password Hashing: Storing passwords securely using bcrypt hashing.
* Encryption: Encrypting sensitive data using a unique application key.
* Database Security: Using prepared statements and secure database migrations.
* Error Handling: Custom error pages and secure logging practices.
* HTTPS: Encouraging deployment over HTTPS for secure communication.
  
## Accessing Laravel Task Management Application Code on Production using Cyberduck

Live Application URL
-------------------

* The application is hosted live at <https://mdglobalt.com/taskManager/public/>

Login Credentials to live Application URL
----------------------------------------

* Email: nsenga.ns1712@gmail.com
* Password:12345678



FTP Configuration
----------------

* **Hostname:** ftp.mdglobalt.com
* **Username:** test@mdglobalt.com
* **Password:** test@2024

Steps to Access
---------------
0. Download and Install Cyberduck
1. Open Cyberduck and click on "Open Connection" in the top left corner.
2. Select "FTP (File Transfer Protocol)" as the protocol.
3. Enter the hostname: `ftp.mdglobalt.com`
4. Enter your username:test@mdglobalt.com and password:test@2024
5. Click "Connect" to establish the connection.
6. Once connected, navigate to the directory where the Laravel task management application is hosted.


  


