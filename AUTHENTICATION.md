# Authentication System - Sales Management System

## Overview
Complete authentication system for the Sales Management System built with PHP and MySQL.

## Features

### 1. User Registration
- New user registration with validation
- Secure password hashing using BCRYPT
- Email and username uniqueness validation
- Full name capture

### 2. User Login
- Secure login with username or email
- Session management
- Login time tracking
- Automatic session timeout (30 minutes)

### 3. Session Management
- Automatic session timeout after 30 minutes of inactivity
- Last activity tracking
- Secure session variables

### 4. Authentication Middleware
- `checkAuth()` - Verify user is logged in
- `checkRole()` - Verify user has required role
- `redirectIfLoggedIn()` - Redirect already logged-in users

### 5. User Profile Management
- View current user information
- Update profile details
- Change password with validation

## File Structure

```
├── config/
│   ├── database.php          # Database connection
│   └── session.php           # Session configuration
├── classes/
│   └── Auth.php              # Authentication class
├── includes/
│   └── check_auth.php        # Authentication middleware
├── database/
│   └── schema.sql            # Database schema
├── login.php                 # Login page
├── register.php              # Registration page
├── dashboard.php             # Dashboard (protected)
└── logout.php                # Logout script
```

## Installation

### 1. Database Setup
Import the schema file to create the users table:
```bash
mysql -u root -p your_database < database/schema.sql
```

### 2. Configuration
Update `config/database.php` with your database credentials:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'sales_management_db');
```

### 3. File Permissions
Ensure proper file permissions for file operations.

## Usage

### Registration
1. Navigate to `register.php`
2. Fill in registration form:
   - Full Name
   - Username
   - Email
   - Password (minimum 6 characters)
   - Confirm Password
3. Submit to create account

### Login
1. Navigate to `login.php`
2. Enter username or email
3. Enter password
4. Click Login

### Protected Pages
To protect a page, add this at the top:
```php
<?php
require_once 'config/session.php';
require_once 'config/database.php';
require_once 'classes/Auth.php';
require_once 'includes/check_auth.php';

checkAuth(); // Redirect to login if not authenticated
?>
```

### Role-Based Access
To restrict access by role:
```php
checkAuth();
checkRole('admin'); // Only allow admin role
```

## Security Features

1. **Password Hashing**: Uses PHP's `password_hash()` with BCRYPT
2. **Prepared Statements**: Prevents SQL injection attacks
3. **Input Validation**: Sanitizes user input with `htmlspecialchars()`
4. **Session Security**: Automatic timeout after 30 minutes of inactivity
5. **Password Requirements**: Minimum 6 characters

## API Reference

### Auth Class Methods

#### `register($username, $email, $password, $full_name)`
Register a new user.
```php
$result = $auth->register('john_doe', 'john@example.com', 'password123', 'John Doe');
// Returns: ['status' => true/false, 'message' => 'Success/Error message']
```

#### `login($username, $password)`
Authenticate user and create session.
```php
$result = $auth->login('john_doe', 'password123');
// Returns: ['status' => true/false, 'message' => 'Success/Error message']
```

#### `logout()`
Destroy user session.
```php
$result = $auth->logout();
// Returns: ['status' => true, 'message' => 'Logout successful']
```

#### `isLoggedIn()`
Check if user is currently logged in.
```php
if ($auth->isLoggedIn()) {
    // User is logged in
}
```

#### `getCurrentUser()`
Get current user information.
```php
$user = $auth->getCurrentUser();
// Returns: array with id, username, email, full_name, role or null
```

#### `changePassword($user_id, $old_password, $new_password, $confirm_password)`
Change user password.
```php
$result = $auth->changePassword(1, 'old_password', 'new_password', 'new_password');
// Returns: ['status' => true/false, 'message' => 'Success/Error message']
```

#### `updateProfile($user_id, $full_name, $email)`
Update user profile information.
```php
$result = $auth->updateProfile(1, 'Jane Doe', 'jane@example.com');
// Returns: ['status' => true/false, 'message' => 'Success/Error message']
```

## Future Enhancements

- [ ] Remember me functionality
- [ ] Password reset via email
- [ ] Two-factor authentication
- [ ] Social login (Google, GitHub)
- [ ] Login history and audit log
- [ ] Account lockout after failed attempts
- [ ] Email verification for new accounts
- [ ] CAPTCHA for login/registration

## Support

For issues or questions, please create an issue in the repository.
