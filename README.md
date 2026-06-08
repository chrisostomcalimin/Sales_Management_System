# Stationery Sales System

A lightweight web-based application for managing stationery sales, purchases, and expenses. This system helps businesses track inventory movements and financial transactions in one centralized platform.

## Features

- **Purchase Management** - Record and track stationery purchases with item details, quantity, and cost
- **Sales Management** - Log sales transactions including item names, quantities, and selling prices
- **Expense Tracking** - Record miscellaneous business expenses with descriptions and amounts
- **Reporting** - Generate reports showing total sales, total purchases, and profit/loss calculations
- **Simple Interface** - User-friendly web interface with clean design for easy navigation

## System Requirements

- **Web Server** - Apache or any PHP-compatible web server
- **PHP** - Version 5.6 or higher
- **MySQL/MariaDB** - Database for data storage
- **Browser** - Modern web browser (Chrome, Firefox, Safari, Edge)

## Installation

### 1. Database Setup

1. Open your MySQL client or phpMyAdmin
2. Run the `stationery.sql` file to create the database and tables:
   ```sql
   source stationery.sql;
   ```
   Or import it through phpMyAdmin

### 2. Web Server Setup

1. Copy all project files to your web server's document root:
   - On Apache (Windows): `C:\xampp\htdocs\stationery`
   - On Apache (Linux/Mac): `/var/www/html/stationery`

### 3. Database Configuration

1. Edit `db.php` and update the connection details if needed:
   ```php
   $host = "localhost";      // Your database host
   $user = "root";           // Your MySQL username
   $password = "";           // Your MySQL password
   $database = "stationery_system";  // Database name
   ```

### 4. Access the Application

Open your browser and navigate to:
```
http://localhost/stationery/
```
or
```
http://[your-server-address]/stationery/
```

## File Structure

```
Sales System/
├── index.xhtml          # Main dashboard page
├── sales.xhtml          # Sales entry page
├── purchase.php         # Purchase form processor
├── sales.php            # Sales form processor
├── expense.php          # Expense form processor
├── report.php           # Report generator
├── db.php               # Database connection
├── script.js            # Client-side JavaScript
├── style.css            # Styling and layout
├── stationery.sql       # Database schema
└── README.md            # This file
```

## Usage Guide

### Adding a Purchase

1. Click on the "Add Purchase" section
2. Enter:
   - **Item Name** - Name of the stationery item
   - **Quantity** - Number of units purchased
   - **Cost** - Cost per unit
3. Click "Save Purchase"
4. System automatically calculates total cost (Quantity × Cost)

### Recording a Sale

1. Navigate to "Add Sale" section
2. Enter:
   - **Item Name** - Name of the item sold
   - **Quantity** - Number of units sold
   - **Price** - Selling price per unit
3. Click "Save Sale"
4. System automatically calculates total revenue (Quantity × Price)

### Tracking Expenses

1. Go to "Add Expense" section
2. Enter:
   - **Description** - Details about the expense
   - **Amount** - Expense amount
3. Click "Save Expense"

### Viewing Reports

1. Navigate to the Reports section
2. View:
   - **Total Sales** - Sum of all sales revenue
   - **Total Purchases** - Sum of all purchase costs
   - **Profit/Loss** - Calculated as (Total Sales - Total Purchases - Total Expenses)

## Database Schema

### Purchases Table
- `id` - Unique identifier (Auto-increment)
- `item_name` - Name of purchased item
- `quantity` - Number of units
- `cost` - Cost per unit
- `total` - Total cost (quantity × cost)
- `created_at` - Timestamp of purchase

### Sales Table
- `id` - Unique identifier (Auto-increment)
- `item_name` - Name of sold item
- `quantity` - Number of units sold
- `price` - Price per unit
- `total` - Total revenue (quantity × price)
- `created_at` - Timestamp of sale

### Expenses Table
- `id` - Unique identifier (Auto-increment)
- `description` - Expense description
- `amount` - Expense amount
- `created_at` - Timestamp of expense

## Security Notes

⚠️ **Important**: This system is suitable for small-scale use only. For production environments, consider:

- Replace direct SQL queries with prepared statements to prevent SQL injection
- Implement user authentication and authorization
- Use HTTPS for encrypted data transmission
- Add input validation and sanitization
- Implement proper error handling
- Regular database backups
- Access control mechanisms

## Troubleshooting

| Issue | Solution |
|-------|----------|
| "Connection failed" error | Check database credentials in `db.php` and ensure MySQL is running |
| Page shows blank | Verify PHP is enabled on your server and files are in correct directory |
| Data not saving | Check database user permissions and ensure tables were created properly |
| CSS/JavaScript not loading | Verify file paths in `index.xhtml` and check web server file permissions |

## Support and Maintenance

- Regular backup your database
- Update PHP and MySQL to latest stable versions
- Review logs for any errors
- Keep track of transactions for audit purposes

## License

This system is provided as-is for business use.

## Version History

- **v1.0** - Initial release with purchase, sales, and expense management

---

For questions or improvements, review the system code or consult your system administrator.
