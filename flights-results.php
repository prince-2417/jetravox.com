<?php
// ======================
// Flight API processing
// ======================

$class_map = [
    'Economy' => 1,
    'Premium Economy' => 2,
    'Business' => 3,
    'First Class' => 4,
];

function normalizeDate($dateStr)
{
    $d = DateTime::createFromFormat('Y-m-d', $dateStr);
    return ($d && $d->format('Y-m-d') === $dateStr) ? $dateStr : false;
}

$error = null;
$result = null;
$all_flights = [];

$outbound_flights = [];
$return_flights = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $trip_type_raw = $_POST['tripType'] ?? 'roundtrip';

    // ======================
    // Extract airport code
    // ======================

    preg_match('/\((.*?)\)/', $_POST['from_code'] ?? '', $from_match);
    preg_match('/\((.*?)\)/', $_POST['to_code'] ?? '', $to_match);

    $departure_id = strtoupper($from_match[1] ?? '');
    $arrival_id   = strtoupper($to_match[1] ?? '');

    $outbound_date = normalizeDate($_POST['depart_date'] ?? '');
    $return_date   = ($trip_type_raw === 'roundtrip') ? normalizeDate($_POST['return_date'] ?? '') : '';

    $passengers = 1;
    $flight_class = 'Economy';

    $errors = [];

    if (!$departure_id || strlen($departure_id) !== 3) $errors[] = "Invalid departure airport.";
    if (!$arrival_id || strlen($arrival_id) !== 3) $errors[] = "Invalid arrival airport.";
    if (!$outbound_date) $errors[] = "Invalid departure date.";

    if ($trip_type_raw === 'roundtrip' && !$return_date) {
        $errors[] = "Invalid return date.";
    }

    // ======================
    // Date validation
    // ======================

    if ($trip_type_raw === 'roundtrip' && $return_date && $outbound_date) {
        if (strtotime($return_date) < strtotime($outbound_date)) {
            echo "Return date cannot be earlier than departure date.";
            exit;
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
        exit;
    }

    // ======================
    // API Parameters
    // ======================

    $params = [
        'engine'        => 'google_flights',
        'departure_id'  => $departure_id,
        'arrival_id'    => $arrival_id,
        'outbound_date' => $outbound_date,
        'adults'        => $passengers,
        'travel_class'  => $class_map[$flight_class] ?? 1,
        'currency'      => 'USD',
        'hl'            => 'en',
        'gl'            => 'us',
        'api_key'       => '2e74ec9ba2dfb26c148870f18eb5a6d7c8e637a8130f4d0387a013ad90343818'
    ];

    if ($trip_type_raw === 'oneway') {
        $params['type'] = 2;
    } else {
        $params['type'] = 1;
        $params['return_date'] = $return_date;
    }

    $url = "https://serpapi.com/search.json?" . http_build_query($params);

    // ======================
    // Fetch API Data
    // ======================

    $response = @file_get_contents($url);

    if ($response === false) {
        echo "API request failed.<br>";
        echo "Request URL:<br>";
        echo $url;
        exit;
    }

    $result = json_decode($response, true);

    // ======================
    // Merge ALL flights (original)
    // ======================

    if (!empty($result['best_flights'])) {
        $all_flights = array_merge($all_flights, $result['best_flights']);
    }

    if (!empty($result['other_flights'])) {
        $all_flights = array_merge($all_flights, $result['other_flights']);
    }

    // ======================
    // NEW: Separate outbound & return flights
    // ======================

    if ($trip_type_raw === 'roundtrip') {

        // Departure Flights
        foreach ($result['best_flights'] ?? [] as $flight) {

            $segment = $flight['flights'][0] ?? [];

            if (
                !empty($segment['departure_airport']['time']) &&
                strpos($segment['departure_airport']['time'], $outbound_date) !== false
            ) {

                $outbound_flights[] = $flight;
            }
        }

        // Return Flights
        foreach ($result['other_flights'] ?? [] as $flight) {

            $segment = $flight['flights'][0] ?? [];

            if (
                !empty($segment['departure_airport']['time']) &&
                strpos($segment['departure_airport']['time'], $return_date) !== false
            ) {

                $return_flights[] = $flight;
            }
        }
    }
}


// ======================
// Collect unique airlines
// ======================

$unique_airlines = [];

if (!empty($all_flights)) {

    foreach ($all_flights as $flight) {

        $segments = $flight['flights'] ?? [];

        if (empty($segments)) continue;

        $airline_name = $segments[0]['airline'] ?? 'Airline';

        $unique_airlines[$airline_name] = true;
    }
}

$unique_airlines = array_keys($unique_airlines);


// ======================
// Debug Output (Improved)
// ======================

// if (!empty($result)) {

//     if ($trip_type_raw === 'roundtrip') {

//         echo "<h2>Departure Flights (" . $outbound_date . ")</h2><pre>";
//         print_r($outbound_flights);
//         echo "</pre>";

//         echo "<h2>Return Flights (" . $return_date . ")</h2><pre>";
//         print_r($return_flights);
//         echo "</pre>";
//     } else {

//         echo "<h2>One Way Flights</h2><pre>";
//         print_r($all_flights);
//         echo "</pre>";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TM43KFCZ');
    </script>
    <!-- End Google Tag Manager -->


    <script>
        gtag('config', 'AW-18036520657/VP2CCJTFmMIcENHtvZhD', {
            'phone_conversion_number': '1-844-915-5436'
        });
    </script>

    <meta charset="UTF-8">
    <title>Jetravox - Book Cheap Flights & International Airfare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Find the best flight deals on Jetravox. Search, compare, and book cheap airline tickets for domestic and international travel with ease. Your journey starts here.">
    <meta name="keywords" content="Flights, flight booking, cheap airfare, airline tickets, Jetravox, book flights online, travel deals, low cost carriers, international flights, domestic travel">
    <meta name="author" content="Jetravox">
    <meta name="website" content="https://jetravox.com/">
    <meta name="email" content="support@jetravox.com">
    <meta name="version" content="1.5.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Css -->
    <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/tailwind.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/search-form.css">
    <link rel="stylesheet" href="assets/css/my-css.css">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Include flatpickr CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>

<body class="dark:bg-slate-900">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TM43KFCZ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Flight Preloader -->
    <div id="flightPreloader">
        <div class="flight-loader">
            <div class="plane">✈</div>
            <p>Searching best flights for you...</p>
        </div>
    </div>

    <!-- ====== Header Section Start ======= -->
    <?php include('include/header.php'); ?>
    <!-- ====== Header Section End ======= -->

    <!-- ======== Search Form Start ======= -->
    <section class="relative table w-full items-center" style="padding-top:80px;">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <div class="mt-6">
                        <form action="flights-results" method="post">
                            <div class="booking-box">
                                <div class="tab-content1 active" id="flights">
                                    <div class="trip-type">
                                        <label>
                                            <input type="radio" name="tripType" value="roundtrip" checked> Round Trip
                                        </label>
                                        <label>
                                            <input type="radio" name="tripType" value="oneway"> One Way
                                        </label>
                                    </div>

                                    <div class="form-grid">
                                        <div class="input-box">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <input type="text" id="fromAirport" name="from_code" placeholder="From Where?">
                                        </div>
                                        <div class="input-box">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <input type="text" id="toAirport" name="to_code" placeholder="To Where?">
                                        </div>
                                        <div class="date-box" id="departDateBox">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <input type="text" id="date1" name="depart_date" placeholder="YYYY-MM-DD">
                                        </div>

                                        <div class="date-box" id="returnDateBox">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <input type="text" id="date2" name="return_date" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="traveler-wrapper">
                                            <input type="text" class="traveler-input" placeholder="1 Passenger, Economy" readonly>
                                        </div>
                                        <button class="search-btn1">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== Search Form End ======= -->

    <!-- ======= Start Content ====== -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <!-- MOBILE FILTER BUTTON -->
            <button class="filter-toggle-btn">
                ☰ Filters
            </button>

            <!-- OVERLAY -->
            <div class="filter-overlay"></div>
            <div class="grid md:grid-cols-12 grid-cols-1 gap-6">
                <div class="lg:col-span-4 md:col-span-4 search-filter">
                    <div class="p-4 rounded-md shadow-sm dark:shadow-gray-700 sticky top-20">

                        <button class="filter-close-btn">✕</button>

                        <h5 class="text-lg font-medium">Select Flights Filter</h5>
                        <div class="range-slider mt-3">
                            <span class="flex justify-between pb-2">
                                <span>
                                    <label class="text-lg">$</label>
                                    <input id="minPriceInput" type="number" class="text-slate-400 w-16" value="500" min="0" max="20000" />
                                </span>

                                <span>
                                    <label class="text-lg">$</label>
                                    <input id="maxPriceInput" type="number" class="text-slate-400 w-16" value="1200" min="0" max="20000" />
                                </span>
                            </span>

                            <input id="minPriceRange" value="500" min="0" max="20000" step="5" type="range" class="w-full">
                            <input id="maxPriceRange" value="1200" min="0" max="20000" step="5" type="range" class="w-full mt-2">
                        </div>
                        <!-- Stops -->
                        <div class="mt-6">
                            <h5 class="text-lg font-medium">Stops</h5>
                            <div class="mt-3">
                                <div class="flex items-center mb-0">
                                    <input class="form-check-input stops-filter me-3" type="checkbox" value="0" id="nonStop">
                                    <label class="form-check-label" for="nonStop">Non-Stop</label>
                                </div>
                                <div class="flex items-center mb-0">
                                    <input class="form-check-input stops-filter me-3" type="checkbox" value="1" id="oneStop">
                                    <label class="form-check-label" for="oneStop">1 Stop</label>
                                </div>
                            </div>
                        </div>
                        <!-- Departure Time -->
                        <div class="mt-6">
                            <h5 class="text-lg font-medium">Departure Time</h5>

                            <div class="mt-3">
                                <div class="flex items-center mb-0">
                                    <input class="form-check-input departure-filter me-3" type="checkbox" value="morning" id="depMorning">
                                    <label class="form-check-label" for="depMorning">Morning ( 05:00am - 11:59am )</label>
                                </div>
                                <div class="flex items-center mb-0">
                                    <input class="form-check-input departure-filter me-3" type="checkbox" value="afternoon" id="depAfternoon">
                                    <label class="form-check-label" for="depAfternoon">Afternoon ( 12:00pm - 05:59pm )</label>
                                </div>
                                <div class="flex items-center mb-0">
                                    <input class="form-check-input departure-filter me-3" type="checkbox" value="evening" id="depEvening">
                                    <label class="form-check-label" for="depEvening">Evening ( 06:00pm - 11:59pm )</label>
                                </div>
                            </div>
                        </div>
                        <!-- Landing Time -->
                        <div class="mt-6">
                            <h5 class="text-lg font-medium">Landing Time</h5>

                            <div class="mt-3">
                                <div class="flex items-center mb-0">
                                    <input class="form-check-input landing-filter me-3" type="checkbox" value="morning" id="landMorning">
                                    <label class="form-check-label" for="landMorning">Morning ( 05:00am - 11:59am )</label>
                                </div>
                                <div class="flex items-center mb-0">
                                    <input class="form-check-input landing-filter me-3" type="checkbox" value="afternoon" id="landAfternoon">
                                    <label class="form-check-label" for="landAfternoon">Afternoon ( 12:00pm - 05:59pm )</label>
                                </div>
                                <div class="flex items-center mb-0">
                                    <input class="form-check-input landing-filter me-3" type="checkbox" value="evening" id="landEvening">
                                    <label class="form-check-label" for="landEvening">Evening ( 06:00pm - 11:59pm )</label>
                                </div>
                            </div>
                        </div>
                        <!-- Airlines -->
                        <div class="mt-6">
                            <h5 class="text-lg font-medium">Airlines</h5>
                            <div class="mt-3">
                                <?php
                                $airlines = [];
                                if (!empty($all_flights)) {
                                    foreach ($all_flights as $flight) {
                                        $segments = $flight['flights'] ?? [];
                                        if (empty($segments)) continue;
                                        $firstSegment = $segments[0];
                                        $airlineName  = $firstSegment['airline'] ?? '';
                                        $price        = $flight['price'] ?? 0;
                                        $airlines[$airlineName] = $price; // use airline as key to prevent duplicates
                                    }
                                }
                                foreach ($airlines as $airlineName => $price): ?>
                                    <div class="flex items-center mb-0">
                                        <input class="form-check-input airline-filter me-3" type="checkbox" value="<?php echo htmlspecialchars($airlineName); ?>" id="airline-<?php echo md5($airlineName); ?>">
                                        <label class="form-check-label" for="airline-<?php echo md5($airlineName); ?>">
                                            <?php echo htmlspecialchars($airlineName); ?> ( $<?php echo number_format($price, 2); ?> )
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 md:col-span-12">
                    <div class="grid grid-cols-1 gap-6">
                        <?php if (!empty($all_flights)): ?>
                            <div class="accordion" id="accordionExample">
                                <?php foreach ($all_flights as $index => $flight):
                                    $segments = $flight['flights'] ?? [];
                                    if (empty($segments)) continue;

                                    $firstSegment = $segments[0];
                                    $lastSegment  = end($segments);

                                    $airlineName  = $firstSegment['airline'] ?? 'Airline';
                                    $airlineLogo  = $firstSegment['airline_logo'] ?? 'images/logo-dark.png';
                                    $flightNumber = $firstSegment['flight_number'] ?? '';
                                    $cabinClass   = $firstSegment['cabin'] ?? 'Economy';

                                    $departure    = $firstSegment['departure_airport'] ?? [];
                                    $arrival      = $lastSegment['arrival_airport'] ?? [];

                                    // ✅ Dynamic duration calculation
                                    $departureTime = strtotime($departure['time'] ?? null);
                                    $arrivalTime   = strtotime($arrival['time'] ?? null);

                                    if ($departureTime && $arrivalTime) {
                                        $diffSeconds = $arrivalTime - $departureTime;
                                        $hours  = floor($diffSeconds / 3600);
                                        $minutes = floor(($diffSeconds % 3600) / 60);
                                        $duration = $hours . ' hrs ' . $minutes . ' mins';
                                    } else {
                                        $duration = '';
                                    }

                                    $stops  = count($segments) - 1;
                                    $price  = $flight['price'] ?? 0;
                                ?>
                                    <div class="group rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 flight-card bg-white"
                                        data-airline="<?php echo htmlspecialchars($airlineName); ?>"
                                        data-stops="<?php echo $stops; ?>"
                                        data-departure-time="<?php echo $departureTime; ?>"
                                        data-arrival-time="<?php echo $arrivalTime; ?>"
                                        data-price="<?php echo $price; ?>">

                                        <div class="md:flex md:items-center justify-between">

                                            <!-- Left Section -->
                                            <div class="flex items-center gap-4 p-4 w-full">

                                                <!-- Logo -->
                                                <div class="w-16 h-16 flex items-center justify-center bg-gray-50 rounded-lg ">
                                                    <img class="max-h-10 object-contain"
                                                        src="<?php echo htmlspecialchars($airlineLogo); ?>"
                                                        alt="<?php echo htmlspecialchars($airlineName); ?>">
                                                </div>

                                                <!-- Flight Info -->
                                                <div class="flex-1">

                                                    <!-- Airline Name -->
                                                    <h3 class="text-sm font-semibold text-gray-800 uppercase tracking-wide">
                                                        <?php echo htmlspecialchars($airlineName); ?>
                                                    </h3>

                                                    <!-- Route -->
                                                    <p class="text-sm text-gray-500 mt-1">
                                                        <?php echo strtoupper($departure['id'] ?? '') ?> → <?php echo strtoupper($arrival['id'] ?? '') ?>
                                                    </p>

                                                    <!-- Timing Row -->
                                                    <div class="flex items-center justify-between mt-3 text-sm">

                                                        <!-- Departure -->
                                                        <div>
                                                            <p class="font-semibold text-gray-900">
                                                                <?php echo date("h:i A", $departureTime); ?> |
                                                                <?php echo strtoupper($departure['id'] ?? '') ?>
                                                            </p>
                                                            <p class="text-gray-400 text-xs">
                                                                <?php echo date("D, M d", $departureTime); ?>
                                                            </p>
                                                        </div>

                                                        <!-- Duration -->
                                                        <div class="text-center flex flex-col items-center px-4">
                                                            <p class="text-xs text-gray-500"><?php echo htmlspecialchars($duration); ?></p>

                                                            <div class="w-20 border-t border-gray-300 my-1 relative">
                                                                <!-- <span class="absolute left-1/2 -translate-x-1/2 -top-2 text-xs text-gray-400">✈</span> -->
                                                            </div>

                                                            <p class="text-xs text-gray-500">
                                                                <?php echo $stops === 0 ? 'Non-stop' : $stops . ' stop(s)'; ?>
                                                            </p>
                                                        </div>

                                                        <!-- Arrival -->
                                                        <div class="text-right">
                                                            <p class="font-semibold text-gray-900">
                                                                <?php echo date("h:i A", $arrivalTime); ?> |
                                                                <?php echo strtoupper($arrival['id'] ?? '') ?>
                                                            </p>
                                                            <p class="text-gray-400 text-xs">
                                                                <?php echo date("D, M d", $arrivalTime); ?>
                                                            </p>
                                                        </div>

                                                    </div>

                                                    <!-- Extra Info -->
                                                    <p class="text-xs text-gray-400 mt-2">
                                                        <?php echo $airlineName ?> • <?php echo $flightNumber ?> • <?php echo $cabinClass ?>
                                                    </p>

                                                </div>
                                            </div>

                                            <!-- Right Section (Price + Button) -->
                                            <div class=" md:border-t-0 md:border-l border-gray-200 p-4 flex md:flex-col items-center justify-between md:justify-center gap-3 min-w-[200px]">

                                                <!-- Price -->
                                                <div class="text-center">
                                                    <p class="text-xl font-bold text-gray-900">
                                                        $<?php echo number_format($price, 2); ?>
                                                    </p>
                                                    <p class="text-xs text-gray-400">Per person inc. Fee </p>
                                                </div>

                                                <!-- Button -->
                                                <a href="confirm-booking" style="background-color: var(--color-red-500);"
                                                    class="bg-[#0B3C49] text-white px-5 py-2 rounded-full text-sm font-medium hover:bg-[#092f39] transition">
                                                    SELECT
                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="text-center p-10 max-w-xl mx-auto">

                                    <div class="text-6xl text-yellow-500 mb-4">
                                        <i class="fa-solid fa-plane-circle-exclamation"></i>
                                    </div>

                                    <h2 class="text-xl font-semibold text-gray-800 mb-2">
                                        Oops! We couldn't retrieve flight results
                                    </h2>

                                    <p class="text-gray-500 text-base mb-5">
                                        We are experiencing a temporary technical issue while connecting with our airline partners.
                                        Please try searching again in a few moments.
                                    </p>

                                    <p class="text-gray-600 text-sm mb-6">
                                        If the issue continues, our travel specialists are available to help you find the best flights instantly.
                                    </p>

                                    <a href="/" style="background-color: var(--color-yellow-500); font-weight:900;" class="bg-yellow-500  text-white px-6 py-3 rounded-full text-sm inline-block mb-6 transition">
                                        Search Flights Again
                                    </a>

                                    <div class=" pt-5 text-sm text-gray-600">
                                        <p class="mb-2">Need immediate assistance?</p>
                                        <p>
                                            📞 <strong>1-844-915-5436</strong>
                                            <span class="mx-2">|</span>
                                            📩 <a href="mailto:support@jetravox.com" class="text-yellow-500 hover:underline">support@jetravox.com</a>
                                        </p>
                                    </div>

                                </div>
                            <?php endif; ?>
                            </div>

                    </div>
                </div>
            </div>
    </section>
    <!-- ======= End Content ======== -->


    <!-- ===== Footer Start ======== -->
    <?php include('include/footer.php'); ?>
    <!-- ===== Footer End ======== -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const flightCards = document.querySelectorAll(".flight-card");

            // PRICE ELEMENTS
            const minPriceInput = document.getElementById("minPriceInput");
            const maxPriceInput = document.getElementById("maxPriceInput");
            const minRange = document.getElementById("minPriceRange");
            const maxRange = document.getElementById("maxPriceRange");

            // Apply all filters
            function applyFilters() {

                const airlineChecks = document.querySelectorAll(".airline-filter:checked");
                const stopsChecks = document.querySelectorAll(".stops-filter:checked");
                const depChecks = document.querySelectorAll(".departure-filter:checked");
                const landChecks = document.querySelectorAll(".landing-filter:checked");

                const selectedAirlines = Array.from(airlineChecks).map(cb => cb.value);
                const selectedStops = Array.from(stopsChecks).map(cb => parseInt(cb.value));
                const selectedDepTimes = Array.from(depChecks).map(cb => cb.value);
                const selectedLandTimes = Array.from(landChecks).map(cb => cb.value);

                // PRICE VALUES
                const minPrice = parseFloat(minPriceInput?.value) || 0;
                const maxPrice = parseFloat(maxPriceInput?.value) || Infinity;

                flightCards.forEach(card => {

                    let show = true;

                    const airline = card.getAttribute("data-airline");
                    const stops = parseInt(card.getAttribute("data-stops"));
                    const price = parseFloat(card.getAttribute("data-price"));

                    const depTime = new Date(parseInt(card.getAttribute("data-departure-time")) * 1000);
                    const landTime = new Date(parseInt(card.getAttribute("data-arrival-time")) * 1000);

                    // Airline filter
                    if (selectedAirlines.length && !selectedAirlines.includes(airline)) show = false;

                    // Stops filter
                    if (selectedStops.length && !selectedStops.includes(stops)) show = false;

                    // Departure Time filter
                    if (selectedDepTimes.length) {
                        const depHour = depTime.getHours();
                        const depMatch = selectedDepTimes.some(range => {
                            if (range === "morning") return depHour >= 5 && depHour <= 11;
                            if (range === "afternoon") return depHour >= 12 && depHour <= 17;
                            if (range === "evening") return depHour >= 18 && depHour <= 23;
                            return false;
                        });
                        if (!depMatch) show = false;
                    }

                    // Landing Time filter
                    if (selectedLandTimes.length) {
                        const landHour = landTime.getHours();
                        const landMatch = selectedLandTimes.some(range => {
                            if (range === "morning") return landHour >= 5 && landHour <= 11;
                            if (range === "afternoon") return landHour >= 12 && landHour <= 17;
                            if (range === "evening") return landHour >= 18 && landHour <= 23;
                            return false;
                        });
                        if (!landMatch) show = false;
                    }

                    // PRICE FILTER
                    if (price < minPrice || price > maxPrice) show = false;

                    // APPLY VISIBILITY
                    card.style.display = show ? "" : "none";
                    card.setAttribute("data-visible", show ? "true" : "false");

                });
            }

            // Attach event listeners to all filter checkboxes
            document.querySelectorAll(".airline-filter, .stops-filter, .departure-filter, .landing-filter")
                .forEach(cb => cb.addEventListener("change", applyFilters));

            // PRICE RANGE SYNC

            if (minRange && maxRange && minPriceInput && maxPriceInput) {

                minRange.addEventListener("input", () => {
                    if (parseInt(minRange.value) > parseInt(maxRange.value)) {
                        minRange.value = maxRange.value;
                    }
                    minPriceInput.value = minRange.value;
                    applyFilters();
                });

                maxRange.addEventListener("input", () => {
                    if (parseInt(maxRange.value) < parseInt(minRange.value)) {
                        maxRange.value = minRange.value;
                    }
                    maxPriceInput.value = maxRange.value;
                    applyFilters();
                });

                minPriceInput.addEventListener("input", () => {
                    minRange.value = minPriceInput.value;
                    applyFilters();
                });

                maxPriceInput.addEventListener("input", () => {
                    maxRange.value = maxPriceInput.value;
                    applyFilters();
                });
            }

            // SORTING
            const sortSelect = document.getElementById("floatingSelect");
            const container = document.querySelector("#accordionExample");

            if (sortSelect && container) {

                const allCards = Array.from(container.querySelectorAll(".flight-card"));

                sortSelect.addEventListener("change", function() {

                    let sortedCards;

                    if (this.value === "1") {
                        sortedCards = [...allCards].sort((a, b) => {
                            return parseFloat(a.getAttribute("data-price")) - parseFloat(b.getAttribute("data-price"));
                        });
                    } else if (this.value === "2") {
                        sortedCards = [...allCards].sort((a, b) => {
                            return parseFloat(b.getAttribute("data-price")) - parseFloat(a.getAttribute("data-price"));
                        });
                    } else {
                        sortedCards = allCards;
                    }

                    sortedCards.forEach(card => {
                        container.appendChild(card);
                        card.style.display = card.getAttribute("data-visible") === "false" ? "none" : "";
                    });

                });
            }

        });

        // preloader
        document.addEventListener("DOMContentLoaded", function() {

            const form = document.querySelector("form[action='flights-results']");
            const preloader = document.getElementById("flightPreloader");

            // show preloader on submit
            form.addEventListener("submit", function() {
                preloader.style.display = "flex";
            });

            // hide when page fully loads
            window.addEventListener("load", function() {
                preloader.style.display = "none";
            });

            // prevent loader on back button
            window.addEventListener("pageshow", function(event) {
                if (event.persisted) {
                    preloader.style.display = "none";
                }
            });

        });
    </script>

    <!-- Jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/search-form.js"></script>
    <!-- JAVASCRIPTS -->
    <script src="assets/libs/tobii/js/tobii.min.js"></script>
    <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/js/easy_background.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>


</body>

</html>