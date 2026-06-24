<?php
// Receive form data
$fname = isset($_POST['fname']) ? trim($_POST['fname']) : '';
$lname = isset($_POST['lname']) ? trim($_POST['lname']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validate required fields
if (empty($fname) || empty($lname) || empty($email)) {
    echo json_encode([
        'success' => false,
        'message' => 'Please fill in all required fields.'
    ]);
    exit;
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'success' => false,
        'message' => 'Please enter a valid email address.'
    ]);
    exit;
}

// Recipient email
$recipient = 'xtremestallbuild@gmail.com';

// Email subject
$subject = 'New Inquiry from ' . htmlspecialchars($fname . ' ' . $lname);

// Email body
$body = "You have received a new inquiry from the website contact form.\n\n";
$body .= "------- INQUIRY DETAILS -------\n\n";
$body .= "First Name: " . htmlspecialchars($fname) . "\n";
$body .= "Last Name: " . htmlspecialchars($lname) . "\n";
$body .= "Email: " . htmlspecialchars($email) . "\n";
$body .= "Phone: " . (empty($phone) ? 'Not provided' : htmlspecialchars($phone)) . "\n";
$body .= "\nMessage:\n";
$body .= htmlspecialchars($message) . "\n\n";
$body .= "------- END OF INQUIRY -------\n\n";
$body .= "This is an automated message from your website contact form.\n";
$body .= "Date: " . date('Y-m-d H:i:s') . "\n";

// Email headers
$headers = "From: " . htmlspecialchars($email) . "\r\n";
$headers .= "Reply-To: " . htmlspecialchars($email) . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
$mail_sent = mail($recipient, $subject, $body, $headers);

if ($mail_sent) {
    // Optional: Send confirmation email to user
    $user_subject = 'Thank you for your inquiry - Xtreme Stall Build';
    $user_body = "Dear " . htmlspecialchars($fname) . ",\n\n";
    $user_body .= "Thank you for submitting your inquiry to Xtreme Stall Build.\n\n";
    $user_body .= "We have received your message and will get back to you as soon as possible.\n\n";
    $user_body .= "Best regards,\n";
    $user_body .= "Xtreme Stall Build Team\n";
    $user_body .= "Email: xtremestallbuild@gmail.com\n";
    
    $user_headers = "From: xtremestallbuild@gmail.com\r\n";
    $user_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    mail($email, $user_subject, $user_body, $user_headers);
    
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for your inquiry! We will contact you soon.'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Failed to send inquiry. Please try again later.'
    ]);
}
?>
