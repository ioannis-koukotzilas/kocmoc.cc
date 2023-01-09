<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $page; ?> - KOCMOC</title>

    <meta name="author" content="Kocmoc Collective">

    <link rel="apple-touch-icon" sizes="180x180" href="https://kocmoc.cc/images/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="https://kocmoc.cc/images/assets/favicon.png">
    <link rel="icon" type="image/png" href="https://kocmoc.cc/images/assets/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="https://kocmoc.cc/images/assets/favicon-16x16.png" sizes="16x16">

    <meta name="theme-color" content="#000000">
    <meta name="description" content="KOCMOC is an international, non-commercial, self-organized online radio station; a free-form initiative of Kocmoc Collective, based in northern Greece.">
    <meta property="og:description" content="KOCMOC is an international, non-commercial, self-organized online radio station; a free-form initiative of Kocmoc Collective, based in northern Greece.">
    <meta property="og:site_name" content="KOCMOC">
    <meta property="og:title" content="KOCMOC - Freeform Radio Broadcasting">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kocmoc.cc/">
    <meta property="og:image" content="https://kocmoc.cc/images/assets/kocmoc-socials.png">
    <link rel="canonical" href="https://kocmoc.cc/">

    <link rel="stylesheet" href="src/css/normalize.css?ver=1.0.0" />
    <link rel="stylesheet" href="src/css/main.css?ver=1.0.4" />
    <link rel="stylesheet" href="src/css/layouts/site-header.css?ver=1.0.0" />
    <link rel="stylesheet" href="src/css/layouts/site-main.css?ver=1.0.0" />
    <link rel="stylesheet" href="src/css/layouts/site-footer.css?ver=1.0.0" />
    <link rel="stylesheet" href="src/css/components/radio-player.css?ver=1.0.3" />
    <link rel="stylesheet" href="src/css/content/page.css?ver=1.0.3" />
    <link rel="stylesheet" href="src/css/components/schedule.css?ver=1.0.0" />
    <link rel="stylesheet" href="src/css/components/sidebar.css?ver=1.0.0" />
</head>

<body>

    <div class="site" data-ajax="wrapper">

        <header class="site-header">

            <nav class="main-nav">

                <div class="container">

                    <h1 class="site-title">
                        <a href="/">KOCMOC.CC</a>
                    </h1>

                    <ul class="main-menu">
                        <li><a href="schedule">Schedule</a></li>
                        <li><a href="residents">Residents</a></li>
                        <li><a href="info">Info</a></li>
                        <li><a href="support">Support</a></li>
                    </ul>

                    <div aria-controls="sidebar" id="sidebar-btn"></div>

                </div>

            </nav>

            <div class="station">

                <div class="channel">
                    <span class="cc_streaminfo" data-type="trackplaylist" data-username="kocmoc1">CHNL</span>
                </div>

                <div class="track">
                    <span class="cc_streaminfo" data-type="tracktitle" data-username="kocmoc1">Loading ..</span>
                </div>

            </div>

        </header>