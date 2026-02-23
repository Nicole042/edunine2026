<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description"
        content="The IEEE World Engineering Education Conference - EDUNINE is the flagship annual conference for the IEEE Region 9 (Latin America and the Caribbean) of the IEEE Education Society. The EDUNINE international conference on Education in Engineering, Technology, Computer Science, and related topics, held every year in March in a different Latin American city,  is organized by  COPEC - Science and Education Research Organization. The conference program covers the main issues present in education today.">
    <meta name="Keywords"
        content="IEEE, COPEC, Education in Engineering, Technology, and Computer Science, STEM, Teaching, Learning, Higher Education, University Education, Educación en Ingeniería, Tecnología e Informática, Enseñanza, Aprendizaje, Educacion Superior, Educación Universitaria, Educação em Engenharia, Tecnologia e Informática, Ensino, Aprendizagem, Ensino Superior, Educação Universitária, Latin America and the Caribbean, Latinoamérica y el Caribe, América Latina e Caribe, Conference, Congress, Conferencia, Congreso, Conferência, Congresso">
    <meta name="author" content="COPEC">
    <meta name="copyright" content="COPEC">
    <title> EDUNINE2026 English Website: Home </title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../css/EDU9Conferences.css" rel="stylesheet">
    <link href="../css/edu9parts.css" rel="stylesheet">
    <link href="../css/preConferenceTour.css" rel="stylesheet">

    <!--SLICK CAROUSEL-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

</head>

<body onload="jump()">
    <?php
    if (empty($_GET["id"])) {
        $id = "top";
    } else {
        $id = $_GET["id"];
    }
    ?>

    <script>
        function jump() {
            const id = "<?php echo $id; ?>";
            const element = document.getElementById(id);

            if (element) {
                element.scrollIntoView({ behavior: "smooth", block: "start" });
            } else {
                console.warn(`Element with id "${id}" not found.`);
            }
        }
    </script>

    <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>

    <div>
        <!-- Navigation bar  -->
        <?php include "newHeader.html" ?>
    </div>

<main class="px-4 preconf-tour">
<?php
$title = "EDUNINE 2026 Cultural Activity";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>

<br><br><br><br>
<header>
    <h1>Exploring Mexico City</h1>
    <p class="tour-title"><?php echo $title; ?></p>
</header>

<div class="tour-container">

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
        <?php $registration_link = "https://forms.office.com/pages/responsepage.aspx?id=pj5axnwPC0CJNFptwXBWRR_MPTe18zhBqgP9IvpOUzxURTNXSDBFRTlKRTg0MTJRNkJMT1hZSUFZVC4u&route=shorturl"; ?>
        <a href="<?php echo $registration_link; ?>" class="tour-button" target="_blank">Register Here</a>

        <p><em>Spaces are limited and assigned on a first-come, first-served basis.</em></p>
    </div>

</div>

<!-- Footer section -->
    <section id="organizers">
        <div class="container-fluid">
            <!-- Footer  -->
            <?php include "../includesHtml/final.html" ?>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <!--SLICK CAROUSEL-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/slick-carousel-config.js"></script>
    <script src="../js/backTop.js"></script>
</main>
</body>

</html>