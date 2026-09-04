    ````markdown
# MITE113 Assignment One - CRUD Portfolio

A simple portfolio management system developed using Laravel and Tailwind CSS.

This project demonstrates the basic CRUD operations:

- Create
- Read
- Update
- Delete

## Features

The system allows the user to manage the following portfolio information:

### Personal Information
- Name
- Email
- Professional Title
- Short Introduction
- Phone Number
- Address

### Skills
- Skill Name
- Skill Category
- Proficiency Level

### Projects
- Project Name
- Project Description
- Category
- Technologies Used

### Education
- School Name
- Degree
- Major
- Start Date
- End Date

## Technologies Used

- Laravel
- PHP
- MySQL
- Blade
- Tailwind CSS
- HTML

## CRUD Operations

The system provides the following operations for portfolio information:

| Operation | Description |
|---|---|
| Create | Add new portfolio information |
| Read | View saved portfolio information |
| Update | Edit existing information |
| Delete | Remove existing information |

## Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
````

### 2. Go to the Project Directory

```bash
cd <project-folder>
```

### 3. Install Dependencies

```bash
composer install
```

### 4. Create the Environment File

Copy the `.env.example` file and rename it to `.env`.

```bash
cp .env.example .env
```

### 5. Generate the Application Key

```bash
php artisan key:generate
```

### 6. Configure the Database

Open the `.env` file and configure your MySQL database:

```env
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 7. Run the Migrations

```bash
php artisan migrate
```

### 8. Start the Laravel Development Server

```bash
php artisan serve
```

Open the application in your browser:

```text
http://127.0.0.1:8000
```

## Project Structure

The main portfolio-related files are organized as follows:

```text
app/
├── Http/
│   └── Controllers/
│       └── PortfolioController.php

resources/
└── views/
    └── portfolio/
        ├── index.blade.php
        ├── personal-information/
        ├── skills/
        ├── projects/
        └── educations/

routes/
└── web.php
```

## Portfolio Sections

The main portfolio page provides access to four sections:

1. Personal Information
2. Skills
3. Projects
4. Education

Each section allows the user to manage its information through CRUD operations.

## Purpose

This project was created as part of **MITE113 Assignment One** to demonstrate the implementation of CRUD functionality using Laravel.

## Author

Your Name

MITE113

```
```
