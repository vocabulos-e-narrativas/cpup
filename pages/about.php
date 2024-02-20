<?php
include_once('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPUP - About</title>

    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                                    <p class="text-blue border-bottom-blue">About</p>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="<?php echo BASE_URL; ?>pages/research.php">
                                    <p class="text-blue">Research</p>
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
        <img id="progress-image" src="<?php echo BASE_URL; ?>images/about/progress14.svg" alt="Progress" width="100">
        <a id="progress-about" href="#about"></a>
        <a id="progress-committees" href="#committees"></a>
        <a id="progress-task-forces" href="#task-forces"></a>
        <a id="progress-cross-cutting-areas" href="#cross-cutting-areas"></a>
    </div>
    <div class="container regular">
        <div id="about" class="row py-3 pb-5 px-md-5">
            <div class="col-md-5 order-2 order-md-1">
                <div class="text-light-black bg-light-gray border-radius-20 px-3 px-md-5 py-4">
                    <h2 class="medium pb-2 pb-md-4">ABOUT</h2>
                    <p class="about-mobile-text-wrapper">
                        The Center for Psychology at the University of Porto, CPUP,
                        is an international R&D unit committed to scientific excellence.
                        It brings together complementary methods, techniques, and expertise
                        to produce world-class fundamental and applied psychological research
                        and promote innovative clinical, educational, and social intervention.
                        Its prominence grants the center continuous support from the Portuguese
                        Foundation for Science and Technology.
                    </p>
                    <h2 class="medium py-2 py-md-4">MISSION</h2>
                    <p class="about-mobile-text-wrapper">
                        CPUP was created in 1980 with the mission to foster high-quality
                        psychological research tuned to the state-of-the-art scientific
                        development and committed to promoting an inclusive society that
                        embraces the well-being of individuals. What drives us is the perennial
                        motivation to overcome the psychological and educational challenges
                        communities face by developing and proposing evidence-based solutions,
                        while providing scientists and professionals prompted by these challenges
                        solid and modern training.
                    </p>
                    <p class="about-mobile-text-wrapper">
                        Since 2014, an interinstitutional agreement with the University of
                        Maia, UMAIA, has broadened the scope of action and consolidated a
                        long-standing collaboration among the team members.
                    </p>
                </div>
            </div>
            <div class="col-md-7 order-1 order-md-2 mb-2 mb-md-0">
                <img src="<?php echo BASE_URL; ?>images/about/fpceup_edificio.png" alt="fpceup_edificio.png" height="100%" width="100%" class="about-img border-radius-20">
            </div>
        </div>
        <div id="keep-up-with-cpup" class="py-md-5">
            <div class="news-container px-2 px-md-5">
                <div class="row py-4">
                    <h2 class="medium text-light-black">KEEP UP WITH CPUP</h2>
                </div>
                <div class="row py-2">
                    <div class="col-md-4 keep-up-with-cpup-height" style="height: 100px;">
                        <div class="row my-3">
                            <div class="col">
                                <img id="img_keep_up_with_cpup_1" src="<?php echo BASE_URL; ?>images/about/reading_active.svg" alt="img1_active.svg" class="pulsing w-100 pointer" onclick="KeepUpWithCpup_handleClick(1)">
                            </div>
                            <div class="col">
                                <img id="img_keep_up_with_cpup_2" src="<?php echo BASE_URL; ?>images/about/verified.svg" alt="img2.svg" class="w-100 pointer" onclick="KeepUpWithCpup_handleClick(2)">
                            </div>
                            <div class="col">
                                <img id="img_keep_up_with_cpup_3" src="<?php echo BASE_URL; ?>images/about/talking.svg" alt="img3.svg" class="w-100 pointer" onclick="KeepUpWithCpup_handleClick(3)">
                            </div>
                            <div class="col">
                                <img id="img_keep_up_with_cpup_4" src="<?php echo BASE_URL; ?>images/about/hands.svg" alt="img4.svg" class="w-100 pointer" onclick="KeepUpWithCpup_handleClick(4)">
                            </div>
                        </div>
                        <div class="row my-md-5">
                            <div id="text_keep_up_with_cpup_1" class="text-blue">
                                <h3 class="medium mb-4">EDITORIAL BOARDS</h3>
                                <ul class="medium">
                                    <li class="fw500">Frontiers in Psychology</li>
                                    <li class="fw500">Social Psychology</li>
                                </ul>
                            </div>
                            <div id="text_keep_up_with_cpup_2" class="text-blue" style="display: none;">
                                <h3 class="medium mb-4">Expert Panels</h3>
                                <ul class="medium">
                                    <li class="fw500">CoLab</li>
                                    <li class="fw500">Aga Khan Foundation</li>
                                    <li class="fw500">Belmiro Azevedo Foundation</li>
                                </ul>
                            </div>
                            <div id="text_keep_up_with_cpup_3" class="text-blue" style="display: none;">
                                <h3 class="medium mb-4">Consulting & Service Provisioning</h3>
                                <ul class="medium">
                                    <li class="fw500">Poland National Science Center</li>
                                    <li class="fw500">Flanders Research Foundation</li>
                                    <li class="fw500">Dutch Research Council</li>
                                    <li class="fw500">US National Science Foundation</li>
                                    <li class="fw500">FCT</li>
                                    <li class="fw500">Porto City Hall</li>
                                </ul>
                            </div>
                            <div id="text_keep_up_with_cpup_4" class="text-blue" style="display: none;">
                                <h3 class="medium mb-4">International Stays</h3>
                                <ul class="medium">
                                    <li class="fw500">Brazil</li>
                                    <li class="fw500">France</li>
                                    <li class="fw500">Finland</li>
                                    <li class="fw500">Green Cape</li>
                                    <li class="fw500">Spain</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row pt-md-5">
                            <div class="col text-center my-5">
                                <img src="<?php echo BASE_URL; ?>images/about/graph2.png" alt="graph2.png" class="mt-3">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pt-5 pt-md-0">
                        <img src="<?php echo BASE_URL; ?>images/about/graph3.png" alt="graph3.png" class="graph3-mobile">
                    </div>
                </div>
            </div>
        </div>
        <div id="strategic-goals" class="pt-5">
            <div class="strategic-goals-container px-2 px-md-5">
                <div class="row py-4">
                    <h2 class="medium text-light-black mb-4">STRATEGIC GOALS</h2>
                </div>
                <div class="row pb-3">
                    <div class="col-12 col-md-2 text-center">
                        <img src="<?php echo BASE_URL; ?>images/about/strategic_goals_1.png" alt="strategic_goals_1.png" class="">
                        <h5 class="medium text-blue my-4">
                            RESEARCH<br />
                            EXCELLENCE
                        </h5>
                        <h6 class="medium text-light-black">
                            Improving the quality<br />
                            of scientific<br />
                            production
                        </h6>
                    </div>
                    <div class="col-12 col-md-3 my-3 my-md-0 text-center">
                        <img src="<?php echo BASE_URL; ?>images/about/strategic_goals_2.png" alt="strategic_goals_2.png" class="">
                        <h5 class="medium text-blue my-4">
                            STRONG RESEARCH<br />
                            COMMUNITY
                        </h5>
                        <h6 class="medium text-light-black">
                            Promoting synergies<br />
                            among researchers and<br />
                            international networks
                        </h6>
                    </div>
                    <div class="col-12 col-md-3 my-3 my-md-0 text-center">
                        <img src="<?php echo BASE_URL; ?>images/about/strategic_goals_3.png" alt="strategic_goals_3.png" class="">
                        <h5 class="medium text-blue my-4">
                            ADVANCED TRAINING<br />
                            AND RESEARCH INTEGRITY
                        </h5>
                        <h6 class="medium text-light-black">
                            Strengthening the<br />
                            collaboration with<br />
                            Ph.D. Programs
                        </h6>
                    </div>
                    <div class="col-12 col-md-2 my-3 my-md-0 text-center">
                        <img src="<?php echo BASE_URL; ?>images/about/strategic_goals_4.png" alt="strategic_goals_4.png" class="">
                        <h5 class="medium text-blue my-4">
                            RESEARCH<br />
                            INTEGRITY
                        </h5>
                        <h6 class="medium text-light-black">
                            Fostering the openness<br />
                            and transparency of<br />
                            research
                        </h6>
                    </div>
                    <div class="col-12 col-md-2 text-center">
                        <img src="<?php echo BASE_URL; ?>images/about/strategic_goals_5.png" alt="strategic_goals_5.png" class="">
                        <h5 class="medium text-blue my-4">
                            RELEVANCE<br />
                            TO SOCIETY
                        </h5>
                        <h6 class="medium text-light-black">
                            Encouraging the<br />
                            transfer of scientific<br />
                            knowledge and the<br />
                            engagement with<br />
                            stakeholders
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div id="sustainable-development-goals" class="py-5">
            <div class="strategic-goals-container px-2 px-md-5">
                <div class="row py-3">
                    <div class="col-md-5">
                        <h2 class="medium text-light-black mb-4">
                            UN 2030: SUSTAINABLE
                            DEVELOPMENT GOALS
                        </h2>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-5 my-md-4">
                        <p class="text-light-black">
                            Aligned with the UN's appeal for the responsible contribution of
                            organizations and stakeholders to the world and its people, CPUP is
                            committed to the promotion of the 2030 Sustainable Development
                            Goals. The Research Projects contemplate nine of these goals, and set
                            the long-run ambition to better inform public policy and help promote a
                            fair, equal, and sustainable society oriented by scientific knowledge.
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 text-center">
                        <div class="row">
                            <div class="col-4 col-md-2 my-2">
                                <img src="<?php echo BASE_URL; ?>images/about/ods3.png" alt="ods3.png" class="h-100 pulse">
                            </div>
                            <div class="col-4 col-md-2 my-2">
                                <img src="<?php echo BASE_URL; ?>images/about/ods4.png" alt="ods4.png" class="h-100 pulse">
                            </div>
                            <div class="col-4 col-md-2 my-2">
                                <img src="<?php echo BASE_URL; ?>images/about/ods5.png" alt="ods5.png" class="h-100 pulse">
                            </div>
                            <div class="col-4 col-md-2 my-2">
                                <img src="<?php echo BASE_URL; ?>images/about/ods8.png" alt="ods8.png" class="h-100 pulse">
                            </div>
                            <div class="col-4 col-md-2 my-2">
                                <img src="<?php echo BASE_URL; ?>images/about/ods9.png" alt="ods9.png" class="h-100 pulse">
                            </div>
                            <div class="col-4 col-md-2 my-2">
                                <img src="<?php echo BASE_URL; ?>images/about/ods10.png" alt="ods10.png" class="h-100 pulse">
                            </div>
                            <div class="col-4 col-md-2 my-2">
                                <img src="<?php echo BASE_URL; ?>images/about/ods11.png" alt="ods11png" class="h-100 pulse">
                            </div>
                            <div class="col-4 col-md-2 my-2">
                                <img src="<?php echo BASE_URL; ?>images/about/ods13.png" alt="ods13.png" class="h-100 pulse">
                            </div>
                            <div class="col-4 col-md-2 my-2">
                                <img src="<?php echo BASE_URL; ?>images/about/ods16.png" alt="ods16.png" class="h-100 pulse">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="committees"></div>
    <div class="py-5 bg-blue w-101">
        <div id="about-team" class="container about-team-container">
            <div class="row pb-3 px-2 px-md-5">
                <div id="board_of_directors_content">
                    <div class="row">
                        <?php
                        $csvData = file_get_contents('../cpup - Member.csv');
                        $lines = explode("\n", $csvData);
                        $headers = str_getcsv(array_shift($lines));
                        $about = [];
                        foreach ($lines as $line) {
                            $row = str_getcsv($line);
                            if (count($row) === count($headers)) {
                                $about[] = array_combine($headers, $row);
                            }
                        }

                        $numMembersPerRow = 4;
                        $membersCount = 0; // Inicializa a contagem de membros
                        $about = array_filter($about, function ($member) {
                            return !empty($member['where']);
                        });

                        foreach ($about as $member) {
                            if ($member['where'] == 'board_of_directors') {
                                $membersCount++;
                            }
                        }

                        $remainingMembers = $membersCount;
                        $numRows = ceil($membersCount / $numMembersPerRow);

                        for ($i = 0; $i < $numRows; $i++) { // Vai exibir três linhas
                            $membersInThisRow = ($i == 0) ? min($numMembersPerRow, $remainingMembers) : min(6, $remainingMembers);

                            if ($membersInThisRow == 0) {
                                break; // Não há mais membros para exibir
                            }
                            ?>
                            <div class="row pb-0 pb-md-5 px-5">
                                <?php
                                if ($i == 0) {
                                    ?>
                                    <div class="col-md-4">
                                        <div class="row d-flex align-center">
                                            <p class="pointer text-white" onclick="AboutTeam_handleClick(1)">
                                                <img id="board_of_directors_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg"> Board of Directors
                                            </p>
                                        </div>
                                        <div class="row d-flex align-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(2)">
                                                <img id="advisory_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Advisory Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(3)">
                                                <img id="external_monitoring_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> External Monitoring Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(4)">
                                                <img id="internal_monitoring_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Internal Monitoring Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(5)">
                                                <img id="staff_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Staff
                                            </p>
                                        </div>
                                    </div>
                                    <?php
                                }

                                $boardOfDirectorsMembers = array_filter($about, function ($member) {
                                    return $member['where'] == 'board_of_directors';
                                });
                                $boardOfDirectorsMembers = array_values($boardOfDirectorsMembers);

                                for ($j = 0; $j < $membersInThisRow; $j++) {
                                    $member = $boardOfDirectorsMembers[$membersCount - $remainingMembers];
                                    $remainingMembers--;
                                    ?>
                                    <div class="col-6 col-md-2 my-2 my-md-0 text-center text-white">
                                        <div class="row">
                                            <img src="<?php echo BASE_URL; ?>images/people/<?php echo $member['photo']; ?>.png" alt="" class="w-75 mx-auto circle-image">
                                        </div>
                                        <div class="name-position-wrapper">
                                            <div class="row my-1">
                                                <span class="medium"><?php echo $member['name']; ?></span>
                                            </div>
                                            <div class="row d-none d-md-block">
                                                <span class="italic"><?php echo $member['position']; ?></span>
                                            </div>
                                        </div>
                                        <div class="research_group-place-wrapper mt-2 d-none d-md-block">
                                            <div class="row">
                                                <span><?php echo $member['place_position']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div id="advisory_committee_content" style="display: none;">
                    <div class="row">
                        <?php
                        $csvData = file_get_contents('../cpup - Member.csv');
                        $lines = explode("\n", $csvData);
                        $headers = str_getcsv(array_shift($lines));
                        $about = [];
                        foreach ($lines as $line) {
                            $row = str_getcsv($line);
                            if (count($row) === count($headers)) {
                                $about[] = array_combine($headers, $row);
                            }
                        }

                        $numMembersPerRow = 4;
                        $membersCount = 0; // Inicializa a contagem de membros

                        foreach ($about as $member) {
                            if ($member['where'] == 'advisory_committee') {
                                $membersCount++;
                            }
                        }

                        $remainingMembers = $membersCount;
                        $numRows = ceil($membersCount / $numMembersPerRow);

                        for ($i = 0; $i < $numRows; $i++) { // Vai exibir três linhas
                            $membersInThisRow = ($i == 0) ? min($numMembersPerRow, $remainingMembers) : min(6, $remainingMembers);

                            if ($membersInThisRow == 0) {
                                break; // Não há mais membros para exibir
                            }
                            ?>
                            <div class="row pb-0 pb-md-5 px-5">
                                <?php
                                if ($i == 0) {
                                    ?>
                                    <div class="col-md-4">
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(1)">
                                                <img id="board_of_directors_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Board of Directors
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-white" onclick="AboutTeam_handleClick(2)">
                                                <img id="advisory_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg"> Advisory Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(3)">
                                                <img id="external_monitoring_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> External Monitoring Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(4)">
                                                <img id="internal_monitoring_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Internal Monitoring Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(5)">
                                                <img id="staff_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Staff
                                            </p>
                                        </div>
                                    </div>
                                    <?php
                                }

                                $advisoryCommitteeMembers = array_filter($about, function ($member) {
                                    return $member['where'] == 'advisory_committee';
                                });
                                $advisoryCommitteeMembers = array_values($advisoryCommitteeMembers);

                                for ($j = 0; $j < $membersInThisRow; $j++) {
                                    $member = $advisoryCommitteeMembers[$membersCount - $remainingMembers];
                                    $remainingMembers--;
                                    ?>
                                    <div class="col-6 col-md-2 my-2 my-md-0 text-center text-white">
                                        <div class="row">
                                            <img src="<?php echo BASE_URL; ?>images/people/<?php echo $member['photo']; ?>.png" alt="" class="w-75 mx-auto circle-image">
                                        </div>
                                        <div class="name-position-wrapper">
                                            <div class="row my-1">
                                                <span class="medium"><?php echo $member['name']; ?></span>
                                            </div>
                                            <div class="row d-none d-md-block">
                                                <span class="italic"><?php echo $member['position']; ?></span>
                                            </div>
                                        </div>
                                        <div class="research_group-place-wrapper mt-2 d-none d-md-block">
                                            <div class="row">
                                                <span><?php echo $member['place_position']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div id="external_monitoring_committee_content" style="display: none;">
                    <div class="row">
                        <?php
                        $csvData = file_get_contents('../cpup - Member.csv');
                        $lines = explode("\n", $csvData);
                        $headers = str_getcsv(array_shift($lines));
                        $about = [];
                        foreach ($lines as $line) {
                            $row = str_getcsv($line);
                            if (count($row) === count($headers)) {
                                $about[] = array_combine($headers, $row);
                            }
                        }

                        $numMembersPerRow = 4;
                        $membersCount = 0; // Inicializa a contagem de membros

                        foreach ($about as $member) {
                            if ($member['where'] == 'external_monitoring_committee') {
                                $membersCount++;
                            }
                        }

                        $remainingMembers = $membersCount;
                        $numRows = ceil($membersCount / $numMembersPerRow);

                        for ($i = 0; $i < $numRows; $i++) { // Vai exibir três linhas
                            $membersInThisRow = ($i == 0) ? min($numMembersPerRow, $remainingMembers) : min(6, $remainingMembers);

                            if ($membersInThisRow == 0) {
                                break; // Não há mais membros para exibir
                            }
                            ?>
                            <div class="row pb-0 pb-md-5 px-5">
                                <?php
                                if ($i == 0) {
                                    ?>
                                    <div class="col-md-4">
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(1)">
                                                <img id="board_of_directors_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Board of Directors
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(2)">
                                                <img id="advisory_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Advisory Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-white" onclick="AboutTeam_handleClick(3)">
                                                <img id="external_monitoring_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg"> External Monitoring Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(4)">
                                                <img id="internal_monitoring_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Internal Monitoring Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(5)">
                                                <img id="staff_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Staff
                                            </p>
                                        </div>
                                    </div>
                                    <?php
                                }

                                $externalMonitoringCommitteeMembers = array_filter($about, function ($member) {
                                    return $member['where'] == 'external_monitoring_committee';
                                });
                                $externalMonitoringCommitteeMembers = array_values($externalMonitoringCommitteeMembers);

                                for ($j = 0; $j < $membersInThisRow; $j++) {
                                    $member = $externalMonitoringCommitteeMembers[$membersCount - $remainingMembers];
                                    $remainingMembers--;
                                    ?>
                                    <div class="col-6 col-md-2 my-2 my-md-0 text-center text-white">
                                        <div class="row">
                                            <img src="<?php echo BASE_URL; ?>images/people/<?php echo $member['photo']; ?>.png" alt="" class="w-75 mx-auto circle-image">
                                        </div>
                                        <div class="name-position-wrapper">
                                            <div class="row my-1">
                                                <span class="medium"><?php echo $member['name']; ?></span>
                                            </div>
                                            <div class="row d-none d-md-block">
                                                <span class="italic"><?php echo $member['position']; ?></span>
                                            </div>
                                        </div>
                                        <div class="research_group-place-wrapper mt-2 d-none d-md-block">
                                            <div class="row">
                                                <span><?php echo $member['place_position']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>     
                <div id="internal_monitoring_committee_content" style="display: none;">
                    <div class="row">
                        <?php
                        $csvData = file_get_contents('../cpup - Member.csv');
                        $lines = explode("\n", $csvData);
                        $headers = str_getcsv(array_shift($lines));
                        $about = [];
                        foreach ($lines as $line) {
                            $row = str_getcsv($line);
                            if (count($row) === count($headers)) {
                                $about[] = array_combine($headers, $row);
                            }
                        }

                        $numMembersPerRow = 4;
                        $membersCount = 0; // Inicializa a contagem de membros

                        foreach ($about as $member) {
                            if ($member['where'] == 'internal_monitoring_committee') {
                                $membersCount++;
                            }
                        }

                        $remainingMembers = $membersCount;
                        $numRows = ceil($membersCount / $numMembersPerRow);

                        for ($i = 0; $i < $numRows; $i++) { // Vai exibir três linhas
                            $membersInThisRow = ($i == 0) ? min($numMembersPerRow, $remainingMembers) : min(6, $remainingMembers);

                            if ($membersInThisRow == 0) {
                                break; // Não há mais membros para exibir
                            }
                            ?>
                            <div class="row pb-0 pb-md-5 px-5">
                                <?php
                                if ($i == 0) {
                                    ?>
                                    <div class="col-md-4">
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(1)">
                                                <img id="board_of_directors_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Board of Directors
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(2)">
                                                <img id="advisory_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Advisory Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(3)">
                                                <img id="external_monitoring_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> External Monitoring Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-white" onclick="AboutTeam_handleClick(4)">
                                                <img id="internal_monitoring_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg"> Internal Monitoring Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(5)">
                                                <img id="staff_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Staff
                                            </p>
                                        </div>
                                    </div>
                                    <?php
                                }

                                $internalMonitoringCommitteeMembers = array_filter($about, function ($member) {
                                    return $member['where'] == 'internal_monitoring_committee';
                                });
                                $internalMonitoringCommitteeMembers = array_values($internalMonitoringCommitteeMembers);

                                for ($j = 0; $j < $membersInThisRow; $j++) {
                                    $member = $internalMonitoringCommitteeMembers[$membersCount - $remainingMembers];
                                    $remainingMembers--;
                                    ?>
                                    <div class="col-6 col-md-2 my-2 my-md-0 text-center text-white">
                                        <div class="row">
                                            <img src="<?php echo BASE_URL; ?>images/people/<?php echo $member['photo']; ?>.png" alt="" class="w-75 mx-auto circle-image">
                                        </div>
                                        <div class="name-position-wrapper">
                                            <div class="row my-1">
                                                <span class="medium"><?php echo $member['name']; ?></span>
                                            </div>
                                            <div class="row d-none d-md-block">
                                                <span class="italic"><?php echo $member['position']; ?></span>
                                            </div>
                                        </div>
                                        <div class="research_group-place-wrapper mt-2 d-none d-md-block">
                                            <div class="row">
                                                <span><?php echo $member['place_position']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div id="staff_content" style="display: none;">
                    <div class="row">
                        <?php
                        $csvData = file_get_contents('../cpup - Member.csv');
                        $lines = explode("\n", $csvData);
                        $headers = str_getcsv(array_shift($lines));
                        $about = [];
                        foreach ($lines as $line) {
                            $row = str_getcsv($line);
                            if (count($row) === count($headers)) {
                                $about[] = array_combine($headers, $row);
                            }
                        }

                        $numMembersPerRow = 4;
                        $membersCount = 0; // Inicializa a contagem de membros

                        foreach ($about as $member) {
                            if ($member['where'] == 'staff') {
                                $membersCount++;
                            }
                        }

                        $remainingMembers = $membersCount;
                        $numRows = ceil($membersCount / $numMembersPerRow);

                        for ($i = 0; $i < $numRows; $i++) { // Vai exibir três linhas
                            $membersInThisRow = ($i == 0) ? min($numMembersPerRow, $remainingMembers) : min(6, $remainingMembers);

                            if ($membersInThisRow == 0) {
                                break; // Não há mais membros para exibir
                            }
                            ?>
                            <div class="row pb-0 pb-md-5 px-5">
                                <?php
                                if ($i == 0) {
                                    ?>
                                    <div class="col-md-4">
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(1)">
                                                <img id="board_of_directors_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Board of Directors
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(2)">
                                                <img id="advisory_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Advisory Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(3)">
                                                <img id="external_monitoring_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> External Monitoring Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-gray" onclick="AboutTeam_handleClick(4)">
                                                <img id="internal_monitoring_committee_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg" style="display: none;"> Internal Monitoring Committee
                                            </p>
                                        </div>
                                        <div class="row d-flex align-items-center">
                                            <p class="pointer text-white" onclick="AboutTeam_handleClick(5)">
                                                <img id="staff_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1" alt="active_ball.svg"> Staff
                                            </p>
                                        </div>
                                    </div>
                                    <?php
                                }

                                $staffMembers = array_filter($about, function ($member) {
                                    return $member['where'] == 'staff';
                                });
                                $staffMembers = array_values($staffMembers);

                                for ($j = 0; $j < $membersInThisRow; $j++) {
                                    $member = $staffMembers[$membersCount - $remainingMembers];
                                    $remainingMembers--;
                                    ?>
                                    <div class="col-6 col-md-2 my-2 my-md-0 text-center text-white">
                                        <div class="row">
                                            <img src="<?php echo BASE_URL; ?>images/people/<?php echo $member['photo']; ?>.png" alt="" class="w-75 mx-auto circle-image">
                                        </div>
                                        <div class="name-position-wrapper">
                                            <div class="row my-1">
                                                <span class="medium"><?php echo $member['name']; ?></span>
                                            </div>
                                            <div class="row d-none d-md-block">
                                                <span class="italic"><?php echo $member['position']; ?></span>
                                            </div>
                                        </div>
                                        <div class="research_group-place-wrapper mt-2 d-none d-md-block">
                                            <div class="row">
                                                <span><?php echo $member['place_position']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-big-logo-wrapper py-5">
        <div id="task-forces" class="container px-2 px-md-5">
            <img src="<?php echo BASE_URL; ?>images/layout/page_break.svg" alt="page_break.svg" class="w-100 py-5">
            <div class="row py-3">
                <div class="col-md-3">
                    <h2 class="medium text-light-black">
                        TASK FORCES
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 task-forces-height-1" style="height: 500px;">
                    <p class="text-light-black">
                        The 21st century has been witnessing a paradigm shift in the social
                        role science plays, mainly in the unequivocal need to answer the social
                        claim for evidence-based knowledge to counteract the pressing challenges
                        of our time and to integrate international effort to conduct relevant,
                        complex research programs. The paradigm shift demands the scientific units
                        to be dynamic in continuously re-calibrating their strategies.
                    </p>
                    <p class="text-light-black">
                        The Center for Psychology at the University of Porto takes on the task.
                        Its governance policy commits to refining the relevance and the standard
                        of psychological research, while reaffirming the Center as a contemporary
                        professional scientific environment. We have established Task Forces for
                        continuing improvement actions planned to tackle central concerns related to
                        scientific production and knowledge transfer. Each Task Force is composed by
                        representatives of all of our Research Groups so that the solutions designed
                        capture the particularities of the Groups while are transversal in breadth.
                        The solutions designed are then incorporated by the Governance Board and
                        implemented by the technical staff.
                    </p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 task-forces-height-2" style="height: 500px;">
                    <div class="row mb-3">
                        <div class="col">
                            <img id="atom_trigger" src="<?php echo BASE_URL; ?>images/about/atom_active.svg" alt="atom_active.svg" class="pulsing w-100 pointer" onclick="ContinuingImprovementActions_handleClick(1)">
                        </div>
                        <div class="col">
                            <img id="search_trigger" src="<?php echo BASE_URL; ?>images/about/search.svg" alt="search.svg" class="w-100 pointer" onclick="ContinuingImprovementActions_handleClick(2)">
                        </div>
                        <div class="col">
                            <img id="chat_trigger" src="<?php echo BASE_URL; ?>images/about/chat.svg" alt="chat.svg" class="w-100 pointer" onclick="ContinuingImprovementActions_handleClick(3)">
                        </div>
                        <div class="col">
                            <img id="doors_trigger" src="<?php echo BASE_URL; ?>images/about/doors.svg" alt="doors.svg" class="w-100 pointer" onclick="ContinuingImprovementActions_handleClick(4)">
                        </div>
                        <div class="col">
                            <img id="lamps_trigger" src="<?php echo BASE_URL; ?>images/about/lamps.svg" alt="lamps.svg" class="w-100 pointer" onclick="ContinuingImprovementActions_handleClick(5)">
                        </div>
                    </div>
                    <div class="row my-5">
                        <div id="atom_content" class="text-blue">
                            <h3 class="medium mb-4">SCIENTIFIC PRODUCTION SUPPORT</h3>
                            <p>Goal: To improve the quality of the scientific output</p>
                            <p>
                                Team<br />
                                CND: Ana Luísa Patrão, Liliana Rodrigues<br />
                                DE: Isabel Pinto<br />
                                HS: Ana Gomes<br />
                                NCL: Susana Silva<br />
                                RCPW: Mariana Martins
                            </p>
                        </div>
                        <div id="search_content" class="text-blue" style="display: none;">
                            <h3 class="medium mb-4">Funding, Research Projects & Network</h3>
                            <p>Goal: To foster application to and collaboration in research projects and networks</p>
                            <p>
                                Team<br />
                                Coordinator: Adelina Barbosa-Ducharne (DE)<br />
                                CND: Catarina Brandão<br />
                                DE: Joana Soares<br />
                                NCL: Rui Alves, Ana Camacho<br />
                                RCPW: Tiago Bento Ferreira<br />
                                Research Support Office: Regina Lencastre
                            </p>
                        </div>
                        <div id="chat_content" class="text-blue" style="display: none;">
                            <h3 class="medium mb-4">Communication</h3>
                            <p>Goal: To improve the internal and the external communication actions</p>
                            <p>
                                Team<br />
                                Coordinator: Sara Magalhães (CND)<br />
                                DE: Sofia Guichard<br />
                                HS: Priscila Campos, Leonor Oliveira<br />
                                NCL: Teresa Limpo
                            </p>
                        </div>
                        <div id="doors_content" class="text-blue" style="display: none;">
                            <h3 class="medium mb-4">Open Science</h3>
                            <p>Goal: To promote engagement with Open Science at CPUP</p>
                            <p>
                                Team<br />
                                Coordinator: Alessandra Souza (NCL) CND: Jorge Gato, Daniela Leal<br />
                                DE: Catarina Canário, Carolina Guedes<br />
                                HS: Mariana Carrito<br />
                                NCL: Teresa Jacques<br />
                                RCPW: Tiago Ferreira<br />
                            </p>
                            <a href="https://openscience.fpce.up.pt/" target="_blank">https://openscience.fpce.up.pt/</a>
                        </div>
                        <div id="lamps_content" class="text-blue" style="display: none;">
                            <h3 class="medium mb-4">Knowledge Transfer</h3>
                            <p>Goal: To improve the visibility and the efficacy of the knowledge transfer actions</p>
                            <p>
                                Team<br />
                                Coordinator: Andreia Nunes (NCL) CND: Liliana Cunha<br />
                                DE: Catarina Grande<br />
                                HS: Catarina Moura<br />
                                RCPW: Beatriz Santos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="open-science" class="container px-2 px-md-5">
            <div class="row py-3">
                <div class="col-md-3">
                    <h2 class="medium text-light-black">
                        OPEN SCIENCE
                    </h2>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-5">
                    <p class="text-light-black">
                        CPUP follows stringent guidelines for the transparency,
                        integrity, and rigor of scientific production, and thus
                        encourages a responsible, open, and inclusive approach to
                        "science making" where in the team members are invited to share the:
                    </p>
                </div>
            </div>
            <div class="row py-md-5">
                <div class="row">
                    <div class="open-cience-col-padding col-6 col-md-2 my-3 my-md-0">
                        <div class="open-science-wrapper" data-text="That is, to share the goals, the hypotheses, the methodology, and the planned data analysis">
                            <h5 class="medium text-blue">
                                Research<br />
                                Plans
                            </h5>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="open-science-arrow-right">
                        </div>
                    </div>
                    <div class="open-cience-col-padding col-6 col-md-2 my-3 my-md-0">
                        <div class="open-science-wrapper" data-text="E.g., surveys, stimuli, experimental tasks, etc.">
                            <h5 class="medium text-blue">
                                Materials<br />
                                Employed
                            </h5>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="open-science-arrow-right">
                        </div>
                    </div>
                    <div class="open-cience-col-padding col-6 col-md-2 my-3 my-md-0">
                        <div class="open-science-wrapper" data-text="Provided they are previously made anonymous">
                            <h5 class="medium text-blue">
                                Data<br />
                                Inputs
                            </h5>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="open-science-arrow-right">
                        </div>
                    </div>
                    <div class="open-cience-col-padding col-6 col-md-2 my-3 my-md-0">
                        <div class="open-science-wrapper" data-text="Of the tools used to transform, analyze and graph the data">
                            <h5 class="medium text-blue">
                                Scripts and<br />
                                Codes
                            </h5>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="open-science-arrow-right">
                        </div>
                    </div>
                    <div class="open-cience-col-padding col-6 col-md-2 my-3 my-md-0">
                        <div class="open-science-wrapper" data-text="Giving public access to all those looking for scientific knowledge">
                            <h5 class="medium text-blue">
                                Pre-Print and the Post-Print Manuscript
                            </h5>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="open-science-arrow-right">
                        </div>
                    </div>
                    <div class="open-cience-col-padding col-6 col-md-2 my-3 my-md-0">
                        <div class="open-science-wrapper" data-text="Such as the data management plan, and supporting graphic material used in public communications">
                            <h5 class="medium text-blue">
                                Other<br />
                                Resources
                            </h5>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="open-science-arrow-right">
                        </div>
                    </div>
                </div>
                <div class="row py-md-4">
                    <div class="open-cience-col-padding col-6 col-md-2 my-3 my-md-0">
                        <div class="open-science-wrapper" data-text="By submitting it to a scientific journal for pre-approaval prior to data collection">
                            <h5 class="medium text-blue">
                                Preregistering <br />
                                the Research<br />
                                Plan
                            </h5>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="open-science-arrow-right">
                        </div>
                    </div>
                    <div class="open-cience-col-padding col-6 col-md-2 my-3 my-md-0">
                        <div class="open-science-wrapper" data-text="Such as DMPonline, Open Science Framework, Argus, Zenodo">
                            <h5 class="medium text-blue">
                                Using Data<br />
                                Management<br />
                                Tools and<br />
                                Repositories
                            </h5>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="open-science-arrow-right">
                        </div>
                    </div>
                    <div class="open-cience-col-padding col-6 col-md-2 my-3 my-md-0">
                        <div class="open-science-wrapper" data-text="Providing undisclosed detailed information that enables critical reading and later replication">
                            <h5 class="medium text-blue">
                                Exhaustive<br />
                                Description<br />
                                of the<br />
                                Research<br />
                            </h5>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="open-science-arrow-right">
                        </div>
                    </div>
                    <div class="open-cience-col-padding col-6 col-md-2 my-3 my-md-0">
                        <div class="open-science-wrapper" data-text="That checks for the reproducibility and robustness of the scientific findings">
                            <h5 class="medium text-blue">
                                Conducting<br />
                                Replication<br />
                                Studies<br />
                            </h5>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="open-science-arrow-right">
                        </div>
                    </div>
                    <div class="open-cience-col-padding col-6 col-md-2 my-3 my-md-0">
                        <div class="open-science-wrapper" data-text="To prevent biases and misleading statistical artifacts">
                            <h5 class="medium text-blue">
                                Publishing<br />
                                Positive &<br />
                                Negative<br />
                                Results
                            </h5>
                            <img src="<?php echo BASE_URL; ?>images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="open-science-arrow-right">
                        </div>
                    </div>
                    <div class="open-cience-col-padding col-6 col-md-2 my-3 my-md-0">
                        <a href="https://openscience.fpce.up.pt/" target="_blank">
                            <div class="open-science-wrapper bg-blue">
                                <p class="medium-italic fs14 text-white px-0 px-md-2">
                                    YOU CAN LEARN
                                    MORE ABOUT THIS
                                    TOPIC BY CHECKING
                                    OUT CPUP'S OPEN
                                    SCIENCE ACTION.
                                </p>
                                <img src="<?php echo BASE_URL; ?>images/layout/arrowTopRight.svg" alt="arrow_top_right" class="pulse open-science-arrow-right">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div id="cpup-collective" class="px-2 px-md-5">
            <div class="row py-3">
                <h2 class="medium text-light-black">
                    CPUP COLLECTIVE
                </h2>
            </div>
            <div class="row py-2">
                <div class="col">
                    <p class="text-light-black">
                        CPUP Collective is a spin-off of the Scientific Production Action.
                        It is an online database that compiles each team member's technical
                        expertise and fields of work, and, by doing so, reveals the team's
                        multifaceted skills.
                    </p>
                </div>
                <div class="col-md-1"></div>
                <div class="col">
                    <p class="text-light-black">
                        CPUP Collective is also a search tool that helps finding CPUP members
                        that best fit your research needs, thus promoting in-house collaboration.
                        If you are looking for peers to share ideas and work with, check out
                        CPUP Collective's website.
                    </p>
                </div>
            </div>
        </div>
        <div id="cross-cutting-areas" class="px-2 px-md-5">
            <img src="<?php echo BASE_URL; ?>images/layout/page_break.svg" alt="page_break.svg" class="w-100 py-5">
            <div class="row py-3">
                <h2 class="medium text-light-black">
                    CROSS-CUTTING AREAS
                </h2>
            </div>
            <div class="row py-2">
                <div class="col">
                    <p class="text-light-black">
                        Our Research Projects address multidisciplinary topics ranging several
                        of the American Psychological Association, APA, domains. At CPUP, these
                        domains intersect due to the center's signature synergy and concern with the
                        social contribution that Psychology can offer. A defining feature of CPUP is
                        thus its strategic cross-cutting research areas. These areas encompass all of
                        our projects and help reveal promising collaborations and venture into new
                        transversal fields still to explore. Below you find a diagram of the four main cross-cutting.
                    </p>
                </div>
                <div class="col-md-1"></div>
                <div class="col">
                    <p class="text-light-black">
                        areas and the acronyms of the projects they embraced in 2022. The acronyms are
                        highlighted with the color of the Research Group that head the project, even
                        though several projects are shared by different Research Groups. As you can see,
                        the cross-cutting areas interconnect over several common projects and groups.
                        The diagram also illustrates a subarea devoted to the projects that foresee
                        outreaching solutions. If you want to learn more about our work, please go
                        to Research Projects.
                    </p>
                </div>
            </div>
            <div class="d-none d-md-block container my-5">
                <div class="row">
                    <div class="col-md-2 mr-1">
                        <div class="row my-3 table-research-groups-and-image-mb">
                            <img src="<?php echo BASE_URL; ?>images/about/table_img.svg" alt="table_img.svg" class="w-100">
                        </div>
                        <div class="row my-2">
                            <div id="table-areas-1-trigger" class="pointer table-areas table-areas-active" onclick="AboutTable_handleClick(1)">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img id="table_1_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" alt="active_ball.svg" class="my-4">
                                    </div>
                                    <div class="col">
                                        <p class="medium my-3">Promotion of Health & Well-being</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div id="table-areas-2-trigger" class="pointer table-areas" onclick="AboutTable_handleClick(2)">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img id="table_2_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" alt="active_ball.svg" class="pt-4">
                                    </div>
                                    <div class="col pt-2">
                                        <p class="medium">Outreaching Technology & Policy Proposition</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div id="table-areas-3-trigger" class="pointer table-areas" onclick="AboutTable_handleClick(3)">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img id="table_3_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" alt="active_ball.svg" class="my-4">
                                    </div>
                                    <div class="col pt-2">
                                        <p class="medium">Education for the Promotion of Cognitive & Socio-Emotional Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div id="table-areas-4-trigger" class="pointer table-areas" onclick="AboutTable_handleClick(4)">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img id="table_4_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" alt="active_ball.svg" class="my-4">
                                    </div>
                                    <div class="col pt-2">
                                        <p class="medium">Promotion of Flair, Inclusive & Sustainable Communities</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div id="table-areas-5-trigger" class="pointer table-areas" onclick="AboutTable_handleClick(5)">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img id="table_5_trigger" src="<?php echo BASE_URL; ?>images/about/active_ball.svg" alt="active_ball.svg" class="my-4">
                                    </div>
                                    <div class="col pt-2">
                                        <p class="medium">Improving Work Conditions & Promoting Occupational Well-being</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 pl-3">
                        <div class="row my-3 table-research-groups-and-image-mb">
                            <div class="table-research-groups bg-purple">
                                <p class="text-white">Culture, Normativity and Diversity</p>
                            </div>
                        </div>
                        <div id="table-areas-1-content-1" class="row table-research-groups-wrapper">
                            <p class="medium text-purple">Person&Bullying</p>
                        </div>
                        <div id="table-areas-2-content-1" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-purple"></p>
                        </div>
                        <div id="table-areas-3-content-1" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-purple">NewABC</p>
                            <p class="medium text-purple">EcucHate</p>
                            <p class="medium text-purple">VigilHate</p>
                            <p class="medium text-purple">InPluServ</p>
                        </div>
                        <div id="table-areas-4-content-1" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-purple">COPAGLOBA</p>
                            <p class="medium text-purple">HomeWork</p>
                            <p class="medium text-purple">bridGEs</p>
                            <p class="medium text-purple">TRAIN</p>
                            <p class="medium text-purple">Autodriving</p>
                            <p class="medium text-purple">NewABC</p>
                            <p class="medium text-purple">EducHate</p>
                            <p class="medium text-purple">VigilHate</p>
                            <p class="medium text-purple">InPluServ</p>
                        </div>
                        <div id="table-areas-5-content-1" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-purple">Operator</p>
                            <p class="medium text-purple">Cork-In</p>
                            <p class="medium text-purple">COPAGLOBA</p>
                            <p class="medium text-purple">HomeWork</p>
                            <p class="medium text-purple">bridGEs</p>
                            <p class="medium text-purple">TRAIN</p>
                        </div>
                    </div>
                    <div class="col-md-2 pl-3">
                        <div class="row my-3 table-research-groups-and-image-mb">
                            <div class="table-research-groups bg-dark-cian">
                                <p class="text-white">Development and Education</p>
                            </div>
                        </div>
                        <div id="table-areas-1-content-2" class="row table-research-groups-wrapper">
                            <p class="medium text-dark-cian">*AdoPt</p>
                            <p class="medium text-dark-cian">*AdoPtPrepare</p>
                            <p class="medium text-dark-cian">*CoAction</p>
                            <p class="medium text-dark-cian">*EarlyChildhood</p>
                            <p class="medium text-dark-cian">*EarlyEvaluation</p>
                            <p class="medium text-dark-cian">*IIPB</p>
                            <p class="medium text-dark-cian">EurofamNet</p>
                            <p class="medium text-dark-cian">*FosterCare</p>
                            <p class="medium text-dark-cian">*MultiSectoral</p>
                            <p class="medium text-dark-cian">*ProTraining</p>
                            <p class="medium text-dark-cian">ProW</p>
                            <p class="medium text-dark-cian">REUNIRmais</p>
                            <p class="medium text-dark-cian">*Transitions</p>
                        </div>
                        <div id="table-areas-2-content-2" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-dark-cian">*MultiSectoral</p>
                            <p class="medium text-dark-cian">*FosterCare</p>
                            <p class="medium text-dark-cian">EurofamNet</p>
                            <p class="medium text-dark-cian">REUNIRmais</p>
                        </div>
                        <div id="table-areas-3-content-2" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-dark-cian">ProW</p>
                            <p class="medium text-dark-cian">*ProTraining</p>
                            <p class="medium text-dark-cian">*EarlyChildhood</p>
                            <p class="medium text-dark-cian">#NarcisusMeetsPandora</p>
                        </div>
                        <div id="table-areas-4-content-2" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-dark-cian">*AdoPt</p>
                            <p class="medium text-dark-cian">*AdoPtPrepare</p>
                            <p class="medium text-dark-cian">*FosterCare</p>
                            <p class="medium text-dark-cian">*MultiSectoral</p>
                            <p class="medium text-dark-cian">*Transitions</p>
                            <p class="medium text-dark-cian">EurofamNet</p>
                            <p class="medium text-dark-cian">REUNIRmais</p>
                            <p class="medium text-dark-cian">#NarcisusMeetsPandora</p>
                        </div>
                        <div id="table-areas-5-content-2" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-dark-cian">*IIPB</p>
                        </div>
                    </div>
                    <div class="col-md-2 pl-3">
                        <div class="row my-3 table-research-groups-and-image-mb">
                            <div class="table-research-groups bg-red">
                                <p class="text-white">Human Sexuality</p>
                            </div>
                        </div>
                        <div id="table-areas-1-content-3" class="row table-research-groups-wrapper">
                            <p class="medium text-red">ANATHEMA</p>
                            <p class="medium text-red">FEMOFFENCE</p>
                            <p class="medium text-red">NEUROPSYCHSEX</p>
                            <p class="medium text-red">PRIORITY</p>
                            <p class="medium text-red">SexHealth</p>
                        </div>
                        <div id="table-areas-2-content-3" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-red">ANATHEMA</p>
                            <p class="medium text-red">PRIORITY</p>
                        </div>
                        <div id="table-areas-3-content-3" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-red"></p>
                        </div>
                        <div id="table-areas-4-content-3" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-red">PRIORITY</p>
                            <p class="medium text-red">FEMOFFENCE</p>
                        </div>
                        <div id="table-areas-5-content-3" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-red"></p>
                        </div>
                    </div>
                    <div class="col-md-2 pl-3">
                        <div class="row my-3 table-research-groups-and-image-mb">
                            <div class="table-research-groups bg-blood">
                                <p class="text-white">Neurocognitionand Language</p>
                            </div>
                        </div>
                        <div id="table-areas-1-content-4" class="row table-research-groups-wrapper">
                            <p class="medium text-blood">AdHeart</p>
                            <p class="medium text-blood">EVRES</p>
                        </div>
                        <div id="table-areas-2-content-4" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-blood">EVRES</p>
                            <p class="medium text-blood">AdHeart</p>
                            <p class="medium text-blood">e-LADDA</p>
                        </div>
                        <div id="table-areas-3-content-4" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-blood">Time2Read</p>
                            <p class="medium text-blood">e-LADDA</p>
                        </div>
                        <div id="table-areas-4-content-4" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-blood">Time2Read</p>
                        </div>
                        <div id="table-areas-5-content-4" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-blood"></p>
                        </div>
                    </div>
                    <div class="col-md-2 pl-3">
                        <div class="row my-3 table-research-groups-and-image-mb">
                            <div class="table-research-groups bg-orange">
                                <p class="text-white">Relationships, Change Processes and Wellbeing </p>
                            </div>
                        </div>
                        <div id="table-areas-1-content-5" class="row table-research-groups-wrapper">
                            <p class="medium text-orange">AURORA</p>
                            <p class="medium text-orange">CAREME</p>
                            <p class="medium text-orange">EmpoweringEFT</p>
                            <p class="medium text-orange">Filio-parentalViolence</p>
                            <p class="medium text-orange">MyStory</p>
                            <p class="medium text-orange">Play-the-Odds</p>
                        </div>
                        <div id="table-areas-2-content-5" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-orange">Play-the-Odds</p>
                        </div>
                        <div id="table-areas-3-content-5" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-orange"></p>
                        </div>
                        <div id="table-areas-4-content-5" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-orange">Filio-parentalViolence</p>
                            <p class="medium text-orange">MyStory</p>
                            <p class="medium text-orange">CAREME</p>
                        </div>
                        <div id="table-areas-5-content-5" class="row table-research-groups-wrapper" style="display: none;">
                            <p class="medium text-orange"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-md-none container my-5">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <p>Promotion of Health & Well-being</p>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div id="innerAccordion11">
                                    <div class="card">
                                        <div class="card-header bg-purple" id="innerHeading11">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse11" aria-expanded="false" aria-controls="innerCollapse11">
                                                    <p class="text-white">Culture, Normativity and Diversity</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse11" class="collapse" aria-labelledby="innerHeading11" data-parent="#innerAccordion11">
                                            <div class="card-body">
                                                <p class="medium text-purple">Person&Bullying</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion12">
                                    <div class="card">
                                        <div class="card-header bg-dark-cian" id="innerHeading12">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse12" aria-expanded="false" aria-controls="innerCollapse12">
                                                    <p class="text-white">Development and Education</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse12" class="collapse" aria-labelledby="innerHeading12" data-parent="#innerAccordion12">
                                            <div class="card-body">
                                                <p class="medium text-dark-cian">*AdoPt</p>
                                                <p class="medium text-dark-cian">*AdoPtPrepare</p>
                                                <p class="medium text-dark-cian">*CoAction</p>
                                                <p class="medium text-dark-cian">*EarlyChildhood</p>
                                                <p class="medium text-dark-cian">*EarlyEvaluation</p>
                                                <p class="medium text-dark-cian">*IIPB</p>
                                                <p class="medium text-dark-cian">EurofamNet</p>
                                                <p class="medium text-dark-cian">*FosterCare</p>
                                                <p class="medium text-dark-cian">*MultiSectoral</p>
                                                <p class="medium text-dark-cian">*ProTraining</p>
                                                <p class="medium text-dark-cian">ProW</p>
                                                <p class="medium text-dark-cian">REUNIRmais</p>
                                                <p class="medium text-dark-cian">*Transitions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion13">
                                    <div class="card">
                                        <div class="card-header bg-red" id="innerHeading13">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse13" aria-expanded="false" aria-controls="innerCollapse13">
                                                    <p class="text-white">Human Sexuality</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse13" class="collapse" aria-labelledby="innerHeading13" data-parent="#innerAccordion13">
                                            <div class="card-body">
                                                <p class="medium text-red">ANATHEMA</p>
                                                <p class="medium text-red">FEMOFFENCE</p>
                                                <p class="medium text-red">NEUROPSYCHSEX</p>
                                                <p class="medium text-red">PRIORITY</p>
                                                <p class="medium text-red">SexHealth</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion14">
                                    <div class="card">
                                        <div class="card-header bg-blood" id="innerHeading14">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse14" aria-expanded="false" aria-controls="innerCollapse14">
                                                    <p class="text-white">Neurocognitionand Language</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse14" class="collapse" aria-labelledby="innerHeading14" data-parent="#innerAccordion14">
                                            <div class="card-body">
                                                <p class="medium text-blood">AdHeart</p>
                                                <p class="medium text-blood">EVRES</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion15">
                                    <div class="card">
                                        <div class="bg-orange card-header bg-orange" id="innerHeading15">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse15" aria-expanded="false" aria-controls="innerCollapse15">
                                                    <p class="text-white">Relationships, Change Processes and Wellbeing</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse15" class="collapse" aria-labelledby="innerHeading15" data-parent="#innerAccordion15">
                                            <div class="card-body">
                                                <p class="medium text-orange">AURORA</p>
                                                <p class="medium text-orange">CAREME</p>
                                                <p class="medium text-orange">EmpoweringEFT</p>
                                                <p class="medium text-orange">Filio-parentalViolence</p>
                                                <p class="medium text-orange">MyStory</p>
                                                <p class="medium text-orange">Play-the-Odds</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <p>Outreaching Technology & Policy Proposition</p>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div id="innerAccordion11">
                                    <div class="card">
                                        <div class="card-header bg-purple" id="innerHeading11">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse11" aria-expanded="false" aria-controls="innerCollapse11">
                                                    <p class="text-white">Culture, Normativity and Diversity</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse11" class="collapse" aria-labelledby="innerHeading11" data-parent="#innerAccordion11">
                                            <div class="card-body">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion12">
                                    <div class="card">
                                        <div class="card-header bg-dark-cian" id="innerHeading12">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse12" aria-expanded="false" aria-controls="innerCollapse12">
                                                    <p class="text-white">Development and Education</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse12" class="collapse" aria-labelledby="innerHeading12" data-parent="#innerAccordion12">
                                            <div class="card-body">
                                                <p class="medium text-dark-cian">*MultiSectoral</p>
                                                <p class="medium text-dark-cian">*FosterCare</p>
                                                <p class="medium text-dark-cian">EurofamNet</p>
                                                <p class="medium text-dark-cian">REUNIRmais</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion13">
                                    <div class="card">
                                        <div class="card-header bg-red" id="innerHeading13">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse13" aria-expanded="false" aria-controls="innerCollapse13">
                                                    <p class="text-white">Human Sexuality</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse13" class="collapse" aria-labelledby="innerHeading13" data-parent="#innerAccordion13">
                                            <div class="card-body">
                                                <p class="medium text-red">ANATHEMA</p>
                                                <p class="medium text-red">PRIORITY</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion14">
                                    <div class="card">
                                        <div class="card-header bg-blood" id="innerHeading14">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse14" aria-expanded="false" aria-controls="innerCollapse14">
                                                    <p class="text-white">Neurocognitionand Language</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse14" class="collapse" aria-labelledby="innerHeading14" data-parent="#innerAccordion14">
                                            <div class="card-body">
                                                <p class="medium text-blood">EVRES</p>
                                                <p class="medium text-blood">AdHeart</p>
                                                <p class="medium text-blood">e-LADDA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion15">
                                    <div class="card">
                                        <div class="card-header bg-orange" id="innerHeading15">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse15" aria-expanded="false" aria-controls="innerCollapse15">
                                                    <p class="text-white">Relationships, Change Processes and Wellbeing</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse15" class="collapse" aria-labelledby="innerHeading15" data-parent="#innerAccordion15">
                                            <div class="card-body">
                                                <p class="medium text-orange">Play-the-Odds</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <p>Education for the Promotion of Cognitive & Socio-Emotional Development</p>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div id="innerAccordion11">
                                    <div class="card">
                                        <div class="card-header bg-purple" id="innerHeading11">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse11" aria-expanded="false" aria-controls="innerCollapse11">
                                                    <p class="text-white">Culture, Normativity and Diversity</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse11" class="collapse" aria-labelledby="innerHeading11" data-parent="#innerAccordion11">
                                            <div class="card-body">
                                                <p class="medium text-purple">NewABC</p>
                                                <p class="medium text-purple">EcucHate</p>
                                                <p class="medium text-purple">VigilHate</p>
                                                <p class="medium text-purple">InPluServ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion12">
                                    <div class="card">
                                        <div class="card-header bg-dark-cian" id="innerHeading12">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse12" aria-expanded="false" aria-controls="innerCollapse12">
                                                    <p class="text-white">Development and Education</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse12" class="collapse" aria-labelledby="innerHeading12" data-parent="#innerAccordion12">
                                            <div class="card-body">
                                                <p class="medium text-dark-cian">ProW</p>
                                                <p class="medium text-dark-cian">*ProTraining</p>
                                                <p class="medium text-dark-cian">*EarlyChildhood</p>
                                                <p class="medium text-dark-cian">#NarcisusMeetsPandora</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion13">
                                    <div class="card">
                                        <div class="card-header bg-red" id="innerHeading13">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse13" aria-expanded="false" aria-controls="innerCollapse13">
                                                    <p class="text-white">Human Sexuality</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse13" class="collapse" aria-labelledby="innerHeading13" data-parent="#innerAccordion13">
                                            <div class="card-body">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion14">
                                    <div class="card">
                                        <div class="card-header bg-blood" id="innerHeading14">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse14" aria-expanded="false" aria-controls="innerCollapse14">
                                                    <p class="text-white">Neurocognitionand Language</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse14" class="collapse" aria-labelledby="innerHeading14" data-parent="#innerAccordion14">
                                            <div class="card-body">
                                                <p class="medium text-blood">Time2Read</p>
                                                <p class="medium text-blood">e-LADDA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion15">
                                    <div class="card">
                                        <div class="card-header bg-orange" id="innerHeading15">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse15" aria-expanded="false" aria-controls="innerCollapse15">
                                                    <p class="text-white">Relationships, Change Processes and Wellbeing</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse15" class="collapse" aria-labelledby="innerHeading15" data-parent="#innerAccordion15">
                                            <div class="card-body">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <p>Promotion of Flair, Inclusive & Sustainable Communities</p>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <div id="innerAccordion11">
                                    <div class="card">
                                        <div class="card-header bg-purple" id="innerHeading11">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse11" aria-expanded="false" aria-controls="innerCollapse11">
                                                    <p class="text-white">Culture, Normativity and Diversity</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse11" class="collapse" aria-labelledby="innerHeading11" data-parent="#innerAccordion11">
                                            <div class="card-body">
                                                <p class="medium text-purple">COPAGLOBA</p>
                                                <p class="medium text-purple">HomeWork</p>
                                                <p class="medium text-purple">bridGEs</p>
                                                <p class="medium text-purple">TRAIN</p>
                                                <p class="medium text-purple">Autodriving</p>
                                                <p class="medium text-purple">NewABC</p>
                                                <p class="medium text-purple">EducHate</p>
                                                <p class="medium text-purple">VigilHate</p>
                                                <p class="medium text-purple">InPluServ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion12">
                                    <div class="card">
                                        <div class="card-header bg-dark-cian" id="innerHeading12">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse12" aria-expanded="false" aria-controls="innerCollapse12">
                                                    <p class="text-white">Development and Education</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse12" class="collapse" aria-labelledby="innerHeading12" data-parent="#innerAccordion12">
                                            <div class="card-body">
                                                <p class="medium text-dark-cian">*AdoPt</p>
                                                <p class="medium text-dark-cian">*AdoPtPrepare</p>
                                                <p class="medium text-dark-cian">*FosterCare</p>
                                                <p class="medium text-dark-cian">*MultiSectoral</p>
                                                <p class="medium text-dark-cian">*Transitions</p>
                                                <p class="medium text-dark-cian">EurofamNet</p>
                                                <p class="medium text-dark-cian">REUNIRmais</p>
                                                <p class="medium text-dark-cian">#NarcisusMeetsPandora</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion13">
                                    <div class="card">
                                        <div class="card-header bg-red" id="innerHeading13">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse13" aria-expanded="false" aria-controls="innerCollapse13">
                                                    <p class="text-white">Human Sexuality</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse13" class="collapse" aria-labelledby="innerHeading13" data-parent="#innerAccordion13">
                                            <div class="card-body">
                                                <p class="medium text-red">PRIORITY</p>
                                                <p class="medium text-red">FEMOFFENCE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion14">
                                    <div class="card">
                                        <div class="card-header bg-blood" id="innerHeading14">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse14" aria-expanded="false" aria-controls="innerCollapse14">
                                                    <p class="text-white">Neurocognitionand Language</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse14" class="collapse" aria-labelledby="innerHeading14" data-parent="#innerAccordion14">
                                            <div class="card-body">
                                                <p class="medium text-blood">Time2Read</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion15">
                                    <div class="card">
                                        <div class="card-header bg-orange" id="innerHeading15">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse15" aria-expanded="false" aria-controls="innerCollapse15">
                                                    <p class="text-white">Relationships, Change Processes and Wellbeing</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse15" class="collapse" aria-labelledby="innerHeading15" data-parent="#innerAccordion15">
                                            <div class="card-body">
                                                <p class="medium text-orange">Filio-parentalViolence</p>
                                                <p class="medium text-orange">MyStory</p>
                                                <p class="medium text-orange">CAREME</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <p>Improving Work Conditions & Promoting Occupational Well-being</p>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <div id="innerAccordion11">
                                    <div class="card">
                                        <div class="card-header bg-purple" id="innerHeading11">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse11" aria-expanded="false" aria-controls="innerCollapse11">
                                                    <p class="text-white">Culture, Normativity and Diversity</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse11" class="collapse" aria-labelledby="innerHeading11" data-parent="#innerAccordion11">
                                            <div class="card-body">
                                                <p class="medium text-purple">Operator</p>
                                                <p class="medium text-purple">Cork-In</p>
                                                <p class="medium text-purple">COPAGLOBA</p>
                                                <p class="medium text-purple">HomeWork</p>
                                                <p class="medium text-purple">bridGEs</p>
                                                <p class="medium text-purple">TRAIN</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion12">
                                    <div class="card">
                                        <div class="card-header bg-dark-cian" id="innerHeading12">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse12" aria-expanded="false" aria-controls="innerCollapse12">
                                                    <p class="text-white">Development and Education</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse12" class="collapse" aria-labelledby="innerHeading12" data-parent="#innerAccordion12">
                                            <div class="card-body">
                                                <p class="medium text-dark-cian">*IIPB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion13">
                                    <div class="card">
                                        <div class="card-header bg-red" id="innerHeading13">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse13" aria-expanded="false" aria-controls="innerCollapse13">
                                                    <p class="text-white">Human Sexuality</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse13" class="collapse" aria-labelledby="innerHeading13" data-parent="#innerAccordion13">
                                            <div class="card-body">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion14">
                                    <div class="card">
                                        <div class="card-header bg-blood" id="innerHeading14">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse14" aria-expanded="false" aria-controls="innerCollapse14">
                                                    <p class="text-white">Neurocognitionand Language</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse14" class="collapse" aria-labelledby="innerHeading14" data-parent="#innerAccordion14">
                                            <div class="card-body">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="innerAccordion15">
                                    <div class="card">
                                        <div class="card-header bg-orange" id="innerHeading15">
                                            <h5 class="text-center mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#innerCollapse15" aria-expanded="false" aria-controls="innerCollapse15">
                                                    <p class="text-white">Relationships, Change Processes and Wellbeing</p>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="innerCollapse15" class="collapse" aria-labelledby="innerHeading15" data-parent="#innerAccordion15">
                                            <div class="card-body">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Outros itens do primeiro nível com IDs exclusivos -->
                </div>
            </div>
        </div>
    </div>
    <a id="to-top-button" class="pulse btn" href="#top">
        <img src="<?php echo BASE_URL; ?>images/layout/arrowToTop.svg" alt="toTop" class="arrowToTop">
    </a>
    <!-- Add Bootstrap JS and jQuery (if needed) -->
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Optional: Add custom JavaScript here -->
    <script>
        let KeepUpWithCpup_currentImageNumber = 1;
        const KeepUpWithCpup_totalImages = 4;

        function KeepUpWithCpup_handleClick(imageNumber) {

            const baseImageUrl = "<?php echo BASE_URL; ?>images/about/";
            const imageElements = [
                "reading",
                "verified",
                "talking",
                "hands"
            ];
            const textElements = [
                "text_keep_up_with_cpup_1",
                "text_keep_up_with_cpup_2",
                "text_keep_up_with_cpup_3",
                "text_keep_up_with_cpup_4"
            ];
            for (let i = 1; i <= imageElements.length; i++) {
                const imgElement = document.getElementById("img_keep_up_with_cpup_" + i);
                const textElement = document.getElementById(textElements[i - 1]);
                if (i === imageNumber) {
                    imgElement.src = baseImageUrl + imageElements[i - 1] + "_active.svg";
                    textElement.style.display = 'block';
                    imgElement.classList.add('pulsing');
                } else {
                    imgElement.src = baseImageUrl + imageElements[i - 1] + ".svg";
                    textElement.style.display = 'none';
                    imgElement.classList.remove('pulsing');
                }
            }
        }
    </script>
    <script>
        function AboutTeam_handleClick(imageNumber) {
            const elementIDs = [
                "board_of_directors",
                "advisory_committee",
                "external_monitoring_committee",
                "internal_monitoring_committee",
                "staff"
            ];

            // Oculta todos os elementos
            elementIDs.forEach(id => {
                document.getElementById(id + "_trigger").style.display = 'none';
                document.getElementById(id + "_content").style.display = 'none';
            });

            // Exibe o elemento selecionado
            const selectedID = elementIDs[imageNumber - 1];
            document.getElementById(selectedID + "_trigger").style.display = 'inline';
            document.getElementById(selectedID + "_content").style.display = 'block';
        }
    </script>
    <script>
        let ContinuingImprovementActions_currentImageNumber = 1;
        const ContinuingImprovementActions_totalImages = 5;

        function ContinuingImprovementActions_handleClick(imageNumber) {
            const baseImageUrl = "<?php echo BASE_URL; ?>images/about/";
            const imageElements = [
                "atom",
                "search",
                "chat",
                "doors",
                "lamps"
            ];
            const contentElements = [
                "atom_content",
                "search_content",
                "chat_content",
                "doors_content",
                "lamps_content"
            ];
            for (let i = 1; i <= imageElements.length; i++) {
                const imgElement = document.getElementById(imageElements[i - 1] + "_trigger");
                const contentElement = document.getElementById(contentElements[i - 1]);
                if (i === imageNumber) {
                    imgElement.src = baseImageUrl + imageElements[i - 1] + "_active.svg";
                    contentElement.style.display = 'block';
                    imgElement.classList.add('pulsing');
                } else {
                    imgElement.src = baseImageUrl + imageElements[i - 1] + ".svg";
                    contentElement.style.display = 'none';
                    imgElement.classList.remove('pulsing');
                }
            }
        }
    </script>
    <script>
        function autoRotateImages() {
            KeepUpWithCpup_currentImageNumber = (KeepUpWithCpup_currentImageNumber % KeepUpWithCpup_totalImages) + 1;
            KeepUpWithCpup_handleClick(KeepUpWithCpup_currentImageNumber);
            ContinuingImprovementActions_currentImageNumber = (ContinuingImprovementActions_currentImageNumber % ContinuingImprovementActions_totalImages) + 1;
            ContinuingImprovementActions_handleClick(ContinuingImprovementActions_currentImageNumber);
        }

        // Chame a função a cada 10 segundos
        setInterval(autoRotateImages, 10000);
    </script>
    <script>
        function AboutTable_handleClick(imageNumber) {
            for (let i = 1; i <= 5; i++) {
                const triggerElement = document.getElementById(`table-areas-${i}-trigger`);
                for (let j = 1; j <= 5; j++) {
                    const contentElement = document.getElementById(`table-areas-${i}-content-${j}`);
                    contentElement.style.display = (i === imageNumber) ? 'block' : 'none';
                }
                triggerElement.classList.toggle("table-areas-active", i === imageNumber);
            }
        }
    </script>
    <script>
        const progressImage = document.getElementById('progress-image');
        const about = document.getElementById('about');
        const keepUpWithCpup = document.getElementById('keep-up-with-cpup');
        const strategicGoals = document.getElementById('strategic-goals');
        const sustainableDevelopmentGoals = document.getElementById('sustainable-development-goals');
        const aboutTeam = document.getElementById('about-team');
        const taskForces = document.getElementById('task-forces');
        const openScience = document.getElementById('open-science');
        const cpupCollective = document.getElementById('cpup-collective');
        const crossCuttingAreas = document.getElementById('cross-cutting-areas');

        window.addEventListener('scroll', () => {
            const windowHeight = window.innerHeight;
            const scrollPosition = window.scrollY;
            if (scrollPosition < keepUpWithCpup.offsetTop) {
                progressImage.src = '<?php echo BASE_URL; ?>images/about/progress14.svg';
            } else if (scrollPosition < sustainableDevelopmentGoals.offsetTop) {
                progressImage.src = '<?php echo BASE_URL; ?>images/about/progress24.svg';
            } else if (scrollPosition < cpupCollective.offsetTop) {
                progressImage.src = '<?php echo BASE_URL; ?>images/about/progress34.svg';
            } else {
                progressImage.src = '<?php echo BASE_URL; ?>images/about/progress44.svg';
            }
            if (scrollPosition >= sustainableDevelopmentGoals.offsetTop && scrollPosition < (aboutTeam.offsetTop + aboutTeam.offsetHeight)) {
                progressImage.style.display = 'none';
            } else {
                progressImage.style.display = 'block';
            }
        });
    </script>
    <script src="<?php echo BASE_URL; ?>js/all/toTop.js"></script>

</body>

<footer>
    <?php include '../includes/footer.php'; ?>
</footer>

</html>