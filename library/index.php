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

  <link rel="stylesheet" href="/css/font-awesome.min.css" />
  <link rel="stylesheet" href="/css/themify-icons.css" />
  <link rel="stylesheet" href="/css/magnific-popup.css" />
  <link rel="stylesheet" href="/css/animate.css" />
  <link rel="stylesheet" href="/css/owl.carousel.css" />
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="style.css">

  <style>


@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

body {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #f4f4f4;
    height: 100vh;
    overflow-y: scroll; 
}

.header_lib {
    text-align: center;
    margin-top: 50px;
    color: #00008B;
}

.header_lib .h1 {
    font-size: 28px;
    font-weight: bold;
}

.content-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-top: 40px;
    flex-wrap: wrap;
}

.container, .image-container {
    background-color: white;
    width: 420px;
    height: 500px; 
    border-radius: 2px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
    padding: 20px;
    margin: 10px;
    box-sizing: border-box; 
}

.container .h3 {
    font-size: 22px;
    text-align: center;
    margin-top: 0;
}

.content {
    margin-top: 20px;
    font-size: 18px;
    line-height: 1.6;
    text-align: justify;
    font-weight: 300;
}

.image-container {
    position: relative;
    overflow: hidden;
    padding: 0; 
}

.slides {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 100%; 
    height: 100%; 
}

.slide {
    min-width: 100%;
    height: 100%;
    box-sizing: border-box; 
    padding: 0; 
}

.slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 2px;
}

.collections {
    text-align: center;
    font-size: 44px;
    margin-top: 40px;
    color: #00008B;
}

.collections:hover {
    color: orange; 
}

.box-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 40px;
}

.box {
    background-color: white;
    width: 250px;
    height: 100px;
    border-radius: 2px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
    padding: 20px;
    margin: 10px;
    box-sizing: border-box;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius:2px;
}

.big-number {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 5px;
}

.small-text {
    font-size: 14px;
}

.objectives, .facilities-container {
    
    margin-top: 40px;
    margin-bottom: 40px;
    padding: 20px;
    background-color: white;
    border-radius: 2px;
    
    
}

.objectives h2, .facilities h2 {
    
    color: #00008B;
    margin-bottom: 20px;
    margin-left: 200;
}




.objectives ul, .facilities ul {
    list-style: none;
    padding: 0;
}

.objectives ul li, .facilities ul li {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 10px;
    position: relative;
    padding-left: 25px;
    margin-left: 120px;
}

.objectives ul li::before {
    content: "✔️";
    position: absolute;
    left: 0;
    top: 0;
    font-size: 18px;
    color: green;
}





  </style>

</head>
<body>
</div>
    <?php require_once("../resources/header.php") ?>
    
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NSCET Library</title>
    <link rel="stylesheet" type="text/css" href="library.css">

</head>
<body>
    <div class="header_lib">
        <h1 class="h1">Welcome to Nadar Saraswathi College of Engineering & Technology - Library</h1>
    </div>

    <div class="content-container">
        <div class="container">
            <h3 class="h3">About NSCET Library</h3>
            <div class="content">
                The Library, in today’s context is a modern Learning Resource Centre with a dynamic learning space where students undertake a journey of knowledge acquisition and intellectual enrichment. Our Library is a well-equipped Learning Resource Centre. We have a strong collection of about 20433 books and 120 Indian and foreign journals. The NSCET library is a store house of knowledge and it comprises books, journals, e-resources, other learning materials and technology-aided learning mechanisms which enable students to acquire information, knowledge and skills required for their study programmes.
            </div>
        </div>

        <div class="image-container">
            <div class="slides">
                <div class="slide"><img src="1.jpg" alt="Library Image 1"></div>
                <div class="slide"><img src="2.jpg" alt="Library Image 2"></div>
                <div class="slide"><img src="3.jpg" alt="Library Image 3"></div>
                <div class="slide"><img src="4.jpg" alt="Library Image 4"></div>
                <div class="slide"><img src="5.jpg" alt="Library Image 5"></div>
            </div>
        </div>
    </div>



    <div style="text-align: center; margin-top: 100px;">
    <img src="sinthan.jpg" alt="Dr. Sinthan" style="width: 400px; height: 400px; border-radius: 30px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4); margin-bottom: 40px; margin-left:-470px;">
    <p style="margin-left: -470px; font-size: 24px; font-weight: bold;">Dr. Sinthan <br>Librarian<br></p>

  


    <div class="collections">
        Library Collections
    </div>

    <div class="box-container">
        <div class="box">
            <div class="big-number" data-target="209">0</div>
            <div class="small-text">National Journals (Print)</div>
        </div>
        <div class="box">
            <div class="big-number" data-target="8">0</div>
            <div class="small-text">International Journals (Print)</div>
        </div>
        <div class="box">
            <div class="big-number" data-target="1078">0</div>
            <div class="small-text">E-Journals</div>
        </div>
        <div class="box">
            <div class="big-number" data-target="23637">0</div>
            <div class="small-text">Lending Books</div>
        </div>
        <div class="box">
            <div class="big-number" data-target="18102">0</div>
            <div class="small-text">Reference Books</div>
        </div>
        <div class="box">
            <div class="big-number" data-target="13053">0</div>
            <div class="small-text">Book Bank</div>
        </div>
        <div class="box">
            <div class="big-number" data-target="33350">0</div>
            <div class="small-text">Non Book Materials</div>
        </div>
        <div class="box">
            <div class="big-number" data-target="351">0</div>
            <div class="small-text">Back Volumes</div>
        </div>
        <div class="box">
            <div class="big-number" data-target="5117">0</div>
            <div class="small-text">Standards</div>
        </div>
    </div>

    <div class="facilities-container">
        <div class="objectives">
            <h2>OBJECTIVE</h2>
            <ul>
                <li>To adopt National library standards and identify peer colleges for determining the library's strengths and areas for improvement.</li>
                <li>To continue to improve library services through a regular program of outcomes assessment and evaluation.</li>
                <li>To increase library services and provide consistent levels of service to all students regardless of location.</li>
                <li>To develop and deliver quality instructional programs and services to students and faculty.</li>
                <li>To support and facilitate the development of resource collections at each library.</li>
                <li>To increase avenues through which students and faculty can access library resources and services.</li>
                <li>To create warm, inviting learning environments for students and faculty to gather and conduct research.</li>
            </ul>
        </div>

        <div class="facilities">
            <h2>FACILITIES</h2>
            <ul>
                <li>Library has been fully computerized</li>
                <li>Well stacked library books</li>
                <li>Membership in DELNET (Developing Library Network)</li>
                <li>Membership in National Digital Library of India Club</li>
                <li>Indian & Foreign Journals</li>
                <li>E- Journals</li>
                <li>Deway Decimal Classification</li>
                <li>Online Public Access Catalogue</li>
                <li>Intranet Access</li>
                <li>Reprographic services</li>
                <li>Back volumes – 1800</li>
                <li>Daily newspapers – 7</li>
                <li>Working Hours 8.30 am to 6 pm</li>
            </ul>
        </div>
        <div class="RULES_AND_REGULATION">
            <h2>LIBRARY RULES AND REGULATION</h2>
            <ul>

                <li>A student is entitled to retain a book for 14 days from the date of issue. For staff members, the period of issue is one semester.</li>
                <li> Journals, Magazines, Project Reports, and copies of university examination question papers will not be issued.</li>
                <li> The books borrowed must be returned on the due date. For failure to return on the due date, a fine will be levied.</li>
                <li> Students are not allowed to borrow books on behalf of others. No transfer of borrowed materials to other students.</li>
                <li> Before borrowing the books, students must ensure that the book is in good condition and pages are intact.</li>
                <li> Based on the semester results, Toppers of each department will be issued one additional book, which can be utilized until the end of the university exam in that semester.</li>
                <li> The issue of books is regulated as follows:
                    a) Teaching Staff: 10 Books
                    b) Non-Teaching Staff: 5 Books
                    c) PG Students: 7 Books
                    d) UG Students: 6 Books</li>

                <li> Students/Staff should scan their ID card in the E Gate Register scanner while entering the library.</li>
                <li> Books will be issued only on the production of a Bar-coded ID card.</li>
                <li> The librarian may recall any book at any time, even if the normal period of loan has not expired.</li>
                <li> Photocopying of a full book is not permitted.</li>
                <li>No user shall deface the library books by underlining or scribbling notes in the margins, etc. All users are required to protect the library books against wanton and willful damage, mutilation, theft, and other malpractices.</li>
                <li>Students are advised not to keep their valuable things like a calculator, wallet, etc., in the property counter. Library authorities are not responsible for any loss of such items.</li>
                <li>Silence is to be maintained in the library. Those who violate the rules will be warned and asked to leave the library.</li>
                <li>If the borrower is unable to replace the lost book with another good copy, the user has to pay the current fees of the book in triple along with overdue charges.</li>
                
          </ul>
          <div class="library-info">
        <h2>NATIONAL DIGITAL LIBRARY OF INDIA CLUB ACTIVITIES</h2>
        <ul>
            <li>Awareness Programme on National Digital Library of India was held on 30.09.2021</li>
            <li>Film Screening Competition was held on 17.02.2022</li>
            <li>Book Review Competition was held on 29.11.2021</li>
            <li>Quiz competition was held on 16.12.2021</li>
        </ul>
    </div>

    <div class="working-hours">
        <h2>WORKING HOURS</h2>
        <ul>
        <li>Weekdays: 8:30 A.M to 6:00 P.M</li>
        <li>Sundays: 9:30 A.M to 1:00 P.M</li>
        <li>Note: The library is kept open throughout the year except on Government holidays.</li>
        </ul>
    </div>
        </div>





<script>



let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;
    if (index >= totalSlides) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = index;
    }
    slides.style.transform = `translateX(-${currentSlide * 100}%)`;
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

setInterval(nextSlide, 3000); // 3sec 

// Animate numbers
const counters = document.querySelectorAll('.big-number');
const speed = 300; // The lower the slower

counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        
        const increment = target / speed;

        
        if (count < target) {
            
            counter.innerText = Math.ceil(count + increment);
            
            setTimeout(updateCount, 1);
        } else {
            counter.innerText = target;
        }
    };

    updateCount();
});



</script>
    
</body>

</html>

</body>
</html>