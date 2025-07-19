# Laravel Blade Basics Tutorial 🧩

This repository is a beginner-friendly tutorial demonstrating how to use **Blade templates** in a Laravel application.

Blade is Laravel’s built-in templating engine — it's clean, powerful, and secure. This project covers layouts, components, directives, and more.

---

## 🚀 Features Covered

- Blade layout and `@section` usage  
- Blade directives: `@if`, `@foreach`, `@isset`, etc.  
- Echoing variables with `{{ }}` (auto-escaped)  
- Raw HTML with `{!! !!}` (use with caution)  
- Blade components for reusable UI  
- Laravel route and view structure  
- Secure templating by default  

---

## 📁 File Structure Overview

```

laravel-blade-basics/
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── components/
│       │   └── alert.blade.php
│       ├── home.blade.php
│       └── welcome.blade.php
├── app/
│   └── View/Components/
│       └── Alert.php
├── routes/
│   └── web.php
└── README.md

````

---

## 🛠️ Setup Instructions

To run this Blade example locally:

1. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/laravel-blade-basics.git
   cd laravel-blade-basics

    ```

2. **Install Laravel Dependencies**

   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   ```

3. **Serve the Application**

   ```bash
   php artisan serve
   ```

4. **Visit in Browser**

   ```
   http://localhost:8000
   ```

---

## 📄 Key Code Examples

### ✅ `routes/web.php`

```php
Route::get('/', function () {
    $user = ['name' => 'Rohit'];
    return view('home', compact('user'));
});
```

### ✅ Layout: `resources/views/layouts/app.blade.php`

```blade
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Blade</title>
</head>
<body>
    <header><h2>My Laravel App</h2></header>

    <main>
        @yield('content')
    </main>

    <footer><p>© 2025 YourApp</p></footer>
</body>
</html>
```

### ✅ View: `resources/views/home.blade.php`

```blade
@extends('layouts.app')

@section('content')
    <h1>Welcome to Blade Templates</h1>

    @if($user)
        <p>Hello, {{ $user['name'] }}!</p>
    @else
        <p>Hello, Guest!</p>
    @endif

    <x-alert type="success" message="You're viewing a reusable component!" />
@endsection
```

### ✅ Component: `resources/views/components/alert.blade.php`

```blade
@props(['type' => 'info', 'message'])

<div class="alert alert-{{ $type }}">
    {{ $message }}
</div>
```

### ✅ Component Class: `app/View/Components/Alert.php`

```php
namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $message;

    public function __construct($type = 'info', $message = '')
    {
        $this->type = $type;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.alert');
    }
}
```

---

## 🎯 Why Use Blade?

* ✅ Clean and readable syntax
* 🔁 Reusable layouts and components
* 🔐 Secure templating with auto-escaping
* ⚡ Built for Laravel, with zero config

---

## 🙌 Credits

Maintained by [Rohit Dhiman](https://github.com/rohitdhiman91)
Follow for more Laravel tips and tutorials.

---

## 🌟 Like This?

Give it a ⭐️ if you found it helpful!
Pull requests and suggestions welcome.

---

## 🏷️ Tags

`#Laravel` `#Blade` `#PHP` `#Templating` `#WebDev` `#BeginnerFriendly` `#OpenSource`
