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
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="../../css/font-awesome.min.css" />
  <link rel="stylesheet" href="../../css/themify-icons.css" />
  <link rel="stylesheet" href="../../css/magnific-popup.css" />
  <link rel="stylesheet" href="../../css/animate.css" />
  <link rel="stylesheet" href="../../css/owl.carousel.css" />
  <link rel="stylesheet" href="../../css/style.css" />
  <link rel="stylesheet" href="../../css/departmentPages.css" />

  <script nonce="defdf876-aff2-4c43-8786-bc6a2f07dfb1">

document.addEventListener('DOMContentLoaded', function() {
  const iconElement = document.querySelector('.sectiontongglelink .fa-solid.fa-caret-right');
  const sectionBar = document.querySelector('.navigation-bar');

  iconElement.addEventListener('click', function() {
    if (sectionBar.style.display === 'none') {
      sectionBar.style.display = 'flex';
    } else {
      sectionBar.style.display = 'none';
    
    }
  });
});


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
  <div class="sectiontongglelink">
  <i class="fa-solid fa-caret-right"></i>
    </div>
    
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
    <!-- reposive icon -->
   


    <div class="dept-page-content">
    <!-- our dept section -->
    <section class="our-dept" id="about">
      <div class="section111">
      <div class="text-sec">
        <h1 class="dept-title text-center mb-4" style="margin-top:3% ;color:#104565;">OUR DEPARTMENT</h1>
        <div class="border-line"></div>
        <h4 class="dept-sub-title"> The Department of Computer Science and Engineering aims to produce the engineers with the abilities:</h4>
        <ul class="dept-sub-con">
          <li>Be lifelong learners who continue to pursue professional development.</li>
          <li>Participate and thrive in a multi disciplinary, systems oriented work environment.</li>
          <li>Contribute to the solution of complex technical problems that exist in the software industry.</li>
          <li>Understand their ethical roles as a professional engineer and strive to promote a practice of integrity, tolerance and respect in the work place.</li>
        </ul>
      </div>
      <div class="container custom-card-container">
        <div class="custom-card-wrapper" style="background-image: url('../../img/department/cse/vision.png');">
          <div class="custom-card-overlay"></div>
          <div class="custom-card-content " style="height: 40vh;">
            <h4 class="custom-card-title"><strong>VISION</strong></h4>
            <p class="custom-card-text">To become a leading hub in the field of Computer Engineering.</p>
          </div>
        </div>
<br><br>
        <div class="custom-card-wrapper" style="background-image: url('../../img/department/cse/our-mission.png');">
          <div class="custom-card-overlay"></div>
          <div class=" custom-card-content custom-card-content2 " style="height: 230px;">
            <h4 class="custom-card-title"><strong>MISSION</strong></h4>
            <p style="text-align: left;" class="custom-card-text">
              • To provide a strong theoretical and practical knowledge emphasizing on software developments. </br>
              • To encourage autonomous learning, foster interactions and establish partnership with renowned software industries.</br>
              • To inculcate soft skills, leadership qualities and innovative research skills with ethical values.
            </p>
          </div>
        </div>
      </div>
     
      </div>
    </section>
<!-- PURSUITS section -->

<div class="pursuits-sec">
      <h1 class="section-title text-center mb-4">PURSUITS</h1>
      <div class="border-line" style="margin-bottom:5%;"></div>
      <div id="pursuits" class="carousel slide  vertical" data-ride="carousel" style="padding:20px;margin-left:20px;margin-right:20px;">
        <ol class="carousel-indicators">
          <li data-target="#pursuits" data-slide-to="0" class="active"></li>
          <li data-target="#pursuits" data-slide-to="1"></li>
          <li data-target="#pursuits" data-slide-to="2"></li>
          <li data-target="#pursuits" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('../../img/department/cse/carousel-sec-1.png');">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">OBJECTIVES & OUTCOMES</h2>
              <h4>PEO's, PO's & PSO's</h4>
              <p class="lead">These are the Program Education Objectives(PEO) and Program Outcomes in the Department of Computer Science & Engineering.</p>
              <a role="button" target="_blank" href="../../docs/department/cse/CSE(peo).pdf">Click Here</a>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('../../img/department/cse/carousel-sec-2.png')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">RESEARCH WING</h2>
              <h4>Research Activities</h4>
              <p class="lead">NSCET is focussed on Research & Development (R&D) in Engineering, Technology and Sciences. The various programmes are nurtured through academic research and sponsored research funded by National organizations and Industry.</p>
              <p><a target="_blank" href="../../docs/department/cse/Ph.D.pdf">Ph.D completed/In progess</a></p>
              <p><a target="_blank" href="../../docs/department/cse/STAFF JOURNAL.pdf">Journals</a></p>
              <p><a target="_blank" href="../../docs/department/cse/STAFF CONFERENCE.pdf">Conference</a></p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('../../img/department/cse/carousel-sec-3.png')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">OUR ACCOLADES</h2>
              <h4>Department Activities</h4>
              <p class="lead">The Department of Computer Science & Engineering had organized various Conferences , Symposiums and FDP's most of them volunteered to render services for the benefit of the current students.</p>
              <p><a target="_blank" href="../../docs/department/cse/Department conference orgaised.pdf">Conference organized</a></p>
              <p><a target="_blank" href="../../docs/department/cse/Department Events organisied.pdf">Events organized</a></p>
              <p><a target="_blank" href="https://forms.gle/6mdL6j3yHiAXf5618">iSPIN Assessment - Second</a></p>
              <p><a target="_blank" href="https://forms.gle/M7BuhKgY3onQyeSb6">iSPIN Assessment - Third</a></p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('../../img/department/cse/carousel-sec-4.png')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Our Archives</h2>
              <h4>NewsLetter & Magazines</h4>
              <div class="blog-slider__text"><a target="_blank" href="http://nscet.org/newspage/CSE.html">NEWSLETTER</a></br>
                <a target="_blank" href="http://nscet.org/newspage/CSE.html"> MAGAZINES </a></br>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev up" href="#pursuits" role="button" data-slide="prev">
            <i class="fas fa-chevron-up fa-2x up-icon" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next down" href="#pursuits" role="button" data-slide="next">
            <i class="fas fa-chevron-down fa-2x down-icon" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <!-- hod section -->

    <div id="hod_desk">
      <div class="container">
        <div class="hod-section">
          <h1 class="section-title text-center mb-3 " style="color:#104565;">HEAD OF DEPARTMENT</h1>
          <div class="border-line" style="margin-bottom:5%;"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="hod-image text-center">
                <img src="../../img/department/cse/Mathalairaj.jpg" alt="Mr. J. Mathalai Raj" class="">
                <h5 class="text-uppercase mt-3">Mr. J. Mathalai Raj</h5>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
              <div class="hod-description">
                <p class="text-justify">The Computer Science and Engineering department aims at nurturing a conducive upbringing for erudition and research by using appropriate computing technologies in its everyday activities. The department equips its students with technological expertise and skills in the field of computer science. Students at CSE are nurtured to become the best software professionals or entrepreneurs in their own innovative way. The prime objective of the department endeavors is to produce confident professionals tuned to real-time working environments. The department offers an excellent academic environment with a team of highly qualified faculty members to inspire the students to develop their technical skills and inculcate the spirit of teamwork in them.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FACILITIES section -->

    <div id="facilities " style="margin-bottom: 3%; margin-top:3%;">

      <h1 class="section-title text-center mb-4">FACILITIES</h1>
      <div class="border-line" style="margin-bottom:5%;"></div>

      <div class="container">
        <main class="grid">
          <article>
            <img src="../../img/department/cse/facilities_section/1.jpg" alt="Dennis lab">
            <i class="fa-solid fa-computer"></i>
            <div class="text">
              <h3 class="facility-heading"><strong>Dennis Laboratory</strong></h3>
              <p>Programming Lab which uses C and C++ Languages for Basic Programming.</p>
            </div>
          </article>
          <article>
            <img src="../../img/department/cse/facilities_section/2.jpg" alt="Bachman lab">
            <i class="fa-solid fa-computer-mouse"></i>
            <div class="text">
              <h3 class="facility-heading"><strong>Bachman Laboratory</strong></h3>
              <p>Data Design Lab which uses C,C++,Visual Studio,JAVA,Oracle ,SQL ,Rational Suite for developing and implementing projects..</p>
            </div>
          </article>
          <article>
            <img src="../../img/department/cse/facilities_section/3.jpg" alt="Linus lab">
            <i class="fa-solid fa-network-wired"></i>
            <div class="text">
              <h3 class="facility-heading"><strong>Linus Torvalds Laboratory</strong></h3>
              <p>Open Source Lab which uses C,C++,Android Studio,Eclipse,Maya,OPENGL MC for developing and implementing projects.</p>
            </div>
          </article>
          <article>
            <img src="../../img/department/cse/facilities_section/4.jpg" alt="Computer centre">
            <i class="fa-solid fa-server"></i>
            <div class="text">
              <h3 class="facility-heading"><strong>Computer Centre</strong></h3>
              <p>A Programming Centre which uses C,C++,VB,VC++,Java Languages for Basic Programming.</p>
            </div>
          </article>
          <article>
            <img src="../../img/department/cse/facilities_section/5.jpg" alt="Project lab">
            <i class="fa-solid fa-robot"></i>
            <div class="text">
              <h3 class="facility-heading"><strong>Project Laboratory</strong></h3>
              <p>An Exclusive Project Lab for developing Innovative Projects using Java,SQL,VB,VC++,Net Beans,.NET.</p>
            </div>
          </article>
        </main>
      </div>
    </div>

    <!-- ORGANIZATION section -->
    <div id="organization">
      <h1 class="section-title text-center mb-2">ORGANIZATION</h1>
      <div class="border-line  mt-2" style="margin-bottom:2%;"></div>

      <div class="container org-container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
           
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12">
            
          </div>
        </div>
      </div>

      <div class="org-content">
        <div class="org-con-section ">
          <h1 class="org-con-side-head">&nbsp;Innovative Software Product Industry of NSCET&nbsp;</h1>
<div class="org-con-section1">
          <p class="org-con-paragraph ">iSPIN is a pure IT sector of NSCET with Resourceful students under the guidance of Faculties, Industry Specialists, and the Alumni of NSCET. It will be the First of its kind idea for the incubation cell of NSCET. iSPIN will be responsible for developing the products for NSCET and its clients. The essence of iSPIN is the strategy of Unlearn & Learn based on Self-Learning Strategy.</p>
          <div class="dept-org-link floating-image">
              <a href="https://nscet.org/ispin">
                <img src="../../img/department/cse/ispin_log.png" alt="iSPIN">
                <h1>iSPIN</h1>
              </a>
            </div>
            </div>
          <a data-toggle="modal" data-target="#modal-team" type="button" class="org-con-btn">
            <span>Meet Our Team</span>
          </a>
        </div>
        <div class="org-con-section">
          <h1 class="org-con-side-head">&nbsp;Fraternity of Immortal Software Technocrats</h1>
          <div class="org-con-section1">
          <div class="dept-org-link floating-image">
              <a href="https://nscet.org/associations/fist.html">
                <img src="../../img/department/cse/fist.jpg" alt="FIST">
                <h1>FIST</h1>
              </a>
            </div>
          <p class="org-con-paragraph">Never doubt that a group of talented engineers and developers, who love to involve both themselves and others in every technical and non-technical event led to the growth of our proud “COMPUTER SCIENCE ENGINEERING ASSOCIATION”. Our FIST Association has been successfully running over six years. Every year we conduct events that invoke the technical and creative skills of every single individual and with the constant support of all the students, our association has stepped into the 7th year of excellence. Strengthen our association with your pillars of support and we hope for the best of our association in the future.</p>
        </div>
        </div>
      </div>
    </div>

    

    <!-- OFFICE BEARERS section   -->

    <div id="office_bearers">
      <h1 class="section-title text-center mb-4" style="margin-top:5%;">OFFICE BEARERS</h1>
      <div class="border-line" style="margin-bottom:5%;"></div>

      <div class="container office-bearers-container">
        <section class="d-flex justify-content-center flex-wrap">

          <main class="office_bearers_details">
            <ol class="card__list">
              <li class="card__item">
                <button aria-label="hover image for details" class="card__button">
                  <div class="card__front">
                    <img alt="Jenifer Fathima" class="card__image" src="../../img/department/cse/office_bearers/jenifer fathima.jpg">
                    <h2 class="card__name"><strong>Jenifer Fathima</strong></h2>
                  </div>
                  <div class="card__back">
                    <dl class="card__description">
                      <dt class="card__term">Name</dt>
                      <dd class="card__detail">Jenifer Fathima</dd>
                      <dt class="card__term">Role</dt>
                      <dd class="card__detail">President</dd>
                      <dt class="card__term">Year</dt>
                      <dd class="card__detail">Final Year</dd>
                    </dl>
                  </div>
                </button>
              </li>

              <li class="card__item">
                <button aria-label="hover image for details" class="card__button">
                  <div class="card__front">
                    <img alt="Mukilan" class="card__image" src="../../img/department/cse/office_bearers/MUKILAN S.jpg">
                    <h2 class="card__name"><strong>Mukilan</strong></h2>
                  </div>
                  <div class="card__back">
                    <dl class="card__description">
                      <dt class="card__term">Name</dt>
                      <dd class="card__detail">Mukilan</dd>
                      <dt class="card__term">Role</dt>
                      <dd class="card__detail">Vice president</dd>
                      <dt class="card__term">Year</dt>
                      <dd class="card__detail">Third Year</dd>
                    </dl>
                  </div>
                </button>
              </li>

              <li class="card__item">
                <button aria-label="hover image for details" class="card__button">
                  <div class="card__front">
                    <img alt="Soundharyalakshmi" class="card__image" src="../../img/department/cse/office_bearers/Sowndaryalakshmi.jpg">
                    <h2 class="card__name"><strong>Soundharyalakshmi</strong></h2>
                  </div>
                  <div class="card__back">
                    <dl class="card__description">
                      <dt class="card__term">Name</dt>
                      <dd class="card__detail">Soundharyalakshmi</dd>
                      <dt class="card__term">Role</dt>
                      <dd class="card__detail">Secretary</dd>
                      <dt class="card__term">Year</dt>
                      <dd class="card__detail">Final Year</dd>
                    </dl>
                  </div>
                </button>
              </li>

            </ol>

          </main>

        </section>
      </div>

      <div class="container office-bearers-container second-row-container">
        <section class="d-flex justify-content-center flex-wrap">

          <main class="office_bearers_details">
            <ol class="card__list">
              <li class="card__item">
                <button aria-label="hover image for details" class="card__button">
                  <div class="card__front">
                    <img alt="Gowsalya" class="card__image" src="../../img/department/cse/office_bearers/GOWSALYA N.jpg">
                    <h2 class="card__name"><strong>Gowsalya</strong></h2>
                  </div>
                  <div class="card__back">
                    <dl class="card__description">
                      <dt class="card__term">Name</dt>
                      <dd class="card__detail">Gowsalya</dd>
                      <dt class="card__term">Role</dt>
                      <dd class="card__detail">Join Secretary</dd>
                      <dt class="card__term">Year</dt>
                      <dd class="card__detail">Third Year</dd>
                    </dl>
                  </div>
                </button>
              </li>

              <li class="card__item">
                <button aria-label="hover image for details" class="card__button">
                  <div class="card__front">
                    <img alt="Sachidhanandhan" class="card__image" src="../../img/department/cse/office_bearers/SACHITHANANDAN S.jpg">
                    <h2 class="card__name"><strong>Sachidhanandhan</strong></h2>
                  </div>
                  <div class="card__back">
                    <dl class="card__description">
                      <dt class="card__term">Name</dt>
                      <dd class="card__detail">Sachidhanandhan</dd>
                      <dt class="card__term">Role</dt>
                      <dd class="card__detail">Join Secretary</dd>
                      <dt class="card__term">Year</dt>
                      <dd class="card__detail">Second Year</dd>
                    </dl>
                  </div>
                </button>
              </li>
            </ol>
          </main>
        </section>
      </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="modal-team">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">MEMBERS OF iSPIN</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <table class="table" style="border-collapse: collapse;">
              <thead>
                <tr>
                  <th scope="col">S.No</th>
                  <th scope="col">NAME</th>
                  <th scope="col">YEAR</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>K.MADHAVAN</td>
                  <td>Final yr</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>S.REVENTH RAMESH</td>
                  <td>Final yr</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>K.PRIYANKA</td>
                  <td>Final yr</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>H.JENIFAR FATHIMA</td>
                  <td>Final yr</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>S.DHARSHINI</td>
                  <td>Final yr</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>C.KABITHA</td>
                  <td>Final yr</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>S.MUKILAN</td>
                  <td>Third</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>BHUVANALAKSHMI</td>
                  <td>Third</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>MAMITHA</td>
                  <td>Third</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>TENSHKUMAR K</td>
                  <td>Third</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>REESHMA MASUTHA</td>
                  <td>Third</td>
                </tr>

              </tbody>
            </table>
          </div>
          <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button></div>
        </div>
      </div>
    </div>

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

      const hodDesk = document.getElementById('hod_desk');

      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            hodDesk.style.opacity = 1;
            hodDesk.style.transform = 'translateY(0)';
          } else {
            hodDesk.style.opacity = 0;
            hodDesk.style.transform = 'translateY(20px)';
          }
        })
      }, {
        threshold: 0.5
      })

      observer.observe(hodDesk)

      function handleMouseMove(event) {
        var carousel = document.getElementById("pursuits");
        var mouseYPercent = (event.clientY / window.innerHeight) * 100;
        var scrollAmount = (mouseYPercent - 50) * 0.2;
        carousel.style.transform = "translateY(" + scrollAmount + "vh)";
      }
    })
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

</body>

</html>