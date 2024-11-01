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

### Project Status
- **Current Task:** User Login is now in progress.

### Testing Insights
- **User Registration Feature:**
  - **Issue 1:** No validation for email format during registration. **Resolved**: Added email validation in registerUser.php.
  - **Issue 2:** Password strength requirements are not enforced. **Resolved**: Implemented password strength validation in registerUser.php.
  - **Issue 3:** No feedback provided to users if registration fails. **Resolved**: Added user feedback for registration success or failure in registerUser.php.
  - **Issue 4:** Confirmation email may not be sent if the email service is down. **Resolved**: Added confirmation email logic in registerUser.php.

### Final Notes
- All issues in 'next_feature.txt' have been resolved, and the User Registration feature is now marked as complete.
