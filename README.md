# MediScheduler - Appointment Management System

MediScheduler is a Laravel-based web application designed to streamline appointment scheduling for healthcare providers. It offers role-based access control, allowing patients, receptionists, and doctors to manage appointments efficiently.

## ✨ Features
-   **Patients can request appointments.**
-   **Receptionists can view and add appointments for patients.**
-   **Doctors can manage appointments by performing CRUD operations (Create, Read, Update, Delete).**
-   **Role-based access control (patients, receptionists, doctors) with different permissions.**
-   **Simple and intuitive interface for managing appointments.**

## 🛠️ Technologies Used
- **Frontend**: HTML, CSS, Bootstrap, JavaScript, jQuery
- **Backend**: PHP, Laravel (MVC), Eloquent ORM
- **Database**: MySQL

## ⚙️ Installation
### 🔧 Prerequisites
* PHP 8.1+
* Composer
* MySQL
### 🛠️ Setup Steps
1. Clone this repository:
    ```bash
    git clone [https://github.com/tanvir-ahmmad-33/MediSeduler]
    cd MediScheduler
    ```
2. Install PHP Dependencies
   ```bash
    composer install
    ```
3. Configure Environment
   ```bash
    cp .env.example .env
    ```
   Edit .env and set:
   ```bash
    DB_DATABASE=medi_scheduler
    DB_USERNAME=your_db_username
    DB_PASSWORD=your_db_password
    APP_URL=http://localhost:8000
    ```
4. Generate App Key & Migrate Database
   ```bash
    php artisan key:generate
    php artisan migrate --seed
    ```
5. Start Development Server
   ```bash
    php artisan serve
    ```
**Access:** `http://localhost:8000`
