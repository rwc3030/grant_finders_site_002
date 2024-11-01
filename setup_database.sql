CREATE DATABASE IF NOT EXISTS grant_finders_site_002
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE grant_finders_site_002;

CREATE TABLE IF NOT EXISTS grant_finders_site_002_grants (
    grant_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    funding_amount DECIMAL(10, 2),
    eligibility_criteria TEXT,
    location VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

