# I-Blog-App-Phase-02

This is a Laravel-powered blog application that uses the Blade templating engine. The original static HTML files have been modularized into reusable Blade templates using layouts and partials to ensure better code management and scalability. Worked on blog category and post creation and listing with pagination. All the necessary migrations, models, controllers were created.

## Features

- Laravel 10 Framework
- Blade templating
- Modular file structure with layouts and partials
- Clean and maintainable frontend integration

## HTML to Blade Conversion Steps

I followed the steps below to convert the static HTML files into dynamic and reusable Blade templates in Laravel:

1. **Initial Setup**
   - Created a fresh Laravel project using `composer create-project`.
   - Placed the static HTML files inside the `resources/views` directory.

2. **Created a Master Layout**
   - Created a file called `layout.blade.php` inside `resources/views/layouts`.
   - Created a file called `app.blade.php` for admin inside `resources/views/layouts`.
   - Moved common HTML structure like `<head>`, `<nav>`, and `<footer>` to these files respectively.
   - Added the `@yield('content')` directive to define the main content section.

3. **Created Blade Partials**
   - Split repeated UI components (e.g., `header`, `nav`, `footer`, `mobile-menu`) into separate files inside `resources/views/partials`.
   - Used `@include('partials.header')`, etc., to include them in the layout or other views.
   - Added the `@yield('header-section')` directive to define the header content section.

4. **Converted HTML Pages to Blade**
   - Converted each HTML page to a `.blade.php` file.
   - Extended the layout using `@extends('layouts.layout')`.
   - Used `@section('header-section')` and `@endsection` to inject content into the header partial.
   - Used `@section('content')` and `@endsection` to inject content into the layout.

5. **Linked CSS, JS, and Images**
   - Ensured correct asset linking using Laravel's `asset()` helper, e.g.:
     ```php
     <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
     ```

6. **Tested UI**
   - Visited each route to verify the layout and content render as expected.

7. **Migrations and Model**
   - Created migration and model files for category and post.
   - Maintained relationship among tables

7. **Category and PostHandling**
   - Stored validated data with unique slug for category.
   - Viewed them on admin panel using pagination.

8. **Testing Data**
   - Created two seeder files to test categories and posts functionalities.


 
## How to Run the Project

1. Clone the repository:
   ```bash
   git clone https://github.com/Karamul-Ambia-Mahdi/I-Blog-App.git
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Set up `.env`:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Set up database connection on `.env`.

5. Run the migration:
   ```bash
   php artisan migrate
   ```

6. Run the seeder files respectively:
   ```bash
   php artisan db:seed --class=CategorySeeder
   php artisan db:seed --class=PostSeeder
   ```

7. Run the development server:
   ```bash
   php artisan serve
   ```


Visit `http://127.0.0.1:8000` in your browser.
