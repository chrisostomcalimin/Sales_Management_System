<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sales Management System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
        }

        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar h1 {
            font-size: 24px;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
        }

        .welcome-section {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .welcome-section h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .welcome-section p {
            color: #666;
            line-height: 1.6;
        }

        .user-info {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .user-info h3 {
            color: #333;
            margin-bottom: 15px;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #667eea;
        }

        .info-value {
            color: #555;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .action-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s;
        }

        .action-card:hover {
            transform: translateY(-5px);
        }

        .action-card h4 {
            color: #333;
            margin-bottom: 10px;
        }

        .action-card a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: transform 0.2s;
        }

        .action-card a:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <?php
    require_once 'config/session.php';
    require_once 'config/database.php';
    require_once 'classes/Auth.php';
    require_once 'includes/check_auth.php';

    // Check if user is authenticated
    checkAuth();

    $auth = new Auth($conn);
    $user = $auth->getCurrentUser();
    ?>

    <div class="navbar">
        <h1>Sales Management System</h1>
        <div class="nav-links">
            <span>Welcome, <?php echo htmlspecialchars($user['full_name']); ?></span>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="welcome-section">
            <h2>Welcome to Sales Management System</h2>
            <p>Manage your sales operations efficiently with our comprehensive management system. Track sales, manage inventory, and monitor your business performance all in one place.</p>
        </div>

        <div class="user-info">
            <h3>Your Information</h3>
            <div class="info-item">
                <span class="info-label">Full Name:</span>
                <span class="info-value"><?php echo htmlspecialchars($user['full_name']); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">Username:</span>
                <span class="info-value"><?php echo htmlspecialchars($user['username']); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">Email:</span>
                <span class="info-value"><?php echo htmlspecialchars($user['email']); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">Role:</span>
                <span class="info-value"><?php echo htmlspecialchars($user['role']); ?></span>
            </div>
        </div>

        <h3 style="color: #333; margin-bottom: 20px;">Quick Actions</h3>
        <div class="quick-actions">
            <div class="action-card">
                <h4>Edit Profile</h4>
                <p>Update your profile information</p>
                <a href="profile.php">Go to Profile</a>
            </div>
            <div class="action-card">
                <h4>Change Password</h4>
                <p>Update your account password</p>
                <a href="change_password.php">Change Password</a>
            </div>
            <div class="action-card">
                <h4>View Reports</h4>
                <p>Check sales and performance reports</p>
                <a href="reports.php">View Reports</a>
            </div>
            <div class="action-card">
                <h4>Manage Users</h4>
                <p>View and manage system users</p>
                <a href="users.php">Manage Users</a>
            </div>
        </div>
    </div>
</body>
</html>
