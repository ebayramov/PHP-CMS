# CMS Project with PHP

## Video Tutorial
For a visual guide on how to use this CMS, watch the video demonstration below:
[![Watch the video](https://img.youtube.com/vi/k9yvOGWuQtU/maxresdefault.jpg)](https://youtu.be/k9yvOGWuQtU)

## Project Overview
This project is a Content Management System (CMS) developed using PHP and MySQL. It allows an admin to manage the content of a website through a user-friendly interface. The content displayed on the webpage is dynamically retrieved from an SQL database.

## Features
- **Admin Authentication**:
  - Username: `admin1`
  - Password: `admin123` (encrypted in the database)
- **Admin Dashboard**:
  - Manage content for multiple languages
  - Add, edit, delete, or change the status of languages and their content
  - Upload images to the website
- **Session Management**:
  - Admin login is maintained using PHP sessions
  - Admin does not need to log in every time but can log out using the logout link
- **Content Storage**:
  - All content, including text and images, is stored in an SQL database

## Installation
1. **Set Up XAMPP**:
   - Download and install [XAMPP](https://www.apachefriends.org/index.html).
   - Start Apache and MySQL from the XAMPP Control Panel.
2. **Clone the Repository**:
   - Clone this repository to your XAMPP `htdocs` directory:
     ```bash
     git clone https://github.com/ebayramov/PHP-CMS.git
     ```
3. **Database Configuration**:
   - Import the `dump.sql` file located in the project directory into your MySQL database.
   - Update the database connection details in the `config.php` file.
4. **Start the Application**:
   - Open your browser and navigate to `http://localhost/your-repo-name`.

## Usage
1. **Login**:
   - Go to `http://localhost/db-site/admin/login.php`.
   - Enter the username `admin1` and password `admin123`.
2. **Admin Dashboard**:
   - Manage website content by adding, editing, deleting, or changing the status of languages and their content.
   - Upload images to the webpage.
3. **Logout**:
   - Use the logout link available on the dashboard to end the session.
