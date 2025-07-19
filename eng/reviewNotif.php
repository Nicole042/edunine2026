 
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Author</a></li>
                    <li>Peer_Review_Process_Notification</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  py-5">

                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/peerReview.jpg"  alt="Peer Review Outcomes">
                            </div>
                            <h2 class="display-6 fw-bold">Peer Review Process and Notification</h2>

                            <p class="fs-5 mb-4">Ensuring the originality and quality of published research is paramount for academic conferences. This is achieved through a rigorous three-step vetting process. First, submissions undergo prescreening, where editors ensure they meet basic formatting requirements, page limits, and align with the conference scope and topics. Qualified papers then progress to a double-blind or single-blind (depending on paper type) peer review stage. Here, anonymous experts in the field assess the research methodology, the novelty of findings, and the paper's contribution to the discipline. Finally, editors consider reviewer feedback and how authors incorporate revisions into the final version (camera-ready) before making a final acceptance decision. This meticulous process guarantees the publication and oral presentation of high-quality and impactful research.</p>
                        </div>
                    </div>    
                </div>
            </div>
        </section>

        <!-- Prescreening -->

        <section id="prescreen">
            <div class="container-fluid align-content-start pt-5 pb-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Author</a></li>
                    <li><a href="reviewNotif.php">Peer_Review_Process_Notification</a></li>
                    <li>Prescreening</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  pb-5">
                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/prescreening.jpg"  alt="Prescreening Image"> 
                            </div>
                            <h4 class="display-6 fw-bold">Prescreening</h4>
                            <p class="fs-5 mb-4"><b>Prescreening</b> serves as the first stage of quality control, guaranteeing manuscripts meet essential criteria before progressing to the rigorous peer review stage.</p>                             
                        </div>
                    </div>    
                </div>
            </div>
            <div class="container-fluid py-3 bg-body-secondary">
                <div class="row">
                    <div class= "col text-sm-left">
                        <p class="lh-sm">During this initial assessment, editors meticulously evaluate the following:</p>
                        <ul><li>
                                <b>Scope:</b> Does the paper's topic directly address the conference's categories and thematic focus and resonate with the target audience?</li> 
                            <li><b>Originality:</b> Is the work demonstrably original, free from plagiarism, and adheres to ethical research standards? Plagiarism detection software may be employed to assist this evaluation. </li>
                            <li><b>Clarity and Grammar:</b> Is the writing presented in clear, concise, and standard English, adhering to proper grammar and style? While a comprehensive language edit may not occur at this stage, basic checks for clarity and grammatical errors are conducted.</li> 
                            <li><b>Completeness:</b> Does the manuscript encompass all necessary sections (abstract, introduction, methodology, results, discussion, conclusion, references) as outlined in the conference guidelines and appropriate for the chosen paper type (full paper, work-in-progress, workshop proposal, doctoral symposium paper)?</li>
                            <li><b>Formatting:</b>  Does the manuscript strictly adhere to the conference's formatting guidelines, including font size, margins, reference style, and page limitations?</li></ul>

                        <p>Manuscripts that fall short of these criteria will be returned to the authors for revisions before further consideration. This applies to submissions received before the deadline. Papers received at the deadline that fail the prescreening may be rejected.</p>
                        <p><b>Prescreening</b> ensures a streamlined peer review process by guaranteeing reviewers receive well-formatted, thematically relevant manuscripts prepared for in-depth scientific evaluation. </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Peer Review -->

        <section id="peerReview">
            <div class="container-fluid align-content-start pt-5 pb-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Author</a></li>
                    <li><a href="reviewNotif.php">Peer_Review_Process_Notification</a></li>
                    <li>Peer_Review_Outcomes</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  pb-5">
                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/peerReviewer.jpg"  alt="Peer Review Process Image"> 
                            </div>
                            <h4 class="display-6 fw-bold">About Peer Review</h4>
                            <p class="fs-5 mb-4">Peer review is vital to the quality of published research. IEEE requires all conference papers to undergo peer review before oral presentation at the conference and consideration for publication in <b>IEEE Xplore®</b>. Peer review is a process in which a scientific paper is evaluated by a group of experts in the same field to ensure it meets the necessary standards for acceptance and publication. Explore peer-review models, requirements, criteria, and decisions!</p>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="container-fluid py-3 bg-body-white">
                <div class="row">
                    <div class= "col text-sm-left">
                        <h5 class="display-6 fw-bold">Peer-Review Models</h5>
                        <p class="lh-sm"><b>To increase the quality of submissions and maintain independent merit, the evaluation process will be:</b></p>
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item ml-2"><b> Double-blind</b><ul>
                                    <li><b>Anonymity:</b> Double-blind review offers the highest level of anonymity, where both reviewers and authors are unidentified. Papers submitted for review MUST NOT contain the authors’ names, affiliations, or any information that may disclose the authors’ identities. Please leave the author information lines as in the template; do not complete them.</li>
                                    <li><b>Self-citation:</b> You should cite your relevant previous work to avoid self-plagiarism and ensure a reviewer can access it and see the new contributions. However, the text should not explicitly state that the cited work belongs to the authors.</li>
                                    <li><b>Plagiarism:</b> Plagiarism, using someone else's ideas or words without proper credit, is easily detected by reviewers and can result in serious consequences. This includes rejection of your work or even damage to your reputation.  Be sure to cite your sources! Use a plagiarism checker available through educational institutions to ensure the originality of your submission. </li></ul></li>

                            <li class="list-group-item ml-2"><b>Single-blind</b><ul>
                                    <li><b>Identification:</b> In a single-blind review, reviewers remain anonymous while the authors' identities are known. Papers must include the authors’ names, affiliations, and any other information that may disclose the authors' identities, especially when including CVs and authors' backgrounds that are also evaluated.</li></ul></li></ol>

                        <p>Both models ensure that the reviewer can provide an honest and impartial evaluation of the paper.</p> 
                    </div>
                </div>
            </div>
            <div class="container-fluid py-3 bg-body-white">
                <div class="row">
                    <div class= "col text-sm-left">
                        <h5 class="display-6 fw-bold">IEEE Education Society Peer-Review Requirements</h5> 
                        <p>All papers at this conference will be peer-reviewed according to the requirements set forth in the <a href="https://ieee-edusociety.org/sites/ieeeedusoc/files/2020-06/education-society-sponsorship.pdf">IEEE Education Society Technical Co-sponsorship Details (3. Technical Program)</a>:</p>
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item ml-2">
                                <b>Independent Reviews:</b> Each paper will be reviewed by at least three independent reviewers.</li>
                            <li class="list-group-item ml-2"><b>Review Process:</b><ul>
                                    <li><b>Categories 1-3 Full and Work-in-Progress (WiP) papers</b> will undergo a <b><u>double-blind peer-review process</u></b> by default. Authors have the option to choose a <b>single-blind peer-review process</b>; however, the Program Committee and reviewers strongly recommend preparing full and WiP papers for <b>double-blind peer review</b>. This recommendation aims to minimize potential delays in the final notification due to reviewer reassignments. Reviewers have the option to decline reviewing papers that are not anonymized for double-blind review.</li>
                            <li><b>Category 4 Doctoral Symposium (DS) papers</b> will be reviewed in a <b><u>single-blind process</u></b>. Papers must contain the authors’ names, affiliations, and any other information that may disclose the authors' identities, as the included CVs and authors' backgrounds are also evaluated.</li>
by a TPC (Technical Program Committee) member. Papers must contain the authors’ names, affiliations, and any other information that may disclose the authors' identities, as the included CVs and authors' backgrounds are also evaluated.</li>   
                                </ul></li>                            
                            <li class="list-group-item ml-2"><b>Plagiarism detection:</b> If a reviewer notifies a plagiarism claim with evidence the Program Committee must investigate the claim. If plagiarism is confirmed, the paper will be rejected and IEEE will decide the appropriate actions after contacting the author for explanation. IEEE considers all plagiarism, including self-plagiarism, a serious offense. Learn more here <a href="https://www.ieee.org/publications/rights/plagiarism/plagiarism.html" class="border-white btn btn-primary btn-sm align-self-end" role="button">IEEE Plagiarism</a>.</li></ol>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-3 bg-body-white">
                <div class="row">
                    <div class= "col text-sm-left">
                        <h5 class="display-6 fw-bold">Peer-Review Criteria:</h5>
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
            <div class="container-fluid py-3 bg-info-subtle">
                <div class="row">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/peerRevNotification.jpg" alt="Peer Review Notification Image"> 
                            </div>
                            <h4 class="display-6 fw-bold">Peer-review Decision</h4>                     
                            <p class="fs-5 mb-4">Conference peer review occurs within a fixed window of time. All authors are notified of the peer review decision on their paper at the same time by e-mail. The acceptance is based on the reviews and the quality of the submissions. There is no target for the acceptance rate.</p>
                            <p class="fs-5 text-end">For the <b><u>Peer-Review Notification date</u></b> check <a href="index.php?id=dates" class="border-white btn btn-primary btn-sm align-self-end" role="button">Conference Schedule and Important Dates</a> on this website.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class= "col text-sm-left">
                        <h5 class="display-6 fw-bold">Possible Decisions</h5>
                        <p>The <b>Peer-Review Notification</b> you receive via email will detail the <b>decision on your paper</b> (all authors will receive this notification):</p>

                        <ol class="list-group list-group-numbered">

                            <li class="list-group-item ml-2"> <b> Clearly Accept:</b> Your paper content is accepted as is. You are asked to prepare your final camera-ready paper file and complete information if it contains anonymization. It is your choice to include some changes suggested by the reviewers or updates. Revise the English writing and proceed to prepare your final paper as indicated in the final paper instructions before submitting it to the conference. The final paper will be reviewed to verify that it meets the quality requirements of <b>IEEE Xplore®</b>.</li>


                            <li class="list-group-item ml-2"> <b> Conditionally Accepted with Minor Improvements:</b> Your paper will be accepted after you implement edits suggested by the reviewers regarding minor issues in content, format, and/or English language typographical and grammatical errors. You will be asked to provide a revised version, also prepared as indicated in the final paper instructions, which will again be reviewed by an <b>EDUNINE2026</b> Committee member to validate the quality requirements of <b>IEEE Xplore®</b>.</li>


                            <li class="list-group-item ml-2"> <b> Conditionally Accepted with Major Improvements:</b> Your paper is promising but needs more work and will undergo a full second round of review and assisted improvement. Your paper will be accepted after you implement edits suggested by the reviewers. You will be asked to provide a revised version, also prepared as indicated in the final paper instructions, which will again be reviewed by an <b>EDUNINE2026</b> Committee member to validate the quality requirements of <b>IEEE Xplore®</b>.</li>
                            
                            <li class="list-group-item ml-2"> <b>Conditionally Accepted as Work-in-Progress (WIP):</b> Your paper shows promise but requires significant restructuring, additional data, or further development to meet the standards of a full paper. Authors have the opportunity to convert their submission into a WIP paper, focusing on preliminary results and future directions. This allows for presentation at the conference, peer feedback, and continued research development. You will need to refocus the paper on the current state of research, emphasizing initial findings, methodology, and potential impact, and reduce its length and detail to fit the WIP format, highlighting key contributions and areas for further research.</li>


                            <li class="list-group-item ml-2"> <b> Reject:</b> Your paper will not be presented at the conference or published in the conference proceedings. If the content of the paper is not appropriate for this conference, we suggest that you submit your paper to another <b>IEEE Society</b> conference.</li></ol>
                            <p class="mt-4">The <b>Peer-Review Notification</b> will also include:</p><ul>
                                <li><b>Reviewer Feedback:</b> Specific comments and suggestions for improvement from the reviewers on the content of your paper. </li>
                                <li><b>Formatting and English Suggestions:</b> Recommendations for improving the formatting and language of your final paper (if applicable).</li></ul>
                    </div>
                </div>
            </div>
        </section>
        
           <!-- Final Paper Preparation and Review -->

        <section id="nextFinalPaperRev">
            <div class="container-fluid align-content-start pt-5 pb-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Author</a></li>
                    <li><a href="reviewNotif.php">Peer_Review_Process_Notification</a></li>
                    <li>Next_Final_Paper_Preparation</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  pb-5">
                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/finalPaperReview.jpg"  alt="Final Paper Preparation and Review Image"> 
                            </div>
                            <h4 class="display-6 fw-bold">Next Steps for Accepted Papers: Final Paper Preparation</h4>
                            <p class="fs-5 mb-4"><b>Congratulations on having your paper accepted!</b> Before final acceptance by the <b>IEEE EDUNINE 2026 Technical Program Committee (TPC)</b>, all accepted papers (including those with "Clearly Accept," "Conditionally Accepted with Minor Improvements", "Conditionally Accepted with Major Improvements", or "Conditionally Accepted as Work-in-Progress (WIP)" decisions) must be prepared as final (camera-ready) papers that meet <b>IEEE's quality standards</b>. A final review is conducted by a TPC member to ensure your paper is publication-ready.</p>
                            <p class="fs-5 mb-4">We have compiled clear guidelines (<b>Final Paper Preparation and Submission</b>) to help you transform your accepted paper into a final, publication-ready paper. These guidelines, available <b>at the time of your Peer-Review Notification</b>, include detailed descriptions and best practices for each step.  In addition, you'll receive access to IEEE links and tools you need to use to streamline the process.</p>

                            <p class="fs-4 text-end">At the Peer-Review Notification date access <a href="index.php?id=dates" class="border-white btn btn-primary btn-sm align-self-end" role="button">Final Paper Preparation</a> with the <b>Final Paper Preparation and Submission Guidelines</b> on this website.</p>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="container-fluid py-3 bg-body-secondary">
                <div class="row">
                    <div class= "col text-sm-left">
              <h6 class="display-6 fw-bold">Quick Overview of the Final Paper Preparation and Submission Guidelines</h6>
                        
                        <p>Here's a quick overview of the key steps involved:</p>
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item ml-2"> <b>Incorporate Reviewer Feedback (if applicable): </b> Carefully consider and incorporate feedback from reviewers, especially for papers with "Conditionally Accepted with Minor or Major Improvements" or "Conditionally Accepted as Work-in-Progress" decisions. This is mandatory for conditionally accepted papers but optional for outright acceptances.</li>
                           <li class="list-group-item ml-2"> <b>Ensure English Language Quality:</b> We encourage all authors to ensure their final paper meets the required standard for academic writing. Review your manuscript for grammar, style, and adherence to academic writing conventions. Use tools to evaluate your English proficiency and consider having a colleague or editing service review your manuscript for language fluency.</li>

    <li class="list-group-item ml-2"> <b>Adhere to Formatting Requirements:</b> Follow the prescribed template styles and formats for each element in your paper. <b>IEEE Xplore®</b> uses these styles for automatic conversion to other electronic formats. Incorrect formatting may result in conversion failures and prevent publication.</li>

    <li class="list-group-item ml-2"> <b>Ensure Information Consistency:</b> Verify that all information in your paper matches the details provided in the <b>EDUNINE2026 OpenConf</b> database.</li>

    <li class="list-group-item ml-2"> <b>Maintain Originality:</b> Use a plagiarism checker to verify your work's originality. Your paper will be checked by the <b>IEEE CrossCheck</b> plagiarism detection tool. IEEE considers all plagiarism, including self-plagiarism, a serious offense, which can lead to rejection and severe ethical and legal consequences. Learn more here <a href="https://www.ieee.org/publications/rights/plagiarism/plagiarism.html" class="border-white btn btn-primary btn-sm align-self-end" role="button">IEEE Plagiarism</a>.</li>

    <li class="list-group-item ml-2"> <b>Achieve IEEE Xplore® Compliance:</b> Use the provided <b>PDFeXpress</b> tool to ensure your final PDF is IEEE Xplore®-compliant.</li>

    <li class="list-group-item ml-2"> <b>Sign the Electronic Copyright Form:</b> At least one author must electronically sign the copyright form on behalf of all authors.</li>

    <li class="list-group-item ml-2"> <b>Submit the Final PDF (Camera-Ready) Paper:</b> Upload the PDFeXpress PDF Output File as the final paper for your submission ID by the specified deadline.</li>

    <li class="list-group-item ml-2"> <b>Register for the Conference:</b> At least one author must register for the conference to present the paper orally. Only presented papers are published by <b>IEEE Xplore®</b>.</li></ol>

    <p class="mx-4">Failing to meet these criteria may result in exclusion from the conference and publication.</p>
                    </div>
                </div>
            </div>
    <div class="container-fluid py-3 bg-body-tertiary">        
    <div class="row mx-4">
                    <div class= "col text-sm-left">
                        <h6 class="display-6 fw-bold">Final Review by TPC Members</h6>
                        <p>This stage ensures your accepted paper meets the high standards of the <b>IEEE Education Society</b> and <b>IEEE Xplore®</b> for final acceptance. A TPC member will conduct a final review to verify your paper adheres to the provided Final Paper Preparation Guidelines.  Following these guidelines meticulously ensures a smooth and successful publication process.</p>

                        <h4 class="fw-bold mx-4">Second Chance for Conditional Acceptances</h4>

                        <p class="lh-sm">The TPC review offers an opportunity for <b><u>Conditionally Accepted papers to achieve final acceptance</u></b>. By carefully revising and reorganizing your paper based on reviewer and TPC recommendations, you can address any shortcomings identified during the initial review process.</p>
                    
                        <h4 class="fw-bold mx-4">Multiple Review Opportunities</h4>

                        <p class="lh-sm">The conference provides multiple review iterations before the final submission deadline. This allows you to refine your paper and avoid last-minute rejections by <b>IEEE Xplore®</b>. To maximize this benefit, submit your final paper well in advance of the due date, considering the time commitment involved for each TPC review.</p>
                        
                        <h4 class="fw-bold mx-4">Unlimited Revisions Until Deadline</h4>

                        <p class="lh-sm">The conference offers as many review opportunities as you need before the final deadline.</p>
                    </div>
                </div>
            </div>
        </section>

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