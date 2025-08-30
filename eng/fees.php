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
        <title> EDUNINE2026 English Website: Conference Registration </title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="../css/EDU9Conferences.css" rel="stylesheet"> 
        <link href="../css/edu9parts.css" rel="stylesheet"> 
        <link href="../css/stylefees.css" rel="stylesheet">
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
        <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>
        <div> 
            <!-- Navigation bar  -->
            <?php include "edu9header.html" ?> 
        </div>
        <div class="#main"></div>

        <section id="top" class="inicial">
            <!-- <div class="container align-content-start py-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Author</a></li>
                    <li>Registration_and_Payment</li>
                </ul> 
            </div> -->
            <div class= "container tope py-5 bg-white">

                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/registration.jpg"  alt="Registration and Payment">
                            </div>
                            <h2 class="display-6 fw-bold">Authors and Participants Conference Registration</h2>

                            <p class="fs-5 mb-4">Attention <b>Authors</b>: To ensure your accepted final paper is published in the <b>IEEE Xplore®</b> digital library (please note that IEEE reserves the right to reject papers not meeting standards), registration and oral presentation at the conference are mandatory. Each author registration permits the presentation and publication of one paper, with the option to include an additional paper for an extra publication fee. Unpresented accepted papers cannot be submitted for publication in <b>IEEE Xplore®</b>.<br>For <b>Authors</b> and <b>Participants</b>: Registration grants access to all conference sessions, workshops, tours, and other activities, both online and in-person. After the conference, certificates for participation and paper presentation will be issued. Registration fees vary based on Early, Normal, or Late deadlines. Payment options include credit card (PayPal) in Euros or bank transfer in Euros or U.S. Dollars.</p>

                            <!-- Registration Fee Tables -->
                            <h3 class="text-center mb-4 mt-5">Registration Fees</h3>
                            
                            <!-- Euros Table -->
                            <div class="edunine-table-wrapper mb-4">
                                <div class="edunine-currency-header">FEES Euros</div>
                                <table class="edunine-registration-table">
                                    <thead>
                                        <tr>
                                            <th class="edunine-table-header" style="width: 40%;">Category</th>
                                            <th class="edunine-table-header" style="width: 15%;">Early</th>
                                            <th class="edunine-table-header" style="width: 15%;">Normal</th>
                                            <th class="edunine-table-header" style="width: 15%;">Late</th>
                                            <th class="edunine-table-header" style="width: 15%;">Paper Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="edunine-category-cell edunine-nonmember-category">Non-member</td>
                                            <td class="edunine-table-cell">500</td>
                                            <td class="edunine-table-cell">550</td>
                                            <td class="edunine-table-cell">605</td>
                                            <td class="edunine-table-cell edunine-paper-fee-cell">100</td>
                                        </tr>
                                        <tr>
                                            <td class="edunine-category-cell">IEEE member</td>
                                            <td class="edunine-table-cell">420</td>
                                            <td class="edunine-table-cell">462</td>
                                            <td class="edunine-table-cell">508</td>
                                            <td class="edunine-table-cell"></td>
                                        </tr>
                                        <tr>
                                            <td class="edunine-category-cell">IEEE EdSoc member</td>
                                            <td class="edunine-table-cell">356</td>
                                            <td class="edunine-table-cell">392</td>
                                            <td class="edunine-table-cell">431</td>
                                            <td class="edunine-table-cell"></td>
                                        </tr>
                                        <tr>
                                            <td class="edunine-category-cell">Student IEEE member</td>
                                            <td class="edunine-table-cell">260</td>
                                            <td class="edunine-table-cell">286</td>
                                            <td class="edunine-table-cell">315</td>
                                            <td class="edunine-table-cell"></td>
                                        </tr>
                                        <tr>
                                            <td class="edunine-category-cell">Student Non-member</td>
                                            <td class="edunine-table-cell">300</td>
                                            <td class="edunine-table-cell">330</td>
                                            <td class="edunine-table-cell">363</td>
                                            <td class="edunine-table-cell"></td>
                                        </tr>
                                        <tr>
                                            <td class="edunine-category-cell">IEEE Life member</td>
                                            <td class="edunine-table-cell">260</td>
                                            <td class="edunine-table-cell">286</td>
                                            <td class="edunine-table-cell">315</td>
                                            <td class="edunine-table-cell"></td>
                                        </tr>
                                        <tr>
                                            <td class="edunine-category-cell">Guest</td>
                                            <td class="edunine-table-cell">150</td>
                                            <td class="edunine-table-cell">165</td>
                                            <td class="edunine-table-cell">182</td>
                                            <td class="edunine-table-cell"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Dollars Table -->
                            <div class="edunine-table-wrapper">
                                <div class="edunine-currency-header">FEES Dollars</div>
                                <table class="edunine-registration-table">
                                    <thead>
                                        <tr>
                                            <th class="edunine-table-header" style="width: 40%;">Category</th>
                                            <th class="edunine-table-header" style="width: 15%;">Early</th>
                                            <th class="edunine-table-header" style="width: 15%;">Normal</th>
                                            <th class="edunine-table-header" style="width: 15%;">Late</th>
                                            <th class="edunine-table-header" style="width: 15%;">Paper Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="edunine-category-cell edunine-nonmember-category">Non-member</td>
                                            <td class="edunine-table-cell">600</td>
                                            <td class="edunine-table-cell">660</td>
                                            <td class="edunine-table-cell">726</td>
                                            <td class="edunine-table-cell edunine-paper-fee-cell">120</td>
                                        </tr>
                                        <tr>
                                            <td class="edunine-category-cell">IEEE member</td>
                                            <td class="edunine-table-cell">504</td>
                                            <td class="edunine-table-cell">555</td>
                                            <td class="edunine-table-cell">610</td>
                                            <td class="edunine-table-cell"></td>
                                        </tr>
                                        <tr>
                                            <td class="edunine-category-cell">IEEE EdSoc member</td>
                                            <td class="edunine-table-cell">428</td>
                                            <td class="edunine-table-cell">470</td>
                                            <td class="edunine-table-cell">517</td>
                                            <td class="edunine-table-cell"></td>
                                        </tr>
                                        <tr>
                                            <td class="edunine-category-cell">Student IEEE member</td>
                                            <td class="edunine-table-cell">312</td>
                                            <td class="edunine-table-cell">343</td>
                                            <td class="edunine-table-cell">378</td>
                                            <td class="edunine-table-cell"></td>
                                        </tr>
                                        <tr>
                                            <td class="edunine-category-cell">Student Non-member</td>
                                            <td class="edunine-table-cell">360</td>
                                            <td class="edunine-table-cell">396</td>
                                            <td class="edunine-table-cell">436</td>
                                            <td class="edunine-table-cell"></td>
                                        </tr>
                                        <tr>
                                            <td class="edunine-category-cell">IEEE Life member</td>
                                            <td class="edunine-table-cell">312</td>
                                            <td class="edunine-table-cell">343</td>
                                            <td class="edunine-table-cell">378</td>
                                            <td class="edunine-table-cell"></td>
                                        </tr>
                                        <tr>
                                            <td class="edunine-category-cell">Guest</td>
                                            <td class="edunine-table-cell">180</td>
                                            <td class="edunine-table-cell">198</td>
                                            <td class="edunine-table-cell">218</td>
                                            <td class="edunine-table-cell"></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                            <!-- Card informativa - Agregar después de las tablas de tarifas -->
                            <div class="edunine-table-wrapper mt-5">
                                <div class="edunine-currency-header">Registration Information</div>
                                <div class="p-4 bg-white">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <h5 class="fw-bold mb-3" style="color: #2980b9;">For Authors (Paper Presenters)</h5>
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #3498db;"></i><strong>Registration & Presentation:</strong> At least one author must register and present the paper during the conference.</li>
                                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #3498db;"></i><strong>Publication:</strong> Each registration covers presentation and publication of one paper in IEEE Xplore®.</li>
                                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #3498db;"></i><strong>Additional Papers:</strong> Extra publication fee applies for additional papers (see Paper Fee column).</li>
                                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #3498db;"></i><strong>Important:</strong> Non-presented papers will not be submitted to IEEE Xplore®.</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <h5 class="fw-bold mb-3" style="color: #2980b9;">Registration Benefits</h5>
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i class="fas fa-users me-2" style="color: #5dade2;"></i>Access to all conference sessions and workshops</li>
                                                <li class="mb-2"><i class="fas fa-certificate me-2" style="color: #5dade2;"></i>Participation and presentation certificates</li>
                                                <li class="mb-2"><i class="fas fa-map-marked-alt me-2" style="color: #5dade2;"></i>Cultural tours and special activities</li>
                                                <li class="mb-2"><i class="fas fa-coffee me-2" style="color: #5dade2;"></i>Coffee breaks, lunches, and welcome cocktail</li>
                                            </ul>
                                            
                                            <h6 class="fw-bold mt-4 mb-3" style="color: #2980b9;">Payment Options</h6>
                                            <ul class="list-unstyled">
                                                <li class="mb-1"><i class="fas fa-credit-card me-2" style="color: #5dade2;"></i>Credit card via PayPal (Euros)</li>
                                                <li class="mb-1"><i class="fas fa-university me-2" style="color: #5dade2;"></i>Bank transfer (Euros or USD)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <div class="alert alert-info border-0" style="background-color: #e8f4f8; color: #1f4e79;">
                                                <i class="fas fa-exclamation-triangle me-2"></i>
                                                <strong>Cancellation Policy:</strong> In case you cannot attend the event, registration must be cancelled at least 3 months before the conference date to be eligible for cancellation.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
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