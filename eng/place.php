<?php
// DATA STRUCTURE
// Grouped by Hotel to handle multiple rate options per hotel

$main_hotel = [
    'id' => 'city_express',
    'name' => 'City Express Plus by Marriott Ciudad de México Periférico Sur Tlalpan',
    'address' => 'Anillo Perif. Col, Coapa, Guadalupe #4860, Tlalpan, 14388 CDMX',
    'contact_name' => 'Ventas', // La imagen no especifica nombre personal, solo departamento
    'contact_email' => 'cppst.ventas1@norte19.com',
    'booking_info' => 'Tel: 55 54836700 - Ext.2 | Email: cppst.ventas1@norte19.com / cppst.ventas@norte19.com',
    'web_url' => '',
    'options' => [
        [
            'desc' => 'Standard Rate',
            'single' => 1554.00, // Actualizado según imagen ($1,554)
            'double' => 1769.00, // Actualizado según imagen ($1,769)
            'taxes_included' => true, 
            'breakfast' => true,
            'code' => 'EDUNINE2026'
        ]
    ]
];

$other_hotels = [
    [
        'name' => 'ONE Ciudad de México Periférico Sur',
        'address' => 'Periferico Sur 5530 Colonia, El Caracol, Coyoacán, 04710 CDMX',
        'contact_info' => 'Central de Reservaciones',
        'phones' => 'CDMX: 55 5326 69 00 | Interior: 800 50 450 00',
        'booking_url' => 'https://www.corpo-rate.com/login',
        'options' => [
            [
                'desc' => 'Standard Rate',
                'single' => 1100.00,
                'double' => 1100.00, // Asumido igual a sencilla ya que no se especifica diferencia
                'taxes_included' => false, // "Más impuestos"
                'breakfast' => true,
                'code' => 'EDUNINE 2026 (GROUP ID: G1V7UU@OGS)'
            ]
        ]
    ],
    [
        'name' => 'Fiesta Inn Periférico Sur',
        'address' => 'Periferico Sur 5530, Pedregal de Carrasco, Coyoacán, 04700 CDMX',
        'contact_info' => 'Central de Reservaciones',
        'phones' => 'CDMX: 55 5326 69 00 | Interior: 800 50 450 00',
        'booking_url' => 'https://www.corpo-rate.com/login',
        'options' => [
            [
                'desc' => 'Opción A (Sin Desayuno)',
                'single' => 1500.00,
                'double' => 1500.00,
                'taxes_included' => false, // "Más impuestos"
                'breakfast' => false,
                'code' => 'EDUNINE 2026 (GROUP ID: G1V7UO@SUR)'
            ],
            [
                'desc' => 'Opción B (Con Desayuno)',
                'single' => 2296.70,
                'double' => 2760.90,
                'taxes_included' => true, // "Ya con impuestos"
                'breakfast' => true,
                'code' => 'EDUNINE 2026 (GROUP ID: G1VFQE@SUR)'
            ]
        ]
    ],
    [
        'name' => 'Camino Real Pedregal',
        'address' => 'Periferico Sur 3647, Héroes de Padierna, 10700 CDMX',
        'contact_info' => 'Reservas (reservas.mex@caminoreal.com.mx)',
        'phones' => 'Lada sin costo: 01 800 90 123 00 | Directos: 52 27 72 00 / 52 63 88 99',
        'booking_url' => 'https://bit.ly/48WCBK5',
        'options' => [
            [
                'desc' => 'Room Only',
                'single' => 2032.00, // Actualizado a $2,032
                'double' => 2032.00,
                'taxes_included' => true, // "Ya con impuestos"
                'breakfast' => false,
                'code' => 'EDUNINE'
            ],
            [
                'desc' => 'Breakfast Included',
                'single' => 2563.00, // Actualizado a $2,563
                'double' => 3064.00, // Actualizado a $3,064
                'taxes_included' => true,
                'breakfast' => true,
                'code' => 'EDUNINE'
            ]
        ]
    ]
];

function formatMoney($amount)
{
    if ($amount === null || $amount == 0)
        return '-';
    return '$' . number_format($amount, 2) . ' MXN';
}
?>

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
    <title> EDUNINE2026 English Website: Hotels and Transportation </title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="../css/EDU9Conferences.css" rel="stylesheet">
    <link href="../css/edu9parts.css" rel="stylesheet">
    <link href="../css/styleplace.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>

    <!--SLICK CAROUSEL-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!--END  SLICK CAROUSEL -->

</head>

<body onload="jump()" style="padding-top: 120px;">
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
                element.scrollIntoView({ block: "start" });
            }
        </script>
        <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>
        <div>
            <!-- Navigation bar  -->
            <?php include "newHeader.html" ?>
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
                        <p class="fs-5 mb-4">Welcome to the <b>EDUNINE2026 Hotels, Transportation, and Tourism
                                Guide</b>! This page is your one-stop resource for planning your trip to the <b> 2026
                                IEEE X World Engineering Education Conference (EDUNINE2026)</b> in beautiful <b>Mexico
                                City, Mexico</b>. Whether you're arriving by plane, or another means, we have you
                            covered. This page will be updated after the notification of peer-review results, providing
                            detailed information on accommodations, airport, must-see attractions, and exciting day
                            trips beyond the city.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light">

            <div class="hero-header text-center">
                <div class="container">
                    <p class="fs-4">Official Accommodation Guide</p>
                    <p><i class="bi bi-calendar3"></i> March 06 - March 12, 2026</p>
                </div>
            </div>

            <div class="container pb-5">

                <div class="row justify-content-center mb-5">
                    <div class="col-lg-10">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-star-fill text-warning me-2 fs-4"></i>
                            <h3 class="mb-0 text-primary">Main Venue / Recommended Hotel</h3>
                        </div>

                        <div class="card main-hotel-card bg-white">
                            <div class="card-header bg-primary text-white p-3">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <h2 class="h4 m-0"><?php echo $main_hotel['name']; ?></h2>
                                    <span class="badge bg-light text-primary mt-2 mt-md-0">Primary Option</span>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-md-5 mb-4 mb-md-0">
                                        <p class="text-muted"><i class="bi bi-geo-alt-fill text-danger"></i>
                                            <?php echo $main_hotel['address']; ?></p>

                                        <div class="mb-3">
                                            <h6 class="fw-bold">Contact for Booking:</h6>
                                            <p class="mb-1"><?php echo $main_hotel['contact_name']; ?></p>
                                            <a href="mailto:<?php echo $main_hotel['contact_email']; ?>"
                                                class="text-decoration-none"><?php echo $main_hotel['contact_email']; ?></a>
                                        </div>

                                        <div class="alert alert-secondary border-0 small">
                                            <i class="bi bi-info-circle-fill"></i>
                                            <?php echo $main_hotel['booking_info']; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-7 border-start">
                                        <h5 class="text-success mb-3">Special Rates</h5>
                                        <?php foreach ($main_hotel['options'] as $opt): ?>
                                            <div class="p-3 bg-light rounded border mb-3">
                                                <div class="row text-center">
                                                    <div class="col-6 border-end">
                                                        <small class="text-muted d-block">Single Room</small>
                                                        <span
                                                            class="fw-bold fs-5 text-dark"><?php echo formatMoney($opt['single']); ?></span>
                                                    </div>
                                                    <div class="col-6">
                                                        <small class="text-muted d-block">Double Room</small>
                                                        <span
                                                            class="fw-bold fs-5 text-dark"><?php echo formatMoney($opt['double']); ?></span>
                                                    </div>
                                                </div>
                                                <div class="mt-3 d-flex justify-content-center gap-2 flex-wrap">
                                                    <span
                                                        class="badge <?php echo $opt['taxes_included'] ? 'bg-success' : 'bg-danger'; ?>">
                                                        <?php echo $opt['taxes_included'] ? 'Taxes Included' : '+ Taxes'; ?>
                                                    </span>
                                                    <span
                                                        class="badge <?php echo $opt['breakfast'] ? 'bg-warning text-dark' : 'bg-secondary'; ?>">
                                                        <?php echo $opt['breakfast'] ? 'Breakfast Included' : 'No Breakfast'; ?>
                                                    </span>
                                                </div>
                                                <div class="mt-3 text-center border-top pt-2">
                                                    <small class="text-muted text-uppercase">Booking Code</small>
                                                    <div class="fs-4 fw-bold text-primary user-select-all">
                                                        <?php echo $opt['code']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <!-- OTRAS OPCIONES HOTELES -->
                <h3 class="mb-4 text-secondary">Other Accommodation Options</h3>

                <div class="row">
                    <div class="col-12">

                        <?php foreach ($other_hotels as $hotel): ?>
                            <div class="card mb-5 border-0 shadow-sm">
                                <div class="card-header bg-dark text-white p-3">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <h4 class="m-0"><?php echo $hotel['name']; ?></h4>
                                    </div>
                                    <small class="text-light opacity-75 d-block mt-1"><i class="bi bi-geo-alt"></i>
                                        <?php echo $hotel['address']; ?></small>
                                </div>

                                <div class="card-body p-0">
                                    <?php foreach ($hotel['options'] as $index => $opt): ?>
                                        <div
                                            class="p-4 <?php echo ($index < count($hotel['options']) - 1) ? 'border-bottom' : ''; ?>">
                                            <div class="row align-items-center">

                                                <div class="col-md-4 mb-3 mb-md-0">
                                                    <h5 class="fw-bold text-primary mb-2">
                                                        <?php echo $opt['desc']; ?>
                                                    </h5>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <?php if ($opt['taxes_included']): ?>
                                                            <span class="badge bg-success"><i class="bi bi-check-circle"></i> Taxes
                                                                Included</span>
                                                        <?php else: ?>
                                                            <span class="badge bg-danger"><i class="bi bi-exclamation-circle"></i> +
                                                                Taxes</span>
                                                        <?php endif; ?>

                                                        <?php if ($opt['breakfast']): ?>
                                                            <span class="badge bg-warning text-dark"><i class="bi bi-cup-hot"></i>
                                                                Breakfast Included</span>
                                                        <?php else: ?>
                                                            <span class="badge bg-secondary">No Breakfast</span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-5 mb-3 mb-md-0 border-start border-end">
                                                    <div class="row text-center">
                                                        <div class="col-6">
                                                            <small class="text-muted text-uppercase fw-bold"
                                                                style="font-size: 0.75rem;">Single Room</small>
                                                            <div class="fs-5 fw-bold text-dark mt-1">
                                                                <?php echo formatMoney($opt['single']); ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <small class="text-muted text-uppercase fw-bold"
                                                                style="font-size: 0.75rem;">Double Room</small>
                                                            <div class="fs-5 fw-bold text-dark mt-1">
                                                                <?php echo formatMoney($opt['double']); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 text-center">
                                                    <small class="text-muted">Booking Code:</small>
                                                    <div class="p-2 bg-light border rounded mt-1">
                                                        <code
                                                            class="fs-6 text-primary fw-bold user-select-all"><?php echo $opt['code']; ?></code>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                    <div class="bg-light p-3 border-top">
                                        <div class="row gy-3">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-start">
                                                    <i class="bi bi-person-lines-fill text-secondary fs-5 me-2"></i>
                                                    <div>
                                                        <small class="text-muted fw-bold text-uppercase">Contact
                                                            Person</small>
                                                        <div class="small"><?php echo $hotel['contact_info']; ?></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="d-flex align-items-start">
                                                    <i class="bi bi-telephone text-secondary fs-5 me-2"></i>
                                                    <div>
                                                        <small class="text-muted fw-bold text-uppercase">Phone
                                                            Numbers</small>
                                                        <div class="small text-break"><?php echo $hotel['phones']; ?></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 text-end d-flex align-items-center justify-content-end">
                                                <?php if (!empty($hotel['booking_url'])): ?>
                                                    <a href="<?php echo $hotel['booking_url']; ?>" target="_blank"
                                                        class="btn btn-primary btn-sm w-100">
                                                        Book Online <i class="bi bi-arrow-right"></i>
                                                    </a>
                                                <?php else: ?>
                                                    <button disabled class="btn btn-outline-secondary btn-sm w-100">Contact to
                                                        Book</button>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

                <!-- HOW TO BOOK A ROOM -->
                <div class="row mt-5 mb-4">
                    <div class="col-12 text-center">
                        <a href="../images/city/howToBookEDUNINE2026.pdf" target="_blank"
                            class="btn btn-lg btn-primary">
                            <i class="bi bi-file-pdf-fill me-2"></i>
                            HOW TO BOOK A ROOM
                        </a>
                    </div>
                </div>

            </div>

            <!-- TAXIS -->
            <div class="row mt-5 px-5">
                <div class="col-12">
                    <div class="card bg-info-subtle border-info shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-taxi-front-fill text-info-emphasis fs-3 me-3"></i>
                                <h4 class="text-info-emphasis fw-bold m-0">Transportation Recommendation</h4>
                            </div>
                            <p class="mb-0 fs-5 text-dark">
                                The best way to travel in Mexico City is to use <strong>Uber</strong> or
                                <strong>authorized taxis</strong>.
                                Please avoid hailing taxis directly from the street.
                                All listed hotels offer authorized taxi services and are fully accessible via Uber for
                                safe transportation between the hotel and the Tec campus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid py-5">
                <div class="container">
                    <h2 class="text-center mb-5">Top-Rated Tourism Guide</h2>

                    <div class="carousel-container">
                        <div id="mexicoTourismCarousel" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="5000">

                            <div class="carousel-inner">
                                <!-- Slide 1 -->
                                <div class="carousel-item active">
                                    <div class="cards-container">
                                        <div class="tourism-card">
                                            <img src="../images/city/pexels-rafael-guajardo-194140-604661.jpg"
                                                alt="Palacio de Bellas Artes">
                                            <div>
                                                <h6>Palacio de Bellas Artes</h6>
                                                <div class="rating">★ 4.8 (184k)</div>
                                                <div class="category">Cultural center</div>
                                            </div>
                                        </div>

                                        <div class="tourism-card">
                                            <img src="../images/city/fiesta-mexicana-de-sombrero-colorido-de-alto-angulo.jpg"
                                                alt="Museo Frida Kahlo">
                                            <div>
                                                <h6>Museo Frida Kahlo</h6>
                                                <div class="rating">★ 4.5 (42k)</div>
                                                <div class="category">Art Museum</div>
                                            </div>
                                        </div>

                                        <div class="tourism-card">
                                            <img src="../images/city/toma-aerea-de-la-catedral-de-zacatecas-mexico-bajo-un-cielo-azul-durante-el-dia.jpg"
                                                alt="Museo Nacional de Historia">
                                            <div>
                                                <h6>Museo Nacional de Historia Castillo de Chapultepec</h6>
                                                <div class="rating">★ 4.8 (83k)</div>
                                                <div class="category">Castle</div>
                                            </div>
                                        </div>

                                        <div class="tourism-card">
                                            <img src="../images/city/pexels-israyosoy-24345954.jpg"
                                                alt="Museo Nacional de Antropología">
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
                                            <img src="../images/city/pexels-jimmyelizarraras-20848559.jpg"
                                                alt="Plaza de la Constitución">
                                            <div>
                                                <h6>Plaza de la Constitución</h6>
                                                <div class="rating">★ 4.7 (95k)</div>
                                                <div class="category">Historical Plaza</div>
                                            </div>
                                        </div>

                                        <div class="tourism-card">
                                            <img src="../images/city/mujer-mirando-estatuas.jpg"
                                                alt="Museo del Templo Mayor">
                                            <div>
                                                <h6>Museo del Templo Mayor</h6>
                                                <div class="rating">★ 4.6 (67k)</div>
                                                <div class="category">Archaeological Site</div>
                                            </div>
                                        </div>

                                        <div class="tourism-card">
                                            <img src="../images/city/pexels-scottwebb-137038.jpg" alt="Museo Soumaya">
                                            <div>
                                                <h6>Museo Soumaya</h6>
                                                <div class="rating">★ 4.4 (78k)</div>
                                                <div class="category">Art Museum</div>
                                            </div>
                                        </div>

                                        <div class="tourism-card">
                                            <img src="../images/city/pexels-josue-canceco-748469247-25492363.jpg"
                                                alt="Catedral Metropolitana">
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
                                            <img src="../images/city/pexels-yessitrex-31424834.jpg" alt="Teotihuacán">
                                            <div>
                                                <h6>Teotihuacán</h6>
                                                <div class="rating">★ 4.9 (156k)</div>
                                                <div class="category">Archaeological Zone</div>
                                            </div>
                                        </div>

                                        <div class="tourism-card">
                                            <img src="../images/city/pexels-enzo-renz-424999667-28209946.jpg"
                                                alt="Xochimilco">
                                            <div>
                                                <h6>Xochimilco</h6>
                                                <div class="rating">★ 4.6 (89k)</div>
                                                <div class="category">Canals and Trajineras</div>
                                            </div>
                                        </div>

                                        <div class="tourism-card">
                                            <img src="../images/city/pexels-sr-solo-2239844.jpg"
                                                alt="Basílica de Guadalupe">
                                            <div>
                                                <h6>Basílica de Nuestra Señora de Guadalupe</h6>
                                                <div class="rating">★ 4.8 (134k)</div>
                                                <div class="category">Religious Sanctuary</div>
                                            </div>
                                        </div>

                                        <div class="tourism-card">
                                            <img src="../images/city/pexels-jimmyelizarraras-20850269.jpg"
                                                alt="Centro Histórico">
                                            <div>
                                                <h6>Centro Histórico de la Ciudad de México</h6>
                                                <div class="rating">★ 4.5 (203k)</div>
                                                <div class="category">World Heritage</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </section>

                <script src="../js/placeSection.js"></script>

                <section id="organizers">
                    <!-- Footer section -->
                    <div class="container-fluid">
                        <!-- footer  -->
                        <?php include "../includesHtml/final.html" ?>
                    </div>
                </section>


                <!-- START SLICK CAROUSEL-->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

                <script src="../js/slick-carousel-config.js"></script>
                <!-- END  SLICK CAROUSEL-->

                </main>
                <!-- Scripts -->

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

                <script src="../js/readmorereadless.js"></script>
                <script src="../js/backTop.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                    crossorigin="anonymous"></script>



            </div>
</body>

</html>