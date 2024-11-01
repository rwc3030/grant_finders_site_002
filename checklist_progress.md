# Development Progress Checklist

## Milestone 1: Initial Setup

### Epic 1: User Account Management
- **Feature 1: User Registration**
  - [x] **User Story 1:** As a new user, I want to create an account so that I can save my searches.
    - **Acceptance Criteria:**
      - [x] Users can enter their email and password to register.
      - [x] Users receive a confirmation email after registration.
      - [x] Users can log in with their credentials after registration.

- **Feature 2: User Login**
  - [x] **User Story 1:** As a registered user, I want to log in to my account so that I can access my saved searches.
    - **Acceptance Criteria:**
      - [x] Users can log in using their email and password.
      - [x] Users receive an error message for incorrect credentials.
      - [x] Users are redirected to their dashboard upon successful login.

### Epic 2: Grant Search Functionality
- **Feature 1: Search Grants**
  - [ ] **User Story 1:** As a user, I want to search for grants based on location so that I can find relevant opportunities.
    - **Acceptance Criteria:**
      - [ ] Users can enter a location in the search bar.
      - [ ] The system displays a list of grants matching the location.
      - [ ] Users can filter results by funding amount and eligibility.

- **Feature 2: Save Search Results**
  - [ ] **User Story 1:** As a user, I want to save my search results so that I can revisit them later.
    - **Acceptance Criteria:**
      - [ ] Users can save search results to their account.
      - [ ] Users can view saved searches on their dashboard.
      - [ ] Users can delete saved searches if desired.

### Epic 3: Resource Center
- **Feature 1: Access Educational Resources**
  - [ ] **User Story 1:** As a user, I want to access guides on how to apply for grants so that I can improve my application skills.
    - **Acceptance Criteria:**
      - [ ] Users can navigate to the Resource Center from the main menu.
      - [ ] Users can view a list of available guides and resources.
      - [ ] Users can download or view resources in a readable format.

- **Feature 2: FAQs Section**
  - [ ] **User Story 1:** As a user, I want to read FAQs so that I can find quick answers to common questions.
    - **Acceptance Criteria:**
      - [ ] Users can access the FAQs section from the main menu.
      - [ ] Users can search for specific questions within the FAQs.
      - [ ] Users can submit a question if it is not answered in the FAQs.

### Epic 4: Database Design
- **Feature 1: Database Structure**
  - [x] **User Story 1:** As a developer, I want to design the database structure to support user accounts, grants, and search results.
    - **Acceptance Criteria:**
      - [x] Database schema is defined.
      - [x] ERD is created and documented.

### Project Structure Documentation
The following directory structure has been created:

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
