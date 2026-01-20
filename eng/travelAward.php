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
        <title> EDUNINE2026 English Website:  Home </title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="../css/EDU9Conferences.css" rel="stylesheet"> 
        <link href="../css/edu9parts.css" rel="stylesheet"> 

        <link href="../css/stylevenue.css" rel="stylesheet">
        <link href="../css/coordinator.css" rel="stylesheet">

        <link href="../css/modal.css" rel="stylesheet">
        <link href="../css/travelAward.css" rel="stylesheet">

        <!--SLICK CAROUSEL-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <!--END  SLICK CAROUSEL -->

    </head>
    <body onload = "obtenerFechas(), jump()">
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
            <?php include "newHeader.html" ?> 
        </div>
        <div class="#main"></div>

        <main>
        <br><br><br><br>
        <main class="award-container">   
            <div class="award-header">
                <h1>IEEE Education Society Student Travel Award</h1>
                <p class="lead text-muted">Funding Opportunities for EDUNINE 2026</p>
            </div>   

                <div class="awardTravel-card">
                    <h3>Eligibility & Details</h3>
                    <p>
                        We invite all eligible student registrants to apply. Please review the criteria 
                        on the IEEE Education Society website before submitting your application.
                    </p>
                    
                    <div class="action-buttons">
                        <a href="https://ieee-edusociety.org/form/edunine-student-travel-award-for" class="award-btn award-btn-primary" target="_blank">
                            Apply Now for Travel Award
                        </a>

                        <a href= "https://ieee-edusociety.org/conferences/ieee-education-society-student-travel-award" class="award-btn award-btn-secondary" target="_blank">
                            Visit IEEE EdSoc Website
                        </a>
                    </div>
                </div>

                <p>
                    <em>Note: Ensure you are registered for the conference before applying. Deadlines may apply.</em>
                </p>
            </div>

            <div class="alert alert-warning border-warning shadow-sm mt-3 mb-4" role="alert">
                <h4 class="alert-heading" style="color: #856404;"><i class="bi bi-calendar-event"></i> Important Dates for EDUNINE 2026</h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Application Deadline:</strong><br>
                        <span style="font-size: 1.2rem; color: #d9534f;">27 January 2026</span>
                    </div>
                    <div class="col-md-6">
                        <strong>Notification Date:</strong><br>
                        <span>5 February 2026</span>
                    </div>
                </div>
            </div>

            <div class="award-content">
                
                <p>
                    The <strong>IEEE Education Society</strong> offers the 2026 Student Travel Award to assist IEEE Student Members 
                    at IEEE EdSoc financially sponsored conferences (including EDUNINE) on a competitive basis. 
                    These awards enable the sharing of scientific information and stimulate research interests for students 
                    in the field of engineering education.
                </p>
                <p>
                    <em>Conditions: No more than two students per institution will be supported per year. 
                    No postdocs, faculty, or senior research personnel who are IEEE officers may be supported.</em>
                </p>

                <div class="awardTravel-card">
                    <h5>Financial Implications</h5>
                    <p>
                        <strong>Up to 1,500 USD per grant</strong> (covering registration fee, travel, allowance, and hotel for 3 days).
                    </p>
                    <p class="small mb-0">
                        * Reimbursement Process: Student expense reports and receipts must be submitted using the 
                        <a href="https://www.ieee.org/membership/services/travel/index.html#concur-travel-access" target="_blank">IEEE Concur Travel System</a> 
                        within 45 days after the conference.
                    </p>
                </div>

                <h3 class="mt-5">Application Eligibility</h3>
                <ul class="award-list">
                    <li><strong>Membership:</strong> Applicant must be a student member of the IEEE (extra points for Education Society members).</li>
                    <li><strong>Participation:</strong> Applicant must be an author/co-author of an accepted paper and <strong>must present it in person</strong>.</li>
                    <li><strong>Academic Status:</strong> Must be registered toward a Bachelor’s, Master’s, or PhD degree in a college or university when submitting applications.</li>
                    <li><strong>Proof:</strong> During reimbursement, proof of conference registration and travel costs is required.</li>
                </ul>
                <p class="text mt-3">
                    <strong>Diversity & Inclusion:</strong> We encourage participation from underrepresented groups and diverse institutions across all geographical regions. 
                    Women, minorities, beginning graduate students, and first-time conference attendees are especially encouraged to apply.
                </p>

                <h3 class="mt-5">How to Apply</h3>
                <p>Applications must be submitted online. Please prepare the following information:</p>
                
                <div class="card mb-4 bg-light">
                    <div class="card-body">
                        <ol>
                            <li class="mb-2"><strong>Personal Data & IEEE Number</strong> (Use your professional email and current affiliation).</li>
                            <li class="mb-2"><strong>CV / Resume:</strong> Must include citizenship, study level, and university. (Ethnicity and gender are optional).</li>
                            <li class="mb-2"><strong>Advisor Supporting Letter:</strong> A brief, signed letter or attached email confirming full-time status and good academic standing.</li>
                            <li class="mb-2"><strong>Student Statement (100-250 words):</strong> 
                                <ul>
                                    <li>Summary of research interests and accomplishments.</li>
                                    <li>Statement on the purpose of attending the conference.</li>
                                </ul>
                            </li>
                            <li class="mb-2"><strong>Conference Registration Confirmation Number:</strong> You must be registered to apply.</li>
                            <li class="mb-0"><strong>Travel Cost Estimate:</strong> Estimate for registration, travel, and hotel (Receipts are not needed at the application stage).</li>
                        </ol>
                    </div>
                </div>

                <h3 class="mt-5">Evaluation Criteria</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>Criteria</th>
                                <th class="text-center" style="width: 150px;">Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Priority: Students who have not received previous EdSoc travel awards</td>
                                <td class="text-center"><strong>5</strong></td>
                            </tr>
                            <tr>
                                <td>IEEE Education Society Member (IEEE membership is compulsory)</td>
                                <td class="text-center"><strong>5</strong></td>
                            </tr>
                            <tr>
                                <td>Relevance of statement & paper to education engineering</td>
                                <td class="text-center"><strong>Max 10</strong></td>
                            </tr>
                            <tr>
                                <td>Degree Level: Bachelor’s or Master’s Student</td>
                                <td class="text-center"><strong>5</strong></td>
                            </tr>
                            <tr>
                                <td>Degree Level: PhD Student</td>
                                <td class="text-center"><strong>3</strong></td>
                            </tr>
                            <tr>
                                <td>Student coming from Developing Countries (as listed by IEEE)</td>
                                <td class="text-center"><strong>5</strong></td>
                            </tr>
                            <tr>
                                <td>Student from underrepresented groups or/and first-time conference attendee</td>
                                <td class="text-center"><strong>5</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="action-buttons">
                    <a href="https://ieee-edusociety.org/form/edunine-student-travel-award-for" class="award-btn award-btn-primary" target="_blank">
                        Apply Now for Travel Award
                    </a>

                    <a href= "https://ieee-edusociety.org/conferences/ieee-education-society-student-travel-award" class="award-btn award-btn-secondary" target="_blank">
                        Visit IEEE EdSoc Website
                    </a>
                </div>
                <br>
                <div class="small text-muted border-top pt-4">
                    <p>
                        <strong>Results:</strong> Selection results will be posted on the conference website and society page. 
                        Successful applicants will be notified by email with instructions for the IEEE Concur Travel System.
                    </p>
                    <p>
                        <strong>Questions?</strong> Please address any questions to the IEEE Education Society Vice President of Conferences, 
                        Diana Andone at 
                        <a href="#" onclick="this.href='mailto:diana.andone@ieee.org?subject=Student Travel Award Question: [Your Last Name]'; this.innerText='diana.andone@ieee.org'; return false;">(Click to show email)</a> 
                        with the mandatory title: <em>“Student Travel Award Question: [Your Last Name]”</em>.
                    </p>
                    <p>
                        <strong>Non-Discrimination Policy:</strong> IEEE is committed to equal access for all persons regardless of personal characteristics. 
                        <a href="https://www.ieee.org/about/corporate/governance/p9-26.html" target="_blank">View Policy</a>.
                    </p>
                    <p>
                        <em>IEEE may not be able to provide services to certain designated countries. 
                        <a href="https://legal.ieee.org/compliance/ofac" target="_blank">View OFAC List</a>.</em>
                    </p>
                </div>

            </div>

        </main>

        <section id="organizers">
            <div class="container-fluid">
                <!-- Footer  -->
                <?php include "../includesHtml/final.html" ?>
            </div>
        </section>
        </main>

        <script src ="../js/datesFill.js?1"></script>
        <script src ="../js/readmorereadless.js"></script>
        <script src ="../js/backTop.js"></script>      
        <script src="../js/scheduleSection.js"></script>
        
        <!-- START SLICK CAROUSEL-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script
        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script src="../js/slick-carousel-config.js"></script>
        <!-- END  SLICK CAROUSEL--> 

        <!-- Bootstrap 5 JS (bundle) for CVs -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../js/pauseCoordinatorsSlider.js"></script>

    </body>
</html>   