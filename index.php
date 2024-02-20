<?php
include_once('config.php');
include_once('includes/calendar.php');
$date = new DateTime();
$calendar = new Calendar($date->format('Y-m-d'));
//$calendar->add_event('Evento', '2023-10-31', 1);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPUP</title>

    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo BASE_URL; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>css/calendar.css" rel="stylesheet">


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
    <div class="container regular">
        <div>
            <div class="d-block d-md-none border-bottom-blue py-3 pb-5">
                <div class="row">
                    <img src="<?php echo BASE_URL; ?>images/about/fpceup_edificio.png" alt="fpceup_edificio.png"
                        width="100%" height="300px" class="">
                    <div class="px-3 py-3">
                        <h2 class="medium text-light-black">CENTRO DE PSICOLOGIA DA UNIVERSIDADE DO PORTO</h2>
                        <p class="text-light-black">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Id voluptate enim hic nostrum praesentium laudantium.
                            Beatae autem ex voluptatem quos odit, tempora nihil natus
                            alias veniam maxime voluptatibus quam omnis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block border-bottom-blue py-3 pb-5">
                <div class="home-page-image-container">
                    <img src="<?php echo BASE_URL; ?>images/home_page/fpceup_edificio.png" alt="fpceup_edificio.png"
                        width="100%" height="600px" class="">
                    <div class="home-page-overlay-text px-5">
                        <h2 class="medium text-light-black">CENTRO DE PSICOLOGIA DA UNIVERSIDADE DO PORTO</h2>
                        <p class="text-light-black">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Id voluptate enim hic nostrum praesentium laudantium.
                            Beatae autem ex voluptatem quos odit, tempora nihil natus
                            alias veniam maxime voluptatibus quam omnis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom-blue py-3 pb-5">
            <div class="upcoming-container">
                <?php
                $csvData = file_get_contents('cpup - Event.csv');
                $lines = explode("\n", $csvData);
                $headers = str_getcsv(array_shift($lines));
                $data = [];
                $pastData = [];
                $now = new DateTime();

                foreach ($lines as $line) {
                    $row = str_getcsv($line);
                    if (count($row) === count($headers)) {
                        $event = array_combine($headers, $row);
                        $eventStartDate = new DateTime($event['start_date']);
                        $eventEndDate = new DateTime($event['end_date']);
                        $duration = max(($eventStartDate->diff($eventEndDate)->days) + 1, 1);
                        $calendar->add_event($event['title'], $event['start_date'], $duration);
                        if ($eventStartDate > $now) {
                            $data[] = $event;
                        } else {
                            $pastData[] = $event;
                        }
                    }
                }

                usort($data, function ($a, $b) {
                    return new DateTime($a['start_date']) <=> new DateTime($b['start_date']);
                });
                ?>
                <div class="row px-2 py-3 p-md-5">
                    <div class="col">
                        <?php if (!empty($data)) { ?>
                            <h2 class="medium text-light-black">UPCOMING</h2>
                        <?php } else { ?>
                            <h2 class="medium text-light-black">HIGHLIGHTS</h2>
                        <?php } ?>
                    </div>
                    <div class="col text-end">
                        <a class="text-white bg-blue pointer px-2 py-1 border-radius-17"
                            href="<?php echo BASE_URL; ?>pages/archive_events.php" target="_blank">VIEW ALL</a>
                    </div>
                </div>
                <div class="row pb-3 px-3 px-md-5">
                    <div class="col-12 col-md-4 py-3 py-md-0">
                        <div
                            class="d-flex align-items-center upcoming-wrapper border-radius-17 text-center w-100 px-3 pulse">
                            <?= $calendar ?>
                        </div>
                    </div>
                    <?php if (!empty($data)) { ?>
                        <div class="col-12 col-md-4 py-3 py-md-0">
                            <div class="pulse upcoming-wrapper border-radius-17 text-center w-100">
                                <div>
                                    <?php
                                    if (!empty($data)) {
                                        $nextEvent = $data[0];
                                        $eventStartDate = new DateTime($nextEvent['start_date']);
                                        $now = new DateTime();
                                        $interval = $eventStartDate->getTimestamp() - $now->getTimestamp();

                                        $formattedDays = sprintf("%02d", floor($interval / (60 * 60 * 24)));
                                        $formattedHours = sprintf("%02d", floor(($interval % (60 * 60 * 24)) / (60 * 60)));
                                        $formattedMinutes = sprintf("%02d", floor(($interval % (60 * 60)) / 60));
                                        $formattedSeconds = sprintf("%02d", $interval % 60);
                                        echo '
                                        <div class="py-5">
                                            <div class="calendar-date d-block d-md-flex">
                                                <span class="calendar-big-number" id="days">' . $formattedDays . '</span>
                                                <span class="calendar-small-word">Dias</span>
                                                <span class="calendar-big-slash"> | </span>
                                                <span class="calendar-big-number" id="hours">' . $formattedHours . '</span>
                                                <span class="calendar-small-word">Horas</span>
                                                <span class="calendar-big-slash"> | </span> 
                                                <span class="calendar-big-number" id="minutes">' . $formattedMinutes . '</span>
                                                <span class="calendar-small-word">Minutos</span>
                                                <span class="calendar-big-slash"> | </span>
                                                <span class="calendar-big-number" id="seconds">' . $formattedSeconds . '</span>
                                                <span class="calendar-small-word">Segundos</span>
                                            </div>
                                            <img src="' . BASE_URL . 'images/layout/calendar.png" alt="calendar.png" class="py-3">
                                            <h2 class="medium text-blue">' . $nextEvent['title'] . '</h2>
                                            <p class="calendar-date-place text-blue">' . formatarData($nextEvent['start_date']) . '<br/>' . $nextEvent['place'] . '</p>
                                            <p class="calendar-description px-4">' . $nextEvent['description'] . '</p>
                                            <a href="' . $nextEvent['link'] . '" target="_blank">
                                                <img src="' . BASE_URL . 'images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="pulse pt-4 pt-md-0 upcoming-arrow-right">
                                            </a>
                                        </div>
                                    ';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-12 col-md-4 py-3 py-md-0">
                            <div class="pulse upcoming-wrapper border-radius-17 text-center w-100">
                                <div>
                                    <?php
                                    if (!empty($pastData)) {
                                        $nextEvent = $pastData[sizeof($pastData) - 1];
                                        echo '
                                        <div class="py-5">
                                            <img src="' . BASE_URL . 'images/layout/calendar.png" alt="calendar.png" class="py-3">
                                            <h2 class="px-5 medium text-blue">' . $nextEvent['title'] . '</h2>
                                            <p class="calendar-date-place text-blue">' . formatarData($nextEvent['start_date']) . '<br/>' . $nextEvent['place'] . '</p>
                                            <p class="calendar-description px-4">' . $nextEvent['description'] . '</p>
                                            <a href="' . $nextEvent['link'] . '" target="_blank">
                                                <img src="' . BASE_URL . 'images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="pulse pt-4 pt-md-0 upcoming-arrow-right">
                                            </a>
                                        </div>
                                    ';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-12 col-md-4 py-3 py-md-0">
                            <div class="pulse upcoming-wrapper border-radius-17 text-center w-100">
                                <div>
                                    <?php
                                    if (!empty($pastData)) {
                                        $nextEvent = $pastData[sizeof($pastData) - 1];
                                        echo '
                                        <div class="py-5">
                                            <img src="' . BASE_URL . 'images/layout/calendar.png" alt="calendar.png" class="py-3">
                                            <h2 class="px-5 medium text-blue">' . $nextEvent['title'] . '</h2>
                                            <p class="calendar-date-place text-blue">' . formatarData($nextEvent['start_date']) . '<br/>' . $nextEvent['place'] . '</p>
                                            <p class="calendar-description px-4">' . $nextEvent['description'] . '</p>
                                            <a href="' . $nextEvent['link'] . '" target="_blank">
                                                <img src="' . BASE_URL . 'images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="pulse pt-4 pt-md-0 upcoming-arrow-right">
                                            </a>
                                        </div>
                                    ';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 py-3 py-md-0">
                            <div class="pulse upcoming-wrapper border-radius-17 text-center w-100">
                                <div>
                                    <?php
                                    if (!empty($pastData)) {
                                        $nextEvent = $pastData[sizeof($pastData) - 2];
                                        echo '
                                        <div class="py-5">
                                            <img src="' . BASE_URL . 'images/layout/calendar.png" alt="calendar.png" class="py-3">
                                            <h2 class="px-5 medium text-blue">' . $nextEvent['title'] . '</h2>
                                            <p class="calendar-date-place text-blue">' . formatarData($nextEvent['start_date']) . '<br/>' . $nextEvent['place'] . '</p>
                                            <p class="calendar-description px-4">' . $nextEvent['description'] . '</p>
                                            <a href="' . $nextEvent['link'] . '" target="_blank">
                                                <img src="' . BASE_URL . 'images/layout/arrowRightBlue.svg" alt="arrow_to_right" class="pulse pt-4 pt-md-0 upcoming-arrow-right">
                                            </a>
                                        </div>
                                    ';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="border-bottom-blue py-3 pb-5">
            <div class="join-cpup-container">
                <div class="row px-2 py-4 p-md-5">
                    <div class="col">
                        <h2 class="medium text-light-black">JOIN THE CPUP TEAM</h2>
                    </div>
                </div>
                <div class="row pb-3 px-2 px-md-5">
                    <div class="col-md-8 order-2 order-md-1">
                        <div class="join-cpup-container-wrapper bg-blue border-radius-17 p-4">
                            <div class="px-3">
                                <div class="type bg-white text-center border-radius-17 text-light-black">MSCA
                                    POSTDOCTORAL FELLOWSHIPS</div>
                            </div>
                            <div class="text-white py-3 px-3">
                                <h3>Enhance your creative<br />and innovative potential</h3>
                            </div>
                            <div class="text-white px-3">
                                <p>
                                    The Center for Psychology at University of Porto (CPUP) is an international research
                                    unit welcoming
                                    outstanding researchers applying to MSCA Postdoctoral Fellowships. At CPUP you can
                                    find a
                                    stimulating, multidisciplinary team of experts with whom to collaborate in one
                                    offive Research Groups:
                                </p>
                            </div>
                            <div class="text-white">
                                <ul>
                                    <li>Culture, Normativity and Diversity</li>
                                    <li>Development and Education</li>
                                    <li>Human Sexuality</li>
                                    <li>Neurocognition and Language</li>
                                    <li>Relationships, Change Processes and Well-Being</li>
                                </ul>
                            </div>
                            <a href="https://ec.europa.eu/info/funding-tenders/opportunities/portal/screen/opportunities/topic-details/horizon-msca-2023-pf-01-01;callCode=null;freeTextSearchKeyword=;matchWholeText=true;typeCodes=0,1,2,8;statusCodes=31094501;programmePeriod=2021%20-%202027;programCcm2Id=43108390;programDivisionCode=43108473;focusAreaCode=null;destinationGroup=null;missionGroup=null;geographicalZonesCode=null;programmeDivisionProspect=null;startDateLte=null;startDateGte=null;crossCuttingPriorityCode=null;cpvCode=null;performanceOfDelivery=null;sortQuery=sortStatus;orderBy=asc;onlyTenders=false;topicListKey=topicSearchTablePageState"
                                target="_blank">
                                <img src="<?php echo BASE_URL; ?>images/layout/arrowRight.svg" alt="arrow_to_right"
                                    class="pulse join-cpup-arrow-right">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 order-1 order-md-2">
                        <a href="https://ec.europa.eu/info/funding-tenders/opportunities/portal/screen/opportunities/topic-details/horizon-msca-2023-pf-01-01;callCode=null;freeTextSearchKeyword=;matchWholeText=true;typeCodes=0,1,2,8;statusCodes=31094501;programmePeriod=2021%20-%202027;programCcm2Id=43108390;programDivisionCode=43108473;focusAreaCode=null;destinationGroup=null;missionGroup=null;geographicalZonesCode=null;programmeDivisionProspect=null;startDateLte=null;startDateGte=null;crossCuttingPriorityCode=null;cpvCode=null;performanceOfDelivery=null;sortQuery=sortStatus;orderBy=asc;onlyTenders=false;topicListKey=topicSearchTablePageState"
                            target="_blank">
                            <div class="join-cpup-image-wrapper">
                                <img src="<?php echo BASE_URL; ?>images/home_page/white_logo.svg" alt="cpup_white_logo"
                                    class="cpup-white-logo">
                                <img src="<?php echo BASE_URL; ?>images/home_page/join_cpup_image.png"
                                    alt="join_cpup_image" class="border-radius-17 h-100 w-101 w-100">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5">
            <div class="news-container">
                <div class="row px-2 py-3 p-md-5">
                    <div class="col-6">
                        <h2 class="medium text-light-black">NEWS</h2>
                    </div>
                    <div class="col-6 text-end">
                        <a class="text-white bg-blue pointer px-2 py-1 border-radius-17"
                            href="<?php echo BASE_URL; ?>pages/archive_news.php" target="_blank">VIEW ALL</a>
                    </div>
                </div>
                <div class="row pb-3 px-2 px-md-5">
                    <?php
                    $csvData = file_get_contents('cpup - News.csv');
                    $lines = explode("\n", $csvData);
                    $headers = str_getcsv(array_shift($lines));
                    $data = [];
                    foreach ($lines as $line) {
                        $row = str_getcsv($line);
                        if (count($row) === count($headers)) {
                            $data[] = array_combine($headers, $row);
                        }
                    }
                    $data = array_slice($data, -4);
                    foreach (array_reverse($data) as $cpupnews) {
                        echo '
                        <div class="col-md-3 pulse">
                            <img src="' . BASE_URL . 'images/news/' . $cpupnews['photo'] . '" alt="" class="w-100 my-3">
                            <h5 class="medium">' . $cpupnews['title'] . '</h5>
                        </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="pb-3 pb-md-5">
            <div class="publications-container pb-0 pb-md-5">
                <div class="row py-3 px-2 px-md-5">
                    <div class="col-6">
                        <h2 class="medium text-light-black">PUBLICATIONS</h2>
                    </div>
                    <div class="col-6 text-end">
                        <a class="text-white bg-blue pointer px-2 py-1 border-radius-17"
                            href="<?php echo BASE_URL; ?>pages/archive_publications.php" target="_blank">VIEW ALL</a>
                    </div>
                </div>
                <div class="row pb-5 px-2 px-md-5">
                    <?php
                    $csvData = file_get_contents('cpup - Publication.csv');
                    $lines = explode("\n", $csvData);
                    $headers = str_getcsv(array_shift($lines));
                    $data = [];
                    foreach ($lines as $line) {
                        $row = str_getcsv($line);
                        if (count($row) === count($headers)) {
                            $data[] = array_combine($headers, $row);
                        }
                    }
                    $data = array_slice($data, -4);
                    foreach (array_reverse($data) as $cpuppublication) {
                        echo '
                        <div class="pulse my-3 my-md-0 col-md-3">
                            <a href="' . $cpuppublication['link'] . '" target="_blank">
                                <img src="' . BASE_URL . 'images/publication/' . $cpuppublication['photo'] . '" alt="" class="w-100 my-3">
                                <h3 class="py-2 text-light-black">' . $cpuppublication['title'] . '</h3>
                                <span class="text-light-black">' . $cpuppublication['description'] . '</span>
                            </a>
                        </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <a id="to-top-button" class="btn pulse" href="#top">
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
    <script>
        // JavaScript para atualizar a contagem regressiva a cada segundo

        function updateCountdown() {
            var daysElement = document.getElementById('days');
            var hoursElement = document.getElementById('hours');
            var minutesElement = document.getElementById('minutes');
            var secondsElement = document.getElementById('seconds');

            var days = parseInt(daysElement.textContent);
            var hours = parseInt(hoursElement.textContent);
            var minutes = parseInt(minutesElement.textContent);
            var seconds = parseInt(secondsElement.textContent);

            if (seconds > 0) {
                seconds--;
            } else {
                if (minutes > 0) {
                    minutes--;
                    seconds = 59;
                } else {
                    if (hours > 0) {
                        hours--;
                        minutes = 59;
                    } else {
                        if (days > 0) {
                            days--;
                            hours = 23;
                            minutes = 59;
                        }
                    }
                }
            }

            daysElement.textContent = ('0' + days).slice(-2);
            hoursElement.textContent = ('0' + hours).slice(-2);
            minutesElement.textContent = ('0' + minutes).slice(-2);
            secondsElement.textContent = ('0' + seconds).slice(-2);
        }
        setInterval(updateCountdown, 1000); // Atualiza a cada segundo (1000 ms)
    </script>
</body>

<footer>
    <?php include 'includes/footer.php'; ?>
</footer>

</html>