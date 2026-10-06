# Student Records Management System

A simple Student Records CRUD application built using Laravel. This project was created as part of the ITPC 115 laboratory activity.

## Features

The application allows users to:

- View all student records
- Add a new student
- Edit an existing student
- Delete a student
- Validate student information before saving

## Student Information

Each student record contains:

- Student Number
- First Name
- Last Name
- Course

## Technologies Used

- PHP
- Laravel
- MySQL
- XAMPP
- Blade Templates
- HTML
- Git
- GitHub
- Visual Studio Code

## CRUD Operations

This application demonstrates the four basic CRUD operations:

- **Create** - Add a new student record
- **Read** - Display student records
- **Update** - Edit an existing student record
- **Delete** - Remove a student record

## MVC Architecture

The project follows Laravel's MVC architecture:

- **Model** - The `Student` model manages student data and interacts with the database.
- **View** - Blade templates display the student list and forms to the user.
- **Controller** - The `StudentController` handles requests and performs the CRUD operations.

## Database

The application uses a MySQL database named:

`student_records`

The `students` table contains the student information used by the application.

## How to Run the Project

1. Clone the repository.
2. Run `composer install`.
3. Copy `.env.example` to `.env`.
4. Configure the database settings in `.env`.
5. Run `php artisan key:generate`.
6. Run `php artisan migrate`.
7. Start the Laravel development server using `php artisan serve`.
8. Open `http://127.0.0.1:8000` in a browser.

## Reflection

This activity helped me understand how Laravel uses the MVC architecture to organize an application. I learned how models interact with the database, how controllers handle requests and CRUD operations, and how Blade views display information to users. I also learned how to configure a MySQL database, use migrations, validate form input, and manage project versions using Git and GitHub.