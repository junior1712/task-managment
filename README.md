Task Management Application
## Project Overview
The Task Management Application is a small-scale web application built using Laravel 10. It focuses on essential CRUD (Create, Read, Update, Delete) operations for managing tasks, coupled with user authentication. Users can register, log in, and manage their tasks, including creating, reading, updating, and deleting tasks. The application ensures that users remain logged in across different pages and can securely log out when needed.

## Technical Details
Project Structure
The project follows the standard Laravel framework structure, which includes controllers, models, views, and routes. Each component has a specific role:

Controllers: Handle the logic of the application. For example, they process incoming requests, interact with the models, and return the appropriate responses.
Models: Represent the data structure of the application. They interact with the database and manage the data of the application.
Views: Present the data to the user. They are responsible for displaying the HTML content and user interfaces.
Routes: Direct incoming requests to the appropriate controller methods. They define the URLs that the application responds to and map them to specific actions in the controllers.
Database Schema
The application uses a MySQL database with two main tables:

Users Table: Stores user information such as user ID, name, email, password, and timestamps for when the user was created and last updated.
Tasks Table: Stores task information such as task ID, user ID (to associate tasks with specific users), title, description, due date, status (e.g., pending, in-progress, completed), and timestamps for when the task was created and last updated.
Controllers
The application has several controllers:

Authentication Controllers: Manage user registration, login, logout, and session management. These controllers ensure that users can create accounts, log in, stay logged in across different pages, and log out securely.
Task Controller: Manages the CRUD operations for tasks. It includes methods to list tasks, show a single task, create a new task, update an existing task, and delete a task.
Models
The application has two main models:

User Model: Represents the users table in the database. It includes methods and properties related to user data.
Task Model: Represents the tasks table in the database. It includes methods and properties related to task data. The Task model is associated with the User model, indicating that each task belongs to a specific user.
Views
Views are stored in the resources/views directory and include the following main views:

Task List View: Displays the list of tasks created by the user, with pagination to handle multiple tasks efficiently.
Task Create View: Provides a form for users to create new tasks.
Task Edit View: Provides a form for users to edit existing tasks.
Routes
Routes are defined in the routes/web.php file. They map URLs to specific actions in the controllers. For example, the root URL of the application might display the list of tasks, while other URLs are mapped to actions such as creating, editing, and deleting tasks.

Validation Rules
Validation rules are implemented in the controller methods to ensure data integrity. For example, when creating or updating a task, the application checks that the title is provided, the description is not empty, the due date is a valid date, and the status is one of the allowed values (e.g., pending, in-progress, completed).

## Running the Code
# Prerequisites
The application was built using the following software:
Laravel Framework: 10.48.15
PHP Version: 8.1
Laragon Version: 6.0

Here is a comprehensive list of dependencies required to run the  project on Laravel 10 with PHP 8.1, assuming a clean installation:

1. PHP 8.1

Download and install PHP 8.1 from the official PHP website: https://www.php.net/downloads
Make sure to select the appropriate version (e.g., PHP 8.1.x) and architecture (e.g., x64) for your system.

2. Composer

Download and install Composer from the official Composer website: https://getcomposer.org/
Follow the installation instructions for your operating system (Windows, macOS, or Linux)

3. Laravel Installer

Open a terminal or command prompt and run the following command: composer global require laravel/installer

4. Node.js and npm

Download and install Node.js from the official Node.js website: https://nodejs.org/en/download/
Make sure to select the appropriate version (e.g., Node.js 18.x) and architecture (e.g., x64) for your system
npm (Node Package Manager) comes bundled with Node.js, so you don't need to install it separately

5. MySQL or other database

Download and install a database management system like MySQL, PostgreSQL, or SQLite

6. Laragon (optional but recommended)
Download and install Laragon from the official Laragon website: https://laragon.org/
Laragon provides a convenient and easy-to-use development environment for PHP, MySQL, and other tools.


7. Git (optional but recommended)
Download and install Git from the official Git website: https://git-scm.com/downloads
Git is a version control system that allows you to manage code changes and collaborate with others.

8. PHP Extensions
Make sure the following PHP extensions are enabled:
openssl
pdo_mysql (or your preferred database extension)
tokenizer
xml
zip

9. Laravel 10
Clone the Form project repository using git clone https://bitbucket.org/veer1712/form.git
Switch to the project directory using cd form
Install the dependencies using composer install
After installing these dependencies, you should be able to run the Form project using php artisan serve
Clone the repository: Download the project files from the repository.
Install dependencies: Use Composer to install PHP dependencies and npm to install frontend dependencies.
Environment setup: configure your database settings in .env file , including the database connection, host, port, database name, username, and password.
Run database migrations: Execute the database migrations to create the necessary tables in your database using the command:php artisan migrate
Serve the application: Use Laravel's built-in development server to run the application and access it in your browser.

## Running the Application with Laragon on localhost

Start Laragon: Launch Laragon and start the necessary services (e.g., Apache and MySQL).
In laragon open the database and Create a new database call task_managment,update the DB_DATABASE variable in the .env file of the application with the name of the database you created.
Open the built-in terminal or the GUI in Laragon to run the Laravel development server,once the terminal open you will see the following path directory:C:\laragon\www
Clone the repository in laragon terminal (C:\laragon\www) :
git clone https://github.com/yourusername/task-management-app.git
cd task-management-app
Install dependencies: Use Composer to install PHP dependencies and npm to install frontend dependencies:
composer install
npm install
npm run dev

Run database migrations: Execute the database migrations to create the necessary tables in your database using the command:php artisan migrate
Serve the application:Use Laravel's built-in development server to run the application and access it in your browser by using the command:php artisan serve
Access the application: Open your web browser and navigate to the provided local URL (e.g., http://localhost:8000).

## Additional Features
Pagination: The task list view includes pagination to efficiently handle multiple tasks and improve the user experience.
AJAX: Used for enhancing user interactions, such as submitting forms without reloading the page.
Responsive Design: The application is designed to work well on both desktop and mobile devices, ensuring a consistent user experience across different screen sizes.
## Summary of Security Measures Implemented
Authentication and Authorization: Secure user authentication and session management.
Input Validation and Sanitization: Validating and sanitizing user inputs to prevent malicious data.
CSRF Protection: Using CSRF tokens to prevent cross-site request forgery attacks.
Password Hashing: Storing passwords securely using bcrypt hashing.
Encryption: Encrypting sensitive data using a unique application key.
Database Security: Using prepared statements and secure database migrations.
Error Handling: Custom error pages and secure logging practices.
HTTPS: Encouraging deployment over HTTPS for secure communication.
By implementing these security measures, the Task Management Application aims to protect user data and maintain the integrity and confidentiality of the application.
## Conclusion
This README provides an overview of the Task Management application, including its structure, functionality, and instructions for setting up and running the project using Laragon. The project demonstrates essential CRUD operations with user authentication, following best practices and providing a clean, user-friendly interface.

