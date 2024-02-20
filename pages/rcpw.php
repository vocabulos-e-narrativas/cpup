<?php
include_once('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPUP - RCPW</title>

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
    <div class="container">
        <div id="rpcw" class="row py-3 pb-5 px-5">
            <div class="col-md-5">
                <div class="text-light-black bg-light-gray border-radius-20 px-5 py-4">
                    <p>
                        The Relationships, Change Processes, and Well-being Research Group studies individual and family
                        adaptation processes to life-cycle transitions and unexpected life events. It also examines
                        psychological change and intervention to promote the well-being and improve health services.</p>
                    <p class="medium text-orange py-3">
                        life-cycle transitions; attachment and emotional regulation; psychological intervention and
                        psychotherapy; health care; e-health</p>
                    <a href="https://www.labrp.pt/" target="_blank" class="text-light-black">
                        <p>Psychotherapy Lab (UMAIA)</p>
                    </a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="specific-group-wrapper bg-orange">
                    <h1 class="text-white">
                        Relationships,<br />
                        Change Processes<br />
                        and Well-being<br />
                        Research Group
                    </h1>
                    <img src="<?php echo BASE_URL; ?>images/research/cpup_written_white_logo.svg"
                        alt="cpup_written_white_logo.svg" class="specific-group-cpup-written-white-logo">
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 bg-orange">
        <div class="container about-team-container text-white">
            <div id="integrated_members_content">
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
                    $membersCount = 0;
                    $integratedMembers = array();
                    // Filtra e armazena membros em um array
                    foreach ($about as $member) {
                        if (($member['research_group'] === 'rcpw') && ($member['research_group_where'] === 'integrated_members')) {
                            $integratedMembers[] = $member;
                            $membersCount++;
                        }
                    }
                    $remainingMembers = $membersCount;
                    $numRows = ceil($membersCount / $numMembersPerRow);
                    for ($i = 0; $i < $numRows; $i++) {
                        $membersInThisRow = ($i === 0) ? min($numMembersPerRow, $remainingMembers) : min(6, $remainingMembers);
                        if ($membersInThisRow === 0) {
                            break; // Não há mais membros para exibir
                        }
                        ?>
                        <div class="row pb-0 pb-md-5 px-5">
                            <?php
                            if ($i == 0) {
                                ?>
                                <div class="col-md-4">
                                    <div class="row d-flex align-items-center">
                                        <p class="text-white" onclick="AboutTeam_handleClick(1)">
                                            <img id="integrated_members_trigger"
                                                src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1"
                                                alt="active_ball.svg"> Integrated Members
                                        </p>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <p class="text-gray" onclick="AboutTeam_handleClick(2)">
                                            <img id="colaborators_trigger"
                                                src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1"
                                                alt="active_ball.svg" style="display: none;"> Collaborators
                                        </p>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <p class="text-gray" onclick="AboutTeam_handleClick(3)">
                                            <img id="phd_students_trigger"
                                                src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1"
                                                alt="active_ball.svg" style="display: none;"> PhD Students
                                        </p>
                                    </div>
                                </div>
                                <?php
                            }
                            $membersDisplayed = 0; // Inicializa o contador de membros exibidos
                            // Itera apenas sobre os membros na seção 'integrated_members'
                            foreach ($integratedMembers as $key => $member) {
                                if ($membersDisplayed >= $membersInThisRow) {
                                    break;
                                }
                                ?>
                                <div class="col-6 col-md-2 my-2 my-md-0 text-center text-white">
                                    <div class="row">
                                        <img src="<?php echo BASE_URL; ?>images/people/<?php echo $member['photo']; ?>.png" alt="" class="w-75 mx-auto circle-image">
                                    </div>
                                    <div class="row my-1">
                                        <span class="medium">
                                            <?php echo $member['name']; ?>
                                        </span>
                                    </div>
                                    <div class="research_group-place-wrapper row my-1 d-none d-md-block">
                                        <span class="italic px-1">
                                            <?php echo $member['research_group_position']; ?>
                                        </span>
                                    </div>
                                    <div class="research_group-place-wrapper mt-2 d-none d-md-block">
                                        <div class="row">
                                            <span>
                                                <?php echo $member['research_group_place']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $membersDisplayed++;
                                unset($integratedMembers[$key]); // Remove o membro exibido do array
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div id="colaborators_content" style="display: none">
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
                    $membersCount = 0;
                    $collaborators = array();
                    // Filtra e armazena membros em um array
                    foreach ($about as $member) {
                        if (($member['research_group'] === 'rcpw') && ($member['research_group_where'] === 'collaborators')) {
                            $collaborators[] = $member;
                            $membersCount++;
                        }
                    }
                    $remainingMembers = $membersCount;
                    $numRows = ceil($membersCount / $numMembersPerRow);
                    for ($i = 0; $i < $numRows; $i++) {
                        $membersInThisRow = ($i === 0) ? min($numMembersPerRow, $remainingMembers) : min(6, $remainingMembers);
                        if ($membersInThisRow === 0) {
                            break; // Não há mais membros para exibir
                        }
                        ?>
                        <div class="row pb-0 pb-md-5 px-5">
                            <?php
                            if ($i == 0) {
                                ?>
                                <div class="col-md-4">
                                    <div class="row d-flex align-items-center">
                                        <p class="text-gray" onclick="AboutTeam_handleClick(1)">
                                            <img id="integrated_members_trigger"
                                                src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1"
                                                alt="active_ball.svg" style="display: none;"> Integrated Members
                                        </p>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <p class="text-white" onclick="AboutTeam_handleClick(2)">
                                            <img id="colaborators_trigger"
                                                src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1"
                                                alt="active_ball.svg"> Collaborators
                                        </p>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <p class="text-gray" onclick="AboutTeam_handleClick(3)">
                                            <img id="phd_students_trigger"
                                                src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1"
                                                alt="active_ball.svg" style="display: none;"> PhD Students
                                        </p>
                                    </div>
                                </div>
                                <?php
                            }
                            $membersDisplayed = 0; // Inicializa o contador de membros exibidos
                            // Itera apenas sobre os membros na seção 'integrated_members'
                            foreach ($collaborators as $key => $member) {
                                if ($membersDisplayed >= $membersInThisRow) {
                                    break;
                                }
                                ?>
                                <div class="col-6 col-md-2 my-2 my-md-0 text-center text-white">
                                    <div class="row">
                                        <img src="<?php echo BASE_URL; ?>images/people/<?php echo $member['photo']; ?>.png" alt="" class="w-75 mx-auto circle-image">
                                    </div>
                                    <div class="row my-1">
                                        <span class="medium">
                                            <?php echo $member['name']; ?>
                                        </span>
                                    </div>
                                    <div class="research_group-place-wrapper row my-1 d-none d-md-block">
                                        <span class="italic px-1">
                                            <?php echo $member['research_group_position']; ?>
                                        </span>
                                    </div>
                                    <div class="research_group-place-wrapper mt-2 d-none d-md-block">
                                        <div class="row">
                                            <span>
                                                <?php echo $member['research_group_place']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $membersDisplayed++;
                                unset($collaborators[$key]); // Remove o membro exibido do array
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div id="phd_students_content" style="display: none">
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
                    $membersCount = 0;
                    $phdStudents = array();
                    // Filtra e armazena membros em um array
                    foreach ($about as $member) {
                        if (($member['research_group'] === 'rcpw') && ($member['research_group_where'] === 'phd_students')) {
                            $phdStudents[] = $member;
                            $membersCount++;
                        }
                    }
                    $remainingMembers = $membersCount;
                    $numRows = ceil($membersCount / $numMembersPerRow);
                    for ($i = 0; $i < $numRows; $i++) {
                        $membersInThisRow = ($i === 0) ? min($numMembersPerRow, $remainingMembers) : min(6, $remainingMembers);
                        if ($membersInThisRow === 0) {
                            break; // Não há mais membros para exibir
                        }
                        ?>
                        <div class="row pb-0 pb-md-5 px-5">
                            <?php
                            if ($i == 0) {
                                ?>
                                <div class="col-md-4">
                                    <div class="row d-flex align-items-center">
                                        <p class="text-gray" onclick="AboutTeam_handleClick(1)">
                                            <img id="integrated_members_trigger"
                                                src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1"
                                                alt="active_ball.svg" style="display: none;"> Integrated Members
                                        </p>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <p class="text-gray" onclick="AboutTeam_handleClick(2)">
                                            <img id="colaborators_trigger"
                                                src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1"
                                                alt="active_ball.svg" style="display: none;"> Collaborators
                                        </p>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <p class="text-white" onclick="AboutTeam_handleClick(3)">
                                            <img id="phd_students_trigger"
                                                src="<?php echo BASE_URL; ?>images/about/active_ball.svg" class="mb-1"
                                                alt="active_ball.svg"> PhD Students
                                        </p>
                                    </div>
                                </div>
                                <?php
                            }
                            $membersDisplayed = 0; // Inicializa o contador de membros exibidos
                            // Itera apenas sobre os membros na seção 'integrated_members'
                            foreach ($phdStudents as $key => $member) {
                                if ($membersDisplayed >= $membersInThisRow) {
                                    break;
                                }
                                ?>
                                <div class="col-6 col-md-2 my-2 my-md-0 text-center text-white">
                                    <div class="row">
                                        <img src="<?php echo BASE_URL; ?>images/people/<?php echo $member['photo']; ?>.png" alt="" class="w-75 mx-auto circle-image">
                                    </div>
                                    <div class="row my-1">
                                        <span class="medium">
                                            <?php echo $member['name']; ?>
                                        </span>
                                    </div>
                                    <div class="research_group-place-wrapper row my-1 d-none d-md-block">
                                        <span class="italic px-1">
                                            <?php echo $member['research_group_position']; ?>
                                        </span>
                                    </div>
                                    <div class="research_group-place-wrapper mt-2 d-none d-md-block">
                                        <div class="row">
                                            <span>
                                                <?php echo $member['research_group_place']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $membersDisplayed++;
                                unset($phdStudents[$key]); // Remove o membro exibido do array
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
    <div class="container p-5">
        <div id="research_projects" class="row py-5">
            <h2 class="medium text-light-black py-4">
                RESEARCH PROJECTS
            </h2>
        </div>
        <?php
        $csvData = file_get_contents('../cpup - Project.csv');
        $lines = explode("\n", $csvData);
        $headers = str_getcsv(array_shift($lines));
        $projects = [];
        foreach ($lines as $line) {
            $row = str_getcsv($line);
            if (count($row) === count($headers)) {
                $projects[] = array_combine($headers, $row);
            }
        }
        usort($projects, function ($a, $b) {
            // Comparação baseada nas datas de início (start_date)
            $dateA = strtotime($a['start_date']);
            $dateB = strtotime($b['start_date']);

            // Ordenação decrescente (do mais recente para o mais antigo)
            return $dateB - $dateA;
        });
        foreach ($projects as $project) {
            if ($project['research_group'] == 'rcpw') {
                ?>
                <div class="accordion py-2" id="accordionExample_<?php echo $project['id']; ?>">
                    <div class="accordion-item">
                        <h2 class="accordion-header accordion-header-wrapper accordion-header-border-orange border-radius-15"
                            id="heading_<?php echo $project['id']; ?>">
                            <button class="accordion-button" type="button" data-toggle="collapse"
                                data-target="#collapse_<?php echo $project['id']; ?>" aria-expanded="true"
                                aria-controls="collapse_<?php echo $project['id']; ?>">
                                <div class="col-md-9">
                                    <h3 class="medium text-light-black">
                                        <?php echo $project['title'] ?>
                                    </h3>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse_<?php echo $project['id']; ?>"
                            class="accordion-collapse accordion-collapse-border-orange collapse bg-orange border-radius-15 text-white"
                            aria-labelledby="heading_<?php echo $project['id']; ?>"
                            data-parent="#accordionExample_<?php echo $project['id']; ?>">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Team</p>
                                        <?php $teamMembers = explode('%', $project['team (separado por %)']);
                                        foreach ($teamMembers as $teamMember) { ?>
                                            <p class="medium">
                                                <?php echo $teamMember; ?>
                                            </p>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-3">
                                        <p>External Partners</p>
                                        <?php $partnerMembers = explode('%', $project['partner (separado por %)']);
                                        foreach ($partnerMembers as $partnerMembers) { ?>
                                            <p class="medium">
                                                <?php echo $partnerMembers; ?>
                                            </p>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Reference:</p>
                                        <p class="medium">
                                            <?php echo $project['reference']; ?>
                                        </p>
                                        <p>Sponsor:
                                            <span class="medium">
                                                <?php $sponsorMembers = explode('%', $project['sponsor (separado por %)']);
                                                foreach ($sponsorMembers as $sponsorMembers) { ?>
                                                    <p class="medium">
                                                        <?php echo $sponsorMembers; ?>
                                                    </p>
                                                <?php } ?>
                                            </span>
                                        </p>
                                        <p>Period:
                                            <span class="medium">
                                                <?php echo formatarData($project['start_date']) ?>
                                                a
                                                <?php echo formatarData($project['end_date']) ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>UN 2030 Goals</p>
                                        <?php $goalMembers = explode('%', $project['goal (separado por %)']);
                                        foreach ($goalMembers as $goalMembers) { ?>
                                            <img src="<?php echo BASE_URL . 'images/about/' . $goalMembers; ?>" alt="goal.png"
                                                class="" />
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php if ($project['link']) { ?>
                                    <div class="row text-center">
                                        <a href="<?php echo $project['link']; ?>" class="text-white italic underline mt-3 mt-md-0">
                                            <h6>Check the project's website here</h6>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
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
        function AboutTeam_handleClick(tabNumber) {
            // Defina uma lista de IDs de conteúdo e gatilhos correspondentes
            const tabContents = ["integrated_members", "colaborators", "phd_students"];
            const tabTriggers = ["integrated_members_trigger", "colaborators_trigger", "phd_students_trigger"];
            tabContents.forEach((content) => {
                document.getElementById(`${content}_content`).style.display = 'none';
            });
            tabTriggers.forEach((trigger) => {
                document.getElementById(trigger).style.display = 'none';
            });
            if (tabNumber >= 1 && tabNumber <= 3) {
                const selectedContent = tabContents[tabNumber - 1];
                const selectedTrigger = tabTriggers[tabNumber - 1];
                document.getElementById(selectedTrigger).style.display = 'inline';
                document.getElementById(`${selectedContent}_content`).style.display = 'block';
            }
        }
    </script>
    <script src="<?php echo BASE_URL; ?>js/all/toTop.js"></script>

</body>

<footer>
    <?php include '../includes/footer.php'; ?>
</footer>

</html>