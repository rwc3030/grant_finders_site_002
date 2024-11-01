# Development Progress Checklist

## Milestone 1: Initial Setup

### Epic 3: Resource Center
- **Feature 1: Access Educational Resources**
  - [x] **User Story 1:** As a user, I want to access guides on how to apply for grants so that I can improve my application skills.
    - **Acceptance Criteria:**
      - [x] Users can navigate to the Resource Center from the main menu.
      - [x] Users can view a list of available guides and resources.
      - [x] Users can download or view resources in a readable format.
    - **Pending Issues:**
      - All issues addressed and functionality implemented.

### Epic 2: User Account Management
- **Feature 1: User Login**
  - [ ] **User Story 1:** As a registered user, I want to log in to my account so that I can access my saved searches.
    - **Acceptance Criteria:**
      1. Users can log in using their email and password.
      2. Users receive an error message for incorrect credentials.
      3. Users are redirected to their dashboard upon successful login.
    - **Pending Issues:**
      - No validation for email format during login.
      - Password strength requirements are not enforced during login.
      - No feedback provided to users if login fails due to server issues.
      - Potential for SQL injection if user input is not properly sanitized.

### Project Status
- **Current Task:** User Login is now in progress.

### Testing Insights
- **User Registration Feature:**
  - **Issue 1:** No validation for email format during registration.
  - **Issue 2:** Password strength requirements are not enforced.
  - **Issue 3:** No feedback provided to users if registration fails.
  - **Issue 4:** Confirmation email may not be sent if the email service is down.
