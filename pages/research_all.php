<?php
include_once('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPUP - Research all</title>

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
                                    <p class="text-white text-end">About</p>
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
        <div id="cnd" class="row pt-3 px-md-5">
            <div class="col-md-5 order-2 order-md-1">
                <div class="bg-light-gray border-radius-20 px-3 px-md-5 py-4">
                    <h2 class="medium text-light-black pb-4">RESEARCH PROJECTS</h2>
                    <p class="text-light-black">
                        The Research Projects developed at the Center for Psychology
                        span the Research Groups, feeding from the fruitful synergy
                        of our researchers and their backgrounds. The quality of the
                        projects has been continually acknowledged with competitive
                        national, international, and European funding awarded by expert
                        evaluation panels. Here you can find the projects that took
                        place in 2022.
                    </p>
                </div>
            </div>
            <div class="col-md-7 order-1 order-md-2 mb-2 mb-md-0">
                <img src="<?php echo BASE_URL; ?>images/research/research_all.png" alt="research_all.png" width="100%"
                    class="border-radius-20 my-h-100">
            </div>
        </div>
    </div>
    <div class="container py-5 pb-5">
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
        usort($projects, function ($a, $b) {
            $order = ['cnd', 'de', 'hs', 'ncl', 'rcpw'];
            $aOrder = array_search($a['research_group'], $order);
            $bOrder = array_search($b['research_group'], $order);
            return $aOrder - $bOrder;
        });
        foreach ($projects as $project) {
            $group_class = '';
            $bg_color = '';

            switch ($project['research_group']) {
                case 'cnd':
                    $header_color = 'accordion-header-border-purple border-radius-15';
                    $collapse_color = 'accordion-collapse-border-purple bg-purple';
                    break;
                case 'de':
                    $header_color = 'accordion-header-border-dark-cian border-radius-15';
                    $collapse_color = 'accordion-collapse-border-dark-cian bg-dark-cian';
                    break;
                case 'hs':
                    $header_color = 'accordion-header-border-red border-radius-15';
                    $collapse_color = 'accordion-collapse-border-red bg-red';
                    break;
                case 'ncl':
                    $header_color = 'accordion-header-border-blood border-radius-15';
                    $collapse_color = 'accordion-collapse-border-blood bg-blood';
                    break;
                case 'rcpw':
                    $header_color = 'accordion-header-border-orange border-radius-15';
                    $collapse_color = 'accordion-collapse-border-orange bg-orange';
                    break;
                default:
                    $header_color = 'accordion-header-border-purple border-radius-15';
                    $collapse_color = 'accordion-collapse-border-purple bg-purple';
                    break;
            }
            ?>
            <div class="accordion py-2" id="accordionExample_<?php echo $project['id']; ?>">
                <div class="accordion-item">
                    <h2 class="accordion-header accordion-header-wrapper border-radius-15 <?php echo $header_color; ?>"
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
                        class="accordion-collapse collapse border-radius-15 text-white <?php echo $collapse_color; ?>"
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
        <?php } ?>
    </div>
    <a id="to-top-button" class="btn" href="#top">
        <img src="<?php echo BASE_URL; ?>images/layout/arrowToTop.svg" alt="toTop" class="arrowToTop">
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