CREATE DATABASE IF NOT EXISTS grant_finders_site_002
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE grant_finders_site_002;

CREATE TABLE IF NOT EXISTS grant_finders_site_002_users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS grant_finders_site_002_grants (
    grant_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    funding_amount DECIMAL(10, 2),
    eligibility_criteria TEXT,
    location VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS grant_finders_site_002_saved_searches (
    search_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    search_query VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES grant_finders_site_002_users(user_id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS grant_finders_site_002_resources (
    resource_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO grant_finders_site_002_resources (title, url) VALUES
('Grant Application Guide', 'https://example.com/grant-application-guide'),
('Funding Opportunities Overview', 'https://example.com/funding-overview');

