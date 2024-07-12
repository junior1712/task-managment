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
* Laragon Version: 6.0
* Node.js v20.12.2
* npm 10.5.2

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
6. Run npm dev: `npm run dev`
7. Generate an application key: `php artisan key:generate`
8. Serve the application: `php artisan serve`
9. Open your web browser and navigate to the provided local URL (e.g., http://localhost:8000)
10. Run npm dev: `npm run dev`

## Running the Application with Laragon on localhost

1. Start Laragon and start the necessary services (e.g., Apache and MySQL).
2. Create a new database with a name of your choice in laragon e.g.task_managment
3. Open the built-in terminal in Laragon to run the Laravel development server e.g C:\laragon\www 
4. Clone the repository in Laragon terminal C:\laragon\www : `git clone https://github.com/junior1712/task-managment.git` and `cd task-managment`
5. Install dependencies: `composer install` and `npm install`
6. Copy the .env file in your task-managment directory by running the command-line: `cp .env.example .env`
7. Configure your database settings in the .env file e.g.DB_DATABASE=task_managment
8. Run database migrations: `php artisan migrate`
9. Run npm dev: `npm run dev`
10. Generate an application key: `php artisan key:generate`
11. Serve the application: `php artisan serve`
11.Open your web browser and navigate to the provided local URL (e.g., http://localhost:8000)

## Additional Features

* Pagination: The task list view includes pagination to efficiently handle multiple tasks and improve the user experience.
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


