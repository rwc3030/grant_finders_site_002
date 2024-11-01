<?php
require_once '../utils/validation.php';

function getFAQs() {
    // Logic to retrieve FAQs from the database
    // This is a placeholder for actual database retrieval logic
    return [
        ["question" => "What is a grant?", "answer" => "A grant is a financial award given by an entity."],
        ["question" => "How do I apply for a grant?", "answer" => "You can apply by following the guidelines provided by the grant issuer."]
    ];
}

// Example usage
$faqs = getFAQs();
foreach ($faqs as $faq) {
    echo $faq['question'] . ": " . $faq['answer'] . "<br>";
}
