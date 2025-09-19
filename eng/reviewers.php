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
        <title> EDUNINE2026 English Website: Information for Reviewers </title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="../css/EDU9Conferences.css" rel="stylesheet"> 
        <link href="../css/edu9parts.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->
        <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>

         <!--SLICK FOOTER FOOTER CAROUSEL-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <!--END FOOTER SLICK CAROUSEL -->

    </head>
    <body onload = "obtenerFechasRev(), jump()">
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
        <main>
        <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>

        <div> 
            <!-- NEW HEADER - Navigation bar  -->
            <?php include "newHeader.html" ?> 
        </div>
        <div class="#main"></div>

        <section id="navigation" class="inicial">
        <!-- <!- PARTE SUSAN INICIO  -->
            <!-- New proposed breadcrumb -->
            <nav class="section-nav-breadcrumb" aria-label="Section navigation">
                <ul class="d-flex justify-content-end list-unstyled mb-0">
                    <li class="nav-item mx-1">
                    <a class="nav-link px-1 py-2 btn" href="#top"> Information </a>
                    </li>
                    
                    <li class="nav-item mx-1">
                    <a class="nav-link px-1 py-2 btn" href="#revGuide">Review Process</a>
                    </li>
                    <li class="nav-item mx-1">
                    <a class="nav-link px-1 py-2 btn" href="#revSignup">Review Registration</a>
                    </li>
                    <li class="nav-item mx-1">
                    <a class="nav-link px-1 py-2 btn" href="#revSignin">Review Portal</a>
                    </li>
                </ul>
            </nav>
        <!-- PARTE SUSAN FIN -->

        </section>

        <!--Navigation for cellphones Susan's Idea-->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="chevron-up-down" viewBox="0 0 16 18">
            <!-- Up chevron -->
            <path d="M2.146 6.854a.5.5 0 0 1 .708 0L8 2.707l5.146 4.147a.5.5 0 0 1-.708.708L8 4.207 2.854 7.562a.5.5 0 0 1-.708-.708z"/>

            <!-- Down chevron -->
            <path d="M2.146 11.146a.5.5 0 0 1 .708 0L8 15.293l5.146-4.147a.5.5 0 0 1 .708.708l-5.5 5.5a.5.5 0 0 1-.708 0l-5.5-5.5a.5.5 0 0 1 0-.708z"/>
        </symbol>
        </svg>


        <div class="container d-flex justify-content-center">
            <div class="dropdown d-navs d-sm-none"> <!--d-sm-none makes it not appear for screen higher than 575px width-->
            <button class="btn dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                On this page
                <svg class="bi ms-2" width="16" height="16" fill="currentColor" aria-hidden="true">
                <use xlink:href="#chevron-up-down"></use>
                </svg>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#top">Information</a></li>
                <li><a class="dropdown-item" href="#dates">Timeline and Dates</a></li>
                <li><a class="dropdown-item" href="#revGuide">Review Process</a></li>
                <li><a class="dropdown-item" href="#revSignup">Review Registration</a></li>
                <li><a class="dropdown-item" href="#revSignin">Review Portal</a></li>
            </ul>
            </div>
        </div>

        <!--End of Navigation for cellphones Susan's Idea-->



        
        <section id="top" class="inicial-reviewers">

            <div class="container-fluid py-1">
                <div class="row justify-content-center">
                    
                    <div class="card shadow-lg border-0 rounded-4 p-4">
                        <div class="row g-4 align-items-center">
                        
                        <!-- Imagen -->
                        <div class="col-md-4 text-center">
                            <img src="../images/decoration/peerReview.jpg" 
                                alt="Information for Reviewers" 
                                class="img-fluid rounded-3 shadow-sm">
                        </div>

                        <!-- Texto -->
                        <div class="col-md-8">
                            <h2 class="display-6 fw-bold mb-3 text-center">Information for Reviewers</h2>
                            <p class="fs-5">
                            We are delighted to invite you to join the 
                            <b>EDUNINE2026 International Program Committee</b> as a 
                            <b>peer reviewer</b>. Your expertise is invaluable for ensuring 
                            high-quality submissions. This year's conference features three 
                            category submissions within the field of interest of the 
                            <b>IEEE Education Society</b>:
                            </p>

                            <!-- Lista de categorías -->
                            <ul class="list-unstyled">
                            <li class="mb-2"> <b>Category 1:</b> Implemented teaching techniques, classroom experience reports, or pedagogical tools</li>
                            <li class="mb-2"> <b>Category 2:</b> New curricula and educational program proposals, including regional or national adaptations</li>
                            <li class="mb-2"> <b>Category 3:</b> Educational research papers</li>
                            </ul>

                            <p class="fs-5 mb-1">The paper can be submitted as:</p>
                            <ul>
                            <li><b>Full Papers</b> (up to 6 pages) mature, well-developed research results.</li>
                            <li><b>Work in Progress (WIP) Papers</b> (up to 4 pages)ongoing projects with preliminary findings.</li>
                            </ul>

                            <p class="fs-5 mb-1">
                            Guidelines for reviewers and instructions for the <b>EDUNINE2026 SUBMISSION SYSTEM</b> are provided to assist in registering, reviewing, and completing evaluations.
                            </p>
                            <p class="fs-5 mb-1">
                            After the conference, certificates of appreciation will be issued to all reviewers.
                            </p>

                            <p class="fs-5 fw-bold text-success mt-3">
                            Thank you for your valuable contribution to EDUNINE2026!
                            </p>
                        </div>

                        </div>
                    
                    </div>
                </div>
            </div>

        </section>


        
        
        <!-- Review Process and Manuscript types -->

        <section id="revGuide">

            <div class= "container-peerReview">

                <div class= "row">
                    <div class= "col" style="width: 100%;">
                    <div class="card card-peer mb-4" style="width: 100%;">
                        <img src="../images/decoration/Review Process.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="display-6 fw-bold text-center">The EDUNINE Conference Review Process</h2>
                            <p class="fs-5 mb-4"> The conference review process involves two rounds of evaluation. In the first round, known as peer review, submissions are assessed by multiple reviewers. Based on their recommendations, papers may be accepted, rejected, or conditionally accepted pending revisions. Conditionally accepted papers undergo a second round of review by members of the Technical Program Committee. This rigorous process ensures that accepted papers meet the conference's standards for originality, technical rigor, and relevance. The types of manuscripts for review are detailed at the end of this section.</p>
                            
                        </div>
                    </div>
                    </div>

                    <div class= "col-md-6 d-flex flex-column justify-content-center">
                    <div class="card card-peer mb-4 mt-4" style="width: 100%;">
                        
                        <div class="card-body">
                            <div class= "col text-sm-left">
                                <h4 class="pb-2 border-bottom display-6 fw-bold text-center">Review Process</h4>
                                <p class="lh-sm">When you volunteer to be a reviewer for <b>EDUNINE</b>, you select <b>topic areas</b>. Submissions from these topics will be assigned to you approximately one week after the submission deadline, based on authors' selections. Each submission is reviewed by at least <b>three different reviewers</b>, with each reviewer assigned approximately <b>three submissions</b>.</p>
                                <p class="lh-sm">You have about one month to complete your reviews. Please submit all reviews through the EDUNINE2026 SUBMISSION REVIEW SYSTEM before the deadline (see instructions for Reviewer Registration and Submission).</p>
                                <p class="lh-sm">Papers submitted for the <b>EDUNINE</b> conference corresponds to three (3) different categories within the field of interest of the <b> IEEE Education Society</b>:</p><ul>
                                    <li><b>Category 1:</b> Implemented teaching techniques, classroom experience reports, or pedagogical tools
                                    </li><li><b>Category 2:</b> New curricula and educational program proposals, including regional or national adaptations 
                                    </li><li><b>Category 3:</b> Educational research papers </li></ul>
                                <p class="lh-sm"> The paper can be submitted as: </p><ul>
                                    <li><b>Full Papers</b> (up to 6 pages) are intended for submissions that present mature, well-developed research results.</li>
                                    <li><b>Work in Progress (WIP) Papers</b> (up to 4 pages) are suitable for ongoing projects with preliminary results or findings or an early stage of a research project.</li></ul>
                                    <p class="lh-sm">See more details at the end of this section in <i><u>Manuscript Types</u></i>. Both types may undergo <b>double-blind review</b>, which is recommended and checked before sending to peer review. Papers submitted at the deadline are accepted for <b><u>single-blind peer review</u></b> at the author's choice to avoid shortening the peer-review timeline. Reviewers may choose not to review papers not prepared for double-blind review. Please notify the <b>EDUNINE Technical Program Chair</b> to reassign such papers to another reviewer.</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="card card-peer mb-4 mt-4" style="width: 100%;">
                        <div class="card-body">
                            <h4 class="pb-2 border-bottom display-6 fw-bold text-center"> The EDUNINE review model consists of two rounds: </h4>
                                <ol class="list-group list-group-numbered">
                                <li class="list-group-item ml-2"> <b> Peer Review:</b> Authors submit a paper for peer review, where it is evaluated and decisions include: acceptance, rejection, conditional acceptance pending revisions (minor or major), or conversion to a Work in Progress paper. Reviewer evaluations and recommendations are submitted to the authors, with additional comments for the chair only.</li>

                                <li class="list-group-item ml-2"> <b> Final Paper Review:</b> Authors of conditionally accepted papers revise their submissions based on reviewer recommendations. These revised papers undergo review by a member of the EDUNINE Technical Committee. Based on this review, papers may be accepted or rejected. Accepted papers are then submitted in their final, camera-ready version.</li></ol>
                        
                        </div>
                    </div>
                    </div>
                </div>

            </div>

            <!--New Implementation, breadcrumb-->
            <div class = "container-peerReview"> 
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <h1 class="mb-4 mt-4 mx-3 fw-bold text-center"> Peer Review Guidelines</h1>
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="fs-4 fs-md-2 fs-sm-4 fw-normal">Reviewer Responsibilities</span>
                        </button>
                        </h2>

                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            
                            <h5 class="mb-2 fw-bold"> </h5><ul> <!--Reviewer Responsibilities-->
                                <li>Reviewers must complete the review in the <b>EDUNINE SUBMISSION SYSTEM</b> in <b><u>English</u></b>. Reviewers must provide detailed feedback, even for excellent papers. This feedback informs authors about strengths and areas for improvement, enhancing the overall quality of the conference. Reviewer recommendations should clearly justify their rating choice. A complete review helps the decision-making process for both authors and the Technical Program Committee.
                                </li><li>Reviewers must maintain confidentiality of all manuscript information.
                                </li><li>Reviewers must comply with the following requirement: <u>&quot;Information or content contained in or about a manuscript under review shall not be processed through a public platform (directly or indirectly) for AI generation of text for a review. Doing so is considered a breach of confidentiality because AI systems generally learn from any input.&quot;</u> (verbatim copy from the IEEE Publication Services and Products Board Operations Manual 2024 (1 March 2024) Subsection 8.2.1 C.6.)
                                </li><li>Reviewers who suspect a conflict of interest must decline the review and inform the EDUNINE Technical Program Chair promptly.
                                </li><li>Reviewers receive email notifications for new review assignments. Upon receiving an assignment, reviewers should promptly read the short abstracts of each assigned paper to ensure they have the expertise to provide a quality review and meet deadlines. <b>If unable to review, notify the EDUNINE Technical Program Chair immediately</b> to allow sufficient time for reassignment without shortening the review period.</li>
                            </ul>
                        
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="fs-4 fs-md-2 fs-sm-4">Manuscript Content</span>                      
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li>Submitted manuscripts (<b>Full</b> or <b>WIP Papers</b>) must not have been accepted for publication or simultaneously submitted elsewhere.
                            </li><li>All manuscripts are evaluated based on submission  category and type, originality, technical content/research depth, rigor, relevance to the conference scope and topics, and readability in <b>English</b>                                
                            </li><li>Papers must be written in <b>English</b>, following IEEE guidelines for publishing in IEEE Xplore®. 
                                Visit <a href="https://conferences.ieeeauthorcenter.ieee.org/write-your-paper/write-in-technical-english/" class="border-white btn btn-primary btn-sm align-self-end" role="button">IEEE Author Center - Conference Author - Write Your Paper </a>  and <a href="https://ieeeauthorcenter.ieee.org/wp-content/uploads/IEEE-Reference-Guide.pdf" class="border-white btn btn-primary btn-sm align-self-end" role="button">IEEE Reference Guide</a>.
                            </li><li>The paper must describe an investigation or reproducible experience, documented sufficiently for replication by an independent professional.
                            </li><li>Reviewers should report suspected <b>plagiarism</b> in the <b>&quot;Comments for the Program Committee&quot;</b> field in the review form, detailing the extent and original source if known. Additionally, plagiarism concerns can be included in the <b>&quot;Comments for the Authors&quot;</b> section. The EDUNINE Technical Program Committee will investigate according to IEEE's plagiarism policies.</li></ul>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span class="fs-4 fs-md-2 fs-sm-4">Guidance on Recommending Work-in-Progress (WiP) Reclassification or Rejection</span>
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="lh-sm">If a full paper submission does not fully meet the requirements of a complete research work—such as lacking in-depth analysis, comprehensive results, or robust validation—but it presents preliminary results and addresses a topic of clear interest and relevance to the conference audience, you may recommend that the paper be reclassified as a Work-in-Progress (WiP) paper.</p>
                            <p class="lh-sm">Please use this recommendation only if the paper shows potential and contributes meaningfully to ongoing discussions in the field, even if it is not yet fully developed.</p>
                            <p class="lh-sm">However, papers that only present a proposal or idea without any preliminary results, or that lack engagement with related work (e.g., no comparison with existing literature or insufficient references), do not meet the criteria for either full or WiP categories and should be recommended for rejection.</p>                       
                            
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <span class="fs-4 fs-md-2 fs-sm-4">Manuscript English Quality</span>
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <li>As part of the review process, evaluate the readability and clarity of the English writing in the submitted paper. Feedback on language quality helps ensure the paper meets standards for clear and effective communication.</li></ul>
                                <p class="lh-sm">Correction of the English writing is unnecessary. Instead, provide feedback using the following scale:</p><ol class="list-group list-group-numbered">
                                    <li class="list-group-item ml-2"> <b> Very difficult to understand:</b> Significant errors throughout, making comprehension challenging.
                                    </li><li class="list-group-item ml-2"> <b> Poor:</b> Frequent errors that impede understanding and require extensive revision.
                                    </li><li class="list-group-item ml-2"><b> Adequate:</b> Some errors present, but the overall meaning is clear and understandable.
                                    </li><li class="list-group-item ml-2"><b> Good:</b> Minor errors, generally clear and well-written.
                                    </li><li class="list-group-item ml-2"><b>Excellent:</b> No significant errors, highly readable and well-written.</li></ol>
                                <p class="lh-sm mt-2">If significant errors affecting clarity are noted, alert the author to revise for improved clarity. Also, indicate the English level (1-5) at the end of your review in the <b>"Comments for the Authors"</b> or <b>&quot;Comments for the Program Committee&quot;</b> fields.
                                </p><p class="lh-sm">Papers flagged for significant language issues will undergo review by English language experts. The chair will recommend improvements to the author, reinforcing your assessment.
                                </p><p class="lh-sm">Many EDUNINE submissions come from non-native English speakers or early-career researchers. Constructive feedback is especially valuable for weaker submissions.
                                
                                </p><p class="lh-sm">We appreciate reviewers for their attention to maintaining our publication standards. Standard English is required for paper acceptance, and your contributions uphold the integrity of the EDUNINE conference.</p>
                                
                            </div>     
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <span class="fs-4 fs-md-2 fs-sm-4">Manuscript Format</span>
                        </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li>Reviewers are not required to check papers for template format compliance. The Technical Program Committee member will review paper formats and styles according to the chosen template's requirements.</li></ul>
                        
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <span class="fs-4 fs-md-2 fs-sm-4">Enhancing Reviewer Feedback</span>
                        </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h6 class="mb-2 fw-bold"> 1. Guidelines for Comprehensive Peer Review</h6><ul> 
                                <li> To read more click on   
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#feedbackModal">Peer Review Guide</button></li></ul>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen-sm-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="feedbackModalLabel">Guidelines for Comprehensive Peer Review</h1>              
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <p class="lh-sm mx-2">When reviewing papers for feedback and recommending improvements, consider the following questions:</p><ul>
                                                <li>Is the study well designed and well executed?
                                                </li><li>Does the paper acknowledge the existing body of relevant work?
                                                </li><li>Are the results interpreted and reported correctly, considering all possible interpretations?
                                                </li><li>Are the results overly preliminary or speculative?
                                                </li><li>Does the research contribute significantly to the scientific knowledge in the field?
                                                </li><li>Is the paper suitable for presentation at this conference?
                                                </li><li>Is the paper written in clear, concise language?</li></ul>

                                            <p class="lh-sm mx-2">Throughout the peer review process, assess the following:</p><ul>

                                                <li><b>Scope:</b> Is the paper appropriate for the conference's scope?
                                                </li><li><b>Novelty:</b> Does the paper present original material distinct from previous publications?
                                                </li><li><b>Validity:</b> Is the study well designed and executed?
                                                </li><li><b>Data:</b> Are the data reported, analyzed, and interpreted correctly?
                                                </li><li><b>Clarity:</b> Are the ideas expressed clearly, concisely, and logically?
                                                </li><li><b>Compliance:</b> Are all ethical and publication requirements met?
                                                </li><li><b>Advancement:</b> Does the paper make a significant contribution to the field?
                                                </li><li><b>English:</b> Is the standard of English sufficient for publication?
                                                </li><li><b>Format:</b> Does the paper conform to conference manuscript style guidelines?</li></ul>
                                            <p class="lh-sm mx-2">Follow the publication’s instructions for submitting feedback, suggestions, and recommended decisions. Remember to provide thorough and professional commentary.</p>
                                            <p class="lh-sm mx-2">Additional guidelines from the literature:</p><ul>
                                                <li>Your role as a reviewer is to provide detailed feedback, including positives and areas for improvement.
                                                </li><li>Even for papers you find poorly written or thought-out, offer constructive criticism to assist the authors and enhance future submissions.
                                                </li><li>Justify your ratings clearly in your reviews. A low score without explanations offers little value to the authors.
                                                </li><li>Focus your review on content.
                                                </li><li>Ensure fairness and objectivity in your assessment based solely on the paper's content.
                                                </li><li>While the conference requires polished submissions, do not reject papers based solely on English writing quality or formatting issues. Report such issues as requested in the Manuscript English Quality section; formatting issues should be noted to the chair.
                                                </li><li>Accepted papers may require minor or major improvements. Your detailed feedback can significantly contribute to paper improvement and conference enhancement.</li></ul>         
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="mb-2 mt-2 fw-bold">2. Some Examples</h6><ul>
                                <li> To read more click on   
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#examplesModal">Examples of Comments to Authors</button></li></ul>
                            <!-- Modal -->
                            <div class="modal fade" id="examplesModal" tabindex="-1" aria-labelledby="examplesModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen-sm-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="examplesModalLabel">Some Examples of Comments to Authors</h1>                                          
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <ul>
                                                <li> The organization of the units on Robotics was well done. However, the discussion of how it fits into the curriculum is overly broad and not too realistic. Many factors were overlooked on the curriculum side.
                                                </li><li>Good level of detail on your approach. The first Table is very handy. But after the Table, the log analysis and auditing example image is quite difficult to read. How will you ensure additional auditing strategies are implemented?
                                                </li><li>The paper was easy to read, although it could benefit from a review of the English sentence structure. The paper was organized in an easy-to-follow manner. The authors explained their motivations and methods for their study.
                                                </li><li>The paper could use additional proofing and polishing. I suggest finding a non-robotics person to read for both language and communication. Some sentences are poorly formed (e.g., sentence 4 of first paragraph in 1. Introduction. Some content seems misplaced (e.g., discussion of security in section 4.
                                                </li><li>The organization is faultless. It is very clear what the paper is going to say and how. The paper follows through with crystal clear subject headings and a logical flow of information. There are some grammatical problems; these are not serious, but a thorough proof-reading would be helpful.
                                                </li><li>I would have liked to see some discussion and references setting this work in the context of other studies of student learning and knowledge retention. While I don't know of other studies that have examined exactly the phenomenon this paper does, a short search in the technical digital library turned up these examples that are relevant...
                                                </li><li>This paper makes a very good argument in the introduction for why this course is needed. It is timely and addresses a topic outside of the norm often seen at an Education in Engineering Conference.
                                                </li><li>The hypotheses are too obvious and the validation of them is not enough. Therefore, the contribution of this paper is quite limited.
                                                </li><li>This paper should generate a lot of discussion and have a good audience. It is a topic that many universities are trying to address.
                                                </li><li>Hard to judge given the writing organization problems, but I do not see a lot of significance here. The verification that the hands-on experiences helped more than the simulations on-line alone is a nice result, if it is supported by the data. Having taught this course already and collected feedback on your approach makes the paper stronger.
                                                </li><li>It is important for those who might be considering this approach to know that it can be successful.
                                                </li><li>This is a good, interesting topic, accessible to the conference audience, and widely useful.
                                                </li><li>A good practical beginning guide to implementing lab exercises in a control course.
                                                </li><li>Given the potential interest in this topic the authors could do better to capture the imagination of the reader; perhaps with a paragraph or two on famous cases.</li> </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-peerReview py-3 mt-4" style="background-color: #e8f2ff;">
                <div class="row">
                    <div class= "col text-sm-left">
                        <h4 class="pb-2 border-bottom display-6 fw-bold mx-3 text-center">Manuscript Categories and Types for Review</h4>
                        <p class="fs-5 mb-4 mx-3">This section outlines the various categories of manuscripts that are submitted for peer review, providing definitions and criteria for each category and type to help reviewers understand the specific expectations and standards associated with them.</p>
                        <p class="fs-5 mb-2 mx-3">For more information about:</p>
                        
                    </div>
                </div>

                <div class="container-typeReview align-items-center">
                <div class="row justify-content-center">
                    
                    <!-- Card 1 -->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 d-flex justify-content-center mb-3">
                    <div class="card card-peer" style="width: 18rem;">
                        <div class="card-body align-items-center">
                        <h5 class="card-title text-center">Topics</h5>  
                        <p class="card-text">The list of EDUNINE topics, scope, and areas of interest, visit:</p>
                        <a href="information.php?id=suitable" 
                            class="border-white btn btn-primary btn-sm align-self-end" 
                            role="button">
                            Conference Suitability Analysis (EDUNINE Scope and Topics)
                        </a>
                        </div>
                    </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 d-flex justify-content-center mb-3">
                    <div class="card card-peer" style="width: 18rem;">
                        <div class="card-body align-items-center">
                        <h5 class="card-title text-center">Templates</h5>
                        <p class="card-text">Mandatory conference templates, visit:</p>
                        <a href="information.php?id=templateChoose" 
                            class="border-white btn btn-primary btn-sm align-self-end" 
                            role="button">
                            Mandatory Conference Paper Templates
                        </a>
                        </div>
                    </div>
                    </div>

                </div>
                </div>


                <div class ="row">
                    <div class= "col text-sm-left"> 
                        <h6 class="display-6 fw-bold py-2 text-center pt-5">EDUNINE Categories and Content of Manuscripts</h6> 

                    </div>
                </div>

                <div class="container-peerReview text-center" >
                    <p class="fs-5 mb-2 mx-3">Visit this section to know about:</p>
                    <br>
                    <a href="information.php?id=categories" class="btn btn-outline-primary">
                    Categories
                    </a>
                    
                    <a href="information.php?id=paperTypes" class="btn btn-outline-primary">
                    Paper Types and Formatting
                    </a>

                
                </div>

        </section>

        <!-- Reviewer Portal   -->

        <section id="revSignin">

            <div class= "container-fluid tope py-5">
                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="d-flex flex-wrap flex-md-nowrap align-items-center justify-content-center text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" 
                                    src="../images/decoration/peerRevPortal.jpg"  
                                    alt="OpenConf Peer Reviewer Portal Image"> 

                                <div class="card mx-auto" style="max-width: 800px; background: transparent; border: 0px;">
                                    <div class="card-body justify-content-center text-center px-4 py-5">
                                        <h2 class="display-6 fw-bold text-center">Reviewer Portal</h2>
                                        <p class="lh-sm">This section provides detailed instructions on how to use your 
                                        <b>EDUNINE OpenConf reviewer account</b> once you are registered as a reviewer. 
                                        First, it explains how to view your list of review assignments and how to select 
                                        and access the abstract and full text of each assigned paper. Then, after you have 
                                        finished reviewing a paper, the guide provides an example to help you fill out the 
                                        review form for each required field and submit your review.</p>
                                    </div>
                                </div>

                                
                                <div class="col-12 col-xl-4">
                                <div class="mx-auto" style="max-width:560px;">
                                    <p class="mb-2">
                                    To know more, 
                                    <a href="http://www.youtube.com/@easychair966" target="_blank" rel="noopener">
                                        visit the EasyChair YouTube channel
                                    </a>.
                                    </p>

                                    <div class="ratio ratio-16x9">
                                    <iframe
                                        src="https://www.youtube.com/embed/zRkFw-RKrxg"
                                        title="EasyChair tutorial"
                                        loading="lazy"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        referrerpolicy="strict-origin-when-cross-origin"
                                        allowfullscreen>
                                    </iframe>
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
        </main>

        <script src ="../js/datesFill.js?1"></script>
        <script src ="../js/readmorereadless.js"></script>
        <script src ="../js/backTop.js"></script>
         
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
        <!-- START FOOTER FOOTER SLICK CAROUSEL-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script
        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script src="../js/slick-carousel-config.js"></script>
        <!-- END FOOTER  SLICK CAROUSEL-->   
    </body>
</html>                      