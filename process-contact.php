
<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Here you would typically send an email or store in database
    // For now, we'll just return a success message
    
    echo json_encode([
        'status' => 'success',
        'message' => 'Thank you for your message. We will get back to you soon!'
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
}
?>
