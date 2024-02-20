<?php
include_once('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPUP - Advanced Training</title>

    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo BASE_URL; ?>css/style.css" rel="stylesheet">

    <!-- Optional: Add custom CSS or additional stylesheets here -->
</head>

<header>
    <!-- navbar.php -->
    <link href="<?php echo BASE_URL; ?>css/navbar.css" rel="stylesheet">
    <div id="top"></div>
    <div class="container">
        <div class="d-none d-md-block">
            <nav class="row navbar navbar-expand-lg navbar-light py-5">
                <div class="col">
                    <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php">
                        <img src="<?php echo BASE_URL; ?>images/layout/logo.png" alt="CPUP" width="auto" height="auto"
                            class="d-inline-block align-top">
                    </a>
                </div>
                <div class="col text-center">
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/about.php">
                                    <p class="text-blue">About</p>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/research.php">
                                    <p class="text-blue">Research</p>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/advanced_training.php">
                                    <p class="text-blue border-bottom-blue">Advanced Training</p>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/science_society.php">
                                    <p class="text-blue">Science & Society</p>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/archive_events.php">
                                    <p class="text-blue">Archive</p>
                                </a>
                            </li>
                            <!-- Adicione mais itens de menu conforme necessário -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="d-block d-md-none">
            <nav class="row navbar navbar-light py-5">
                <div class="col-9">
                    <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php">
                        <img src="<?php echo BASE_URL; ?>images/layout/logo.png" alt="CPUP" width="auto" height="auto"
                            class="d-inline-block align-top">
                    </a>
                </div>
                <div class="col-3">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="nav-close navbar-collapse" id="navbarNav">
                    <div class="row text-end my-5 mx-3">
                        <a class="" href="<?php echo BASE_URL; ?>index.php">
                            <img src="<?php echo BASE_URL; ?>images/layout/logo_white.png" alt="CPUP" width="auto"
                                height="auto" class="d-inline-block align-top">
                        </a>
                    </div>
                    <div class="row navbar-items mx-3">
                        <ul class="navbar-nav">
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/about.php">
                                    <p class="text-white text-end"><span class="border-bottom-white">About</span></p>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/research.php">
                                    <p class="text-white text-end">Research</p>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/advanced_training.php">
                                    <p class="text-white text-end"><span class="border-bottom-white">Advanced
                                            Training</span></p>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/science_society.php">
                                    <p class="text-white text-end">Science & Society</p>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/archive_events.php">
                                    <p class="text-white text-end">Archive</p>
                                </a>
                            </li>
                            <!-- Adicione mais itens de menu conforme necessário -->
                        </ul>
                    </div>
                    <div class="row navbar-contacts text-white">
                        <h2>Contacts</h2>
                        <p>
                            Centro de Psicologia da Universidade do Porto
                            Faculdade de Psicologia e Ciências da Educação
                            Universidade do Porto
                        </p>
                        <p>Rua Alfredo Allen, s/n 4200-135 Porto Portugal</p>
                        <p>+351 220 400 617 (ext. 386) <br />cpup@fpce.up.pt</p>
                    </div>
                    <div class="row">
                        <button class="navbar-toggler-close" type="button" data-toggle="nav-close"
                            data-target="#navbarNav">
                            <span class="">CLOSE</span>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<body>
    <div class="container pb-5">
        <div id="advanced-training" class="row px-md-5 mt-1 mb-4">
            <div class="order-2 order-md-1 col-md-5">
                <div class="text-light-black bg-light-gray border-radius-20 px-3 px-md-5 py-4">
                    <h2 class="medium pb-4">ADVANCED<br />TRAINING</h2>
                    <p>
                        The Center for Psychology places itself as an nourishing locus
                        for both educating the future generation of scientists and
                        updating professional skills. CPUP is thus connected to three
                        doctoral programs, two at the Faculty of Psychology and Education
                        Sciences of the University of Porto, and one at the University of
                        Maia. The programs benefit from the team's expertise and its
                        international network to offer the students modern and
                        comprehensive training.
                    </p>
                </div>
            </div>
            <div class="order-1 order-md-2 col-md-7 my-4 my-md-0">
                <img src="<?php echo BASE_URL; ?>images/advanced_training/img1.png" alt="img1.png" height="100%"
                    width="100%" class="border-radius-20">
            </div>
        </div>
        <div id="phd-program-in-psychology" class="row px-md-5 mb-4">
            <div class="col-md-5 mb-4 mb-md-0 phd-program-wrapper">
                <a href="https://www.fpce.up.pt/pdp/" target="_blank">
                    <img src="<?php echo BASE_URL; ?>images/advanced_training/img2.png" alt="img2.png" height="100%"
                        width="100%" class="border-radius-17">
                    <img src="<?php echo BASE_URL; ?>images/home_page/white_logo.svg" alt="cpup_white_logo"
                        class="phd-program-cpup-white-logo">
                </a>
            </div>
            <div class="col-md-7 phd-program-wrapper">
                <a href="https://www.fpce.up.pt/pdp/" target="_blank">
                    <div class="text-white bg-blue border-radius-17 p-4 p-md-5">
                        <h2 class="pb-4">PHD PROGRAM<br />IN PSYCHOLOGY</h2>
                        <p>
                            The Psychology Doctoral Program is a core training program
                            leading to an original psychological research project, which
                            should be developed within the context of the research projects
                            directed by professors and researchers either individually or
                            integrated within the research centers of the Faculty of Psychology
                            and Education Sciences of the University of Porto.
                        </p>
                        <img src="<?php echo BASE_URL; ?>images/layout/arrowRight.svg" alt="arrow_to_right"
                            class="pulse phd-program-cpup-arrow-right">
                    </div>
                </a>
            </div>
        </div>
        <div id="phd-program-in-human-sexuality" class="row px-md-5 mb-4">
            <div class="order-2 order-md-1 col-md-7 phd-program-wrapper">
                <a href="https://www.fpce.up.pt/pdsh/" target="_blank">
                    <div class="text-white bg-blue border-radius-17 p-4 p-md-5">
                        <h2 class="pb-4">PHD PROGRAM<br />IN HUMAN<br />SEXUALITY</h2>
                        <p>
                            The Doctoral Program in Human Sexuality aims to promote advanced
                            knowledge and the development of research in a relevant area, central
                            to well-being and the biopsychosocial health. The program is a partnership
                            with the Faculty of Medicine and the Abel Salazar Institute of Biomedical
                            Sciences, both from the University of Porto.
                        </p>
                    </div>
                    <img src="<?php echo BASE_URL; ?>images/layout/arrowRight.svg" alt="arrow_to_right"
                        class="pulse phd-program-cpup-arrow-right">
                </a>
            </div>
            <div class="order-1 order-md-2 mb-4 mb-md-0 col-md-5 phd-program-wrapper">
                <a href="https://www.fpce.up.pt/pdsh/" target="_blank">
                    <img src="<?php echo BASE_URL; ?>images/advanced_training/img3.png" alt="img3.png" height="100%"
                        width="100%" class="border-radius-17">
                    <img src="<?php echo BASE_URL; ?>images/home_page/white_logo.svg" alt="cpup_white_logo"
                        class="phd-program-cpup-white-logo">
                </a>
            </div>
        </div>
        <div id="phd-program-in-clinical-psychology" class="row mb-5 px-md-5">
            <div class="col-md-5 mb-4 mb-md-0 phd-program-wrapper">
                <a href="https://www.umaia.pt/pt/ensino/oferta-formativa/doutoramentos/psicologia-especialidade-de-psicologia-clinica"
                    target="_blank">
                    <img src="<?php echo BASE_URL; ?>images/advanced_training/img4.png" alt="img4.png" height="100%"
                        width="100%" class="border-radius-17">
                    <img src="<?php echo BASE_URL; ?>images/home_page/white_logo.svg" alt="cpup_white_logo"
                        class="phd-program-cpup-white-logo">
                </a>
            </div>
            <div class="col-md-7 phd-program-wrapper">
                <a href="https://www.umaia.pt/pt/ensino/oferta-formativa/doutoramentos/psicologia-especialidade-de-psicologia-clinica"
                    target="_blank">
                    <div class="text-white bg-blue border-radius-17 p-4 p-md-5">
                        <h2 class="pb-4">PHD PROGRAM<br />IN CLINICAL<br />PSYCHOLOGY</h2>
                        <p>
                            Inspired in the 'scientist-practitioner' model, also known as Boulder model,
                            the Ph.D Program in Clinical Psychology at ISMAI aims to provide both advanced
                            training of psychotherapists in empirically supported models, namely in
                            Cognitive-Behavioral therapy and Emotion-Focused Therapy, enriched by
                            narrative and dialogical approaches, and the development of knowledge and
                            research skills applied to the practice of clinical psychology, specially
                            in the scope of research in psychotherapy.
                        </p>
                    </div>
                    <img src="<?php echo BASE_URL; ?>images/layout/arrowRight.svg" alt="arrow_to_right"
                        class="pulse phd-program-cpup-arrow-right">
                </a>
            </div>
        </div>
    </div>
    <a id="to-top-button" class="btn" href="#top">
        <img src="<?php echo BASE_URL; ?>images/layout/arrowToTop.svg" alt="toTop" class="pulse arrowToTop">
    </a>
    <!-- Add Bootstrap JS and jQuery (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Optional: Add custom JavaScript here -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.navbar-toggler').click(function () {
                // Esconde a navbar-brand e o navbar-toggler
                $('.navbar-brand, .navbar-toggler').hide();

                // Mostra a div do "hi", "hello" e o botão "CLOSE"
                $('.navbar-collapse').show();
            });
            $('.navbar-toggler-close').click(function () {
                // Esconde a navbar-brand e o navbar-toggler
                $('.navbar-brand, .navbar-toggler').show();

                // Mostra a div do "hi", "hello" e o botão "CLOSE"
                $('.navbar-collapse').hide();
            });
        });
    </script>
    <script src="<?php echo BASE_URL; ?>js/all/toTop.js"></script>
</body>

<footer>
    <?php include '../includes/footer.php'; ?>
</footer>

</html>