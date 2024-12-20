<?php
// Function to process the registration form data
function processRegistration($name, $email, $phone, $dob) {
    // For now, just simulate processing and return a success message
    // This could be extended to store the data in a database, send an email, etc.

    if (empty($name) || empty($email) || empty($phone) || empty($dob)) {
        return "All fields are required!";
    }

    // Simulating data processing
    return "Registration Successful! <br> Name: $name <br> Email: $email <br> Phone: $phone <br> Date of Birth: $dob";
}

// Example usage: You can call this function upon form submission in a PHP script.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    // Call the function and display the result
    echo processRegistration($name, $email, $phone, $dob);
}
?>
