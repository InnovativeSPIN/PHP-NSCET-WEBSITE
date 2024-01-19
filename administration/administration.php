<?php require_once("../resources/connection.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>NSCET</title>
  <meta charset="UTF-8" />
  <meta name="description" content="Unica University Template" />
  <meta name="keywords" content="event, unica, creative, html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="img/favicon.ico" rel="shortcut icon" />

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./administration.css" />
  <link rel="stylesheet" href="../css/font-awesome.min.css" />
  <link rel="stylesheet" href="../css/themify-icons.css" />
  <link rel="stylesheet" href="../css/magnific-popup.css" />
  <link rel="stylesheet" href="../css/animate.css" />
  <link rel="stylesheet" href="../css/owl.carousel.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script nonce="defdf876-aff2-4c43-8786-bc6a2f07dfb1">
    (function (w, d) {
      !(function (t, u, v, w) {
        t[v] = t[v] || {};
        t[v].executed = [];
        t.zaraz = { deferred: [], listeners: [] };
        t.zaraz.q = [];
        t.zaraz._f = function (x) {
          return async function () {
            var y = Array.prototype.slice.call(arguments);
            t.zaraz.q.push({ m: x, a: y });
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
                (H, I) => ({ ...H[1], ...I[1] }),
                {}
              )
            ))
              zaraz.set(G[0], G[1], { scope: "page" });
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
        ["complete", "interactive"].includes(u.readyState)
          ? zaraz.init()
          : t.addEventListener("DOMContentLoaded", zaraz.init);
      })(w, d, "zarazData", "script");
    })(window, document);
  </script>
</head>

<body>
    <!-- <div id="preloder">
         <div class="loader"></div>
    </div> -->
    <div class="nav-switch" style="z-index: 100">
        <i class="fa fa-bars"></i>
    </div>

    <?php require_once("../resources/header.php") ?>

    <div class="row heading" style="justify-content: center; background-color: #104565;"><h2 style="color:#fff;">NSCET ADMINISTRATION</h2></div>
        
    <!-- MISSION & VISION -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mission-vision-section">
            <div class="mission-container justify-content-center">
              <h2 class="display-4">Our Mission</h2>
              <ul>
                  <li><p class="fs-5 lead">To provide professional, constructive and learner centered education.</p></li>

                  <li><p class="fs-5 lead">To make learners contribute to the development of the nation through academic and industrial excellence.</p></li>
                  
                  <li><p class="fs-5 lead">To encourage learners involve in innovative researches with ethics.</p></li> 
              </ul>
            </div>
            <div class="vision-container justify-content-center">
              <h2 class="display-4">Our Vision</h2>
            <ul>
                <li>
                    <p class="fs-5 lead">To establish ourselves as a leading technological institution.
                    </p>
                </li></ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ABOUT SECTION -->
    <section>
        <div class="container-fluid">
            
            <div class="row mt-5">
                
                    <div class="col-12 justify-content-center d-flex">
                        <h4><strong>ABOUT TMHNU</strong></h4>
                    </div><hr>
                    <div class="col-12"><p>
                        "Genesis of Theni Melapettai Hindu Nadargal Uravinmurai Since 1898" Theni Melapettai Hindu Nadargal Uravinmurai (TMHNU) proclaims to the society loudly out its Himalayan task not by words but by its tremendous service rendering to the people by means of providing quality education. The pioneers of TMHNU(1898) started the Primary school in 1919, named Nadar Saraswathi Vidhyasala with 38 students and 2 teachers.Thus the tiny seed for the huge task was laid then in a small way. Now the small sapling has flourished into a very big tree with strong branches to support it. By the blessings of Annai Sri Bathrakaliamman, at present 17 educational Institutions function under this beneficial bower giving quality education. Above 22,000 students are studying and more than 1000 teaching and 1000 supportive staff members are working in our institutions.
                    </p>
                    </div>
                
            </div>
            <div class="row mt-5">
                
                    <div class="col-12 justify-content-center d-flex">
                        <h4><strong>ABOUT OUR JOURNEY</strong></h4>
                    </div><hr>
                    <div class="col-12">
                        Nadar Saraswathi College of Engineering and Technology was established 
                        in the year 2010 with the motto of uplifting rural students cadre and to
                        nurture them with excellence. It is exclusively constructed for moulding
                        up outstanding Engineers as responsible citizen and dynamic professionals.The 
                        institution is placed in the midst of a thriving eco-friendly ever flourishing
                        nature bound landscape of about 21 acres. It is located at Vadapudhupatti at about 6 Kms
                        from Theni, Near Nadar Saraswathi College of Arts and Science.<br><br>

                        Science and Technology are of paramount social, political and economic importance 
                        in the 21st century. In todays society, there is a genuine need for a technical institute
                        that offers its students quality academic and career education in an atmosphere of personalized attention.
                        NSCET educational programs that prepare the students to enter their chosen career field upon graduation.
                        Through Quality Teaching, Learning, and Research, the College will provide students with opportunities 
                        to develop the knowledge, understanding, and skills necessary for successful employment. 
                        Our goal is to offer a lifelong educational solution that can equip the students with the 
                        knowledge,skills and credentials needed to establish and advance professionally at any point on a chosen career path.<br><br>

                        Excellence in teaching will continue to be the most important criterion in faculty recruitment.
                        At the same time, the ability to do research, to engage in continuous scholarly and creative work,
                        and to provide service, primarily to the region and the state, will be important additional qualifications.
                        The college will provide a comprehensive range of support services for students.</div>
                
            </div>
        </div>
    </section>

    <!-- INFO -->
    <section>
        <div class="container-fluid">
            <!-- GOVERNING CELL --> 
                <div class="row mt-5">
                    <div class="col-12 justify-content-center d-flex">
                        <h4><strong>GOVERNING CELL</strong></h4>
                    </div><hr>
                </div><hr>
                <div class="card-deck">
                  <div class="card">
                    <img class="img-container" src="./mission.jpg" alt="Card image cap">
                    <div class="card-details">
                      <h5 class="card-title">Mr.T.Rajamohan B.Sc.,</h5>
                      <p class="card-text">President</p>
                    </div>
                  </div>
                  <div class="card">
                    <img class="img-container" src="./mission.jpg" alt="Card image cap">
                    <div class="card-details">
                      <h5 class="card-title">Mr.P.P.Ganesh, B.Sc.,</h5>
                      <p class="card-text">Vice President</p>
                    </div>
                  </div>
                  <div class="card">
                    <img class="img-container" src="./mission.jpg" alt="Card image cap">
                    <div class="card-details">
                      <h5 class="card-title">Mr.M.M.Anandhavel</h5>
                      <p class="card-text">General Secretary</p>
                    </div>
                  </div>
                  <div class="card">
                      <img class="img-container" src="./mission.jpg" alt="Card image cap">
                      <div class="card-details">
                        <h5 class="card-title">Mr.Palaniappan</h5>
                        <p class="card-text">Treasurer</p>
                      </div>
                    </div>
              </div>
            <!-- EXECUTIVE COMMITTEE MEMBERS OF TMHNU -->
            <div class="row mt-5">
                    <div class="col-12 justify-content-center d-flex">
                        <h4><strong>EXECUTIVE COMMITTEE MEMBERS OF TMHNU</strong></h4>
                    </div>
            </div><hr>
            <table class="table table-bordered table-hover table-striped"> 
                <tbody>
                    <tr>
                    <td>Mr.P.M.P.Arul prakasam</td>
                    <td>Mr.A.S.G.Dharma Rajan, B.A.,</td>
                    </tr>
                    <tr>
                    <td>Mr.K.Gnanaprakasam</td>
                    <td>Mr.G.N.Jawahar</td>
                    </tr>
                    <tr>
                    <td>Er.R.T.Jawahar, B.E.,</td>
                    <td>Mr.A.S.Jeevagan</td>
                    </tr>
                    <tr>
                    <td>Mr.K.K.Jeyaraman</td>
                    <td>Mr.M.Kalimuthu, B.A.,</td>
                    </tr>
                    <tr>
                    <td>Mr.P.Kannaiyiram, EX.Mc.,</td>
                    <td>Mr.K.K.Sekar</td>
                    </tr>
                    <tr>
                    <td>Mr.B.Ramachandran, M.B.A.,</td>
                    <td>Mr.G.K.Vijayakumar, B.Com.,</td>
                    </tr>
                </tbody>
            </table>
            
            <!-- COLLEGE COMMITTEE MEMBERS OF NSCET -->
            <div class="row mt-5">
                <div class="col-12 justify-content-center d-flex">
                    <h4><strong>COLLEGE COMMITTEE MEMBERS OF NSCET</strong></h4>
                </div>
            </div><hr>
            <table class="table table-bordered table-hover table-striped"> 
                <tbody>
                    <tr>
                    <td>Mr.V.Achamuthupandiyan.,</td>
                    <td>Dr. G.J. Senthilselvan.,</td>
                    </tr>
                    <tr>
                    <td>Dr. R.T.Udhayasankar</td>
                    <td>Mr. S.S. Selvakumar, M.Com.,</td>
                    </tr>
                    <tr>
                    <td>Mr. S.P. Selvam.,</td>
                    <td>Mr. A.S.R. Soundarapandian.,</td>
                    </tr>
                    <tr>
                    <td>Mr. S.V. Thanushkodi</td>
                    <td>Mr. M. Karthikeyan, M.B.A.,</td>
                    </tr>
                    <tr>
                    <td>Mr. R. Madasamy, M.C.A.,</td>
                    <td>Mr. V.K.M. Manivannan, M.B.A.,</td>
                    </tr>
                    <tr>
                    <td>Dr. A.A.T.R. Mohanasundaram, M.B.B.S.,</td>
                    <td>Mr. N. Selvakumar, B.E.,</td>
                    </tr>
                    <tr>
                    <td>Er. S.N. Mathalai Rajan, B.E., M.B.A.,</td>
                    <td>Er. M. Ramesh, D.C.E.,</td>
                    </tr>
                    <tr>
                    <td>Mr. A.R. SaravanaKumar.,</td>
                    <td>Mr. R.V. Vijayakumar</td>
                    </tr>
                    <tr>
                    <td>Mr. S. Naveenram, B.E., M.B.A.,</td>
                    <td>Mr. J. Venkateshbabu, B.Com.,</td>
                    </tr>
                    <tr>
                    <td>Mr. K. Rajkumar, M.Sc., (CS & IT)</td>
                    <td>Mr. A.M. Marikani, B.E.,</td>
                    </tr>
                    <tr>
                    <td>Mr. R.V. Marimuthu</td>
                    <td>Mr. A.P. Karthikeyan</td>
                    </tr>
                </tbody>
            </table>
            <!--PROMINENT PERSONALITIES OF NSCET  -->
            <div class="row mt-5">
                    <div class="col-12 justify-content-center d-flex">
                        <h4><strong>PROMINENT PERSONALITIES OF NSCET</strong></h4>
                    </div>
            </div><hr>
            <div class="card-deck">
                <div class="card">
                  <img class="img-container" src="./mission.jpg" alt="Card image cap">
                  <div class="card-details">
                    <h5 class="card-title">Mr.A.S.R. Maheswaran, B.Sc.,</h5>
                    <p class="card-text">Secretary</p>
                  </div>
                </div>
                <div class="card">
                  <img class="img-container" src="./mission.jpg" alt="Card image cap">
                  <div class="card-details">
                    <h5 class="card-title">Mr.A.Rajkumar,B.B.A.</h5>
                    <p class="card-text">Secretary</p>
                  </div>
                </div>
                <div class="card">
                  <img class="img-container" src="./mission.jpg" alt="Card image cap">
                  <div class="card-details">
                    <h5 class="card-title">Er.S.Naveen Ram, B.E., MBA.,</h5>
                    <p class="card-text">Joint Secretary</p>
                  </div>
                </div>
                <div class="card">
                    <img class="img-container" src="./mission.jpg" alt="Card image cap">
                    <div class="card-details">
                      <h5 class="card-title">Dr.C.Mathalai Sundaram,<br>
                        M.E.,MBA.,Ph.D.,</h5>
                      <p class="card-text">Principal</p>
                    </div>
                  </div>
            </div>
        </div>
    </section>

  <?php require_once("../resources/footer.php") ?>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/magnific-popup.min.js"></script>
  <script src="js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-23581568-13");
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
    integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
    data-cf-beacon='{"rayId":"8182dcf408402e11","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
    integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
    integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script src="../js/marquee.js"></script>
  <script src="../js/popup.js"></script>
</body>

</html>