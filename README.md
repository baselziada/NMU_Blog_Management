# Simple Blogging System

## 📌 Overview
This is a simple blogging system built using the Laravel framework. It provides users with the ability to create, edit, and delete blog posts while offering basic CRUD (Create, Read, Update, Delete) functionality for managing articles.

## 📸 Screenshots

<div align="center">
  <table>
    <tr>
      <td align="center">
        <img src="![Uploading laravel3[1].jpg…]()
" alt="Register Page" width="400"/>
        <br>Figure 1: Register Page
      </td>
      <td align="center">
        <img src="path_to_login_image.png" alt="Login Page" width="400"/>
        <br>Figure 2: Login Page
      </td>
    </tr>
    <tr>
      <td align="center">
        <img src="path_to_dashboard_image.png" alt="Dashboard" width="400"/>
        <br>Figure 3: Dashboard
      </td>
      <td align="center">
        <img src="path_to_all_posts_image.png" alt="All Posts" width="400"/>
        <br>Figure 4: All Posts
      </td>
    </tr>
  </table>
</div>

## 🚀 Features
- **Home Page**: Displays a list of all blog posts.
- **Post Management**: Create, edit, update, and delete posts.
- **Post Details**: View individual blog posts.
- **Authentication**: User login and registration for managing posts (using the Laravel UI package).
- **Database Integration**: Stores blog posts using migration files.
- **Validation Rules**:
  - **Title**: Required, minimum 3 characters, unique.
  - **Description**: Required, minimum 10 characters.
  - Proper error messages for failed validations.

## 🎯 Bonus Features
- **Formatted "Created At" timestamps** on the Index and Show pages (using [Carbon](https://carbon.nesbot.com/docs/)).
- **Pagination** added to the Index page with pagination links.
- **Database Seeding**: A `PostSeeder` and `PostFactory` class created to seed the posts table with 500 records using the command:  
  ```bash
  php artisan db:seed

