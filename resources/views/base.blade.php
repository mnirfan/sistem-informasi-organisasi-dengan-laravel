<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="description" content="Doscom adalah komunitas open source di bidang perangkat lunak yang memilik misi untuk "Memasyarakatkan Open Source dan Meng-Open Source-kan Masyrakat" melalui berbagai kegitan seperti workshop, seminar dan sharing session, Kami juga meracik sebuah sistem operasi bernama TeaLinuxOS." />
    <meta name="keywords" content="doscom, open source, udinus, dinus, tealinux" />
    <meta name="author" content="Diky Arga Doscom" />
    <meta property="og:title" content="Doscom | Dinus Open Source Community" />
    <meta property="og:description" content="Kami adalah komunitas open source di bidang perangkat lunak yang memilik misi untuk "Memasyarakatkan Open Source dan Meng-Open Source-kan Masyrakat" melalui berbagai kegitan seperti workshop, seminar dan sharing session, Kami juga meracik sebuah sistem operasi bernama TeaLinuxOS." />

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.4.57/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" /> --}}
    {{-- <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" /> --}}
    <!--Import Google Icon Font-->
    {{-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.4.57/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen" title="no title">
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <style media="screen">
      .card .card-content .card-title{
        line-height: 28px;
      }
      .card .card-title{
        font-size: 24px;
        font-weight: 600;
      }
    </style>
<meta name="google-site-verification" content="rOKCy9fAyYpNaclr3bZN7uXbvYM6vLE_LzYHDPesgQw" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76700149-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
    <div class="navbar-fixed">

      <ul id="dropdown_blog" class="dropdown-content">
        <li><a href="#!">Semua Postingan</a></li>
        <li><a href="#!">Buat Postingan Baru</a></li>
      </ul>

      <ul id="dropdown_kegiatan" class="dropdown-content">
        <li><a href="#!">Semua Kegiatan</a></li>
        <li><a href="#!">Buat Kegiatan Baru</a></li>
      </ul>

        <nav class="white" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo"><img src="images/logo-mini-doscom.png" height="50px" alt="" />
                </a>

                <ul class="right hide-on-med-and-down">
                  <li><a href="#divisi">Divisi</a>
                  </li>
                  <li><a href="#tealinuxos">TeaLinuxOS</a>
                  </li>

                  @if (Auth::guest() || Auth::user()->is_anggota())
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#kegiatan">Kegiatan</a></li>
                    <li><a href="{{ url('/auth/login') }}">Masuk</a></li>
                    <li><a href="{{ url('/auth/register') }}">Daftar</a></li>
                  @else
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown_blog">Blog<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown_kegiatan">Kegiatan<i class="material-icons right">arrow_drop_down</i></a></li>
                  @endif

                </ul>

                <ul id="nav-mobile" class="side-nav">
                  <li><a href="#tentang">Tentang</a>
                  </li>
                  <li><a href="#divisi">Divisi</a>
                  </li>
                  <li ><a href="#tealinuxos">TeaLinuxOS</a>
                  </li>
                  <li ><a href="#blog">Blog</a>
                  </li>
                  <li ><a href="#kontak">Kontak</a>
                  </li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="black-text mdi mdi-menu"></i></a>
            </div>
        </nav>
    </div>

    @yield('content')

    <div>
      <footer class="page-footer blue">
          <div class="container">
              <div class="row">
                  <div class="col l6 s12">
                      <h5 class="white-text">Doscom</h5>
                      <p class="grey-text text-lighten-4">
  Kami adalah komunitas open source di bidang perangkat lunak yang memilik visi untuk " Memasyarakatkan Open Source dan Meng-Open Source-kan Masyrakat " melalui berbagai kegitan seperti workshop, seminar dan sharing session, Kami juga meracik sebuah sistem operasi bernama TeaLinuxOS. </p>


                  </div>
                  <div class="col l3 s12">
                      <h5 class="white-text">Kontak </h5>
                      <ul>
                          <li class="white-text"><i class=" mdi mdi-email-open"></i> <a class="white-text" href="mailto:sekretariat@doscom.org?Subject=Hello%20Doscom"> sekretariat@doscom.org</a>
                          </li>
                          <li><i class="white-text mdi mdi-telegram"></i> <a class="white-text" href="https://telegram.me/doscomedia"> telegram.me/doscom</a>
                          </li>

                      </ul>
                  </div>
                  <div class="col l3 s12">
                      <h5 class="white-text">Terhubung</h5>
                      <ul>
                          <li><i class="white-text mdi mdi-facebook"></i><a class="white-text" href="https://www.facebook.com/doscomedia/"> doscomedia</a>
                          </li>
                          <li><i class="white-text mdi mdi-twitter"></i> <a class="white-text" href="https://twitter.com/doscomedia"> @doscomedia</a>
                          </li>
                          <li><i class="white-text mdi mdi-instagram"></i><a class="white-text" href="http://instagram.com/doscomedia"> doscomedia</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="footer-copyright">
              <div class="container">
                  Made with &#x2764; by Dinus Open Source Community
              </div>
          </div>
      </footer>
    </div>
    {{-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script> --}}
    <script src="js/init.js"></script>


    <script type="text/javascript">
      $(document).ready(function(){
      $('.scrollspy').scrollSpy();
      $(".dropdown-button").dropdown();
      $('.parallax').parallax();
    });
    </script>
  </body>
</html>
