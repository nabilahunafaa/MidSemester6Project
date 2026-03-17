# AdminPanelTeam1

A web-based admin panel and landing page built using Laravel and Blade templating. This project provides a simple dashboard structure with reusable components and a public landing page without authentication.

---

## Features

* Reusable sidebar component using Blade
* Admin panel layout with modular structure
* Public landing page (no authentication required)
* Clean separation between layout, content, and components
* Simple routing using Laravel named routes

---

## Project Structure

```
resources/views/
│
├── components/
│   └── sidebar-button.blade.php
│
├── contents/
│   ├── dashboard-content.blade.php
│   ├── product-content.blade.php
│   ├── product-category-content.blade.php
│   └── user-content.blade.php
│
├── layouts/
│   ├── app.blade.php
│   └── parts/
│       ├── side-bar.blade.php
│       ├── dashboard.blade.php
│       ├── product.blade.php
│       ├── product-category.blade.php
│       └── user.blade.php
│
├── layouts/landing.blade.php
└── index.blade.php
```

---

## Installation

1. Clone the repository

```
git clone https://github.com/your-username/your-repo.git
```

2. Navigate to project directory

```
cd your-repo
```

3. Install dependencies

```
composer install
npm install
```

4. Run development server

```
php artisan serve
npm run dev
```

---

## Usage

### Landing Page

Accessible at:

```
/
```

This page is public and does not require authentication.

---

### Admin Pages

Example routes:

```
/dashboard
/users
/products
/categories
```

Each page:

* Uses the main layout (`layouts.app`)
* Includes sidebar automatically
* Loads content from `contents/`

---

## Components

### Sidebar Button

Reusable Blade component:

```blade
<x-sidebar-button type="dashboard">
    Dashboard
</x-sidebar-button>
```

Handles:

* Icon
* Route destination
* Label (via slot)

---

## Layout System

* `layouts.app` → main admin layout
* `layouts.parts.*` → page wrappers
* `contents.*` → page content
* `components.*` → reusable UI

---

## Tech Stack

* Laravel
* Blade Templating
* Tailwind CSS

---

## Future Improvements

* Add authentication system
* Role & permission management
* Dynamic menu from database/config
* Responsive sidebar (collapse)

---

## License

This project is open-source and available under the MIT License.
