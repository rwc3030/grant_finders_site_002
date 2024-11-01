# Database Entity Relationship Diagram (ERD)

```mermaid
erDiagram
    USER {
        int id PK
        string email
        string password
        string created_at
        string updated_at
    }

    GRANT {
        int id PK
        string title
        string description
        string location
        float funding_amount
        string eligibility
        string created_at
        string updated_at
    }

    SEARCH_RESULT {
        int id PK
        int user_id FK
        int grant_id FK
        string created_at
    }

    FAQ {
        int id PK
        string question
        string answer
        string created_at
        string updated_at
    }

    USER ||--o{ SEARCH_RESULT : has
    GRANT ||--o{ SEARCH_RESULT : includes
    USER ||--o{ FAQ : asks
