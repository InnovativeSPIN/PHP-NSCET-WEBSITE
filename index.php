<?php require_once("./resources/connection.php")?>

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

  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/style.css" />
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
  <?php require_once("./resources/model.php")?>

  <div id="fixed-social" style="z-index: 10">
    <div>
      <a href="#" class="fixed-facebook" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
    </div>
    <div>
      <a href="#" class="fixed-twitter" target="_blank"><i class="fa fa-linkedin"></i> <span>Twitter</span></a>
    </div>
    <div>
      <a href="#" class="fixed-gplus" target="_blank"><i class="fa fa-youtube"></i> <span>Google+</span></a>
    </div>
    <div>
      <a href="#" class="fixed-gplus" target="_blank"><i class="fa fa-instagram"></i> <span>Instagram+</span></a>
    </div>
  </div>
  <div id="preloder">
    <div class="loader"></div>
  </div>
  <div class="nav-switch" style="z-index: 100">
    <i class="fa fa-bars"></i>
  </div>
  <!-- <header class="header-section">
      <div class="container">
        
        
        <div class="header-info">
          <div class="hf-item">
            <i class="fa fa-clock-o"></i>
            <p><span>Working time:</span>Monday - Friday: 08 AM - 06 PM</p>
          </div>
          <div class="hf-item">
            <i class="fa fa-map-marker"></i>
            <p><span>Find us:</span>40 Baria Street 133/2, New York City, US</p>
          </div>
        </div>
      </div>
    </header> -->

  <?php require_once("./resources/header.php")?>
  <section>
    <?php
    $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='marquee'"));
    $jsonData = json_decode($data['content'], true);
    ?>
    <div class="marquee" data-marquee-duration="20">
      <div class="marquee__inner">
        <div class="marquee__content">
          <?php echo $jsonData['content']?>
        </div>
      </div>
    </div>
  </section>
  <section class="hero-section">
    <div class="hero-slider owl-carousel">
      <?php 
        $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='heroSection'"));
        $jsonData = json_decode($data['content'], true);
        foreach($jsonData as $data) {
      ?>
      <div class="hs-item set-bg" data-setbg="https://nscet.org/Home_Assets/img/dummy1/image.jpg">
        <div class="hs-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="hs-subtitle"><?php echo $data['subHeading']?></div>
                <h2 class="hs-title">
                  <?php echo $data['heading']?>
                </h2>
                <p class="hs-des">
                  <?php echo $data['paragraph']?>
                </p>
                <div class="site-btn"><?php echo $data['btn']?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
      }
      ?>
      <!-- <div class="hs-item set-bg" data-setbg="https://nscet.org/Home_Assets/img/dummy1/image.jpg">
        <div class="hs-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="hs-subtitle">Award Winning UNIVERSITY</div>
                <h2 class="hs-title">
                  An investment in knowledge pays the best interest.
                </h2>
                <p class="hs-des">
                  Education is not just about going to school and getting a
                  degree. It's about widening your<br />
                  knowledge and absorbing the truth about life. Knowledge is
                  power.
                </p>
                <div class="site-btn">GET STARTED</div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </section>
  <section class="counter-section">
  <?php 
        $data = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='timerSection'"));
        $jsonData = json_decode($data['content'], true);
        foreach($jsonData as $data) {
      ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-6">
          <div class="big-icon">
            <i class="fa fa-graduation-cap"></i>
          </div>
          <div class="counter-content">
            <h2><?php echo $data['title']?></h2>
            <p><i class="fa fa-calendar-o"></i><?php echo $data['time']?></p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="counter">
            <div class="counter-item">
              <h4>0</h4>
              Days
            </div>
            <div class="counter-item">
              <h4>0</h4>
              Hrs
            </div>
            <div class="counter-item">
              <h4>0</h4>
              Mins
            </div>
            <div class="counter-item">
              <h4>0</h4>
              secs
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
      }
      ?>
  </section>
  <div class="news-updates">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="section-heading">
            <h2 class="text-black">News &amp; Updates</h2>
            <a href="#">Read All News</a>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="post-entry-big">
                <a href="news-single.html" class="img-link"><img src="https://picsum.photos/400/250" alt="Image"
                    class="img-fluid" /></a>
                <div class="post-content">
                  <div class="post-meta">
                    <a href="#">June 6, 2019</a>
                    <span class="mx-1">/</span>
                    <a href="#">Admission</a>, <a href="#">Updates</a>
                  </div>
                  <h3 class="post-heading">
                    <a href="news-single.html">Campus Camping and Learning Session</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="post-entry-big horizontal d-flex mb-4" style="display: flex">
                <a href="news-single.html" class="img-link mr-4"><img src="https://picsum.photos/82/82" alt="Image"
                    class="img-fluid" /></a>
                <div class="post-content">
                  <div class="post-meta">
                    <a href="#">June 6, 2019</a>
                    <span class="mx-1">/</span>
                    <a href="#">Admission</a>, <a href="#">Updates</a>
                  </div>
                  <h3 class="post-heading">
                    <a href="news-single.html">Campus Camping and Learning Session</a>
                  </h3>
                </div>
              </div>
              <div class="post-entry-big horizontal d-flex mb-4" style="display: flex">
                <a href="news-single.html" class="img-link mr-4"><img src="https://picsum.photos/82/82" alt="Image"
                    class="img-fluid" /></a>
                <div class="post-content">
                  <div class="post-meta">
                    <a href="#">June 6, 2019</a>
                    <span class="mx-1">/</span>
                    <a href="#">Admission</a>, <a href="#">Updates</a>
                  </div>
                  <h3 class="post-heading">
                    <a href="news-single.html">Campus Camping and Learning Session</a>
                  </h3>
                </div>
              </div>
              <div class="post-entry-big horizontal d-flex mb-4" style="display: flex">
                <a href="news-single.html" class="img-link mr-4"><img src="https://picsum.photos/82/82" alt="Image"
                    class="img-fluid" /></a>
                <div class="post-content">
                  <div class="post-meta">
                    <a href="#">June 6, 2019</a>
                    <span class="mx-1">/</span>
                    <a href="#">Admission</a>, <a href="#">Updates</a>
                  </div>
                  <h3 class="post-heading">
                    <a href="news-single.html">Campus Camping and Learning Session</a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="section-heading">
            <h2 class="text-black">Campus Videos</h2>
            <a href="#">View All Videos</a>
          </div>
          <a href="https://youtu.be/EngW7tLk6R8?si=i8tOs0WFo7qPdkZE" class="video-1 mb-4" data-fancybox data-ratio="2">
            <span class="play">
              <span class="icon-play"></span>
            </span>
            <img src="https://i.blogs.es/9b19ad/youtube/450_1000.webp" alt="Image" class="img-fluid" />
          </a>
          <a href="https://youtu.be/EngW7tLk6R8?si=i8tOs0WFo7qPdkZE" class="video-1 mb-4" data-fancybox data-ratio="2">
            <span class="play">
              <span class="icon-play"></span>
            </span>
            <img src="https://i.blogs.es/9b19ad/youtube/450_1000.webp" alt="Image" class="img-fluid" />
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="marquee">
    <div class="marquee-content">
      <div class="marquee-item">
        <img src="https://picsum.photos/280/256" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=1" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=03" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=1" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=1" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=06" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=07" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=09" alt="" />
      </div>
      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=01" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=02" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=03" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=04" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=05" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=06" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=07" alt="" />
      </div>

      <div class="marquee-item">
        <img src="https://picsum.photos/380/480?random=08" alt="" />
      </div>
    </div>
  </div>

  <div class="section-bg style-1" style="
        color: white;
        margin-top: 32px;
        background-image: url('https://nscet.org/Home_Assets/img/dummy/about-us.jpg');
      ">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h2 class="section-title-underline style-2">
            <span>Principal Desk</span>
            <img style="margin-top: 24px" src="https://picsum.photos/280/256" alt="" />
          </h2>
        </div>
        <div class="col-lg-8" style="align-self: center;margin-top: 24px;">
          <p class="lead">
            As a 21st century organization, NSCET desires to set an approach
            to learning that incorporates inquiry, research, analytical
            thinking and an ethical approach that becomes a lifetime habit. I
            strongly believe that education is a collaborative effort that
            involves professional administrators, committed teachers and
            motivated students. We dedicate ourselves as professional
            administrators in creating a dynamic education programme
            empowering the students in a global perspective. We are a group of
            diverse experiences and outlooks, committed to excellence in
            preparing learners for enriched opportunities worldwide. In short,
            learning at NSCET is a wholesome package of attitude, challenge
            and opportunity.
          </p>
          <p style="text-align: right;">Dr.C.Mathalai Sundaram M.E.,MBA.,Ph.D., Principal, NSCET</p>
        </div>
      </div>
    </div>
  </div>

  <!-- <section class="service-section spad">
      <div class="container services">
        <div class="section-title text-center">
          <h3>OUR SERVICES</h3>
          <p>We provides the opportunity to prepare for life</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 service-item">
            <div class="service-icon">
              <img src="https://picsum.photos/280/256" alt="1" />
            </div>
            <div class="service-content">
              <h4>Art Studio</h4>
              <p>
                Lorem ipsum dolor sitdo amet, consectetur dont adipis elit.
                Vivamus interdum ultrices augue. Aenean dos cursus lania.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 service-item">
            <div class="service-icon">
              <img src="https://picsum.photos/280/256" alt="1" />
            </div>
            <div class="service-content">
              <h4>Great Facility</h4>
              <p>
                Lorem ipsum dolor sitdo amet, consectetur dont adipis elit.
                Vivamus interdum ultrices augue. Aenean dos cursus lania.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 service-item">
            <div class="service-icon">
              <img src="https://picsum.photos/280/256" alt="1" />
            </div>
            <div class="service-content">
              <h4>Activity Hub</h4>
              <p>
                Lorem ipsum dolor sitdo amet, consectetur dont adipis elit.
                Vivamus interdum ultrices augue. Aenean dos cursus lania.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 service-item">
            <div class="service-icon">
              <img src="https://picsum.photos/280/256" alt="1" />
            </div>
            <div class="service-content">
              <h4>Fully Qualified</h4>
              <p>
                Lorem ipsum dolor sitdo amet, consectetur dont adipis elit.
                Vivamus interdum ultrices augue. Aenean dos cursus lania.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 service-item">
            <div class="service-icon">
              <img src="https://picsum.photos/280/256" alt="1" />
            </div>
            <div class="service-content">
              <h4>Flexible Schedule</h4>
              <p>
                Lorem ipsum dolor sitdo amet, consectetur dont adipis elit.
                Vivamus interdum ultrices augue. Aenean dos cursus lania.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 service-item">
            <div class="service-icon">
              <img src="https://picsum.photos/280/256" alt="1" />
            </div>
            <div class="service-content">
              <h4>Chemistry Lab</h4>
              <p>
                Lorem ipsum dolor sitdo amet, consectetur dont adipis elit.
                Vivamus interdum ultrices augue. Aenean dos cursus lania.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <!-- <section class="enroll-section spad set-bg" data-setbg="img/enroll-bg.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="section-title text-white">
              <h3>ENROLLMENT</h3>
              <p>Get started with us to explore the exciting</p>
            </div>
            <div class="enroll-list text-white">
              <div class="enroll-list-item">
                <span>1</span>
                <h5>Contact</h5>
                <p>
                  Lorem ipsum dolor sitdo amet, consectetur dont adipis elit.
                  Vivamus interdum ultrices augue.
                </p>
              </div>
              <div class="enroll-list-item">
                <span>2</span>
                <h5>Consulting</h5>
                <p>
                  Lorem ipsum dolor sitdo amet, consectetur dont adipis elit.
                  Vivamus interdum ultrices augue.
                </p>
              </div>
              <div class="enroll-list-item">
                <span>3</span>
                <h5>Register</h5>
                <p>
                  Lorem ipsum dolor sitdo amet, consectetur dont adipis elit.
                  Vivamus interdum ultrices augue.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
            <img src="https://picsum.photos/280/256" alt />
          </div>
        </div>
      </div>
    </section> -->

  <section class="courses-section spad">
    <div class="container course-div">
      <div class="section-title text-center">
        <h3>UG COURSES</h3>
        <p>Building a better world, one course at a time</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 course-item">
          <div class="course-thumb">
            <img src="https://picsum.photos/280/256" alt />
            <div class="course-cat">
              <span>BUSINESS</span>
            </div>
          </div>
          <div class="course-info">
            <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
            <h4>Certificate Course in Writing<br />for a Global Market</h4>
            <h4 class="cource-price">$100<span>/month</span></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 course-item">
          <div class="course-thumb">
            <img src="https://picsum.photos/280/256" alt />
            <div class="course-cat">
              <span>Marketing</span>
            </div>
          </div>
          <div class="course-info">
            <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
            <h4>
              Google AdWords: Get More<br />
              Customers with Search Marketing
            </h4>
            <h4 class="cource-price">$150<span>/month</span></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 course-item">
          <div class="course-thumb">
            <img src="https://picsum.photos/280/256" alt />
            <div class="course-cat">
              <span>DESIGN</span>
            </div>
          </div>
          <div class="course-info">
            <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
            <h4>
              The Ultimate Drawing Course<br />
              Beginner to Advanced
            </h4>
            <h4 class="cource-price">$180<span>/month</span></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 course-item">
          <div class="course-thumb">
            <img src="https://picsum.photos/280/256" alt />
            <div class="course-cat">
              <span>DATABASE</span>
            </div>
          </div>
          <div class="course-info">
            <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
            <h4>Ultimate MySQL Bootcamp: Go from SQL Beginner to Expert</h4>
            <h4 class="cource-price">$150<span>/month</span></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 course-item">
          <div class="course-thumb">
            <img src="https://picsum.photos/280/256" alt />
            <div class="course-cat">
              <span>PROGRAM</span>
            </div>
          </div>
          <div class="course-info">
            <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
            <h4>Web Developer Bootcamp<br />Make web applications</h4>
            <h4 class="cource-price">$250<span>/month</span></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 course-item">
          <div class="course-thumb">
            <img src="https://picsum.photos/280/256" alt />
            <div class="course-cat">
              <span>BUSINESS</span>
            </div>
          </div>
          <div class="course-info">
            <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
            <h4>How to Start an Amazon<br />FBA Store on a Tight Budget</h4>
            <h4 class="cource-price">$150<span>/month</span></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 course-item">
          <div class="course-thumb">
            <img src="https://picsum.photos/280/256" alt />
            <div class="course-cat">
              <span>BUSINESS</span>
            </div>
          </div>
          <div class="course-info">
            <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
            <h4>How to Start an Amazon<br />FBA Store on a Tight Budget</h4>
            <h4 class="cource-price">$150<span>/month</span></h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="courses-section spad">
    <div class="container course-div">
      <div class="section-title text-center">
        <h3>PG COURSES</h3>
        <p>Building a better world, one course at a time</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 course-item">
          <div class="course-thumb">
            <img src="https://picsum.photos/280/256" alt />
            <div class="course-cat">
              <span>BUSINESS</span>
            </div>
          </div>
          <div class="course-info">
            <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
            <h4>Certificate Course in Writing<br />for a Global Market</h4>
            <h4 class="cource-price">$100<span>/month</span></h4>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 course-item">
          <div class="course-thumb">
            <img src="https://picsum.photos/280/256" alt />
            <div class="course-cat">
              <span>Marketing</span>
            </div>
          </div>
          <div class="course-info">
            <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
            <h4>
              Google AdWords: Get More<br />
              Customers with Search Marketing
            </h4>
            <h4 class="cource-price">$150<span>/month</span></h4>
          </div>
        </div>


      </div>
    </div>
  </section>

  <section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 fact">
          <div class="fact-icon">
            <i class="ti-crown"></i>
          </div>
          <div class="fact-text">
            <h2>50</h2>
            <p>YEARS</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 fact">
          <div class="fact-icon">
            <i class="ti-briefcase"></i>
          </div>
          <div class="fact-text">
            <h2>80</h2>
            <p>TEACHERS</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 fact">
          <div class="fact-icon">
            <i class="ti-user"></i>
          </div>
          <div class="fact-text">
            <h2>500</h2>
            <p>STUDENTS</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 fact">
          <div class="fact-icon">
            <i class="ti-pencil-alt"></i>
          </div>
          <div class="fact-text">
            <h2>800+</h2>
            <p>LESSONS</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="event-section spad">
    <div class="container">
      <div class="section-title text-center">
        <h3>Our Top Recruiters</h3>
        <p>Our department initiated a series of events</p>
      </div>
      <div class="marquee">
        <div class="marquee-content">
          <div class="marquee-item">
            <img src="https://picsum.photos/280/256" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=1" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=03" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=1" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=1" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=06" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=07" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=09" alt="" />
          </div>
          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=01" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=02" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=03" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=04" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=05" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=06" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=07" alt="" />
          </div>

          <div class="marquee-item">
            <img src="https://picsum.photos/380/480?random=08" alt="" />
          </div>
        </div>
      </div>
  </section>

  <div class="gallery-section">
    <div class="gallery">
      <div class="grid-sizer"></div>
      <div class="gallery-item gi-big set-bg" data-setbg="https://picsum.photos/280/256">
        <a class="img-popup" href="img/gallery/1.jpg"><i class="ti-plus"></i></a>
      </div>
      <div class="gallery-item set-bg" data-setbg="https://picsum.photos/280/256">
        <a class="img-popup" href="img/gallery/2.jpg"><i class="ti-plus"></i></a>
      </div>
      <div class="gallery-item set-bg" data-setbg="https://picsum.photos/280/256">
        <a class="img-popup" href="img/gallery/3.jpg"><i class="ti-plus"></i></a>
      </div>
      <div class="gallery-item gi-long set-bg" data-setbg="https://picsum.photos/280/256">
        <a class="img-popup" href="img/gallery/5.jpg"><i class="ti-plus"></i></a>
      </div>
      <div class="gallery-item gi-big set-bg" data-setbg="https://picsum.photos/280/256">
        <a class="img-popup" href="img/gallery/8.jpg"><i class="ti-plus"></i></a>
      </div>
      <div class="gallery-item gi-long set-bg" data-setbg="https://picsum.photos/280/256">
        <a class="img-popup" href="img/gallery/4.jpg"><i class="ti-plus"></i></a>
      </div>
      <div class="gallery-item set-bg" data-setbg="https://picsum.photos/280/256">
        <a class="img-popup" href="img/gallery/6.jpg"><i class="ti-plus"></i></a>
      </div>
      <div class="gallery-item set-bg" data-setbg="https://picsum.photos/280/256">
        <a class="img-popup" href="img/gallery/7.jpg"><i class="ti-plus"></i></a>
      </div>
    </div>
  </div>

  <section class="blog-section spad">
    <div class="container">
      <div class="section-title text-center">
        <h3>LATEST NEWS</h3>
        <p>Get latest breaking news & top stories today</p>
      </div>
      <div class="row">
        <div class="col-xl-6">
          <div class="blog-item">
            <div class="blog-thumb set-bg" data-setbg="https://picsum.photos/280/256"></div>
            <div class="blog-content">
              <h4>Parents who try to be their children’s best friends</h4>
              <div class="blog-meta">
                <span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
                <span><i class="fa fa-user"></i> Owen Wilson</span>
              </div>
              <p>
                Integer luctus diam ac scerisque consectetur. Vimus dot
                euismod neganeco lacus sit amet. Aenean interdus mid vitae sed
                accumsan...
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="blog-item">
            <div class="blog-thumb set-bg" data-setbg="https://picsum.photos/280/256"></div>
            <div class="blog-content">
              <h4>Graduations could be delayed as external examiners</h4>
              <div class="blog-meta">
                <span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
                <span><i class="fa fa-user"></i> Owen Wilson</span>
              </div>
              <p>
                Integer luctus diam ac scerisque consectetur. Vimus dot
                euismod neganeco lacus sit amet. Aenean interdus mid vitae sed
                accumsan...
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="blog-item">
            <div class="blog-thumb set-bg" data-setbg="https://picsum.photos/280/256"></div>
            <div class="blog-content">
              <h4>Private schools adopt a Ucas style application system</h4>
              <div class="blog-meta">
                <span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
                <span><i class="fa fa-user"></i> Owen Wilson</span>
              </div>
              <p>
                Integer luctus diam ac scerisque consectetur. Vimus dot
                euismod neganeco lacus sit amet. Aenean interdus mid vitae sed
                accumsan...
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="blog-item">
            <div class="blog-thumb set-bg" data-setbg="https://picsum.photos/280/256"></div>
            <div class="blog-content">
              <h4>Cambridge digs in at the top of university league table</h4>
              <div class="blog-meta">
                <span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
                <span><i class="fa fa-user"></i> Owen Wilson</span>
              </div>
              <p>
                Integer luctus diam ac scerisque consectetur. Vimus dot
                euismod neganeco lacus sit amet. Aenean interdus mid vitae sed
                accumsan...
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="newsletter-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-lg-7">
          <div class="section-title mb-md-0">
            <h3>NEWSLETTER</h3>
            <p>
              Subscribe and get the latest news and useful tips, advice and
              best offer.
            </p>
          </div>
        </div>
        <div class="col-md-7 col-lg-5">
          <form class="newsletter">
            <input type="text" placeholder="Enter your email" />
            <button class="site-btn">SUBSCRIBE</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php require_once("./resources/footer.php")?>

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

  <script src="./js/marquee.js"></script>
  <script src="./js/popup.js"></script>
</body>

</html>