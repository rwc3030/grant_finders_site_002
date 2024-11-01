# Deployment Runbook for Ultimate Grant Resource Website

## Overview
This runbook provides detailed instructions for deploying the Ultimate Grant Resource Website. It includes configuration requirements and environment setup needed for the application's features and dependencies.

## Prerequisites
Before deploying the application, ensure the following prerequisites are met:

1. **LAMP Stack**: Ensure that the server has the LAMP stack installed:
   - **Apache**: Version 2.4 or higher
   - **MySQL**: Version 5.7 or higher
   - **PHP**: Version 7.4 or higher with the following extensions:
     - `mysqli`
     - `mbstring`
     - `json`
     - `curl`
     - `xml`

2. **Composer**: Install Composer for managing PHP dependencies.

3. **Node.js and npm**: Install Node.js (version 14 or higher) and npm for managing JavaScript dependencies.

## Configuration Requirements

### Database Configuration
1. Create a MySQL database for the application:
   ```sql
   CREATE DATABASE grant_finders_site_002
   CHARACTER SET utf8mb4
   COLLATE utf8mb4_unicode_ci;
   ```

2. Update the `config/config.php` file with the following database credentials:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'grant_finders_site_002');
   define('DB_USER', 'root');
   define('DB_PASS', 'your_password_here');
   ```

### Environment Variables
1. Create a `.env` file in the root directory of the project with the following content:
   ```
   DB_HOST=localhost
   DB_NAME=grant_finders_site_002
   DB_USER=root
   DB_PASS=your_password_here
   ```

## Application Setup

### Step 1: Clone the Repository
Clone the repository to your server:
```bash
git clone https://github.com/yourusername/ultimate-grant-resource-website.git
cd ultimate-grant-resource-website
```

### Step 2: Install PHP Dependencies
Run Composer to install PHP dependencies:
```bash
composer install
```

### Step 3: Install JavaScript Dependencies
Navigate to the `public` directory and run npm to install JavaScript dependencies:
```bash
cd public
npm install
```

### Step 4: Set Up the Database
Run the SQL script to set up the database structure:
```bash
mysql -u root -p grant_finders_site_002 < setup_database.sql
```

### Step 5: Configure Apache
1. Create a new Apache configuration file for the application:
   ```apache
   <VirtualHost *:80>
       ServerName yourdomain.com
       DocumentRoot /path/to/ultimate-grant-resource-website/public

       <Directory /path/to/ultimate-grant-resource-website/public>
           AllowOverride All
           Require all granted
       </Directory>

       ErrorLog ${APACHE_LOG_DIR}/error.log
       CustomLog ${APACHE_LOG_DIR}/access.log combined
   </VirtualHost>
   ```

2. Enable the new site and rewrite module:
```bash
sudo a2ensite yourdomain.conf
sudo a2enmod rewrite
```

3. Restart Apache:
```bash
sudo systemctl restart apache2
```

## Testing the Deployment
1. Open a web browser and navigate to `http://yourdomain.com`.
2. Verify that the application loads correctly and all features are functional.

## Troubleshooting
- Check the Apache error logs for any issues:
```bash
tail -f /var/log/apache2/error.log
```
- Ensure that all required PHP extensions are installed and enabled.

## Conclusion
This runbook provides a comprehensive guide for deploying the Ultimate Grant Resource Website. Follow the steps carefully to ensure a successful deployment.
