<?php
include_once('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPUP - Archive</title>

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
                                    <p class="text-blue border-bottom-blue">Archive</p>
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
                                    <p class="text-white text-end"><span class="border-bottom-white">Archive</span></p>
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
    <div class="container ">
        <div class="row text-center">
            <h2 class="medium">ARCHIVE</h2>
        </div>
        <div class="row mt-4 mt-md-5">
            <div class="order-md-1 order-1 col-12 col-md-2 text-center text-md-start my-1 my-md-0">
                <a href="<?php echo BASE_URL; ?>pages/archive_events.php">
                    <h3 class="medium pointer text-gray"><span class="">EVENTS</span></h3>
                </a>
            </div>
            <div class="order-md-2 order-5 col-12 col-md-1 text-center text-md-center my-1 my-md-0">
                <a href="<?php echo BASE_URL; ?>pages/archive_news.php">
                    <h3 class="medium pointer text-gray"><span class="">NEWS</span></h3>
                </a>
            </div>
            <div class="order-md-3 order-4 col-12 col-md-3 text-center text-md-end my-1 my-md-0">
                <a href="<?php echo BASE_URL; ?>pages/archive_publications.php" class="text-light-black">
                    <h3 class="medium pointer"><span class="border-bottom-light-black">PUBLICATIONS</span></h3>
                </a>
            </div>
            <div class="order-md-4 order-2 col-12 col-md-3 text-center text-md-center my-1 my-md-0">
                <a href="<?php echo BASE_URL; ?>pages/archive_newsletters.php">
                    <h3 class="medium pointer text-gray"><span class="">NEWSLETTERS</span></h3>
                </a>
            </div>
            <div class="order-md-5 order-3 col-12 col-md-3 text-center text-md-end my-1 my-md-0">
                <a href="<?php echo BASE_URL; ?>pages/archive_media.php">
                    <h3 class="medium pointer text-gray"><span class="">CPUP IN THE MEDIA</span></h3>
                </a>
            </div>
        </div>
        <div class="row mt-4 archive-search-bar text-center">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-9 col-md-11 text-center">
                        <div class="search-container pb-1">
                            <input class="w-100" type="text" id="searchInput" placeholder="SEARCH PUBLICATIONS"
                                oninput="searchContentPublications()">
                            <img src="<?php echo BASE_URL; ?>images/archive/search_icon.svg" alt="icon"
                                class="search-icon">
                        </div>
                    </div>
                    <div class="col-3 col-md-1 text-center">
                        <button class="w-100" onclick="clearSearch()">CLEAR</button>
                    </div>
                </div>
            </div>
            <div class="mt-4 mt-md-0 col-md-3 text-center">
                <div class="text-gray">
                    <button class="w-100" onclick="DateFilter()">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-start">DATE</span>
                            <span><img src="<?php echo BASE_URL; ?>images/archive/arrowDownIcon.svg" alt="icon"
                                    class="text-end search-icon"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 container">
        <div class="row pb-3 min-content">
            <div class="">
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
                    foreach (array_reverse($data) as $cpuppublication) {
                        echo '
                        <div id="' . $cpuppublication['id'] . '_content' . '" class="my-2 col-md-3 archive-item archive-item-visible" data-date="' . $cpuppublication['start_date'] . '">
                            <img src="' . BASE_URL . 'images/publication/' . $cpuppublication['photo'] . '" alt="" class="w-100 my-3 border-radius-10">
                            <h3 class="medium py-2 text-light-black">' . $cpuppublication['title'] . '</h3>
                            <span class="text-light-black">' . $cpuppublication['description'] . '</span>
                        </div>
                        ';
                    }
                    ?>
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
    <script src="<?php echo BASE_URL; ?>js/archive/clearSearch.js"></script>
    <script src="<?php echo BASE_URL; ?>js/archive/searchContentPublications.js"></script>
    <script src="<?php echo BASE_URL; ?>js/all/toTop.js"></script>
    <script>
        var isAscending = true;

        function DateFilter() {
            var eventItems = document.querySelectorAll('[id$="_content"]');
            var eventList = Array.from(eventItems);
            console.log("eventList: ", eventList);
            eventList.sort(function (a, b) {
                var dateA = new Date(a.getAttribute('data-date'));
                var dateB = new Date(b.getAttribute('data-date'));
                if (isAscending) {
                    return dateA - dateB;
                } else {
                    return dateB - dateA;
                }
            });

            var container = document.querySelector('.min-content');
            container.innerHTML = '';
            for (var i = 0; i < eventList.length; i++) {
                container.appendChild(eventList[i]);
            }
            isAscending = !isAscending;
        }
    </script>
</body>

<footer>
    <?php include '../includes/footer.php'; ?>
</footer>

</html>