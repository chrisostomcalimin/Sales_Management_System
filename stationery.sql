```sql

CREATE DATABASE stationery_system;


USE stationery_system;



CREATE TABLE purchases (
id INT AUTO_INCREMENT PRIMARY KEY,
item_name VARCHAR(100),
quantity INT,
 cost DECIMAL(10,2),
total DECIMAL(10,2),
purchase_date DATE NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



CREATE TABLE sales (
id INT AUTO_INCREMENT PRIMARY KEY,
item_name VARCHAR(100),
quantity INT,
price DECIMAL(10,2),
total DECIMAL(10,2),
sale_date DATE NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



CREATE TABLE expenses (
id INT AUTO_INCREMENT PRIMARY KEY,
description VARCHAR(255),
amount DECIMAL(10,2),
expense_date DATE NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

```

---
