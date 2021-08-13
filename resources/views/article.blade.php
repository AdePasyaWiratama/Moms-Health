<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Next Level - About Page</title>
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
                        <h1 class="text-uppercase tm-brand-name">MOMS HEALTH</h1>
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
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="{{route('about')}}">
                                        About Us</a>
                                </li>
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="{{route('gallery')}}">Calculate</a>
                                </li>
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                                </li>
                                <li class="nav-item active">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="{{route('article')}}">Article <span
                                            class="sr-only">(current)</span></a>
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
                    <div class="tm-welcome-parallax" data-parallax="scroll" data-image-src="img/bayi2.jpg">
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
                                ARTICLE
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="tm-page-col-right tm-tab-contents">
                    <div id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="text-content">
                                {{-- <h3 class="tm-text-secondary tm-mb-5">
                                    {{-- Article {{$article->id}} --}}
                                {{-- </h3> --}}
                                <table class="table table-bordered"input style="margin-bottom:50px">
                                    <tr>
                                        <th>No</th>
                                        <th>Tema</th>
                                        <th>Link Tautan Deskripsi</th>
                                    </tr>
                                    <?php $no = 0;?>
                                    @foreach($articles as $article)
                                    <?php $no++ ;?>
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $article->judul }}</td>
                                        <td><a target=_blank href="{{ $article->deskripsi}}"> {{ $article->deskripsi}} </a></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
    {{-- <script>
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

    </script> --}}
</body>

</html>
