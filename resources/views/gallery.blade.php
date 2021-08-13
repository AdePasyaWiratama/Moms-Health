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
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="{{route('about')}}"> About Us</a>
                                </li>
                                <li class="nav-item active">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="{{route('gallery')}}">
                                        <i class="bi bi-calendar3"></i>Calculate <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <div class="tm-nav-link-highlight"></div>
                                    <a class="nav-link" href="{{route('article')}}">Article</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

       ? <div class="row tm-welcome-row">
            <div class="col-12">
                <div class="tm-welcome-parallax tm-center-child" data-parallax="scroll"
                    data-image-src="img/kalkulasi.jpg">
                    <div class="tm-bg-black-transparent tm-parallax-overlay">
                        <h2>Kalkulasi Estimasi Kehamilan</h2>
                        <p></p>
                    </div>
                    <section class="row tm-pt-4">
            <div class="col-12 tm-page-cols-container">
                <div class="tm-page-col-right">
                    <div class="tm-bg-black-transparent tm-parallax-overlay">
                    @php
                    if(empty($_GET['month']) || empty($_GET['year'])) {
                    $month = date('n');
                    $year = date('Y');
                    $day = date('d');
                    $go = date('g');
                    }
                    else {
                    $month = (int)$_GET['month'];
                    $year = (int)$_GET['year'];
                    $day = (int)$_GET['day'];
                    $go = (int)$_GET['go'];
                    }


                    if ($go =="1")
                    {
                    $last = mktime (0,0,0,$month, $day, $year) ;
                    $gest = 24192000;
                    $due = $last + $gest;
                    echo "Hari Terakhir Siklus Menstruasi Anda ";
                    echo date("M-d-Y", $last) ;
                    echo "<br>Bayi Anda Kemungkinan Lahir Pada ";
                    echo date("M-d-Y", $due) ;
                    echo "<p>"; 
                        }
                        @endphp
                        <i>Di Mohon Masukan Tanggal Terakhir Siklus Menstruasi Anda</i><br>
                        <form action="" method="GET">
                            <select name="month">
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>

                            <select name="day">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>

                            <select name="year">
                                <option value="13">2013</option>
                                <option value="14">2014</option>
                                <option value="15">2015</option>
                                <option value="16">2016</option>
                                <option value="17">2017</option>
                                <option value="18">2018</option>
                                <option value="19">2019</option>
                                <option value="20">2020</option>
                                <option value="21">2021</option>
                                <option value="22">2022</option>
                                <option value="23">2023</option>
                                <option value="24">2024</option>
                                <option value="25">2025</option>
                                <option value="26">2026</option>
                                <option value="27">2027</option>
                            </select>
                            <br/>
                            <input type="hidden" name="go" value="1" />
                            <input style="margin-bottom:10px; " type="submit" name="Calculate" />
                        </form>
                        </div>
                </div>
            </div>
        </section>
                </div>
            </div>
        </div>

        <!-- <section class="row tm-pt-4">
            <div class="col-12 tm-page-cols-container">
                <div class="tm-page-col-right">
                    @php
                    if(empty($_GET['month']) || empty($_GET['year'])) {
                    $month = date('n');
                    $year = date('Y');
                    $go = date('g');
                    }
                    else {
                    $month = (int)$_GET['month'];
                    $year = (int)$_GET['year'];
                    $day = (int)$_GET['day'];
                    $go = (int)$_GET['go'];
                    }


                    if ($go =="1")
                    {
                    $last = mktime (0,0,0,$month, $day, $year) ;
                    $gest = 24192000;
                    $due = $last + $gest;
                    echo "Hari Terakhir Siklus Menstruasi Anda ";
                    echo date("M-d-Y", $last) ;
                    echo "<br>Bayi Anda Kemungkinan Lahir Pada ";
                    echo date("M-d-Y", $due) ;
                    echo "<p>"; 
                        }
                        @endphp
                        <i>Di Mohon Masukan Tanggal Terakhir Siklus Menstruasi Anda</i><br>
                        <form action="" method="GET">
                            <select name="month">
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>

                            <select name="day">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>

                            <select name="year">
                                <option value="13">2013</option>
                                <option value="14">2014</option>
                                <option value="15">2015</option>
                                <option value="16">2016</option>
                                <option value="17">2017</option>
                                <option value="18">2018</option>
                                <option value="19">2019</option>
                                <option value="20">2020</option>
                                <option value="21">2021</option>
                                <option value="22">2022</option>
                                <option value="23">2023</option>
                                <option value="24">2024</option>
                                <option value="25">2025</option>
                                <option value="26">2026</option>
                                <option value="27">2027</option>
                            </select>
                            <br/>
                            <input type="hidden" name="go" value="1" />
                            <input style="margin-bottom:150px; " type="submit" name="Calculate" />
                        </form>
                </div>
            </div>
        </section> -->
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
