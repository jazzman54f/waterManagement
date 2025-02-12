<!DOCTYPE html>
<html lang="en">
    <style>
        .features-section {
            padding: 2rem 0;
        }
        .feature-box {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
<head>
    <meta charset="utf-8">
    <title>SmartWaterGrid</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    
                    <img src="img/logo wedect.png" alt="Logo">
                    <img src="img/logo soned52.png" alt="Logo">
                </a>
                <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">Notre Mission</a>
                        <a href="#overview" class="nav-item nav-link">Overview</a>
                        <a href="#features" class="nav-item nav-link">Fonctionnalités</a>
                        <a href="#testimonial" class="nav-item nav-link">Testimonial</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">LOG IN</a>
                    <a href="{{ route('register') }}" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">REGISTER</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Bienvenue dans notre projet</h1>
                            <p class="text-white pb-3 animated slideInDown">Plateforme de Suivi et de Gestion des Capteurs de Pression et de Chlore.</p>
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 58px;">
                                <button type="button" class="btn btn-primary rounded-pill py-2 px-3 shadow-none position-absolute top-0 end-0 m-2">LOGIN</button>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid rounded animated zoomIn" src="img/f.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <h2>Fonctionnalités Clés</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box">
                            <i class="fas fa-chart-line fa-3x mb-3"></i>
                            <h3>Visualisation en Temps Réel</h3>
                            <p>Suivez les niveaux de pression et de chlore grâce à notre tableau de bord interactif.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box">
                            <i class="fas fa-bell fa-3x mb-3"></i>
                            <h3>Alertes et Notifications</h3>
                            <p>Recevez des notifications instantanées par email ou SMS en cas d'anomalies.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box">
                            <i class="fas fa-map-marked-alt fa-3x mb-3"></i>
                            <h3>Carte Interactive des Capteurs</h3>
                            <p>Localisez facilement les capteurs sur une carte interactive.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box">
                            <i class="fas fa-calendar-check fa-3x mb-3"></i>
                            <h3>Gestion des Interventions</h3>
                            <p>Planifiez et suivez les interventions de maintenance avec des rappels automatiques.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box">
                            <i class="fas fa-file-alt fa-3x mb-3"></i>
                            <h3>Rapports et Statistiques</h3>
                            <p>Générez des rapports détaillés et analysez les tendances pour des interventions préventives.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- About Start -->
        <div class="container-xxl py-6" id="about">
            <div class="container">
                <div class="row g-5 flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Notre Mission</h1>
                        <p class="mb-4">La SONEDE s'engage à garantir une distribution d'eau potable de qualité à travers un réseau de conduites modernes et sécurisées.
                        <p>Notre plateforme permet une surveillance en temps réel, une détection rapide des anomalies et une gestion efficace des interventions.</p>
                          <p>Surveillance en temps réel des niveaux de pression et de chlore.</p>
                           <p>Alertes instantanées en cas de dépassement des seuils critiques.</p>
                        <p> Gestion centralisée des interventions et de la maintenance.</p>
                        Rapports détaillés et analyses statistiques pour une prise de décision éclairée.</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>Notre Processus de Travail</h5>
                                <p class="mb-0"> Collecte des Données en Temps Réel,Surveillance et Alertes</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>Support 24/7</h5>
                                <p class="mb-0">Nous offrons un support technique disponible 24 heures sur 24 et 7 jours sur 7 pour répondre à vos besoins et garantir le bon fonctionnement de la plateforme.</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="img/f.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Overview Start -->
        <div class="container-xxl bg-light my-6 py-5" id="overview">
            <div class="container">
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/suivi (3).png">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">01</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0"> Collecte des Données en Temps Réel</h5>
                        </div>
                        <p class="mb-4"><p>Nos capteurs intelligents collectent en temps réel les données de pression et de chlore dans les conduites d'eau.</p>
                            Les informations sont transmises instantanément à la plateforme pour analyse</p>
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">02</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Surveillance et Alertes</h5>
                        </div>
                        <p class="mb-4"><p>La plateforme surveille en permanence les données et envoie des alertes en cas de dépassement des seuils critiques.</p>

                            Recevez des notifications par email ou SMS pour une réactivité immédiate</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/suivi (2).png">
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/suivi (3).png">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">03</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Gestion des Interventions</h5>
                        </div>
                        <p class="mb-4"><p>Planifiez et suivez les interventions de maintenance directement depuis la plateforme.
                        Consultez l'historique des interventions et générez des rapports détaillés pour une gestion optimale</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Overview End -->


        <!-- Advanced Feature Start -->
        <div class="container-xxl py-6" id="features">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Fonctionnalités Avancéess</h1>
                    <p class="mb-5">Plateforme de Suivi et de Gestion des Capteurs de Pression et de Chlore</p>
                </div>
                <div class="row g-4">

                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-sync fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Gestion des Interventions</h5>
                            <p class="m-0">Recevez des alertes instantanées par email ou SMS en cas de dépassement des seuils critiques de pression ou de chlore.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3"> Alertes Automatiques</h5>
                            <p class="m-0">Recevez des alertes instantanées par email ou SMS en cas de dépassement des seuils critiques de pression ou de chlore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Advanced Feature End -->


        <!-- Facts Start -->
        <div class="container-xxl bg-primary my-6 py-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-cogs fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">50</h1>
                        <p class="text-white mb-0">Capteurs Actifs</p>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">30</h1>
                        <p class="text-white mb-0">Interventions Réussies</p>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-quote-left fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">30</h1>
                        <p class="text-white mb-0">Alertes Traitées</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <!-- Process Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/alert.png">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <h1 class="mb-4">Trois étapes simples pour commencer à travailler avec nous</h1>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <ul class="process mb-0">
                            <li>
                                <span><i class="fa fa-cog"></i></span>
                                <div>
                                    <h5> Créez votre compte</h5>
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="fa fa-address-card"></i></span>
                                <div>
                                    <h5> Connectez vos capteurs</h5>
                                    <p>Connectez facilement vos capteurs de pression et de chlore à la plateforme</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="fa fa-check"></i></span>
                                <div>
                                    <h5>Surveillez et gérez</h5>
                                    <p>Commencez à surveiller les données en temps réel et recevez des alertes instantanées en cas d'anomalies</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process End -->




        <!-- Testimonial Start -->
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl py-6" id="contact">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-3">Contact Us</h1>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Call Us</p>
                                <h5 class="mb-0">+012 345 6789</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Mail Us</p>
                                <h5 class="mb-0">manel.elleuchi@wedtect.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Our Office</p>
                                <h5 class="mb-0">Route de Tunis km10 3021</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Address<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Route de Tunis km10 3021</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+216 27 577 756</p>
                        <p><i class="fa fa-envelope me-3"></i> manel.elleuchi@wedtect.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="">About</a>
                        <a class="btn btn-link" href="">Contact</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Conditions</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Community<span></span></p>
                        <a class="btn btn-link" href="">Career</a>
                        <a class="btn btn-link" href="">Leadership</a>
                        <a class="btn btn-link" href="">Strategy</a>
                        <a class="btn btn-link" href="">History</a>
                        <a class="btn btn-link" href="">Components</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>