# PHP Registration Form
A simple PHP project to register users with:

✅ Username & Password

✅ Password hashing (password_hash)

✅ MySQL database with prepared statements

✅ Basic input validation

# 📁 Structure
registration-form/
├── config/
│   ├── database.php          
│   └── database.example.php
├── images/
│   ├── image1.jpg
│   ├── image2.jpg
│   └── image3.jpg
├── index.php
└── README.md

# 🛠️ Setup
1. Create a MySQL database called businessdb.
2. Create the users table by running:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);
```
3. Copy the example config file and update it:
    cp config/database.example.php config/database.php
4. Edit config/database.php and replace with your actual database credentials
5. Run index.php on a local server (e.g. XAMPP or MAMP)

✅ Features
Secure password storage with hashing

Input validation & sanitization

Prepared statements to prevent SQL injection

Simple and clear file structure
