<?php
require_once '../utils/validation.php';

function getFAQs($email) {
    if (!validateEmail($email)) {
        return "Invalid email format.";
    }
    // Logic to retrieve FAQs...
    return "FAQs retrieved successfully.";
}
