<p align="center">
    <a href="https://clouv.rf.gd">
    <img src="https://i.ibb.co.com/tDLLxh1/logo.png" alt="logo" width="400" style="margin:0 auto">
    </a>
</p>

# Laravel 11 Admin Dashboard Template

<img src="https://i.ibb.co.com/R42VBrv/image-2.png" alt=""/>

A modern and customizable Laravel 11 admin dashboard template, perfect for building web applications quickly.

## Features

- **Laravel 11**: Latest Laravel framework
- **Authentication**: Built-in user authentication
- **Responsive Design**: Mobile-friendly layout
- **Role Management**: Admin and user role management
- **Customizable Components**: Easily extendable components
- **Theme Customize**: theme customize

## Requirements

- PHP 8.2+
- Composer
- Database (MySQL, PostgreSQL, etc.)

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/declouv/laravel-engine.git
cd laravel-engine
```

### 2. Install Dependencies

- Install PHP dependencies with Composer:

    ```bash
    composer install
    ```


### 3. Set Up Environment Variables

- Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

- Open the `.env` file and update the following variables:

    ```bash
    APP_NAME=DeClouv
    APP_URL=http://localhost
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Run Migrations and seed

```bash
php artisan migrate --seed
```

### 6. Serve the Application

- Run the built-in Laravel development server:

    ```bash
    php artisan serve
    ```

- Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Contributing

Feel free to submit issues and pull requests.

---

Would you like to add anything else, such as deployment instructions or screenshots?
