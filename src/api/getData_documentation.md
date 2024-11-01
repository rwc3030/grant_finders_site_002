# API Endpoint Documentation: getData.php

## Endpoint
`GET /api/getData.php?query={search_term}`

## Description
This endpoint retrieves grant data based on the search term provided by the user. It returns a standard JSON response format.

## Query Parameters
- `query` (string): The search term to filter grants by title.

## Response Format
The response will be in JSON format with the following structure:

### Success Response
```json
{
    "status": "success",
    "message": "Data fetched successfully.",
    "data": [
        {
            "grant_id": 1,
            "title": "Grant Title 1",
            "description": "Description of Grant 1",
            "funding_amount": 10000.00,
            "eligibility_criteria": "Eligibility criteria for Grant 1",
            "location": "Location of Grant 1",
            "created_at": "2023-01-01 00:00:00"
        },
        ...
    ]
}
```

### Error Responses
1. **Invalid Input**
```json
{
    "status": "error",
    "message": "Invalid input: Input cannot be empty.",
    "data": null
}
```

2. **Invalid Request Method**
```json
{
    "status": "error",
    "message": "Invalid request method.",
    "data": null
}
```

## Security Considerations
- Input is sanitized to prevent SQL injection and other attacks.
- Always use prepared statements for database queries to ensure data integrity.
