# Developer Onboarding Guide

## Introduction
Welcome to the Ultimate Grant Resource Website! This guide is designed to help developers onboard quickly and effectively. It covers the project's architecture, features, setup instructions, and coding standards.

## Project Overview
The Ultimate Grant Resource Website is a comprehensive platform for finding public grants. It provides users with a centralized resource for searching, filtering, and accessing grant information.

## Features
- **User Account Management**: Users can register, log in, and manage their accounts.
- **Grant Search Functionality**: Users can search for grants based on various criteria, including location and funding amount.
- **Resource Center**: Access educational resources and FAQs to assist users in the grant application process.
- **Database Design**: A well-structured database to support user accounts, grants, and saved searches.

## Architecture
The application follows a standard LAMP (Linux, Apache, MySQL, PHP) architecture. The directory structure is organized as follows:

```
/project-root
├── /public
│   ├── index.php                  # Main entry file for the app
│   ├── app.js                     # JavaScript file for AJAX/real-time interactivity
│   └── styles.css                 # CSS file for basic styling
├── /src
│   ├── database.php               # Database connection and helper functions
│   ├── /api                       # Folder for API endpoint files
│   │   └── getData.php            # API endpoint for retrieving data
│   ├── /partials                  # Reusable PHP partials
│   │   └── header.php             # Common header partial
│   └── /utils                     # Utility PHP scripts
│       └── websocket-server.php   # WebSocket server script (optional, if real-time is required)
├── /config
│   └── config.php                 # Configuration file for database settings
└── README.md                      # Documentation for setup and usage
```

## Setup Instructions
1. **Clone the Repository**: 
   ```bash
   git clone <repository-url>
   cd project-root
   ```

2. **Set Up the Database**:
   - Import the `setup_database.sql` file into your MySQL server.
   - Update the database credentials in `config/config.php`.

3. **Install Dependencies**:
   - Ensure you have PHP and Composer installed.
   - Run `composer install` in the project root if applicable.

4. **Run the Application**:
   - Start your Apache server and navigate to `http://localhost/project-root/public`.

## Coding Standards
- **File Length**: Keep files under 85 lines; break larger files into smaller components.
- **Function Arguments**: Limit functions to five arguments; use objects or arrays for additional data.
- **Function Size**: Keep functions under 20 lines; split complex functions as needed.
- **Code Comments**: Add comments for complex logic and functions.
- **Consistency**: Use camelCase for JavaScript, snake_case for PHP, and maintain consistent formatting.
- **Error Handling**: Include error handling with clear, informative messages.
- **DRY Principle**: Refactor redundant code into functions.
- **Modular Design**: Structure code in self-contained modules.
- **Reusability**: Create generic, reusable functions and components.

## Conclusion
This guide should provide you with a solid foundation to start contributing to the Ultimate Grant Resource Website. If you have any questions, feel free to reach out to the development team.

Happy coding!
