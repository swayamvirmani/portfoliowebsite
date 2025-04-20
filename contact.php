<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents("php://input");
    $data = json_decode($input, true);

    // Sanitize and validate data
    $name = trim($data['name'] ?? '');
    $email = trim($data['email'] ?? '');
    $message = trim($data['message'] ?? '');

    if ($name && $email && $message) {
        $logEntry = "Name: $name\nEmail: $email\nMessage: $message\nDate: " . date("Y-m-d H:i:s") . "\n---\n";

        // Write to log file
        if (file_put_contents("messages.txt", $logEntry, FILE_APPEND | LOCK_EX)) {
            echo json_encode(['success' => true, 'message' => 'Message logged successfully']);
        } else {
            echo json_encode(['success' => false, 'error' => 'Could not write to log file']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'All fields are required']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Only POST method allowed']);
}
?>
