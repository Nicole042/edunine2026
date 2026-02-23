<?php
$title = "EDUNINE 2026 Cultural Activity";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f5f7fa;
            color: #333;
        }
        header {
            background: linear-gradient(135deg, #8B0000, #C0392B);
            color: white;
            padding: 40px 20px;
            text-align: center;
        }
        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }
        h2 {
            color: #C0392B;
            margin-top: 30px;
        }
        .card {
            background: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        ul {
            padding-left: 20px;
        }
        .highlight {
            background: #ffe6e6;
            padding: 10px;
            border-left: 5px solid #C0392B;
            border-radius: 5px;
        }
        .button {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 20px;
            background-color: #C0392B;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #222;
            color: white;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <h1>Exploring Mexico City</h1>
    <p><?php echo $title; ?></p>
</header>

<div class="container">

    <div class="card">
        <p>
            We are pleased to invite EDUNINE 2026 participants to a special pre-conference cultural experience in the heart of Mexico City, combining history, archaeology, and traditional Mexican cuisine.
        </p>
        <p>
            The activity begins with a cultural walk around the Zócalo, followed by a visit to the Templo Mayor Museum and its archaeological zone. Participants may also join an optional lunch at El Arroyo Restaurant, featuring traditional cuisine and live mariachi.
        </p>
    </div>

    <div class="card">
        <h2>Schedule & Logistics</h2>
        <ul>
            <li><strong>Departure Point:</strong> Tecnológico de Monterrey, Mexico City Campus</li>
            <li><strong>Bus Departure:</strong> 9:00 AM</li>
            <li><strong>Travel Time:</strong> 60–80 minutes</li>
        </ul>

        <h3>Zócalo & Museum Visit</h3>
        <ul>
            <li>Zócalo Walk: 10:30 – 11:30 AM</li>
            <li>Museum Visit: 11:30 AM – 12:30 PM</li>
            <li>Admission Fee: 100 MXN (~USD 6)</li>
        </ul>

        <div class="highlight">
            Dress comfortably and wear athletic shoes (outdoor activity).
        </div>
    </div>

    <div class="card">
        <h2>Return & Lunch</h2>
        <ul>
            <li>Bus Departure from Museum: 1:00 PM</li>
            <li>Destination: El Arroyo Restaurant</li>
            <li>Lunch: Optional (at your own expense)</li>
        </ul>
    </div>

    <div class="card">
        <h2>Registration</h2>
        <p>
            Advance registration is required to ensure proper logistics and transportation.
        </p>

        <!-- Example of dynamic PHP variable -->
        <?php $registration_link = "#"; ?>
        <a href="<?php echo $registration_link; ?>" class="button">Register Here</a>

        <p><em>Spaces are limited and assigned on a first-come, first-served basis.</em></p>
    </div>

</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> EDUNINE. All rights reserved.</p>
</footer>

</body>
</html>