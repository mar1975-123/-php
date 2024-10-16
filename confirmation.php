<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $patientName = htmlspecialchars($_POST['patient_name']);
    $doctorName = htmlspecialchars($_POST['doctor_name']);
    $departmentName = htmlspecialchars($_POST['department_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $symptoms = htmlspecialchars($_POST['symptoms']);
    $appointmentDate = htmlspecialchars($_POST['appointment_date']);
} else {
    // Redirect to form page if accessed directly
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your CSS file here -->
</head>
<body>

<div class="confirmation_section">
    <h1>Your Appointment is Confirmed!</h1>
    <p>Thank you for booking an appointment. Here are the details:</p>

    <ul>
        <li><strong>Patient Name:</strong> <?php echo $patientName; ?></li>
        <li><strong>Doctor's Name:</strong> <?php echo $doctorName; ?></li>
        <li><strong>Department:</strong> <?php echo $departmentName; ?></li>
        <li><strong>Phone Number:</strong> <?php echo $phone; ?></li>
        <li><strong>Symptoms:</strong> <?php echo $symptoms; ?></li>
        <li><strong>Appointment Date:</strong> <?php echo $appointmentDate; ?></li>
    </ul>

    <p>We will contact you shortly to confirm the details. Thank you!</p>
</div>

</body>
</html>


