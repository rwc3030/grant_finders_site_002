# Architect Notes

## Remaining Features and Tasks

1. **Feature 1: Access Educational Resources**
   - Status: Complete
   - Pending Issues: None

2. **Feature 2: FAQs Section**
   - Status: Complete
   - Pending Issues: None

3. **Feature 1: Search Grants**
   - Status: Complete
   - Pending Issues: None

4. **Feature 2: Save Search Results**
   - Status: Complete
   - Pending Issues: None

## Identified Issues and Code Problems

1. **public/app.js**: 
   - No error handling for AJAX requests. If a request fails, the user is not informed.
   
2. **public/error.php**: 
   - The error handling does not log errors to a file, which can make debugging difficult.
   
3. **public/index.php**: 
   - Missing input validation for user inputs, which can lead to security vulnerabilities.
   
4. **src/api/getData.php**: 
   - No checks for empty or invalid parameters before processing requests.
   
5. **src/api/loginUser.php**: 
   - Passwords are not hashed before storage, which is a security risk.
   
6. **src/database.php**: 
   - Database connection errors are not handled, which can lead to application crashes.

## Bugs and Functional Issues

1. **public/app.js**: Implement error handling for AJAX requests to inform users of failures.
2. **public/error.php**: Add functionality to log errors to a file for better debugging.
3. **public/index.php**: Implement input validation for user inputs to enhance security.
4. **src/api/getData.php**: Add checks for empty or invalid parameters before processing requests.
5. **src/api/loginUser.php**: Ensure passwords are hashed before storage to improve security.
6. **src/database.php**: Implement error handling for database connection issues to prevent crashes.

## Code Duplication and Cleanup Actions

- Refactored email and password validation functions from `src/api/getData.php` and `src/api/getFAQs.php` into a new utility file `src/utils/validation.php` to eliminate redundancy.

## File and Directory Structure Adjustments

- The current directory structure does not fully align with the specified structure in 'README.md':
  - The `src/api` directory contains `getData.php`, but it should also include `getFAQs.php`, `registerUser.php`, and `loginUser.php` as per the expected structure.
  - The `src/partials` directory is missing the `header.php` file.
  - The `src/utils` directory is missing the `websocket-server.php` file.

