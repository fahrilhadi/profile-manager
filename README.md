# Profile Manager App

A **lightweight profile management application** built with **Laravel 12**, **Laravel Breeze**, and **TailwindCSS**. This project provides a clean and modern authentication flow with **login, dashboard pages**, and a **profile editor with photo upload support**.

## Screenshots

**Index Page**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/2fd39d25-a594-415c-9af6-cc0b649fee11" /><br>

**Login Page**

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/f9fd9ef8-0438-4178-b42b-14dac8a43e84" /><br>

**Dashboard Page (Without Photo)**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/72e9fbaf-9ed8-4bb3-98c1-c2a9d1e5d802" /><br>

**Dashboard Page (Updated With Photo)**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/e844683c-b00c-45ff-b3e9-7bad149de576" /><br>

## Tech Stack

- **Backend:** Laravel 12  
- **Frontend:** Blade Templates + TailwindCSS  
- **Database:** MySQL 
- **Version Control:** GitHub  

## Quick Start

```bash
# Clone repository
git clone https://github.com/fahrilhadi/profile-manager.git
cd profile-manager

# Install dependencies
composer install
npm install
npm run dev

# Setup environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Serve application
php artisan serve
