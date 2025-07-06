# 📚 BookHub Project

A simple web-based Book Listing application with user registration and login functionality. Built using **HTML, CSS, PHP, and MySQL**.

---

## 🔧 Features

- ✅ User Registration
- ✅ User Login & Logout
- ✅ Dashboard with Book List
- ✅ MySQL Database Integration
- ✅ Clean and Simple UI

---

## 📁 Folder Structure

```
BookHub/
│
├── css/
│   └── style.css               # Stylesheet
│
├── js/
│   └── script.js               # (optional) JavaScript if needed
│
├── includes/
│   ├── db.php                  # Database connection
│   ├── header.php              # Common HTML header
│   └── footer.php              # Common footer
│
├── books/
│   └── book_list.php           # Displays all books (user dashboard)
│
├── auth/
│   ├── register.php            # Registration page
│   ├── login.php               # Login page
│   ├── logout.php              # Logout script
│
├── index.php                   # Homepage / redirect to login
├── dashboard.php               # Redirect after login
└── README.md                   # Project instructions

```

---

## 🛠 Requirements

- [XAMPP](https://www.apachefriends.org/index.html) (or any local PHP server)
- Web browser

---

## 🚀 How to Run the Project

### Step 1: Setup XAMPP
1. Start Apache and MySQL from the XAMPP Control Panel

### Step 2: Extract Project
- Extract the zip to: `C:/xampp/htdocs/BookHub_Project`

### Step 3: Create MySQL Database
1. Go to: `http://localhost/phpmyadmin`
2. Create a database named: `bookhub`
3. Run the following SQL:
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    author VARCHAR(100),
    description TEXT
);

INSERT INTO books (title, author, description) VALUES
('The Alchemist', 'Paulo Coelho', 'A novel about following your dreams.'),
('1984', 'George Orwell', 'A dystopian novel about totalitarian regime.'),
('To Kill a Mockingbird', 'Harper Lee', 'A story of racial injustice in America.');
```

### Step 4: Run in Browser
Visit:
```
http://localhost/BookHub_Project/
```

---

## 👨‍💻 Author

Made with ❤️ by ChatGPT for educational purposes.
