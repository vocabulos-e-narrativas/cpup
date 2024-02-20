<?php
include_once('../config.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPUP - Research</title>

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
                                    <p class="text-blue border-bottom-blue">Research</p>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/advanced_training.php">
                                    <p class="text-blue">Advanced Training</p>
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
                <div class="col d-block d-md-none">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
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
                                    <p class="text-white text-end">About</span></p>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/research.php">
                                    <p class="text-white text-end"><span class="border-bottom-white">Research</span></p>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/advanced_training.php">
                                    <p class="text-white text-end">Advanced Training</p>
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
    <div class="progress-none d-none d-md-block">
        <img id="progress-image" src="<?php echo BASE_URL; ?>images/research/progress15.svg" alt="Progress" width="100">
        <a id="progress-research" href="#research"></a>
        <a id="progress-groups-and-labs" href="#groups-and-labs"></a>
        <a id="progress-research-projects" href="#research-projects"></a>
        <a id="progress-latest-publications" href="#latest-publications"></a>
        <a id="progress-be-a-research-participant" href="#be-a-research-participant"></a>
    </div>
    <div class="container">
        <div id="research" class="row py-3 pb-md-5 px-md-5">
            <div class="col-md-5 order-2 order-md-1">
                <div class="text-light-black bg-light-gray border-radius-20 px-3 px-md-5 py-4">
                    <h2 class="medium pb-2 pb-md-4">RESEARCH</h2>
                    <p class="about-mobile-text-wrapper">
                        CPUP is a reference host of forefront basic and applied Psychological
                        research guided by the claim for solutions tailored to the current social scenario.
                        Our research programs embrace the scientific domains defined by the American
                        Psychological Association, APA, including Learning, Memory and Reading,
                        Educational Psychology, Parenting and Child Development, Gender, Gender
                        Equality and Social Identity, Prejudice and Ethnic Issues, Occupational
                        and Organizational Psychology, Sexuality and Sexual Health, Psychotherapy
                        and Health Psychology, and Neuropsychology.
                    </p>
                    <p class="about-mobile-text-wrapper">
                        The research projects that contemplate such a plethora of domains are carried
                        out by five research groups supported by well-equipped lab facilities fit to
                        the research requirements. Please, explore below to learn more about the Research
                        Groups, the Research Projects, the Labs, as well as about the Publications
                        stemming from this work.
                    </p>
                </div>
            </div>
            <div class="col-md-7 order-1 order-md-2 mb-2 mb-md-0">
                <img src="<?php echo BASE_URL; ?>images/research/research.png" alt="research.png" width="100%"
                    height="100%" class="border-radius-20">
            </div>
        </div>
        <div id="groups-and-labs" class="container px-2 px-md-5">
            <img src="<?php echo BASE_URL; ?>images/layout/page_break.svg" alt="page_break.svg" class="w-100 py-5">
            <div class="row py-1 py-md-3">
                <h2 class="medium text-light-black">
                    GROUPS AND LABS
                </h2>
            </div>
            <div class="row py-3">
                <div class="col-md-5">
                    <p class="text-light-black">
                        LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING
                        ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT
                        LAOREET DOLORE MAGNA ALIQUAM.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <h4 id="groups_trigger" class="medium pointer" onclick="GroupsAndLabs_handleClick(1)">
                        <img id="groups_ball" src="<?php echo BASE_URL; ?>images/research/active_black_ball.svg"
                            alt="active_ball.svg" class="" style="width: 8px">
                        GROUPS
                    </h4>
                </div>
                <div class="col-md-2">
                    <h4 id="labs_trigger" class="medium text-gray pointer" onclick="GroupsAndLabs_handleClick(2)">
                        <img id="labs_ball" src="<?php echo BASE_URL; ?>images/research/active_black_ball.svg"
                            alt="active_ball.svg" class="" style="width: 8px; display:none">
                        LABS
                    </h4>
                </div>
            </div>
            <div class="row mt-4 mb-md-5">
                <div id="groups_content">
                    <div class="row">
                        <div class="col-12 col-md-2-3 my-2 my-md-0">
                            <a href="<?php echo BASE_URL; ?>pages/cnd.php" target="_blank">
                                <div class="pulse groups-wrapper bg-purple">
                                    <h5 class="text-white">
                                        Culture,
                                        Normativity and
                                        Diversity
                                    </h5>
                                    <img src="<?php echo BASE_URL; ?>images/research/cpup_written_white_logo.svg"
                                        alt="cpup_written_white_logo.svg" class="groups-cpup-written-white-logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-2-3 my-2 my-md-0">
                            <a href="<?php echo BASE_URL; ?>pages/de.php" target="_blank">
                                <div class="pulse groups-wrapper bg-dark-cian">
                                    <h5 class="text-white">
                                        Development
                                        and Education
                                    </h5>
                                    <img src="<?php echo BASE_URL; ?>images/research/cpup_written_white_logo.svg"
                                        alt="cpup_written_white_logo.svg" class="groups-cpup-written-white-logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-2-3 my-2 my-md-0">
                            <a href="<?php echo BASE_URL; ?>pages/hs.php" target="_blank">
                                <div class="pulse groups-wrapper bg-red">
                                    <h5 class="text-white">
                                        Human
                                        Sexuality
                                    </h5>
                                    <img src="<?php echo BASE_URL; ?>images/research/cpup_written_white_logo.svg"
                                        alt="cpup_written_white_logo.svg" class="groups-cpup-written-white-logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-2-3 my-2 my-md-0">
                            <a href="<?php echo BASE_URL; ?>pages/ncl.php" target="_blank">
                                <div class="pulse groups-wrapper bg-blood">
                                    <h5 class="text-white">
                                        Neurocognition
                                        and Language
                                    </h5>
                                    <img src="<?php echo BASE_URL; ?>images/research/cpup_written_white_logo.svg"
                                        alt="cpup_written_white_logo.svg" class="groups-cpup-written-white-logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-2-3 my-2 my-md-0">
                            <a href="<?php echo BASE_URL; ?>pages/rcpw.php" target="_blank">
                                <div class="pulse groups-wrapper bg-orange">
                                    <h5 class="text-white">
                                        Relationships,
                                        Change Processes
                                        and Wellbeing
                                    </h5>
                                    <img src="<?php echo BASE_URL; ?>images/research/cpup_written_white_logo.svg"
                                        alt="cpup_written_white_logo.svg" class="groups-cpup-written-white-logo">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="labs_content" style="display: none;">
                    <div class="row">
                        <div class="my-1 my-md-0 col-md-3 text-center">
                            <div class="pulse labs-wrapper">
                                <a href="https://sigarra.up.pt/fpceup/en/uni_geral.unidade_view?pv_unidade=410"
                                    target="_blank">
                                    <img src="<?php echo BASE_URL; ?>images/research/laboratory_of_social_psychology.svg"
                                        alt="laboratory_of_social_psychology.svg" class="">
                                </a>
                            </div>
                        </div>
                        <div class="my-1 my-md-0 col-md-3 text-center">
                            <div class="pulse labs-wrapper">
                                <a href="https://sigarra.up.pt/fpceup/pt/uni_geral.unidade_view?pv_unidade=490"
                                    target="_blank">
                                    <img src="<?php echo BASE_URL; ?>images/research/work_psychology_atelier.svg"
                                        alt="work_psychology_atelier.svg" class="">
                                </a>
                            </div>
                        </div>
                        <div class="my-1 my-md-0 col-md-3 text-center">
                            <div class="pulse labs-wrapper">
                                <a href="https://sexlab.fpce.up.pt/" target="_blank">
                                    <img src="<?php echo BASE_URL; ?>images/research/sexlab.svg" alt="sexlab.svg"
                                        class="">
                                </a>
                            </div>
                        </div>
                        <div class="my-1 my-md-0 col-md-3 text-center">
                            <div class="pulse labs-wrapper">
                                <a href="https://sigarra.up.pt/fpceup/pt/web_base.gera_pagina?p_pagina=NCL_HOME"
                                    target="_blank">
                                    <img src="<?php echo BASE_URL; ?>images/research/speech_lab.svg"
                                        alt="speech_lab.svg" class="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-0 mt-md-3">
                        <div class="my-1 my-md-0 col-md-3 text-center">
                            <div class="pulse labs-wrapper">
                                <a href="https://www.labrp.pt/" target="_blank">
                                    <img src="<?php echo BASE_URL; ?>images/research/psychosocial_rehabilitation_lab.svg"
                                        alt="psychosocial_rehabilitation_lab.svg" class="">
                                </a>
                            </div>
                        </div>
                        <div class="pulse my-1 my-md-0 col-md-3 text-center">
                            <div class="labs-wrapper">
                                <img src="<?php echo BASE_URL; ?>images/research/psychoterapy_lab.svg"
                                    alt="psychoterapy_lab.svg" class="">
                            </div>
                        </div>
                        <div class="my-1 my-md-0 col-md-3 text-center">
                            <div class="pulse labs-wrapper">
                                <a href="https://sigarra.up.pt/fpceup/en/uni_geral.unidade_view?pv_unidade=75"
                                    target="_blank">
                                    <img src="<?php echo BASE_URL; ?>images/research/center_for_educational_psychology_and_child_education.svg"
                                        alt="center_for_educational_psychology_and_child_education.svg" class="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="research-projects" class="container px-2 px-md-5">
            <img src="<?php echo BASE_URL; ?>images/layout/page_break.svg" alt="page_break.svg" class="w-100 py-5">
            <div class="row py-1 py-md-3">
                <h2 class="medium text-light-black">
                    RESEARCH PROJECTS
                </h2>
            </div>
            <div class="row py-1 py-md-3">
                <div class="col-md-5">
                    <p class="text-light-black">
                        The Research Projects developed at the Center for Psychology
                        span the Research Groups, feeding from the fruitful synergy
                        of our researchers and their backgrounds. The quality of the
                        projects has been continually acknowledged with competitive
                        national, international, and European funding awarded by
                        expert evaluation panels.
                    </p>
                </div>
            </div>
            <div class="row py-1 py-md-3">
                <div class="col-md-5 text-center">
                    <div class="research-projects-btn">
                        <a href="<?php echo BASE_URL; ?>pages/research_all.php" target="_blank"
                            class="medium-italic text-white">
                            CHECK THE FULL LIST OF<br />
                            THE RESEARCH PROJECTS HERE
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="latest-publications" class="container px-2 px-md-5">
            <img src="<?php echo BASE_URL; ?>images/layout/page_break.svg" alt="page_break.svg" class="w-100 py-5">
            <div class="row py-3">
                <div class="col">
                    <h2 class="medium text-light-black">LATEST PUBLICATIONS</h2>
                </div>
                <div class="col text-end">
                    <a class="text-white bg-blue pointer px-2 py-1 border-radius-17"
                        href="<?php echo BASE_URL; ?>pages/archive_events.php" target="_blank">VIEW ALL</a>
                </div>
            </div>
            <div class="row pb-5">
                <?php
                $csvData = file_get_contents('../cpup - Publication.csv');
                $lines = explode("\n", $csvData);
                $headers = str_getcsv(array_shift($lines));
                $data = [];
                foreach ($lines as $line) {
                    $row = str_getcsv($line);
                    if (count($row) === count($headers)) {
                        $data[] = array_combine($headers, $row);
                    }
                }
                usort($data, function ($a, $b) {
                    // Comparação baseada nas datas de início (start_date)
                    $dateA = strtotime($a['start_date']);
                    $dateB = strtotime($b['start_date']);

                    // Ordenação decrescente (do mais recente para o mais antigo)
                    return $dateB - $dateA;
                });
                $data = array_slice($data, -4);
                foreach (array_reverse($data) as $cpuppublication) {
                    echo '
                        <div class="pulse col-12 col-md-3 my-3 my-md-0">
                            <a href="' . $cpuppublication['link'] . '" target="_blank">
                                <img src="' . BASE_URL . 'images/publication/' . $cpuppublication['photo'] . '" alt="" class="w-100">
                                <h4 class="pt-3 pb-2 text-light-black">' . $cpuppublication['title'] . '</h4>
                                <span class="text-light-black">' . $cpuppublication['description'] . '</span>
                            </a>
                        </div>
                        ';
                }
                ?>
            </div>
        </div>
        <div id="be-a-research-participant" class="container px-2 px-md-5 pb-5">
            <img src="<?php echo BASE_URL; ?>images/layout/page_break.svg" alt="page_break.svg" class="w-100 py-5">
            <div class="row py-3">
                <h2 class="medium text-light-black">BE A RESEARCH PARTICIPANT</h2>
            </div>
            <div class="row py-3">
                <div class="col-md-5 py-2">
                    <p class="w-100 text-light-black">
                        The research at CPUP focuses on the ever-pressing needs of our society.
                        The more people-oriented, the better informed and the more socially
                        relevant the work. Thus, voluntary participants, representative of the
                        target cohorts, are fundamental in the scientific endeavor. If you want
                        to collaborate and help further develop psychological knowledge, you can
                        find here the calls for participants.
                    </p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-12 col-md-4 mt-4 mt-md-0">
                    <div
                        class="be-a-research-participant-wrapper be-a-research-participant-wrapper-bg-orange border-orange text-orange medium">
                        <div class="be-a-research-participant-card-content">
                            <h4 class="medium-italic">Project:</h4>
                            <h4 class="medium py-2">Sentir(-te)-me e<br /> pensar(-te)-me</h4>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightOrange.svg" alt="arrow_to_right"
                                class="be-a-research-participant-arrow-right">
                        </div>
                        <div class="be-a-research-participant-card-hover-content-bg-orange">
                            <p>Ethics Approval: 2023/03-17</p>
                            <p>Research Group: Relationships, Change Processes and Well-Being</p>
                            <p>Researchers: Henrique Araújo da Silva, Paula Mena Matos, & Célia Sales</p>
                            <p>Contact: <a href="mailto:fpceup.dissertacao.mestrado@gmail.com"
                                    class="text-white">fpceup.dissertacao.mestrado<br />@gmail.com</a></p>
                            <a href="https://estudo-dissertacaomestrado-hs.limesurvey.net/551964?lang=pt"
                                target="_blank" class="underline text-white">
                                https://estudo-dissertacaomestra<br />do-hs.limesurvey.net/551964?lang=pt
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-4 mt-md-0">
                    <div
                        class="be-a-research-participant-wrapper be-a-research-participant-wrapper-bg-purple border-purple text-purple medium">
                        <div class="be-a-research-participant-card-content">
                            <h4 class="medium-italic">Project:</h4>
                            <h4 class="medium py-2">HomeWork</h4>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightBlue.svg" alt="arrow_to_right"
                                class="be-a-research-participant-arrow-right">
                        </div>
                        <div class="be-a-research-participant-card-hover-content-bg-purple">
                            <p>Ethics Approval: 2023/03-14b</p>
                            <p>Research Group: Culture, Normativity, and Diversity</p>
                            <p>Researchers: Rita Grave, Conceição Nogueira, & Liliana Rodrigues</p>
                            <p>Contact: <a href="mailto:homework@fpce.up.pt"
                                    class="text-white">homework@fpce.up.pt<br /></a></p>
                            <a href="https://inqueritos.up.pt/index.php?r=survey/index&sid=424859&lang=pt"
                                target="_blank" class="underline text-white">
                                https://inqueritos.up.pt/index.<br />php?r=survey/index&sid=424859&l<br />ang=pt
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-4 mt-md-0">
                    <div
                        class="be-a-research-participant-wrapper be-a-research-participant-wrapper-bg-red border-red text-red medium">
                        <div class="be-a-research-participant-card-content">
                            <h4 class="medium-italic">Project:</h4>
                            <h4 class="medium py-2">Estudo online sobre crenças, atitudes e comportamentos sexuais em
                                estudantes universitários</h4>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightRed.svg" alt="arrow_to_right"
                                class="be-a-research-participant-arrow-right">
                        </div>
                        <div class="be-a-research-participant-card-hover-content-bg-red">
                            <p>Ethics Approval: 2023/02-03b</p>
                            <p>Research Group: Human Sexuality</p>
                            <p>Researchers: Bárbara Monteiro, Joana Carvalho & Nélio Brazão</p>
                            <p>Contact: <a href="mailto:bbargemoreira@gmail.com"
                                    class="text-white">bbargemoreira@gmail.com</a></p>
                            <a href="https://qfreeaccountssjc1.az1.qualtrics.com/jfe/form/SV_3mbXYMivI69xRBA"
                                target="_blank" class="underline text-white">
                                https://qfreeaccountssjc1.az1.<br />qualtrics.com/jfe/form/SV<br />_3mbXYMivI69xRBA
                            </a>
                        </div>
                    </div>
                </div>
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
    <script>
        function GroupsAndLabs_handleClick(imageNumber) {
            if (imageNumber == 1) {
                document.getElementById("groups_trigger").style.color = '#000';
                document.getElementById("groups_ball").style.display = 'inline';
                document.getElementById("groups_content").style.display = 'block';
                document.getElementById("labs_trigger").style.color = '#ABA7A1';
                document.getElementById("labs_ball").style.display = 'none';
                document.getElementById("labs_content").style.display = 'none';
            }
            if (imageNumber == 2) {
                document.getElementById("groups_trigger").style.color = '#ABA7A1';
                document.getElementById("groups_ball").style.display = 'none';
                document.getElementById("groups_content").style.display = 'none';
                document.getElementById("labs_trigger").style.color = '#000';
                document.getElementById("labs_ball").style.display = 'inline';
                document.getElementById("labs_content").style.display = 'block';
            }
        }
    </script>
    <script>
        const progressImage = document.getElementById('progress-image');

        const research = document.getElementById('research');
        const groupsandlabs = document.getElementById('groups-and-labs');
        const researchprojects = document.getElementById('research-projects');
        const latestpublications = document.getElementById('latest-publications');
        const bearesearchparticipant = document.getElementById('be-a-research-participant');


        window.addEventListener('scroll', () => {
            const windowHeight = window.innerHeight;
            const scrollPosition = window.scrollY;
            if (scrollPosition < research.offsetTop) {
                progressImage.src = '<?php echo BASE_URL; ?>images/research/progress15.svg';
            } else if (scrollPosition < groupsandlabs.offsetTop) {
                progressImage.src = '<?php echo BASE_URL; ?>images/research/progress25.svg';
            } else if (scrollPosition < researchprojects.offsetTop) {
                progressImage.src = '<?php echo BASE_URL; ?>images/research/progress35.svg';
            } else if (scrollPosition < latestpublications.offsetTop) {
                progressImage.src = '<?php echo BASE_URL; ?>images/research/progress45.svg';
            } else {
                progressImage.src = '<?php echo BASE_URL; ?>images/research/progress55.svg';
            }
        });
    </script>
    <script src="<?php echo BASE_URL; ?>js/all/toTop.js"></script>

</body>

<footer>
    <?php include '../includes/footer.php'; ?>
</footer>

</html>