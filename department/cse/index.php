<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("../../resources/connection.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Computer Science Engineering</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="../../img/favicon.ico" rel="shortcut icon" />

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="../../css/font-awesome.min.css" />
  <link rel="stylesheet" href="../../css/themify-icons.css" />
  <link rel="stylesheet" href="../../css/magnific-popup.css" />
  <link rel="stylesheet" href="../../css/animate.css" />
  <link rel="stylesheet" href="../../css/owl.carousel.css" />
  <link rel="stylesheet" href="../../css/style.css" />
  <link rel="stylesheet" href="../../css/departmentPages.css" />

  <script nonce="defdf876-aff2-4c43-8786-bc6a2f07dfb1">
    (function(w, d) {
      !(function(t, u, v, w) {
        t[v] = t[v] || {};
        t[v].executed = [];
        t.zaraz = {
          deferred: [],
          listeners: []
        };
        t.zaraz.q = [];
        t.zaraz._f = function(x) {
          return async function() {
            var y = Array.prototype.slice.call(arguments);
            t.zaraz.q.push({
              m: x,
              a: y
            });
          };
        };
        for (const z of ["track", "set", "debug"]) t.zaraz[z] = t.zaraz._f(z);
        t.zaraz.init = () => {
          var A = u.getElementsByTagName(w)[0],
            B = u.createElement(w),
            C = u.getElementsByTagName("title")[0];
          C && (t[v].t = u.getElementsByTagName("title")[0].text);
          t[v].x = Math.random();
          t[v].w = t.screen.width;
          t[v].h = t.screen.height;
          t[v].j = t.innerHeight;
          t[v].e = t.innerWidth;
          t[v].l = t.location.href;
          t[v].r = u.referrer;
          t[v].k = t.screen.colorDepth;
          t[v].n = u.characterSet;
          t[v].o = new Date().getTimezoneOffset();
          if (t.dataLayer)
            for (const G of Object.entries(
                Object.entries(dataLayer).reduce(
                  (H, I) => ({
                    ...H[1],
                    ...I[1]
                  }), {}
                )
              ))
              zaraz.set(G[0], G[1], {
                scope: "page"
              });
          t[v].q = [];
          for (; t.zaraz.q.length;) {
            const J = t.zaraz.q.shift();
            t[v].q.push(J);
          }
          B.defer = !0;
          for (const K of [localStorage, sessionStorage])
            Object.keys(K || {})
            .filter((M) => M.startsWith("_zaraz_"))
            .forEach((L) => {
              try {
                t[v]["z_" + L.slice(7)] = JSON.parse(K.getItem(L));
              } catch {
                t[v]["z_" + L.slice(7)] = K.getItem(L);
              }
            });
          B.referrerPolicy = "origin";
          B.src =
            "/cdn-cgi/zaraz/s.js?z=" +
            btoa(encodeURIComponent(JSON.stringify(t[v])));
          A.parentNode.insertBefore(B, A);
        };
        ["complete", "interactive"].includes(u.readyState) ?
          zaraz.init() :
          t.addEventListener("DOMContentLoaded", zaraz.init);
      })(w, d, "zarazData", "script");
    })(window, document);
  </script>
</head>

<body>

  <div id="fixed-social" style="z-index: 10">
    <div>
      <a href="#" class="fixed-facebook" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
    </div>
    <div>
      <a href="#" class="fixed-linkedin" target="_blank"><i class="fa fa-linkedin"></i> <span>Linkedin</span></a>
    </div>
    <div>
      <a href="https://www.youtube.com/@NSCETeConnect" class="fixed-instagrem" target="_blank"><i class="fa fa-youtube"></i> <span>Youtube</span></a>
    </div>
    <div>
      <a href="#" class="fixed-twitter" target="_blank"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
    </div>
  </div>

  <div class="nav-switch" style="z-index: 100">
    <i class="fa fa-bars"></i>
  </div>

  <?php require_once("../../resources/header.php") ?>

  <!-- heading -->
  <div class="dept-page-content">
    <section class="hero-section">
      <h1 class="dept-heading"><strong>Department of Computer Science Engineering</strong></h1>
    </section>

    <section class="navigation-bar">
      <nav class="page__menu menu">
        <ul class="menu__list r-list">
          <li class="menu__group"><a href="#about" class="menu__link r-link text-underlined">ABOUT</a></li>
          <li class="menu__group"><a href="#hod_desk" class="menu__link r-link text-underlined">HOD'S DESK</a></a></li>
          <li class="menu__group"><a href="#facilities" class="menu__link r-link text-underlined">FACILITIES</a></li>
          <li class="menu__group"><a href="#organization" class="menu__link r-link text-underlined">ORGANIZATION</a></li>
          <li class="menu__group"><a href="#pursuits" class="menu__link r-link text-underlined">PURSUITS</a></li>
          <li class="menu__group"><a href="#office_bearers" class="menu__link r-link text-underlined">OFFICE BEARERS</a></li>
        </ul>
      </nav>
    </section>

    <section class="our-dept" id="about">
      <div class="text-sec">
        <h1 class="dept-title">OUR DEPARTMENT</h1>
        <div class="border-line"></div>
        <h4 class="dept-sub-title"> The Department of Computer Science and Engineering aims to produce the engineers with the abilities:</h4>
        <ul class="dept-sub-con">
          <li> Be lifelong learners who continue to pursue professional development.</li>
          <li> Participate and thrive in a multi disciplinary, systems oriented work environment.</li>
          <li> Contribute to the solution of complex technical problems that exist in the software industry.</li>
          <li>Understand their ethical roles as a professional engineer and strive to promote a practice of integrity, tolerance and respect in the work place.<br>
          </li>
        </ul>
      </div>

      <div class="container custom-card-container">
        <div class="custom-card-wrapper" style="background-image: url('../../img/department/cse/vision.png');">
          <div class="custom-card-overlay"></div>
          <div class="custom-card-content">
            <h4 data-aos="fade" data-aos-duration="750" data-aos-delay="200" class="custom-card-title"><strong>VISION</strong></h4>
            <p data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" class="custom-card-text">To become a leading hub in the field of Computer Engineering.</p>
          </div>
        </div>

        <div class="custom-card-wrapper" style="background-image: url('../../img/department/cse/our-mission.png');">
          <div class="custom-card-overlay"></div>
          <div class="custom-card-content">
            <h4 data-aos="fade" data-aos-duration="750" data-aos-delay="200" class="custom-card-title"><strong>MISSION</strong></h4>
            <p data-aos="flip-right" data-aos-duration="1000" data-aos-delay="200" style="text-align: left;" class="custom-card-text">
              • To provide a strong theoretical and practical knowledge emphasizing on software developments. </br>
              • To encourage autonomous learning, foster interactions and establish partnership with renowned software industries.</br>
              • To inculcate soft skills, leadership qualities and innovative research skills with ethical values.
            </p>
          </div>
        </div>
      </div>

    </section>
  </div>

  <?php require_once("../../resources/footer.php") ?>


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();

          document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
          });
        });
      });
    });
  </script>

  <script src="../../js/jquery-3.2.1.min.js"></script>
  <script src="../../js/owl.carousel.min.js"></script>
  <script src="../../js/jquery.countdown.js"></script>
  <script src="../../js/masonry.pkgd.min.js"></script>
  <script src="../../js/magnific-popup.min.js"></script>
  <script src="../../js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-23581568-13");
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8182dcf408402e11","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="../../js/marquee.js"></script>
  <script src="../../js/popup.js"></script>
  <script src="../../js/departmentPage.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>