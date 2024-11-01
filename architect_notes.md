# Architect Notes

## Project Status Summary
- **Completed Tasks:**
  - User Registration feature has been successfully implemented.
  - User Login feature has been completed with email validation and password strength enforcement.
  - Search Grants feature is fully functional with filtering options.
  - Save Search Results feature allows users to save and manage their searches.
  - Access Educational Resources feature is implemented with guides available for users.
  - FAQs Section is complete and accessible from the main menu.
  - Database Structure has been defined and documented.

- **Unresolved Issues:**
  - Error handling for AJAX requests in `public/app.js` needs to be implemented.
  - Logging of errors in `public/error.php` is not yet functional.
  - Input validation in `public/index.php` is still required.
  - Checks for empty or invalid parameters in `src/api/getData.php` need to be added.
  - Password hashing before storage in `src/api/loginUser.php` is necessary.
  - Database connection error handling in `src/database.php` needs to be implemented.

## Remaining Features and Tasks
1. **Feature: Access Educational Resources**
   - **Status:** Complete
   - **Pending Issues:** None

2. **Feature: FAQs Section**
   - **Status:** Complete
   - **Pending Issues:** None

3. **Feature: Search Grants**
   - **Status:** Complete
   - **Pending Issues:** None

4. **Feature: Save Search Results**
   - **Status:** Complete
   - **Pending Issues:** None

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

## Code Duplication and Cleanup Actions
- Refactored email and password validation functions from `src/api/getData.php` and `src/api/getFAQs.php` into a new utility file `src/utils/validation.php` to eliminate redundancy.

## File and Directory Structure Adjustments
- The current directory structure does not fully align with the specified structure in 'README.md':
  - The `src/api` directory contains `getData.php`, but it should also include `getFAQs.php`, `registerUser.php`, and `loginUser.php` as per the expected structure.
  - The `src/partials` directory is missing the `header.php` file.
  - The `src/utils` directory is missing the `websocket-server.php` file.

## Gaps to Feature Completeness
1. **Feature: User Registration**
   - **Status:** Complete
   - **Missing Elements:** Confirmation email functionality is not implemented. This is necessary to verify user email addresses and enhance security.

2. **Feature: User Login**
   - **Status:** Complete
   - **Missing Elements:** User session management is not fully implemented. This is required to maintain user login state across different pages.

3. **Feature: Search Grants**
   - **Status:** Complete
   - **Missing Elements:** No pagination implemented for search results. This is needed to improve user experience when dealing with large datasets.

4. **Feature: Save Search Results**
   - **Status:** Complete
   - **Missing Elements:** No user feedback mechanism after saving searches. Users should be informed that their searches have been saved successfully.

5. **Feature: Access Educational Resources**
   - **Status:** Complete
   - **Missing Elements:** No tracking of user interactions with resources. This data could be useful for improving the resource offerings.

