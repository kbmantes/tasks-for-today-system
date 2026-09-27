# Tasks for Today Management System

A database-backed task-management application developed with CodeIgniter 4.
The system allows a team to view tasks scheduled for today, browse the complete
task list, and view a demo user profile.

## Features

- Welcome page displaying only tasks scheduled for today
- Complete Task List displaying every task ordered by date
- Demo user Profile page
- Static About page
- Shared navigation and page templates
- MySQL database integration
- MVC-based project structure
- Responsive page design

## Technologies Used

- PHP 8
- CodeIgniter 4
- MySQL
- HTML
- CSS
- XAMPP
- Composer

## Project Structure

- `TaskModel` retrieves and filters task records.
- `UserModel` retrieves the demo user.
- Controllers process requests and send database records to the views.
- Views display the Welcome, Task List, Profile, and About pages.

## Database

Database name:

```text
tasks_today_db
```

The database contains two tables:

- `tasks` – contains eight sample tasks across multiple dates
- `users` – contains exactly one demo user

The database export is located at:

```text
database/tasks_today_db.sql
```

## Installation Instructions

1. Install XAMPP and Composer.
2. Place the project inside:

   ```text
   C:\xampp\htdocs\tasks-today-app
   ```

3. Start Apache and MySQL from the XAMPP Control Panel.
4. Open phpMyAdmin:

   ```text
   http://localhost/phpmyadmin/
   ```

5. Create a database named:

   ```text
   tasks_today_db
   ```

6. Import:

   ```text
   database/tasks_today_db.sql
   ```

7. Copy the `env` file and rename the copy to `.env`.
8. Configure `.env`:

   ```ini
   CI_ENVIRONMENT = development

   app.baseURL = 'http://localhost/tasks-today-app/public/'
   app.appTimezone = 'Asia/Manila'

   database.default.hostname = localhost
   database.default.database = tasks_today_db
   database.default.username = root
   database.default.password =
   database.default.DBDriver = MySQLi
   database.default.DBPrefix =
   database.default.port = 3306
   ```

9. Open the application:

   ```text
   http://localhost/tasks-today-app/public/
   ```

## Available Pages

- `/` – displays tasks scheduled for today
- `/tasks` – displays every task
- `/profile` – displays the demo user
- `/about` – displays information about the system and developer

## Demo User

- Username: `kenneth`
- Full name: Kenneth Mantes
- Email: `kenneth.mantes@gmail.com`

## Developer

Kenneth Mantes