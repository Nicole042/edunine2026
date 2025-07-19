 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content ="The IEEE World Engineering Education Conference - EDUNINE is the flagship annual conference for the IEEE Region 9 (Latin America and the Caribbean) of the IEEE Education Society. The EDUNINE international conference on Education in Engineering, Technology, Computer Science, and related topics, held every year in March in a different Latin American city,  is organized by  COPEC - Science and Education Research Organization. The conference program covers the main issues present in education today.">
        <meta name ="Keywords" content="IEEE, COPEC, Education in Engineering, Technology, and Computer Science, STEM, Teaching, Learning, Higher Education, University Education, Educación en Ingeniería, Tecnología e Informática, Enseñanza, Aprendizaje, Educacion Superior, Educación Universitaria, Educação em Engenharia, Tecnologia e Informática, Ensino, Aprendizagem, Ensino Superior, Educação Universitária, Latin America and the Caribbean, Latinoamérica y el Caribe, América Latina e Caribe, Conference, Congress, Conferencia, Congreso, Conferência, Congresso">
        <meta name="author" content="COPEC">
        <meta name="copyright" content="COPEC">
        <title> EDUNINE2026 English Website: Hotels and Transportation </title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="../css/EDU9Conferences.css" rel="stylesheet"> 
        <link href="../css/edu9parts.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->
        <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>

    </head>
    <body onload = "jump()">
        <?php
        if (empty($_GET["id"])) {
            $id = "top";
        } else {
            $id = $_GET["id"];
        }
        ?>   
        <script>
            function jump() {
                id = "<?php echo $id ?>";
                const element = document.getElementById(id);
                element.scrollIntoView({block: "start"});
            }
        </script> 
        <button onclick="topFunction()" id="myTopBtn" title="Back to top">Top</button>
        <div> 
            <!-- Navigation bar  -->
            <?php include "edu9header.html" ?> 
        </div>
        <div class="#main"></div>

        <section id="top" class="inicial">
            <div class="container-fluid align-content-start py-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">About</a></li>
                    <li>Hotels_and_Tranportation</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  py-5">

                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/place.jpg"  alt="Hotels and Transportation Image">
                            </div>
                            <h2 class="display-6 fw-bold">Hotels and Transportation</h2>

                            <p class="fs-5 mb-4">Welcome to the <b>EDUNINE2026 Hotels, Transportation, and Tourism Guide</b>! This page is your one-stop resource for planning your trip to the <b> 2026 IEEE X World Engineering Education Conference (EDUNINE2026)</b> in beautiful <b>Mexico City, Mexico</b>. Whether you're arriving by plane, or another means, we have you covered. This page will be updated after the notification of peer-review results, providing detailed information on accommodations, airport, must-see attractions, and exciting day trips beyond the city. </p>
                            <p class="fs-5 my-4">Stay tuned to ensure a smooth and enjoyable journey to <b>EDUNINE2026</b> and beyond!</p> 
                        </div>
                    </div>    
                </div>
            </div>
            <div class="container-fluid py-5">
                <!-- sequence section -->
                <div class="container-fluid px-4 py-5">
                    <h2 class="pb-2 border-bottom display-6 fw-bold">EDUNINE2026 Travel Guide: Hotels, Transportation, and Tourism</h2>
                    <p>Welcome to the <b>EDUNINE2026 Travel Guide!</b> This page is your comprehensive resource for planning your trip to the <b> 2026 IEEE X World Engineering Education Conference (EDUNINE2026)</b> in beautiful <b>Mexico City, Mexico</b>. Whether you're arriving by plane or another means, we've got you covered. </p> 
                

                    <ul>
                        <li><b>Accommodation:</b> Explore a range of hotels conveniently located near the pick up point of the transportation provided by Tecnológico de Monterrey to the conference venue in the Ciudad de México Campus.
                            

                                </li><li><b>Airport Transfers:</b> Learn about transportation options from Mexico City International Airport Benito Juárez to your hotel.

                            </li><li><b>Getting Around Mexico City:</b> Discover how to navigate the city with ease using buses, taxis, rideshare services, bicycles, and walking routes.

                            </li><li><b>Mexico Must-Sees:</b> Dive into the vibrant culture and history of Mexico City with recommendations for top attractions and experiences.

                            </li><li><b>Beyond Mexico City:</b> For day trips outside Mexico City, consider visiting Teotihuacan for its ancient pyramids, Tepoztlán for its charming colonial architecture and natural beauty, or Puebla for its rich history, culture, and delicious cuisine. Other popular options include Xochimilco's canals, the Basilica of Our Lady of Guadalupe, and the Monarch Butterfly Sanctuary (seasonal).
                        </li> </ul>
                    <p class="fs-5 mx-4">Keep an eye on this page for detailed updates on each of these topics to ensure a seamless and memorable experience at EDUNINE2026 and during your stay in Mexico City!</p>                                       
                </div>
            </div>
        </section>
         <!-- Footer section -->
        <div class ="container-fluid">
            <!-- footer  -->
            <?php include "../includesHtml/final.html" ?> 
        </div>
        <script src ="../js/readmorereadless.js"></script> 
        <script src ="../js/backTop.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>                      