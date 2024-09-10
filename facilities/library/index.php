
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Library</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="../../assets/img/favicon.ico" rel="shortcut icon" />

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="../../assets/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../../assets/css/themify-icons.css" />
  <link rel="stylesheet" href="../../assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="../../assets/css/animate.css" />
  <link rel="stylesheet" href="../../assets/css/owl.carousel.css" />
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="stylesheet" href="../../assets/css/library.css " />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  


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

<script>
    document.addEventListener("DOMContentLoaded", function() {
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();

          document.querySelector(this.getAttribute('href')).s
          crollIntoView({
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


<?php require_once("../../resources/header.php") ?>

<div class="header_lib">
  <h1 class="h1"> NSCET - LIBRARY</h1>
</div>
<div class="container mt-5">

</div>

<div  class="row justify-content-center">
    <div class="col-md-5 content-container">
      <h2 class="h2">About NSCET Library</h2>
      <p class="para">The Library, in today’s context, is a modern Learning Resource Centre with a dynamic learning space where students undertake a journey of knowledge acquisition and intellectual enrichment. Our Library is a well-equipped Learning Resource Centre. We have a strong collection of about 20433 books and 120 Indian and foreign journals. The NSCET library is a storehouse of knowledge and it comprises books, journals, e-resources, other learning materials, and technology-aided learning mechanisms which enable students to acquire information, knowledge, and skills required for their study programmes.</p>
    </div>

    <div class="col-md-5 image-container">
      <div id="libraryCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner slides">
          <div class="carousel-item active slide">
            <img src="../../assets/img/library-img/1.jpeg" alt="Library Image 1">
          </div>
          <div class="carousel-item slide">
            <img src="../../assets/img/library-img/2.jpeg" alt="Library Image 2">
          </div>
          <div class="carousel-item slide">
            <img src="../../assets/img/library-img/3.jpeg" alt="Library Image 3">
          </div>
          <div class="carousel-item slide">
            <img src="../../assets/img/library-img/4.jpeg" alt="Library Image 5">
          </div>

          <div class="carousel-item slide"> 
            <img src="../../assets/img/library-img/5.jpeg" alt="Library Image 5">
          </div>

        </div>
     
      </div>
    </div>
  </div>
</div>

 
<div style="padding-top: 70px;" class="row justify-content-center mt-4">
    <div class="col-md-5 content-container">

    <div id="libraryCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner slides">
          <div class="carousel-item active slide">
            <img src="../../assets/img/library-img/1.jpeg" alt="Library Image 1">
          </div>
          <div class="carousel-item slide">
            <img src="../../assets/img/library-img/2.jpeg" alt="Library Image 2">
          </div>
          <div class="carousel-item slide">
            <img src="../../assets/img/library-img/3.jpeg" alt="Library Image 3">
          </div>
          <div class="carousel-item slide">
            <img src="../../assets/img/library-img/4.jpeg" alt="Library Image 5">
          </div>

          <div class="carousel-item slide">
            <img src="../../assets/img/library-img/5.jpeg" alt="Library Image 5">
          </div>

        </div>
     
      </div>
  </div>

    <div class="col-md-5 image-container">
    <h2 class="h2">About NSCET  E-Library</h2>
      <p class="para">The Library, in today’s context, is a modern Learning Resource Centre with a dynamic learning space where students undertake a journey of knowledge acquisition and intellectual enrichment. Our Library is a well-equipped Learning Resource Centre. We have a strong collection of about 20433 books and 120 Indian and foreign journals. The NSCET library is a storehouse of knowledge and it comprises books, journals, e-resources, other learning materials, and technology-aided learning mechanisms which enable students to acquire information, knowledge, and skills required for their study programmes.</p>
  
    </div>
  </div>
</div>



  <div class="container mt-5">
    <div class="text-center collections">
      <h3>Library Collections</h3>
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="20433">0</div>
          <div class="small-text">Books</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="120">0</div>
          <div class="small-text">Journals</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="27">0</div>
          <div class="small-text">E-Resources</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="556">0</div>
          <div class="small-text">Reference Books</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="1181">0</div>
          <div class="small-text">Competitive Exam Books</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="4551">0</div>
          <div class="small-text">Non-Book Materials</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="6">0</div>
          <div class="small-text">News Papers</div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box">
          <div class="big-number" data-target="52">0</div>
          <div class="small-text">Magazines</div>
        </div>
      </div>
    </div>
  </div>
  <div class="info-sections">
    <div class="objectives">
      <h2>OBJECTIVES</h2>
      <ul>
        <li>To acquire, organize and update the library collection to support the teaching learning process.</li>
        <li>To encourage students to read beyond the requirements of the curriculum.</li>
        <li>To work with faculty in integrating information skills, knowledge of information resources and the use of technology in accessing information need for learning and teaching.</li>
        <li>Providing students centered learning environment that meet the informational, educational and recreational need of the students.</li>
        <li>Develop and implement services, resources and technologies that enhance teaching, learning and research.</li>
      </ul>
    </div>

    

    <div class="facilities">
      <h2>FACILITIES</h2>
      <ul>
        <li>Open Access System</li>
        <li>Online Public Access Catalogue</li>
        <li>Well-Stocked Reference Section</li>
        <li>Separate Study Space for Staff and Students</li>
        <li>Well-Equipped Reading Hall</li>
        <li>Free Internet Access to Students and Faculty</li>
        <li>Access to NPTEL Video Lectures</li>
        <li>Access to Online Journals and E-Books</li>
        <li>Photocopying and Printing Services</li>
        <li>Reprographic Services</li>
      </ul>
    </div>

    <div class="ndli">
      <h2>NATIONAL DIGITAL LIBRARY OF INDIA CLUB ACTIVITIES</h2>
      <ul>
        <li>Awareness Programme on National Digital Library of India was held on 30.09.2021</li>
        <li>Film Screening Competition was held on 17.02.2022.</li>
        <li>Book Review Competition was held on 29.11.2021</li>
        <li>Quiz competition was held on 16.12.2021</li>
      </ul>
    </div>


    <div class="rules_and_regulation">
      <h2>RULES AND REGULATIONS</h2>
      <ul>
        <li>Every student must possess his/her Library Card while making use of the Library facility and produce the same to the Library Staff on entering the Library.</li>
        <li>Strict discipline must be maintained in the Library. Indiscipline may lead to disciplinary action and the withdrawal of library facility.</li>
        <li>Reference material should not be taken outside the Library.</li>
        <li>Using Mobile phones and audio instruments with or without speaker or headphone is strictly prohibited in the library premises.</li>
        <li>Enter your name and Sign in the register kept at the entrance counter before entering library.</li>
        <li>Books removed from the shelves, if not required further, should be kept on the book trolley or on the table nearest to them. Please do not try to shelve them yourself. Please remember that a book misplaced is a book lost.</li>
        <li>The newspaper(s) should be folded properly after reading and kept back in the designated place.</li>
        <li>Refreshment of any kind shall not be taken anywhere in the library premises.</li>
        <li>The librarian may recall any book from any member at any time and the member shall return the same immediately.</li>
        <li>No Due Certificate will be issued only on the return of all the books and surrendering the borrower’s cards.</li>
      </ul>
    </div>


  </div>


  <div class="container mt-5 librarian-section">
    <div class="row align-items-center">
        <div class="col-md-5 text-center">
            <div class="librarian-container">
                <img src="../../assets/img/library-img/Sinthan.jpg" alt="Dr. Sinthan" class="librarian-img">
                <div class="name mt-3">
                    Dr. Sinthan<br>
                    <span class="librarian-title">Librarian</span>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="librarian-description text-center text-md-left">
                <blockquote class="quote">
                    "OUR LIBRARY VOWS TO SHAPE YOU<br>
                    FOR AN ENLIVENED PRESENT<br>
                    AND ENLIGHTENED FUTURE TOO"
                </blockquote>
            </div>
        </div>
    </div>
</div>


<div class="row">

<h3 class="library-gallery-header">LIBRARY GALLERY</h3>


<div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a href="../../assets/img/library-img/1.jpeg" class="fancybox" rel="ligthbox">
        <img src="../../assets/img/library-img/1.jpeg" class="zoom img-fluid" alt="">
    </a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a href="../../assets/img/library-img/2.jpeg" class="fancybox" rel="ligthbox">
        <img src="../../assets/img/library-img/2.jpeg" class="zoom img-fluid" alt="">
    </a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a href="../../assets/img/library-img/3.jpeg" class="fancybox" rel="ligthbox">
        <img src="../../assets/img/library-img/3.jpeg" class="zoom img-fluid" alt="">
    </a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a href="../../assets/img/library-img/4.jpeg" class="fancybox" rel="ligthbox">
        <img src="../../assets/img/library-img/4.jpeg" class="zoom img-fluid" alt="">
    </a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a href="../../assets/img/library-img/5.jpeg" class="fancybox" rel="ligthbox">
        <img src="../../assets/img/library-img/5.jpeg" class="zoom img-fluid" alt="">
    </a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a href="../../assets/img/library-img/6.jpeg" class="fancybox" rel="ligthbox">
        <img src="../../assets/img/library-img/6.jpeg" class="zoom img-fluid" alt="">
    </a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a href="../../assets/img/library-img/7.jpeg" class="fancybox" rel="ligthbox">
        <img src="../../assets/img/library-img/7.jpeg" class="zoom img-fluid" alt="">
    </a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a href="../../assets/img/library-img/back lib.jpeg" class="fancybox" rel="ligthbox">
        <img src="../../assets/img/library-img/back lib.jpeg " class="zoom img-fluid" alt="">
    </a>
</div>

    
   
   
</div>




</div>



<script>
  $(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
    
document.addEventListener('DOMContentLoaded', () => {
      const boxes = document.querySelectorAll('.box .big-number');
      boxes.forEach(box => {
        const target = +box.getAttribute('data-target');
        const updateCount = () => {
          const count = +box.innerText;
          const speed = 200;
          const increment = target / speed;
          if (count < target) {
            box.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 10);
          } else {
            box.innerText = target;
          }
        };
        updateCount();
      });
    });

let currentGallerySlide = 0;

function showGallerySlide(index) {
    const slides = document.querySelector('.gallery-slides');
    const totalSlides = document.querySelectorAll('.gallery-slide').length;
    if (index >= totalSlides) {
        currentGallerySlide = 0;
    } else if (index < 0) {
        currentGallerySlide = totalSlides - 1;
    } else {
        currentGallerySlide = index;
    }
    slides.style.transform = `translateX(-${currentGallerySlide * 100}%)`;
}

function changeSlide(direction) {
    showGallerySlide(currentGallerySlide + direction);
}


setInterval(() => {
    changeSlide(1);
}, 5000);
</script>

<?php require_once("../../resources/footer.php") ?>


<script src="../../assets/js/jquery-3.2.1.min.js"></script>
  <script src="../../assets/js/owl.carousel.min.js"></script>
  <script src="../../assets/js/jquery.countdown.js"></script>
  <script src="../../assets/js/masonry.pkgd.min.js"></script>
  <script src="../../assets/js/magnific-popup.min.js"></script>
  <script src="../../assets/js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {1
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
