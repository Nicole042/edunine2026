 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content ="The IEEE World Engineering Education Conference - <b>EDUNINE2026</b> is the flagship annual conference for the IEEE Region 9 (Latin America and the Caribbean) of the IEEE Education Society. The <b>EDUNINE2026</b> international conference on Education in Engineering, Technology, Computer Science, and related topics, held every year in March in a different Latin American city,  is organized by  COPEC - Science and Education Research Organization. The conference program covers the main issues present in education today.">
        <meta name ="Keywords" content="IEEE, COPEC, Education in Engineering, Technology, and Computer Science, STEM, Teaching, Learning, Higher Education, University Education, Educación en Ingeniería, Tecnología e Informática, Enseñanza, Aprendizaje, Educacion Superior, Educación Universitaria, Educação em Engenharia, Tecnologia e Informática, Ensino, Aprendizagem, Ensino Superior, Educação Universitária, Latin America and the Caribbean, Latinoamérica y el Caribe, América Latina e Caribe, Conference, Congress, Conferencia, Congreso, Conferência, Congresso">
        <meta name="author" content="COPEC">
        <meta name="copyright" content="COPEC">
        <title> EDUNINE2026 English Website: Review Outcomes and Acceptance Notification </title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="../css/EDU9Conferences.css" rel="stylesheet"> 
        <link href="../css/edu9parts.css" rel="stylesheet"> 

        <link href="../css/stylereviewNotif.css" rel="stylesheet">
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
    <body onload = "jump()">
        <main>
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

            <section id="top" class=" padding-top-inicial">
                <div class= "container tope  py-2 bg-white">

                    <div class="row g-5">
                        <div class= "col text-sm-left">
                                <h2 class="display-6 fw-bold text-center">Peer Review Process and Notification</h2>
                                <p class="fs-5">Ensuring the originality and quality of research in academic conferences requires a rigorous three-step selection process. First, editors conduct a preliminary review to check formatting, page limits, and topic relevance. Next, the papers undergo peer review (single- or double-blind), where experts evaluate the methodology, originality, and contribution of the study. Finally, editors consider the reviewers’ feedback and the authors’ revisions before making the final acceptance decision. This process ensures the publication and presentation of high-impact research.</p>
                        </div>    
                    </div>
                </div>
            </section>

            <!-- Prescreening -->

            <section id="prescreen">

                <div class= "container tope pt-1 pb-2  bg-white">
                    <div class="row g-3">
                        <div class= "col text-sm-left">
                            <h4 class="display-6 fw-bold text-center">Prescreening</h4>
                            <div class="card-prescreen-description">
                                <p class="fs-5 mb-4">The first stage of quality control, ensuring manuscripts meet essential criteria before peer review. Prescreening serves as a streamlined quality control process, guaranteeing reviewers receive well-formatted, thematically relevant manuscripts prepared for in-depth scientific evaluation.</p>
                            </div>                                
                        </div>    
                    </div>
                </div>

                <div class="container mt-2">
                    <div class="prescreening-card">
                        <h5 class="prescreening-card-title">Prescreening Evaluation Process</h5>

                        <div class="prescreening-card-body">
                            <p class="mb-3">During this initial assessment, editors meticulously evaluate the following:</p>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="evaluation-criteria mb-3">
                                        <h6 class="prescreening-section-title mb-1">Scope</h6>
                                        <p class="mb-0">Topic alignment with conference categories and target audience resonance</p>
                                    </div>
                                    
                                    <div class="evaluation-criteria mb-3">
                                        <h6 class="prescreening-section-title mb-1">Clarity & Grammar</h6>
                                        <p class="mb-0">Clear, concise writing in standard English with proper grammar</p>
                                    </div>
                                    
                                    <div class="evaluation-criteria mb-3">
                                        <h6 class="prescreening-section-title mb-1">Formatting</h6>
                                        <p class="mb-0">Strict adherence to conference formatting guidelines (font, margins, references, page limits)</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="evaluation-criteria mb-3">
                                        <h6 class="prescreening-section-title mb-1">Originality</h6>
                                        <p class="mb-0">Demonstrable originality, plagiarism-free, ethical research standards</p>
                                    </div>
                                    
                                    <div class="evaluation-criteria mb-3">
                                        <h6 class="prescreening-section-title mb-1">Completeness</h6>
                                        <p class="mb-0">All required sections per guidelines and paper type (abstract, introduction, methodology, results, discussion, conclusion, references)</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="container py-3">
                    <div class="row mt-4">
                        <div class="review-alerts-container">
                            <div class="alert review-alert review-alert-warning">
                                <div class="alert-content">
                                    <strong>Revision Required:</strong> Manuscripts not meeting criteria will be returned for revisions before further consideration (pre-deadline submissions).
                                </div>
                            </div>
                            <div class="alert review-alert review-alert-danger">
                                <div class="alert-content">
                                    <strong>Deadline Risk:</strong> Papers received at deadline that fail prescreening may be rejected.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Peer Review -->

            <section id="peerReview">
                <div class= "container tope  pb-5 bg-white">
                    <div class="row g-5">
                        <div class= "col text-sm-left">
                            <div class="clearfix">
                                <h4 class="display-6 fw-bold text-center">About Peer Review</h4>
                                <p class="fs-5 mb-4">Peer review is vital to the quality of published research. IEEE requires all conference papers to undergo peer review before oral presentation at the conference and consideration for publication in <b>IEEE Xplore®</b>. Peer review is a process in which a scientific paper is evaluated by a group of experts in the same field to ensure it meets the necessary standards for acceptance and publication. Explore peer-review models, requirements, criteria, and decisions!</p>
                            </div>
                        </div>    
                    </div>
                </div>

                <!-- Peer-Review Models -->

                <div class="container py-3 bg-body-white">
                    <div class="row">
                        <div class= "col text-sm-left">
                            <h5 class="display-6 fw-bold text-center">Peer-Review Models</h5>

                            <p class="lh-sm"><b>To increase the quality of submissions and maintain independent merit, the evaluation process will be:</b></p>
                    
                            <div class="peer-review-card">
                                <div class="review-content">
                                    <ol class="review-list review-list-numbered">
                                        <li class="review-item review-item-indent"><b> Double-blind</b>
                                            <ul>
                                                <li><b>Anonymity:</b> Double-blind review offers the highest level of anonymity, where both reviewers and authors are unidentified. Papers submitted for review MUST NOT contain the authors’ names, affiliations, or any information that may disclose the authors’ identities. Please leave the author information lines as in the template; do not complete them.</li>
                                                <li><b>Self-citation:</b> You should cite your relevant previous work to avoid self-plagiarism and ensure a reviewer can access it and see the new contributions. However, the text should not explicitly state that the cited work belongs to the authors.</li>
                                                <li><b>Plagiarism:</b> Plagiarism, using someone else's ideas or words without proper credit, is easily detected by reviewers and can result in serious consequences. This includes rejection of your work or even damage to your reputation. Be sure to cite your sources! Use a plagiarism checker available through educational institutions to ensure the originality of your submission.</li>
                                            </ul>
                                        </li>
                                        <li class="review-item review-item-indent"><b>Single-blind</b>
                                            <ul>
                                                <li><b>Identification:</b> In a single-blind review, reviewers remain anonymous while the authors' identities are known. Papers must include the authors’ names, affiliations, and any other information that may disclose the authors' identities, especially when including CVs and authors' backgrounds that are also evaluated.</li>
                                            </ul>
                                        </li>
                                    </ol>
                                    <p>Both models ensure that the reviewer can provide an honest and impartial evaluation of the paper.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="container py-3 bg-body-white">
                    <div class="row">
                        <div class="ieee-requirements-card">
                            <h5 class="ieee-requirements-main-title">IEEE Education Society Peer-Review Requirements</h5>

                            <div class="ieee-requirements-card-body">
                                    <p>All papers at this conference will be peer-reviewed according to the requirements set forth in the <a href="https://ieee-edusociety.org/sites/ieeeedusoc/files/2020-06/education-society-sponsorship.pdf" class="ieee-requirements-text-link">IEEE Education Society Technical Co-sponsorship Details (3. Technical Program)</a>:</p>
                                    <ol class="ieee-requirements-numbered-list">
                                        <li class="ieee-requirements-list-item">
                                            <span class="ieee-requirements-bold-text">Independent Reviews:</span> Each paper will be reviewed by at least three independent reviewers.
                                        </li>
                                        <li class="ieee-requirements-list-item">
                                            <span class="ieee-requirements-bold-text">Review Process:</span>
                                            <ul class="ieee-requirements-sublist">
                                                <li>
                                                    <span class="ieee-requirements-bold-text">Categories 1-3 Full and Work-in-Progress (WiP) papers</span> will undergo a 
                                                    <span class="ieee-requirements-bold-text ieee-requirements-underlined">double-blind peer-review process</span> by default. Authors have the option to choose a 
                                                    <span class="ieee-requirements-bold-text">single-blind peer-review process</span>; however, the Program Committee and reviewers strongly recommend preparing full and WiP papers for 
                                                    <span class="ieee-requirements-bold-text">double-blind peer review</span>. This recommendation aims to minimize potential delays in the final notification due to reviewer reassignments. Reviewers have the option to decline reviewing papers that are not anonymized for double-blind review.
                                                </li>
                                                <li>
                                                    <span class="ieee-requirements-bold-text">Category 4 Doctoral Symposium (DS) papers</span> will be reviewed in a 
                                                    <span class="ieee-requirements-bold-text ieee-requirements-underlined">single-blind process</span>. Papers must contain the authors' names, affiliations, and any other information that may disclose the authors' identities, as the included CVs and authors' backgrounds are also evaluated.
                                                </li>
                                            </ul>
                                        </li>                            
                                        <li class="ieee-requirements-list-item">
                                            <span class="ieee-requirements-bold-text">Plagiarism detection:</span> If a reviewer notifies a plagiarism claim with evidence the Program Committee must investigate the claim. If plagiarism is confirmed, the paper will be rejected and IEEE will decide the appropriate actions after contacting the author for explanation. IEEE considers all plagiarism, including self-plagiarism, a serious offense. Learn more here <a href="https://www.ieee.org/publications/rights/plagiarism/plagiarism.html" class="border-white btn btn-primary btn-sm align-self-end" role="button">IEEE Plagiarism</a>.
                                        </li>
                                    </ol>
                            </div>
                        </div>  
                    </div>      
                </div>

                <!-- Peer-Review Criteria -->
                <div class="container py-3 bg-body-white">
                    <div class="row">
                        <div class= "col text-sm-left">
                            <h5 class="display-6 fw-bold text-center">Peer-Review Criteria:</h5>
                            <p class="lh-sm">During the peer review process, reviewers look for:</p><ul>
                                <li><b>Scope:</b>  Is the paper appropriate for the scope and topics of this conference</li> 
                                <li><b>Novelty:</b>  Is this original material distinct from previous publications</li> 
                                <li><b>Validity:</b>  Is the study well-designed and executed</li> 
                                <li><b>Data:</b>  Are the data reported, analyzed, and interpreted correctly</li> 
                                <li><b>Clarity:</b>  Are the ideas expressed clearly, concisely, and logically</li> 
                                <li><b>Compliance:</b>  Are all ethical and publication requirements met</li> 
                                <li><b>Advancement:</b>  Is this a significant contribution to the field</li> 
                                <li><b>English:</b>  Is the standard of English good enough for publication</li> 
                                <li><b>Format:</b>  Is the paper conforming to the conference Manuscript Templates styles</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>


                <!-- Peer-review Decision -->
            <section>
                <div class= "container tope pt-1 pb-2  bg-white">
                    <div class="row g-3">
                        <div class= "col text-sm-left">
                            <h4 class="display-6 fw-bold text-center">Peer-review Decision</h4>
                            <div class="card-prescreen-description">
                                <p class="fs-5 mb-4">Conference peer review occurs within a fixed window of time. All authors are notified of the peer review decision on their paper at the same time by e-mail. The acceptance is based on the reviews and the quality of the submissions. There is no target for the acceptance rate.</p>
                                <p class="fs-5 text-center">For the <b><u>Peer-Review Notification date</u></b> check <a href="index.php?id=dates" class="border-white btn btn-primary btn-sm align-self-end" role="button">Conference Schedule and Important Dates</a> on this website.</p>
                            </div>                                
                         </div>  
                    </div>       
                </div>
            </section>    
                <!-- Possible Decisions -->
            <section>   
                <div class="container mt-2">
                    <div class="prescreening-card">
                        <h5 class="prescreening-card-title">Possible Decisions</h5>

                        <div class="prescreening-card-body">
                            <p>The <b>Peer-Review Notification</b> you receive via email will detail the <b>decision on your paper</b> (all authors will receive this notification):</p>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="evaluation-criteria mb-3">
                                        <h6 class="prescreening-section-title mb-1">Clearly Accept:</h6>
                                        <p class="mb-0">Your paper has been accepted as is. Prepare the final camera-ready file, removing any anonymization, and revise the English. You may include reviewer suggestions or updates. Follow the final paper instructions before submission. The paper will be reviewed to ensure it meets <b>IEEE Xplore®</b> quality standards.</p>
                                    </div>
                                    
                                    <div class="evaluation-criteria mb-3">
                                        <h6 class="prescreening-section-title mb-1">Conditionally Accepted with Minor Improvements:</h6>
                                        <p class="mb-0">Your paper will be accepted after implementing reviewer-suggested edits on minor content, format, and language issues. Submit the revised version following the final paper instructions; it will be reviewed by an EDUNINE2026 Committee member to ensure <b>IEEE Xplore®</b> quality standards.</p>
                                    </div>
                                    
                                    <div class="evaluation-criteria mb-3">
                                        <h6 class="prescreening-section-title mb-1">Conditionally Accepted with Major Improvements:</h6>
                                        <p class="mb-0">Your paper is promising but requires further work and a second full review with assisted improvement. Acceptance will follow implementation of reviewer-suggested edits. Submit the revised version per the final paper instructions; it will be reviewed by an EDUNINE2026 Committee member to ensure <b>IEEE Xplore®</b> quality standards.</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="evaluation-criteria mb-3">
                                        <h6 class="prescreening-section-title mb-1">Conditionally Accepted as Work-in-Progress (WIP):</h6>
                                        <p class="mb-0">Your paper is promising but requires further work and a second full review with assisted improvement. Acceptance will follow implementation of reviewer-suggested edits. Submit the revised version per the final paper instructions; it will be reviewed by an EDUNINE2026 Committee member to ensure <b>IEEE Xplore®</b> quality standards.</p>
                                    </div>
                                    
                                    <div class="evaluation-criteria mb-3">
                                        <h6 class="prescreening-section-title mb-1">Reject:</h6>
                                        <p class="mb-0">Your paper will not be presented at the conference or published in the conference proceedings. If the content of the paper is not appropriate for this conference, we suggest that you submit your paper to another <b>IEEE Society</b> conference.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="alert-content px-3 pb-3">
                            <p class="mt-4">The <b>Peer-Review Notification</b> will also include:</p><ul>
                                <li><b>Reviewer Feedback:</b> Specific comments and suggestions for improvement from the reviewers on the content of your paper. </li>
                                <li><b>Formatting and English Suggestions:</b> Recommendations for improving the formatting and language of your final paper (if applicable).</li></ul>
                        </div>
                    </div>
                </div>
            </section>    
            
            <!-- Final Paper Preparation and Review -->

            <section id="nextFinalPaperRev">
                <div class= "container tope  py-2 bg-white">
                    <div class="row g-5">
                        <div class= "col text-sm-left">
                            <h2 class="display-6 fw-bold text-center">Next Steps for Accepted Papers: Final Paper Preparation</h2>
                            <p class="fs-5">Congratulations on your paper’s acceptance! Before final approval by the IEEE EDUNINE 2026 Technical Program Committee (TPC), all accepted papers—regardless of decision type—must be prepared in final (camera-ready) format to meet IEEE quality standards. A TPC member will conduct a final review to ensure publication readiness.
                            We have provided clear Final Paper Preparation and Submission guidelines, available with your Peer-Review Notification, detailing best practices for each step. You will also receive access to IEEE links and tools to support and streamline the process.</p>
                            <p class="fs-4 text-center">At the Peer-Review Notification date access <a href="index.php?id=dates" class="border-white btn btn-primary btn-sm align-self-end" role="button">Final Paper Preparation</a> with the <b>Final Paper Preparation and Submission Guidelines</b> on this website.</p>
                        </div>    
                    </div>
                </div>   
                <div class="container py-3 bg-body-white">
                    <div class="row">
                        <div class= "col text-sm-left">
                            <h5 class="display-6 fw-bold text-center">Quick Overview of the Final Paper Preparation and Submission Guidelines</h5>

                            <p class="lh-sm"><b>Here's a quick overview of the key steps involved:</b></p>
                    
                            <div class="peer-review-card">
                                <div class="review-content">
                                    <ol class="review-list review-list-numbered">
                                        <p class="review-item review-item-indent"><b> Double-blind</b>
                                            <ul>
                                                <li><b>Incorporate Reviewer Feedback (if applicable):</b> Incorporate reviewer feedback—mandatory for conditional acceptances (“Minor/Major Improvements” or “Work-in-Progress”) and optional for outright acceptances.</li>
                                                <li><b>Ensure English Language Quality:</b> Authors should ensure their final paper meets academic writing standards by reviewing grammar, style, and conventions. Use tools to check English proficiency and consider feedback from a colleague or editing service to improve language fluency.</li>
                                                <li><b>Adhere to Formatting Requirements:</b> Follow the required template styles and formats for all paper elements. IEEE Xplore® relies on these for automatic format conversion; incorrect formatting can cause conversion errors and block publication.</li>
                                                <li><b>Ensure Information Consistency:</b> Verify that all information in your paper matches the details provided in the EDUNINE2026 OpenConf database.</li>
                                                <li><b>Maintain Originality:</b> Use a plagiarism checker to verify your work's originality. Your paper will be checked by the IEEE CrossCheck plagiarism detection tool. IEEE considers all plagiarism, including self-plagiarism, a serious offense, which can lead to rejection and severe ethical and legal consequences. Learn more here <a href="https://www.ieee.org/publications/rights/plagiarism/plagiarism.html" class="border-white btn btn-primary btn-sm align-self-end" role="button">IEEE Plagiarism</a>.</li>
                                                <li><b>Achieve IEEE Xplore® Compliance:</b> Use the provided PDFeXpress tool to ensure your final PDF is IEEE Xplore®-compliant.</li>
                                                <li><b>Sign the Electronic Copyright Form:</b> At least one author must electronically sign the copyright form on behalf of all authors.</li>
                                                <li><b>Submit the Final PDF (Camera-Ready) Paper:</b> Upload the PDFeXpress PDF Output File as the final paper for your submission ID by the specified deadline.</li>
                                                <li><b>Register for the Conference:</b> At least one author must register for the conference to present the paper orally. Only presented papers are published by <b>IEEE Xplore®</b></li>
                                            </ul>
                                        </p>
                                    </ol>
                                    <p class="mx-4">Failing to meet these criteria may result in exclusion from the conference and publication.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>    
        <!-- Final Review by TPC Members -->
         <section>
            <div class= "container tope  py-2 bg-white">
                    <div class="row g-5">
                        <div class= "col text-sm-left">
                            <h2 class="display-6 fw-bold text-center">Final Review by TPC Members</h2>
                            <p>This stage ensures your accepted paper meets the high standards of the <b>IEEE Education Society</b> and <b>IEEE Xplore®</b> for final acceptance. A TPC member will conduct a final review to verify your paper adheres to the provided Final Paper Preparation Guidelines.  Following these guidelines meticulously ensures a smooth and successful publication process.</p>
                        </div>    
                    </div>
            </div> 
            <div class="container py-3">
                <div class="row mt-4">
                    <div class="review-alerts-container">
                        <div class="alert review-alert review-alert-warning">
                            <div class="alert-content">
                                <strong>Second Chance for Conditional Acceptances:</strong> The TPC review offers an opportunity for <b>Conditionally Accepted papers to achieve final acceptance</b>.
                            </div>
                        </div>
                        <div class="alert review-alert review-alert-danger">
                            <div class="alert-content">
                                <strong>Multiple Review Opportunities:</strong> The conference provides multiple review iterations before the final submission deadline. This allows you to refine your paper and avoid last-minute rejections by <b>IEEE Xplore®</b>. To maximize this benefit, submit your final paper well in advance of the due date, considering the time commitment involved for each TPC review.
                            </div>
                        </div>
                        <div class="alert review-alert review-alert-warning">
                            <div class="alert-content">
                                <strong>Unlimited Revisions Until Deadline:</strong> The conference offers as many review opportunities as you need before the final deadline.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

            <!-- Footer section -->
            <section id="organizers">
                <div class ="container-fluid">
                    <?php include '../includesHtml/final.html' ?>
                </div> 
            </section>
        </main>
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
    </body>
</html>                      