<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Moms Health</title>
    <!--
Next Level CSS Template
https://templatemo.com/tm-532-next-level
-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
</head>

<body>
    <div class="container-fluid">
        <div class="row tm-brand-row">
            <div class="col-lg-4 col-10">
                <div class="tm-brand-container">
                    <div class="tm-brand-texts">
                        <h1 class="text-uppercase tm-brand-name">Moms Health</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-2 tm-nav-col">
                <div class="tm-nav">
                    <nav class="navbar navbar-expand-lg navbar-light tm-navbar">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto mr-0">
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="{{route('index')}}">Home</a>
                                </li>
                                <li class="nav-item active">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="{{route('about')}}">
                                        About Us <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="{{route('gallery')}}">Calculate</a>
                                </li>
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                                    <li class="nav-item">
                                        <div class="tm-nav-link-highlight"></div>
                                        <a class="nav-link" href="{{route('article')}}">Article</a>
                                    </li>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row tm-welcome-row">
            <div class="col-12 tm-page-cols-container">
                <div class="tm-page-col-left tm-welcome-box tm-bg-gradient">
                    <p class="tm-welcome-text">
                        <em>Moms Health adalah website pelayanan untuk para ibu yang belum atau sedang hamil.</em>
                    </p>
                </div>
                <div class="tm-page-col-right">
                    <div class="tm-welcome-parallax" data-parallax="scroll" data-image-src="img/bayi.jpg">
                    </div>
                </div>
            </div>
        </div>

        <section class="row tm-pt-4 tm-pb-6">
            <div class="col-12 tm-tabs-container tm-page-cols-container">
                <div class="tm-page-col-left tm-tab-links">
                    <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                        <li>
                            <a href="#tab1" class="active">
                                <div class="tm-tab-icon"></div>
                                About Us
                            </a>
                        </li>
                        <li>
                            <!-- <a href="#tab2" class="">
                                <div class="tm-tab-icon"></div>
                                Vision and Mission
                            </a> -->
                        </li>
                        <!-- <li>
                            <a href="#tab3" class="">
                                <div class="tm-tab-icon"></div>
                                Our History
                            </a>
                        </li> -->
                    </ul>
                </div>
                <div class="tm-page-col-right tm-tab-contents">
                    <div id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="text-content">
                                <h3 class="tm-text-secondary tm-mb-5">
                                    Tentang Kami
                                </h3>
                                <p class="tm-mb-5">
                                    Aplikasi ini di buat untuk membantu para calon ibu dan yang sedang menjalani kehamilan agar 
                                    dapat menjalani proses kehamilan dengan baik, anjuran-anjuran yang di berikan langsung dari bidan
                                    yang terpercaya dan artikel-artikel serta video dari sumber yang berintegritas
                                </p>
                                <p class="tm-mb-5">
                                    Di harapkan dengan adanya aplikasi ini dapat memberikan bantuan yang berarti bagi para calon ibu
                                    dan yang sedang menjalani proses kehamilan agar dapat menjalani proses tersebut dengan lancar.
                                </p>
                            </div>
                                <!-- <div class="row tm-pt-5">
                                    <div class="col-md-4 text-center">
                                        <div class="tm-about-person mx-auto">
                                            <img src="img/bitcoin-girl.jpg" alt="Image" class="img-fluid tm-mb-1" />
                                            <h4 class="tm-text-secondary tm-mb-1">
                                                Catherine Theta
                                            </h4>
                                            <p class="tm-mb-2">Project Manager</p>
                                            <div class="tm-mb-3">
                                                <a href="https://facebook.com" class="tm-about-social-link">
                                                    <i class="fab fa-facebook-f tm-about-social-icon"></i>
                                                </a>
                                                <a href="https://twitter.com" class="tm-about-social-link">
                                                    <i class="fab fa-twitter tm-about-social-icon"></i>
                                                </a>
                                                <a href="https://linkedin.com" class="tm-about-social-link">
                                                    <i class="fab fa-linkedin-in tm-about-social-icon"></i>
                                                </a>
                                            </div>

                                            <p>
                                                Mauris efficitur risus mi, et varius dolor sodales
                                                facilisis. Fusce sed mi tristique.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 text-center">
                                        <div class="tm-about-person mx-auto">
                                            <img src="img/ar-guy.jpg" alt="Image" class="img-fluid tm-mb-1" />
                                            <h4 class="tm-text-secondary tm-mb-1">New Hudson</h4>
                                            <p class="tm-mb-2">Digital Marketing</p>
                                            <div class="tm-mb-3">
                                                <a href="https://facebook.com" class="tm-about-social-link">
                                                    <i class="fab fa-facebook-f tm-about-social-icon"></i>
                                                </a>
                                                <a href="https://twitter.com" class="tm-about-social-link">
                                                    <i class="fab fa-twitter tm-about-social-icon"></i>
                                                </a>
                                                <a href="https://linkedin.com" class="tm-about-social-link">
                                                    <i class="fab fa-linkedin-in tm-about-social-icon"></i>
                                                </a>
                                            </div>
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus
                                                et malesuada fames.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 text-center">
                                        <div class="tm-about-person mx-auto">
                                            <img src="img/desk-girl.jpg" alt="Image" class="img-fluid tm-mb-1" />
                                            <h4 class="tm-text-secondary tm-mb-1">Jennifer Wall</h4>
                                            <p class="tm-mb-2">Team Leader</p>
                                            <div class="tm-mb-3">
                                                <a href="https://facebook.com" class="tm-about-social-link">
                                                    <i class="fab fa-facebook-f tm-about-social-icon"></i>
                                                </a>
                                                <a href="https://twitter.com" class="tm-about-social-link">
                                                    <i class="fab fa-twitter tm-about-social-icon"></i>
                                                </a>
                                                <a href="https://linkedin.com" class="tm-about-social-link">
                                                    <i class="fab fa-linkedin-in tm-about-social-icon"></i>
                                                </a>
                                            </div>
                                            <p>
                                                Three social icons are placed in above circles. Sed
                                                turpis nisl, congue a arcu in.
                                            </p>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                        <!-- <div id="tab2">
                            <div class="text-content">
                                <h3 class="tm-text-secondary tm-mb-5">Vision and Mission</h3>
                                <p class="tm-mb-5">
                                    Nam consequat, leo vitae aliquet dignissim, leo est laoreet
                                    nibh, nec dictum libero justo vitae dolor. Donec tristique
                                    eros at nisi elementum efficitur. Proin ornare feugiat ex
                                    placerat pellenteqsue. Nulla convallis est volutpat ex
                                    ultrices facilisis.
                                </p>
                                <p class="tm-mb-5">
                                    Etiam egestas metus vitae est interdum, in eleifend nunc
                                    volutpat. Aliquam molestie ipsum quis suscipit lacinia.
                                    Mauris turpis libero, iaculis non dictum ac, ornare a massa.
                                    Duis id lorem purus. Fusce viverra ullamcorper metus.
                                    Curabitur puvinar suscipit sapien ac blandit. Aliquam vel
                                    pulvinar purus, sit amet luctus urna.
                                </p>
                            </div>
                            <div class="row tm-pt-5">
                                <div class="col-md-4 text-center">
                                    <div class="tm-about-person mx-auto">
                                        <img src="img/bitcoin-girl.jpg" alt="Image" class="img-fluid tm-mb-1" />
                                        <h4 class="tm-text-secondary tm-mb-1">
                                            Catherine Theta
                                        </h4>
                                        <p class="tm-mb-2">Project Manager</p>
                                        <div class="tm-mb-3">
                                            <a href="https://facebook.com" class="tm-about-social-link">
                                                <i class="fab fa-facebook-f tm-about-social-icon"></i>
                                            </a>
                                            <a href="https://twitter.com" class="tm-about-social-link">
                                                <i class="fab fa-twitter tm-about-social-icon"></i>
                                            </a>
                                            <a href="https://linkedin.com" class="tm-about-social-link">
                                                <i class="fab fa-linkedin-in tm-about-social-icon"></i>
                                            </a>
                                        </div>

                                        <p>
                                            Mauris efficitur risus mi, et varius dolor sodales
                                            facilisis. Fusce sed mi tristique.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-4 text-center">
                                    <div class="tm-about-person mx-auto">
                                        <img src="img/ar-guy.jpg" alt="Image" class="img-fluid tm-mb-1" />
                                        <h4 class="tm-text-secondary tm-mb-1">New Hudson</h4>
                                        <p class="tm-mb-2">Digital Marketing</p>
                                        <div class="tm-mb-3">
                                            <a href="https://facebook.com" class="tm-about-social-link">
                                                <i class="fab fa-facebook-f tm-about-social-icon"></i>
                                            </a>
                                            <a href="https://twitter.com" class="tm-about-social-link">
                                                <i class="fab fa-twitter tm-about-social-icon"></i>
                                            </a>
                                            <a href="https://linkedin.com" class="tm-about-social-link">
                                                <i class="fab fa-linkedin-in tm-about-social-icon"></i>
                                            </a>
                                        </div>
                                        <p>
                                            Pellentesque habitant morbi tristique senectus et netus
                                            et malesuada fames.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-4 text-center">
                                    <div class="tm-about-person mx-auto">
                                        <img src="img/desk-girl.jpg" alt="Image" class="img-fluid tm-mb-1" />
                                        <h4 class="tm-text-secondary tm-mb-1">Jennifer Wall</h4>
                                        <p class="tm-mb-2">Team Leader</p>
                                        <div class="tm-mb-3">
                                            <a href="https://facebook.com" class="tm-about-social-link">
                                                <i class="fab fa-facebook-f tm-about-social-icon"></i>
                                            </a>
                                            <a href="https://twitter.com" class="tm-about-social-link">
                                                <i class="fab fa-twitter tm-about-social-icon"></i>
                                            </a>
                                            <a href="https://linkedin.com" class="tm-about-social-link">
                                                <i class="fab fa-linkedin-in tm-about-social-icon"></i>
                                            </a>
                                        </div>
                                        <p>
                                            Three social icons are placed in above circles. Sed
                                            turpis nisl, congue a arcu in.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div id="tab3">
                            <div class="text-content">
                                <h3 class="tm-text-secondary tm-mb-5">Our History</h3>
                                <p class="tm-mb-5">
                                    Mauris turpis libero, iaculis non dictum ac, ornare a massa.
                                    Duis id lorem purus. Fusce viverra ullamcorper metus.
                                    Curabitur puvinar suscipit sapien ac blandit. Aliquam vel
                                    pulvinar purus, sit amet luctus urna. Nulla convallis est
                                    volutpat ex ultrices facilisis.
                                </p>
                                <p class="tm-mb-5">
                                    Etiam egestas metus vitae est interdum, in eleifend nunc
                                    volutpat. Aliquam molestie ipsum quis suscipit lacinia. Nam
                                    consequat, leo vitae aliquet dignissim, leo est laoreet
                                    nibh, nec dictum libero justo vitae dolor. Donec tristique
                                    eros at nisi elementum efficitur. Proin ornare feugiat ex
                                    placerat pellenteqsue.
                                </p>
                            </div>
                            <div class="row tm-pt-5">
                                <div class="col-md-4 text-center">
                                    <div class="tm-about-person mx-auto">
                                        <img src="img/bitcoin-girl.jpg" alt="Image" class="img-fluid tm-mb-1" />
                                        <h4 class="tm-text-secondary tm-mb-1">
                                            Catherine Theta
                                        </h4>
                                        <p class="tm-mb-2">Project Manager</p>
                                        <div class="tm-mb-3">
                                            <a href="https://facebook.com" class="tm-about-social-link">
                                                <i class="fab fa-facebook-f tm-about-social-icon"></i>
                                            </a>
                                            <a href="https://twitter.com" class="tm-about-social-link">
                                                <i class="fab fa-twitter tm-about-social-icon"></i>
                                            </a>
                                            <a href="https://linkedin.com" class="tm-about-social-link">
                                                <i class="fab fa-linkedin-in tm-about-social-icon"></i>
                                            </a>
                                        </div>

                                        <p>
                                            Mauris efficitur risus mi, et varius dolor sodales
                                            facilisis. Fusce sed mi tristique.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-4 text-center">
                                    <div class="tm-about-person mx-auto">
                                        <img src="img/ar-guy.jpg" alt="Image" class="img-fluid tm-mb-1" />
                                        <h4 class="tm-text-secondary tm-mb-1">New Hudson</h4>
                                        <p class="tm-mb-2">Digital Marketing</p>
                                        <div class="tm-mb-3">
                                            <a href="https://facebook.com" class="tm-about-social-link">
                                                <i class="fab fa-facebook-f tm-about-social-icon"></i>
                                            </a>
                                            <a href="https://twitter.com" class="tm-about-social-link">
                                                <i class="fab fa-twitter tm-about-social-icon"></i>
                                            </a>
                                            <a href="https://linkedin.com" class="tm-about-social-link">
                                                <i class="fab fa-linkedin-in tm-about-social-icon"></i>
                                            </a>
                                        </div>
                                        <p>
                                            Pellentesque habitant morbi tristique senectus et netus
                                            et malesuada fames.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-4 text-center">
                                    <div class="tm-about-person mx-auto">
                                        <img src="img/desk-girl.jpg" alt="Image" class="img-fluid tm-mb-1" />
                                        <h4 class="tm-text-secondary tm-mb-1">Jennifer Wall</h4>
                                        <p class="tm-mb-2">Team Leader</p>
                                        <div class="tm-mb-3">
                                            <a href="https://facebook.com" class="tm-about-social-link">
                                                <i class="fab fa-facebook-f tm-about-social-icon"></i>
                                            </a>
                                            <a href="https://twitter.com" class="tm-about-social-link">
                                                <i class="fab fa-twitter tm-about-social-icon"></i>
                                            </a>
                                            <a href="https://linkedin.com" class="tm-about-social-link">
                                                <i class="fab fa-linkedin-in tm-about-social-icon"></i>
                                            </a>
                                        </div>
                                        <p>
                                            Three social icons are placed in above circles. Sed
                                            turpis nisl, congue a arcu in.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <!-- <section class="row" id="tmCallToAction">
            <div class="col-12 tm-page-cols-container tm-call-to-action-col">
                <div class="tm-page-col-right">
                    <div class="tm-call-to-action-box">
                        <i class="fas fa-3x fa-rss-square tm-call-to-action-icon"></i>
                        <div class="tm-call-to-action-text">
                            <h3 class="tm-call-to-action-title">
                                Vivamus sollicitudin tellus
                            </h3>
                            <p class="tm-call-to-action-description">
                                Maecenas maximus tellus in dolor auctor tristique. Nam
                                hendrerit posuere laoreet. Aliquam erat volutpat. Nulla eros
                                est, imperdiet vel feugiat non, ullamcorper mattis nulla.
                            </p>
                            <form action="#" method="GET" class="tm-call-to-action-form">
                                <input type="email" name="email" placeholder="Email" class="tm-email-input" required />
                                <button type="submit" class="btn btn-primary">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Page footer -->
        <!-- <footer class="row tm-page-footer">
            <p class="col-12 tm-copyright-text mb-0">
                Copyright &copy; 2019 Next Level Company... Designed by Template Mo
            </p>
        </footer> -->
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function () {
            // Tabs
            $(".tabgroup > div").hide();
            $(".tabgroup > div:first-of-type").show();
            $(".tabs a").click(function (e) {
                e.preventDefault();
                var $this = $(this),
                    tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
                    others = $this
                    .closest("li")
                    .siblings()
                    .children("a"),
                    target = $this.attr("href");
                others.removeClass("active");
                $this.addClass("active");
                $(tabgroup)
                    .children("div")
                    .hide();
                $(target).show();

                // Scroll to tab content (for mobile)
                if ($(window).width() < 992) {
                    $("html, body").animate({
                            scrollTop: $("#first-tab-group").offset().top
                        },
                        200
                    );
                }
            });
        });

    </script>
</body>

</html>
