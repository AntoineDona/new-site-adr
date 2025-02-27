<?php $page = "Home" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "included/meta.php" ?>
    <meta name="author" content="Antoine Do" />
    <meta name="copyright" content="ADRCS - AdR CentraleSupéléc" />
    <meta name="og:site_name" content="AdR CentraleSupélec" />
    <meta name="description" content="AdR CentraleSupélec. L'Association des résidents de CentaleSupélec (AdRCS) organise les grandes soirées de l'école CentraleSupélec, tient le Musée (bar de l'école) et s'occupe des relations avec le gestionnaire de la résidence. AdR Centrale Supélec " />
    <meta name="google-site-verification" content="cEbrs-eyoHMLzEcQwiEu5sHkC8N61J92Z_fElR1KTMQ" />
    <title>Accueil - AdR CentraleSupélec (AdRCS)</title>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9WXGDB2E4H"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9WXGDB2E4H');
    </script>
</head>

<body>
    <?php include "included/messenger.php" ?>
    <?php include "included/header.php" ?>
    <main>
        <section class="hero accueil" id="hero">
            <div class="container" > 
                <div class="imgt" style='margin-top: 30vh;'>
                    <img src="images/adr_anim.svg">
                </div>
                <h1 class="headline" id="A">A</h1>
                <h1 class="headline">ssociation </h1>
                <h1 class="headline" id="d">d</h1>
                <h1 class="headline">es </h1>
                <h1 class="headline" id="R"> R</h1>
                <h1 class="headline">ésidents de CentraleSupélec</h1>
                <div class="headline-description">
                    <div class="separator">
                        <div class="line line-left"></div>
                        <div class="heart"><i class="fas fa-heart"></i></div>
                        <div class="line line-right"></div>
                    </div>
                    <div class="single-animation">
                        <!-- <h5>Toujours là pour vous faire kiffer</h5> -->
                        <a href="#discover" class="btn cta-btn">Nous découvrir</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="evenements">
            <a class="anchor" id="discover"></a>
            <div class="container">
                <div class="info">
                    <div class="evenements-description padding-right animate-left">
                        <div class="global-headline">
                            <h1 class="sub-headline titre">
                                Soirées
                            </h1>
                        </div>
                        <div class="separator">
                            <div class="line line-left"></div>
                            <div class="heart"><i class="fas fa-heart"></i></div>
                            <div class="line line-right"></div>
                        </div>
                        <p class="evenement-info">
                            Nous sommes spécialisés dans l'organisation de soirées étudiantes, reconnues dans la France entière depuis des décennies. Le QuadraBang en est l'exemple parfait (l'édition 2022 a réuni plus de 3500 personnes !).
                        </p>
                        <a href="/events/" class="btn body-btn">Nos prochains évènements</a>
                    </div>
                    <div class="evenements-info-img animate-right">
                        <img src="images/soirée.jpg" alt="" id="soiree">
                    </div>
                </div>
            </div>
        </section>
        <!--Section soirée-->
        <section class="famille between">
            <div class="container">
                <div class="global-headline">
                    <h1 id="titre-famille" class="sub-headline titre animate-bottom">

                    </h1>
                    <video src="Perms_Rez.mpeg"></video>
                </div>
            </div>
        </section>
    </main>
    <?php include "included/footer.php" ?>
    <script src="js/love.js"></script>

</body>

</html>