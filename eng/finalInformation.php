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
    <title> EDUNINE2026 English Website: Final Paper Guidelines, Review Notification and Sumbission </title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Modern Card -->
    <link href="../css/stylevenue.css" rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link href="../css/EDU9Conferences.css" rel="stylesheet">
    <link href="../css/edu9parts.css" rel="stylesheet">

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

    <!-- Main content -->
    <main>
        <section id="top">
            <div class="row py-5 px-5 align-items-center">
                <div class="col-md-5 col-12 mb-3 mb-md-0 text-center">
                    <img src="../images/decoration/finalPaper.jpg" alt="Final Paper Instructions Image"
                        class="img-fluid" style="max-width:100%; height:auto;">
                </div>
                <div class="col-md-7 col-12">
                    <div class="container-peerReview">
                        <h1>Final Paper Preparation</h1>
                        <p class="lead">After acceptance, all papers go through a second review by the EDUNINE Program
                            Committee to ensure they meet publication quality standards, follow the correct procedures,
                            and fit the assigned category. If your paper was conditionally accepted (with minor or major
                            revisions), you must improve both the content and language based on reviewer feedback to
                            meet category requirements.

                            To ensure smooth publication in IEEE Xplore, final papers must be converted to PDF using PDF
                            eXpress and submitted along with a copyright transfer agreement to IEEE. High publishing
                            standards are important, so multiple review steps are included. To make the most of this
                            final review, please submit your revised paper well before the deadline, as each review
                            takes time and attention.

                            This section offers a complete guide with clear, step-by-step instructions and helpful tips.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="py-5 px-5 border rounded p-3 shadow-sm bg-light">
                    <h2 class="text-center mb-3">Table of Content</h2>
                    <ul class="list-unstyled">
                        <li class="nav-item"><a class="nav-link px-1 pt-2" href="#step1">Step 1: Addressing the
                                Reviewers'
                                Recommendations and Revising Your Paper According to IEEE Standards</a></li>
                        <li class="nav-item"><a class="nav-link px-1 pt-2" href="#step2">Step 2: Verifying Originality
                                and
                                Absence of Plagiarism</a></li>
                        <li class="nav-item"><a class="nav-link px-1 pt-2" href="#step3">Step 3: Addressing English
                                Language
                                Issues and Proofreading Your Paper</a></li>
                        <li class="nav-item"><a class="nav-link px-1 pt-2" href="#step4">Step 4: Reviewing Paper
                                Formatting
                                compliance with the IEEE Conference Templates</a></li>
                        <li class="nav-item"><a class="nav-link px-1 pt-2" href="#step5">Step 5: Verifying Information
                                in
                                the EDUNINE2026 SUBMISSION SYSTEM System</a></li>
                        <li class="nav-item"><a class="nav-link px-1 pt-2" href="#step6">Step 6: Generate an IEEE
                                Xplore®-compliant PDF of your paper</a></li>
                        <li class="nav-item"><a class="nav-link px-1 pt-2" href="#step7">Step 7: Complete and Sign the
                                Copyright Form</a></li>
                        <li class="nav-item"><a class="nav-link px-1 pt-2" href="#step8">Step 8: Upload the Final Paper
                                as
                                an IEEE Xplore®-Compliant PDF to the EDUNINE2026 Submission System</a></li>
                        <li class="nav-item"><a class="nav-link px-1 pt-2" href="#step9">Step 9: Register at least one
                                Author of the paper at the Conference</a></li>
                        <li class="nav-item"><a class="nav-link px-1 pt-2" href="#notifications">Final Paper Review
                                Notifications</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Step 1: Responding to Reviewer Comments and Revising Your Paper -->
        <section id="step1" class="py-5 px-5">
            <div class="modern-card position-relative mb-4 py-5 px-5">
                <h2>Step 1: Addressing the Reviewers' Recommendations and Revising Your Paper According to IEEE
                    Standards
                </h2>
                <div class="row">
                    <div class="col-md-3 col-12 mb-3 mb-md-0 text-center">
                        <img src="../images/decoration/fpAddressFeedback.jpg" alt="Preparing your Final Paper"
                            class="img-fluid" style="max-width:100%; height:auto;">
                    </div>
                    <div class="col-md-9 col-12">
                        <p>Getting your final paper ready for submission is an important step to ensure it is
                            accepted and included in the conference proceedings. Make sure to follow the reviewers’
                            suggestions, meet your paper's category requirements, and follow IEEE standards.
                            Double-check
                            all key parts of your submission. By doing this, you help ensure your paper meets the
                            high-quality standards needed for publication in the IEEE Xplore Digital Library.</p>
                    </div>
                </div>
                <div class="py-3">
                    <p><b> 1. Incorporating Reviewers' Comments:</b></p>
                    <p>Carefully review and incorporate the feedback
                        provided by the reviewers inline with the category of your paper. Although your work
                        has been positively evaluated, the reviewers have identified specific areas for
                        improvement that must be addressed before final acceptance. Whether the
                        <b>improvements are minor or major (accepted with minor or major improvements), they
                            are mandatory</b> to meet the publication's quality standards.
                    </p>
                    <p>Even if your paper is <b>"clearly accepted"</b>,
                        addressing the reviewers' suggestions will enhance its clarity, accuracy, and
                        overall quality. Ensure that you make the required adjustments and submit the
                        revised version for a second review by a Technical Committee member to ensure
                        compliance with IEEE standards.</p>
                    <p><b> 2. Aligning with Conference and IEEE
                            Education Society Focus:</b></p>
                    <p>Ensure that your final paper aligns with the focus
                        of the EDUNINE Conference and the IEEE Education Society. The focus should be on
                        "The theory and practice of Education in Engineering, Computation, Technology, and
                        educational technology involved in the effective delivery of domain knowledge in
                        fields within IEEE's scope of interest".</p>
                    </li>
                    <p><b> 3. Reviewing Authors' Information and
                            References:</b></p>
                    <p>Authors must meticulously verify the accuracy of their paper, including
                        the authors' names, initials, affiliations, and references. These are common sources
                        of errors and should be corrected before submission. Note that no further
                        corrections will be made by the publisher after publication.</p>
                    </li>
                    <p><b> 4. Adhering to Ethical Guidelines for
                            Scientific Publishing:</b></p>
                    <p>Authors must follow IEEE's ethical publishing
                        guidelines, which cover authorship, citation practices, plagiarism prevention, and
                        the publication of original research. Familiarize yourself with IEEE’s publishing
                        ethics: <a
                            href="https://conferences.ieeeauthorcenter.ieee.org/author-ethics/ethical-requirements/">
                            IEEE Author Center, Author Ethics, Ethic Requirements</a>
                        (https://conferences.ieeeauthorcenter.ieee.org/author-ethics/ethical-requirements/).
                    </p>
                    <ul>
                        <li><b>i. Authorship Criteria:</b>Ensure that all contributors meet IEEE's
                            authorship criteria, which include making significant intellectual
                            contributions, participating in the drafting or reviewing process, and approving
                            the final version for publication. Contributors who do not meet these criteria
                            should be acknowledged in the Acknowledgment section.</li>
                        <li><b>ii. Citation Practices:</b>Citations are necessary to enhance research
                            reproducibility. Always cite sources when:<ul>
                                <li>
                                    Directly quoting: Use quotation marks and include a citation.</li>
                                <li>
                                    Paraphrasing or summarizing: Provide a citation for restating
                                    information.</li>
                                <li>
                                    Using data, research results, or graphics: Cite the original source.
                                </li>
                                <li>
                                    This also applies to your own prior work—when in doubt, cite.</li>
                            </ul>
                        </li>

                        <li><b>iii. Inappropriate Use of Citations:</b>Do not cite irrelevant sources to
                            artificially inflate citation metrics. Only cite sources that directly
                            contribute to your paper.</li>

                        <li><b>iv. Accurate Data Reporting:</b>Maintain the highest standards of data
                            accuracy. Avoid fabrication, falsification, and image manipulation, which are
                            violations of ethical publishing standards.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Step 2: Verifying Originality and Absence of Plagiarism -->
        <section id="step2" class="py-5 px-5 bg-light">
            <div class="modern-card position-relative mb-4 py-5 px-5">
                <h2>Step 2: Verifying Originality and Absence of Plagiarism</h2>
                <div class="row">
                    <div class="col-md-3 col-12 mb-3 mb-md-0 text-center">
                        <img src="../images/decoration/IEEECrossCheck.jpg" alt="Plagiarism Check" class="img-fluid"
                            style="max-width:100%; height:auto;">
                    </div>
                    <div class="col-md-9 col-12">
                        <p>Plagiarism occurs when someone uses another person’s ideas, words, or work
                            without proper acknowledgment, effectively presenting it as their own. It includes
                            copying text verbatim, paraphrasing without citation, or failing to credit sources.
                            Self-plagiarism, another form of academic misconduct, happens when authors reuse their
                            previously published work in a new submission without proper disclosure or citation.</p>
                        <p>Plagiarism undermines the integrity of academic research, devalues genuine
                            contributions, and violates ethical standards. To prevent plagiarism, authors must
                            ensure proper citations for all sources and provide originality in their work. Adhering
                            to these principles not only upholds academic honesty but also contributes to the
                            advancement of knowledge in a credible and ethical manner.</p>
                    </div>
                </div>
                <div class="py-3">
                    <p> <b>1. Publishing Original Research:</b></p>
                    <p>Ensure your paper contains original research that
                        has not been published elsewhere and is not under review by any other publication
                        simultaneously (Multiple Submissions). Multiple Submissions: This practice is
                        considered unethical and may lead to suspension from publication in IEEE.</p>

                    <p><b>2. IEEE's Plagiarism Policy:</b></p>
                    <p>Ensure your final paper is free from plagiarism
                        and self-plagiarism. Many universities use plagiarism detection tools, and these are
                        also available for researchers. IEEE requires all submissions to undergo a
                        plagiarism check with IEEE CrossCheck to verify the originality of submissions. </p>

                    <p>Plagiarism involves using someone else's ideas,
                        results, or words without attribution. IEEE considers any form of plagiarism as
                        unethical. Before submission, check your paper using a plagiarism detection tool.
                    </p>
                    <p> If your research evolves over time (e.g., from a
                        work in progress paper to a full paper), you must cite the earlier version and
                        indicate how the later version differs to avoid self-plagiarism.</p>
                    <ul>
                        <li><b>i. Similarity Threshold:</b> The overall similarity rate should not exceed
                            30%, and similarity to any single source should not exceed 10%. Submissions
                            exceeding these thresholds will trigger a review by the conference chair.<br>
                            If plagiarism is suspected, IEEE will investigate the matter, with severe
                            academic and professional consequences, including the retraction of your paper
                            and the suspension of your publishing privileges.</li>
                    </ul>
                    <p><b>3. Understanding Self-Plagiarism and How to Avoid It:</b></p>
                    <p>Self-plagiarism refers to the act of reusing
                        substantial portions of your own previously published work without proper citation,
                        presenting it as new and original. While it may seem harmless, self-plagiarism is a
                        serious ethical violation, as it misleads readers and distorts the concept of
                        scholarly advancement. In fact, it is treated with the same severity as plagiarism
                        involving others work. This unethical practice can have significant repercussions,
                        including the rejection of your submission, disqualification from IEEE Xplore®, and
                        even a ban from future IEEE publications. To avoid self-plagiarism:</p>
                    <ul>
                        <li>
                            <b>i. Acknowledge Prior Work:</b> If you are building on or referencing your own
                            previous research, always ensure that it is properly cited. Clearly indicate how
                            the new submission differs from your earlier work, and remember that reused
                            material should not exceed 10% of the total content.
                        </li>
                        <li>
                            <b>ii. Do Not Republish Entire Sections:</b> Avoid using large sections of
                            previously published work without citation. Even if a portion of your prior
                            research is reused, it must be acknowledged and clearly distinguished from the
                            new material in your paper.
                        </li>
                        <li>
                            <b>iii. Clarify the Evolution of Your Research:</b> If your current submission
                            builds upon past work, explicitly describe the differences between this new
                            paper and your previous publications. Highlight how your research has advanced
                            or evolved, emphasizing the unique contributions of the current paper.
                        </li>
                    </ul>
                    <p>It is vital to understand that self-plagiarism
                        involves not just text, but also figures, tables, and other materials previously
                        published by you. Reusing these elements without proper disclosure is considered
                        unethical and violates IEEE’s policies.</p>
                    <p>By maintaining transparency in your citations and ensuring that your
                        work remains genuinely original, you uphold academic integrity and contribute
                        meaningfully to the scientific community. Avoiding both plagiarism and self-plagiarism
                        is essential to maintaining the trust and respect of your peers and ensuring your
                        research is recognized as authentic and valuable.</p>
                </div>
        </section>

        <!-- Step 3: Addressing English Language Issues and Proofreading Your Paper -->
        <section id="step3" class="py-5 px-5">
            <div class="modern-card position-relative mb-4 py-5 px-5">
                <h2>Step 3: Addressing English Language Issues and Proofreading Your Paper</h2>
                <img src="../images/decoration/fpAddressEnglish.jpg" alt="English Language Check"
                    class="img-fluid float-start me-4 mb-3" style="max-width:100%; height:auto;">
                <p>As the official language of the conference is English, careful attention to linguistic and
                    typographical accuracy is required. Proofread your paper thoroughly to correct spelling,
                    grammar, punctuation, and other errors to meet the conference's language standards.</p>
                <p>Although papers are not rejected solely for language deficiencies during peer review, your
                    paper's acceptance is contingent upon improving technical English. Papers accepted with major or
                    minor improvements may undergo multiple reviews before the final paper submission deadline
                    (refer to the Timetable in this page). Failure to meet language standards will result in
                    rejection, and the paper will not proceed for further review in IEEE Xplore®.</p>
                <p>For clear communication with a global audience, follow these guidelines for
                    improving technical English:</p>
                <ul>
                    <li> Use concise and clear sentences; avoid unnecessary verbosity.</li>
                    <li>Simplify overly complex or formal language.</li>
                    <li>Define acronyms upon their first usage.</li>
                    <li>Organize the paper logically for smooth flow.</li>
                </ul>
                <p>If you're struggling with <b>English</b> proficiency, consider seeking
                    help from colleagues with strong <b>English</b> skills or using institutional writing
                    resources. Avoid relying on software translators as they often fail to deliver
                    high-quality prose. If necessary, engage professional proofreading services. IEEE offers
                    discounted rates through agreements with several services—details can be found at the <a
                        href="https://ieeeauthorcenter.ieee.org"> IEEE Author Center </a>.</p>
            </div>
        </section>

        <!-- Step 4: Reviewing Paper Formatting compliance with the IEEE Conference Templates -->
        <section id="step4" class="py-5 px-5 bg-light">
            <div class="modern-card position-relative mb-4 py-5 px-5">
                <h2>Step 4: Reviewing Paper Formatting compliance with the IEEE Conference Templates</h2>
                <img src="../images/decoration/templates.jpg" alt="Adressing English writing"
                    class="img-fluid float-start me-4 mb-3" style="max-width:100%; height:auto;">
                <p>Upon submission, all conference proceedings are automatically converted to HTML and other media by
                    IEEE
                    Xplore® software. Predefined formats and styles are markers for identifying text elements for
                    convertion. Strict compliance with formats and styles is crucial. Non-compliance will prevent the
                    paper
                    to be converted successful to other media formats and from being included in IEEE Xplore®.</p>
                <p>Please use the <b>MS-Word template conference-template-a4.docx</b> or the <b>LaTeX template
                        IEEE-conference-template-062824.pdf</b> as visual references for the required format and layout
                    of
                    your paper.</p>
                <p>Ensure that your paper adheres to the following:</p>
                <ul>
                    <li>Format the paper for A4 printing, using the <b>IEEE Manuscript Templates for Conference
                            Proceedings</b>, which are Xplore®-compliant.</li>
                    <li>LaTeX users should use the "conference" option.</li>
                    <li>Do not alter template formatting (e.g., margins, line spacing).</li>
                    <li>Use predefined styles in the MS-Word template rather than manually adjusting document elements.
                    </li>
                    <li>Remove any template text (e.g., footer in MS-Word in the first page XXX-X-XXXX-XXXX-X/XX/$XX.00
                        ©20XX IEEE).</li>
                    <li>Do not include page numbers or headers/footers.</li>
                    <li>Follow IEEE style for references and citations.</li>
                </ul>
                <p>Conference Paper Requirements:</p>
                <ul>
                    <li><b>Full papers:</b> Maximum 6 pages, including references, figures, tables, and a 150-word
                        abstract.
                    </li>
                    <li><b>Work-in-progress (WIP) papers:</b> Maximum 4 pages, including references, figures, tables,
                        and a
                        150-word abstract.</li>
                    <li><b>Doctoral Symposium (DS) papers:</b> Maximum 4 pages, including references, figures, tables,
                        and a
                        150-word abstract.</li>
                    <li><b>Workshop/plenary/panel papers:</b> Abstract of 150 words, up to 6 pages for full papers or 2
                        pages for short papers.</li>
                </ul>
                <p><i><u>Papers exceeding the page limit will not be accepted.</u></i>
            </div>
        </section>

        <!-- Step 5: Verifying Information in the EDUNINE2026 SUBMISSION SYSTEM System -->
        <section id="step5" class="py-5 px-5">
            <div class="modern-card position-relative mb-4 py-5 px-5">
                <h2>Step 5: Verifying Information in the EDUNINE2026 SUBMISSION SYSTEM System</h2>
                <img src="../images/decoration/paperInfoCheck.jpg" alt="Checking uploaded information"
                    class="img-fluid float-start me-4 mb-3" style="max-width:100%; height:auto;">
                <p>Review and update the title, abstract, author names, and affiliations in the EDUNINE2026 submission
                    system. Ensure accuracy, as this information will be used for author and paper indexing. Any changes
                    can
                    be made through the Edit options.</p>
                <p>The order of authors in the paper should match the one listed in the submission system.</p>
                <p>If an author appears in multiple papers, make sure their name is listed consistently across all
                    submissions. In the Conference Proceedings Author Index, each author should appear only once, with
                    all
                    their respective papers grouped under their name. Consistency in spelling an author's name across
                    multiple papers is important for several reasons:</p>
                <ul>
                    <li>Accurate Attribution: Inconsistent spelling can lead to fragmented citation records, reducing
                        proper
                        attribution and visibility of an author's work.</li>
                    <li>Correct Publication Count: Multiple variations of an author's name can result in an inaccurate
                        publication count, affecting their academic profile.</li>
                    <li>Impact on Ranking: Publication rankings rely on citation counts. Inconsistent name spelling can
                        distort statistics, affecting an author's ranking.</li>
                    <li>Professional Recognition: Accurate name spelling ensures proper recognition of an author's body
                        of
                        work, enhancing their academic reputation.</li>
                </ul>
                <p>Consistent name spelling ensures that an author's contributions are correctly tracked, cited, an
                    d recognized.</p>
            </div>
        </section>

        <section id="step6" class="py-5 px-5 bg-light"">
            <div class=" modern-card position-relative mb-4 py-5 px-5">
            <h2>Step 6: Generate an IEEE Xplore®-compliant PDF of your paper</h2>
            <img src=" ../images/decoration/IEEEPdfeXpress.jpg" alt="PDFexpress" class="img-fluid float-start me-4 mb-3"
                style="max-width:100%; height:auto;">
            <p><b>PDF eXpress</b> is a free service for <b> IEEE </b> conferences that allows authors to create IEEE
                Xplore-compliant PDFs (conversion function) from <b> DOC /DOCX /LaTeX files or to check self-created
                    PDFs</b> for <b> IEEE Xplore®</b> compatibility (PDF Check function)</p>
            <h6 class="text-danger"> PDF eXpress Access Information </h6>
            <p>Please note that access to <b>PDF eXpress</b> will be available after the <b>Peer-Review Notification
                    date</b>. The conference has to await for the official access link and updated guidelines from IEEE.
                We will share all necessary information with authors as soon as it becomes available. Thank you for your
                understanding.
            <h6> Before creating/checking a PDF file</h6>
            <p>Proofread your source document thoroughly to confirm that it will require no revision. </p>
            <p><b>IMPORTANT: Any changes made to a PDF after an IEEE PDF eXpress conversion may invalidate IEEE Xplore®
                    compatibility. Please, convert the file again with IEEE PDF eXpress.</b> </p>

            <!-- CORREGIR SEGÚN LAS INSTRUCCIONES RECIBIDAS DESPUES DE LA SOLICITUD DE APROBACIÓN DEL LOA
            <div class="border bg-light">
                <h6 class="display-6 fw-bold "> Access the PDEeXpress site</h6>
                <h6 class="mb-4">Click the link to access <a href="https://ieee-pdf-express.org/"
                        class="border-white btn btn-primary btn-sm" role="button"> IEEE PDF eXpress site</a>
                    (https://ieee-pdf-express.org/).</h6>
            </div>
            <div class="border gy-4 mt-4 text-left">
                <h6 class=" fw-bold mx-2 mt-4">You'll see the <b>PDFeXpress</b> login screen:</h6>
                <figure class="figure">
                    <img class="shadow p-3 bg-body-tertiary rounded img-fluid mx-auto d-block mb-0"
                        src="../images/pdfexp/Login.png" alt="IEEE PDFeXpress Login Screen" />
                    <figcaption class="figure-caption text-center"><small><i> IEEE PDFeXPress Login Screen </i></small>
                    </figcaption>
                </figure>
                <p class="lh-sm"> Enter the following information: </p>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item ml-2"> <b>Conference Id: 62377X </b> </li>
                    <li class="list-group-item ml-2"> <b>First-time users should do the following:</b>
                        <ul>
                            <li> Select the <b>Create account</b> link
                                <ul>
                                    <li> Enter information as prompted. </li>
                                    <li> An Online confirmation will be displayed, and an email confirmation will be
                                        sent verifying your account setup. </li>
                                </ul>
                            </li>
                        </ul>
                    <li class="list-group-item ml-2"> <b>Previous users of PDF eXpress:</b>
                        <ul>
                            <li> <i>Email Address</i>: enter the email address of the previous <b>PDF eXpress</b> use.</li>
                            <li> <i>Password</i>: enter the corresponding password. </li>
                            <li> <b> LOGIN</b> </li>
                            <li> The system prompts you to link this new conference ID to your account, reply YES. The
                                system will show you your profile information and you can update it. Remember to click
                                <b>SUBMIT</b> in each case.</li>
                        </ul>
                    </li>
                </ol>
                <figure class="figure">
                    <img class="shadow p-3 bg-body-tertiary rounded img-fluid mx-auto d-block mb-0"
                        src="../images/pdfexp/LoginSuccess.png" alt="IEEE PDFeXpress Login Success" />
                    <figcaption class="figure-caption text-center"><small><i> After SUBMIT </i></small></figcaption>
                </figure>
                <figure class="figure">
                    <img class="shadow p-3 mb-0 bg-body-tertiary rounded img-fluid mx-auto d-block"
                        src="../images/pdfexp/CreateNewTitle.png" alt="IEEE PDFeXpress Create New Title" />
                    <figcaption class="figure-caption text-center"><small><i>Create a new PDF file with
                                PDFeXpress</i></small></figcaption>
                </figure>

                <p class="lh-sm"> After you log in, you can <b>create a pdf file from a docx or LaTeX file or check a
                        pdf file </b> final paper by selecting <b>Dashboard</b> from the left menu.</p>
                <p class="lh-sm">Select CREATE NEW TITLE and follow the 4 steps shown in the figure</p>
            </div>
            <figure class="figure">
                <img class="shadow p-3 mb-0 bg-body-tertiary rounded img-fluid mx-auto d-block"
                    src="../images/pdfexp/Dashboard.png" alt="IEEE PDFeXpress Dashboard Screen" />
                <figcaption class="figure-caption text-center"><small><i>IEEE PDFeXPress Dashboard Screen</i></small>
                </figcaption>
            </figure>
            <p class="lh-sm">If the conversion of the file to a PDF complaint IEEE Xplore file is successfully created,
                the message is <b>SUCCESS - File has been converted successfully</b> Click on OK</p>
            <p class="lh-sm">If an <b>error</b> occurs (see Status), it will be reported:</p>
            <ol class="list-group list-group-numbered">
                <li class="list-group-item ml-2"> Manual Request: File Type Not Automated - conversion will be performed
                    next business day </li>
                <li class="list-group-item ml-2">Error = Please check your email for additional information</li>
                <li class="list-group-item ml-2">Upload Incomplete = Click on the "Try Again" link to complete the
                    upload of the file</li>
            </ol>
            <figure class="figure">
                <img class="shadow p-3 mb-0 bg-body-tertiary rounded img-fluid mx-auto d-block"
                    src="../images/pdfexp/CreateResult.png" alt="IEEE PDFeXpress Result Screen" />
                <figcaption class="figure-caption text-center"><small><i>IEEE PDFeXPress Results</i></small>
                </figcaption>
            </figure>
            <p class="lh-sm">If the PDF file was created successfully, it shows the ID of the created PDF file, the
                title of the paper you entered and the Status = Pass.</p>
            <p class="lh-sm">At the end of the line, you will find icons. The first icon allows you to download the file
                that needs to be uploaded as your final paper on EDUNINE2026 submission system. Carefully review the
                file to ensure it displays exactly as intended, then upload this file as the final PDF for your
                submission.</p>
            <figure class="figure">
                <img class="shadow p-3 mb-0 bg-body-tertiary rounded img-fluid mx-auto d-block"
                    src="../images/pdfexp/download.png" alt="IEEE PDFeXpress icons" />
                <figcaption class="figure-caption text-center"><small><i>PDF eXpress download icon</i></small>
                </figcaption>
            </figure>
            <p class="mb-5" &nbsp;</p>
            -->
            </div>
        </section>

        <!-- Step 7: Complete and Sign the Copyright Form -->
        <section id="step7" class="py-5 px-5">
            <div class="modern-card position-relative mb-4 py-5 px-5">
                <div>
                    <h2>Step 7: Complete and Sign the Copyright Form</h2>
                    <img src="../images/decoration/IEEEeCF.jpg" alt="IEEE electronic Copyright Form"
                        class="img-fluid float-start me-4 mb-3" style="max-width:100%; height:auto;">
                    <p> After submitting the final version of your paper, you are also required to
                        complete the <b>IEEE Copyright Form</b>. Please note that IEEE no longer accepts
                        digitized or PDF/Word versions of this form. It must be submitted online through the
                        designated platform.</p>
                </div>
                <div class="clearfix"></div>
                <div class="border w-100 bg-light rounded p-4 text-xenter shadow-sm">
                    <h6 class="text-danger">Access the IEEE Copyright site</h6>
                    <p> Please note that access to complete and submit the <b>IEEE Copyright Form</b> will be available
                        after the <b>Peer-Review Notification date</b>. The conference has to await for the official
                        access
                        link and updated guidelines from IEEE. We will share all necessary information with authors as
                        soon
                        as it becomesavailable. Thank you for your understanding.
                </div>
                <div class="pt-4">
                    <p> After submission, IEEE will send you an e-mail with a copy copyrighttransfer agreement
                        of the paper for
                        you and your co-authors. For more information on this process, please refer to the <a
                            href="https://www.ieee.org/publications_standards/publications/rights/copyrightmain.html">
                            IEEE
                            Electronic Copyright Form information page</a>.</i></p>
                    <p> Please DO NOT send that copy to EDUNINE by email; it is intended for the authors' records only.
                    </p>
                </div>
            </div>
        </section>

        <!-- Step 8: Upload the Final Paper as an IEEE Xplore®-Compliant PDF to the EDUNINE2026 Submission System -->
        <section id="step8" class="py-5 px-5 bg-light">
            <div class="modern-card position-relative mb-4 py-5 px-5">

                <h2>Step 8: Upload the Final Paper as an IEEE Xplore®-Compliant PDF to the EDUNINE2026 Submission System
                </h2>
                <img src="../images/decoration/submissionFinalPapers.jpg" alt="Final Papers submission"
                    class="img-fluid float-start me-4 mb-3" style="max-width:100%; height:auto;">
                <p> This is a brief summary of all the recommendations from the previous steps to guide you in
                    submitting
                    your final paper successfully. </p>
                <p> Please <b>upload the PDF generated by PDFeXpress</b> for a second review by a Technical Program
                    Committee member. Papers with conditional acceptance (major/minor revisions or reformatted as Work
                    in
                    Progress) may require multiple reviews. To allow time for revisions, submit your final paper as
                    early as
                    possible before the deadline. The last review will occur after the deadline (refer to the Timeline).
                    Failure to meet editorial requirements may result in rejection by IEEE Xplore®, delaying the
                    publication
                    of proceedings and affecting all authors.</p>
                <p> To upload your final paper to the EDUNINE2026 SUBMISSION SYSTEM Ensure your file is
                    PDFeXpress-compatible with IEEE Xplore®. If you encounter errors, contact us at edunine@edunine.eu
                    with
                    the information to identify your paper in our SUBMISSION SYSTEM and the error details. Please DO NOT
                    email the file, as we cannot upload or update submissions due to personal data protection laws. You
                    may
                    upload revised versions as needed, but always regenerate the PDF using PDFeXpress after any changes.
                </p>
                <p> Ensure the title, abstract, keywords, and author details in THE EDUNINE2026 SUBMISSION SYSTEM match
                    exactly with those in your PDF file. To update paper information, log in using the Edit Submission
                    option and click Submit Changes to save updates. For consistency, any changes to the paper content
                    should also be updated in EDUNINE2026 SUBMISSION SYSTEM.</p>

                <!-- ADD LINK TO THE SUBMISSION SYSTEM -->
                <!-- ADD INSTRUCTIONS FOR THE SUBMISSION SYSTEM -->
            </div>
        </section>

        <!-- Step 9: Final Review and Submission Confirmation -->
        <section id="step9" class="py-5 px-5">
            <div class="modern-card position-relative mb-4 py-5 px-5">
                <h2>Step 9: Final Review and Submission Confirmation</h2>
                <img src="../images/decoration/registration.jpg" alt="Conference Registration"
                    class="img-fluid float-start me-4 mb-3" style="max-width:100%; height:auto;">
                <p> Each accepted paper must be presented at the conference by one of its authors. <b>At least one
                        author</b> of an
                    accepted paper is required to register for the conference, pay the registration fee, and present the
                    paper during the event. This is a prerequisite for the paper to be included in the conference
                    proceedings and submitted to the <b>IEEE Xplore®</b> digital library. To complete your registration,
                    please
                    visit the <a href="fees.php">Fees and Registration<a> page on this website.</p>
                <p> <b>IEEE Non-Presented Paper Policy ("No-Show Policy")</b>: Papers not presented by their authors
                    during
                    the conference may be removed from <b>IEEE Xplore®</b> and excluded from distribution (publication)
                    following the event.</p>
            </div>
        </section>
        <div class="clearfix"></div>

        <!-- Final Paper Review Notifications -->
        <section id="notifications" class="py-5 px-5 border">
            <h2 class="text-center">Final Paper Review Notifications</h2>
            <img src="../images/decoration/notiFinalReview.jpg" alt="Final Paper Review Notification Image"
                class="img-fluid float-start me-4 mb-3" style="max-width:100%; height:auto;">
            <p> Following each submission of your final paper, you'll receive a summary via email detailing the review
                process conducted in line with the Final Paper Guidelines. This review will ensure compliance with
                quality standards for content, English, and format, as well as alignment of the SUBMISSION SYSTEM
                information with the final paper, proper PDF generation through PDFeXpress, and successful completion of
                the copyright transfer. Prioritize the originality and plagiarism-free nature of your paper by utilizing
                a plagiarism checker. Once the copyright transfer is finalized and the paper clears all checks, it
                undergoes evaluation by IEEE CrossCheck. Utilize the opportunity for multiple revisions, addressing any
                requested corrections before resubmitting your final paper by the deadline to prevent rejection. Ensure
                to review the requirements before each submission on this link.</p>
            <div class="clearfix"></div>
        </section>

    </main>

    <!-- Footer section -->
    <section id="organizers">
        <div class="container-fluid">
            <!-- Footer  -->
            <?php include "../includesHtml/final.html" ?>
        </div>
    </section>

    <script src="../js/backTop.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!--SLICK CAROUSEL-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/slick-carousel-config.js"></script>

</body>

</html>