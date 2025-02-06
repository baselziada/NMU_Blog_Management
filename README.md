# Simple Blogging System

## 📌 Overview
This is a simple blogging system built using the Laravel framework. It provides users with the ability to create, edit, and delete blog posts while offering basic CRUD (Create, Read, Update, Delete) functionality for managing articles.

## 📸 Screenshots

<div align="center">
  <table>
    <tr>
      <td align="center">
        <img src="https://github.com/user-attachments/assets/e024db9e-992c-467d-9c9f-0d3776e9b457" alt="Register Page" width="400"/>
        <br>Figure 1: Register Page
      </td>
      <td align="center">
        <img src="https://github.com/user-attachments/assets/4ea8a2e1-f137-499e-bfbc-e35f6650c661" alt="Login Page" width="400"/>
        <br>Figure 2: Login Page
      </td>
    </tr>
    <tr>
      <td align="center">
        <img src="https://github.com/user-attachments/assets/d7e38034-83d8-43a1-8a43-1f8b2bc1da98" alt="Dashboard" width="400"/>
        <br>Figure 3: Dashboard
      </td>
      <td align="center">
        <img src="https://github.com/user-attachments/assets/a2956e2b-11a1-4fe7-8dfb-2c4efb00d0e0" alt="All Posts" width="400"/>
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

## 🔧 Requirements
- **PHP** >= 7.4  
- **Laravel Framework**  
- **Composer**  
- **MySQL** or equivalent database  

---

## 📥 Installation Instructions
<div align="center">
  <table>
    <tr>
      <td align="left">
      
1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-repo-url/simple-blogging-system.git
   
2. **Navigate to the project directory**:
   ```bash
   cd simple-blogging-system

3. **Install dependencies**:
   ```bash
   composer install

4. **Copy the `.env.example` file and configure your database settings**:
   ```bash
   cp .env.example .env

5. **Generate an application key**:
   ```bash
   php artisan key:generate

6. **Run database migrations and seeders:**:
   ```bash
   php artisan migrate --seed

7. **Start the local development server**:
   ```bash
   php artisan serve

8. **Your application will now be accessible at**:
   ```bash
   http://localhost:8000

# 🚀 Future Enhancements
- **User roles & permissions** for better access control.
- **Comment system** to allow interaction on blog posts.
- **Advanced search functionality** for better navigation.

---

## 🔗 Acknowledgments
Special thanks to:
- **Laravel Framework** for providing a powerful backend solution.
- **Carbon Library** for date formatting.
- **Open-source community** for valuable resources and documentation.

---

## 👨‍💻 Developed By

<div align="center">
<table>
<tr>
<td align="center">
<img src="https://github.com/user-attachments/assets/0a820f5d-7450-48e1-9d3c-76cccf6e2dcf" alt="Basel Ziada" width="120" style="border-radius: 50%;"/>
<br>
<strong>Basel Ziada</strong>
<br>
<a href="http://www.linkedin.com/in/basel-ziada-0b23032b3">LinkedIn Profile</a>
</td>
<td align="center">
<img src="https://github.com/user-attachments/assets/2b8c5e35-00d3-42a7-b07b-51a2ece4a43f" alt="Sayed Tag Eldeen" width="120" style="border-radius: 50%;"/>
<br>
<strong>Sayed Tag Eldeen</strong>
<br>
<a href="https://www.linkedin.com/in/sayedtageldin">LinkedIn Profile</a>
</td>
</tr>
</table>
</div>

---

## 📜 License
This project is open-source and available under the **MIT License**.

