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
        <link href="../css/styleplace.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>

        <!--SLICK CAROUSEL-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <!--END  SLICK CAROUSEL -->

    </head>
    <body onload = "jump()" style="padding-top: 120px;">
        <div class="page-container">
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
            <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>
            <div> 
                <!-- Navigation bar  -->
                <?php include "edu9header.html" ?> 
            </div>
            <div class="#main"></div>

            <div class="container">
                <ul class="d-flex justify-content-end list-unstyled mb-0 flex-wrap">
                    <li class="nav-item mx-1">
                        <a class="nav-link px-2 py-1 btn btn-sm" href="index.php">About</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link px-2 py-1 btn btn-sm" href="#hotels-transportation">Hotels</a>
                    </li>
                </ul>
            </div>

            <div class="container pb-2 bg-white">
                <div class="row g-5">
                    <div class="col text-sm-left">
                        <div class="clearfix">
                            <h2 class="display-6 fw-bold">Hotels and Transportation</h2>
                            <p class="fs-5 mb-4">Welcome to the <b>EDUNINE2026 Hotels, Transportation, and Tourism Guide</b>! This page is your one-stop resource for planning your trip to the <b> 2026 IEEE X World Engineering Education Conference (EDUNINE2026)</b> in beautiful <b>Mexico City, Mexico</b>. Whether you're arriving by plane, or another means, we have you covered. This page will be updated after the notification of peer-review results, providing detailed information on accommodations, airport, must-see attractions, and exciting day trips beyond the city.</p>
                        </div>
                    </div>    
                </div>
            </div>

                <div class="container py-1">
                    <div class="text-center">
                        <img src="../images/city/hotel.jpeg" 
                            class="img-fluid object-fit-cover rounded" 
                            alt="Hotel">
                    </div>
                </div>

                <div class="container-fluid py-5">
                    <div class="container">
                        <h2 class="text-center mb-5">Top-Rated Tourism Guide</h2>
                        
                        <div class="carousel-container">
                            <div id="mexicoTourismCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                                
                                <div class="carousel-inner">
                                    <!-- Slide 1 -->
                                    <div class="carousel-item active">
                                        <div class="cards-container">
                                            <div class="tourism-card">
                                                <img src="../images/city/palacio-bellas-artes.jpeg" alt="Palacio de Bellas Artes">
                                                <div>
                                                    <h6>Palacio de Bellas Artes</h6>
                                                    <div class="rating">★ 4.8 (184k)</div>
                                                    <div class="category">Cultural center</div>
                                                </div>
                                            </div>
                                            
                                            <div class="tourism-card">
                                                <img src="../images/city/frida-khalo.jpeg" alt="Museo Frida Kahlo">
                                                <div>
                                                    <h6>Museo Frida Kahlo</h6>
                                                    <div class="rating">★ 4.5 (42k)</div>
                                                    <div class="category">Art Museum</div>
                                                </div>
                                            </div>
                                            
                                            <div class="tourism-card">
                                                <img src="../images/city/chapultepec.jpeg" alt="Museo Nacional de Historia">
                                                <div>
                                                    <h6>Museo Nacional de Historia Castillo de Chapultepec</h6>
                                                    <div class="rating">★ 4.8 (83k)</div>
                                                    <div class="category">Castle</div>
                                                </div>
                                            </div>
                                            
                                            <div class="tourism-card">
                                                <img src="../images/city/museo-antropologia-mexico.jpg" alt="Museo Nacional de Antropología">
                                                <div>
                                                    <h6>Museo Nacional de Antropología</h6>
                                                    <div class="rating">★ 4.8 (84k)</div>
                                                    <div class="category">Archaeological Museum</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Slide 2 -->
                                    <div class="carousel-item">
                                        <div class="cards-container">
                                            <div class="tourism-card">
                                                <img src="../images/city/plaza.jpeg" alt="Plaza de la Constitución">
                                                <div>
                                                    <h6>Plaza de la Constitución</h6>
                                                    <div class="rating">★ 4.7 (95k)</div>
                                                    <div class="category">Historical Plaza</div>
                                                </div>
                                            </div>
                                            
                                            <div class="tourism-card">
                                                <img src="../images/city/eltemplomayor.jpg" alt="Museo del Templo Mayor">
                                                <div>
                                                    <h6>Museo del Templo Mayor</h6>
                                                    <div class="rating">★ 4.6 (67k)</div>
                                                    <div class="category">Archaeological Site</div>
                                                </div>
                                            </div>
                                            
                                            <div class="tourism-card">
                                                <img src="../images/city/museo-sumaya.jpeg" alt="Museo Soumaya">
                                                <div>
                                                    <h6>Museo Soumaya</h6>
                                                    <div class="rating">★ 4.4 (78k)</div>
                                                    <div class="category">Art Museum</div>
                                                </div>
                                            </div>
                                            
                                            <div class="tourism-card">
                                                <img src="../images/city/catedral.jpeg" alt="Catedral Metropolitana">
                                                <div>
                                                    <h6>Catedral Metropolitana de la Ciudad de México</h6>
                                                    <div class="rating">★ 4.7 (112k)</div>
                                                    <div class="category">Cathedral</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Slide 3 -->
                                    <div class="carousel-item">
                                        <div class="cards-container">
                                            <div class="tourism-card">
                                                <img src="../images/city/teotihuacan.jpg" alt="Teotihuacán">
                                                <div>
                                                    <h6>Teotihuacán</h6>
                                                    <div class="rating">★ 4.9 (156k)</div>
                                                    <div class="category">Archaeological Zone</div>
                                                </div>
                                            </div>
                                            
                                            <div class="tourism-card">
                                                <img src="../images/city/xo.jpeg" alt="Xochimilco">
                                                <div>
                                                    <h6>Xochimilco</h6>
                                                    <div class="rating">★ 4.6 (89k)</div>
                                                    <div class="category">Canals and Trajineras</div>
                                                </div>
                                            </div>
                                            
                                            <div class="tourism-card">
                                                <img src="../images/city/basilica.jpg" alt="Basílica de Guadalupe">
                                                <div>
                                                    <h6>Basílica de Nuestra Señora de Guadalupe</h6>
                                                    <div class="rating">★ 4.8 (134k)</div>
                                                    <div class="category">Religious Sanctuary</div>
                                                </div>
                                            </div>
                                            
                                            <div class="tourism-card">
                                                <img src="../images/city/centro.jpg" alt="Centro Histórico">
                                                <div>
                                                    <h6>Centro Histórico de la Ciudad de México</h6>
                                                    <div class="rating">★ 4.5 (203k)</div>
                                                    <div class="category">World Heritage</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="carousel-control-prev" type="button" data-bs-target="#mexicoTourismCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Anterior</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#mexicoTourismCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Siguiente</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <div class="btn-group" role="group">
                        <a href="https://www.tripadvisor.es/Attractions-g150800-Activities-Mexico_City_Central_Mexico_and_Gulf_Coast.html" 
                        class="btn btn-primary btn-lg text-white mx-2" 
                        target="_blank">
                        See More Options
                        </a>
                        <a href="https://www.booking.com/hotel/mx/gran-ciudad-de-mexico.es.html" 
                        class="btn btn-primary btn-lg text-white mx-2" 
                        target="_blank">
                        View Hotels
                        </a>
                    </div>
                </div>

                
            </section>

            <script src="../js/placeSection.js"></script>

            <section id="organizers">
                <!-- Footer section -->
                <div class ="container-fluid">
                    <!-- footer  -->
                    <?php include "../includesHtml/final.html" ?> 
                </div>
            </section>



            <!-- Scripts -->
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

            <script src ="../js/readmorereadless.js"></script> 
            <script src ="../js/backTop.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

            <!-- START SLICK CAROUSEL-->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script
            src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

            <script src="../js/slick-carousel-config.js"></script>
            <!-- END  SLICK CAROUSEL-->   
        
        </div>    
    </body>
</html>                      