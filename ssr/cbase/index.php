<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NSCET</title>

        <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    
        <link href="../../assets/css/ssr.css" rel="stylesheet">
        <link rel="stylesheet" href="../../assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="../assets/css/themify-icons.css" />
        <link rel="stylesheet" href="../assets/css/magnific-popup.css" />
        <link rel="stylesheet" href="../assets/css/animate.css" />
        <link rel="stylesheet" href="../assets/css/owl.carousel.css" />
        <link rel="stylesheet" href="../../assets/css/style.css" />
</head>

<style>
    .ssr_btn {
  margin: 6px;
  background-color: #f6783a !important;
  color: #fff !important;
  border-radius: 25px !important;
  width: 10vw;
  height: 7vh;
  font-weight: bold !important;
}
.ssr_btn:hover {
  background-color: #fff !important;
  color: #f6783a !important;
  border-color: #f6783a;
}
.criterion-btn {
  margin: 6px;
  background-color: #104565 !important;
  color: #fff !important;
  border-radius: 25px !important;
  width: 10vw;
  height: 7vh;
  font-weight: bold !important;
}
.criterion-btn:hover {
  background-color: #fff !important;
  color: #104565 !important;
  border-color: #104565;
}
thead {
  background-color: #104565;
  color: #fff;
}

.blue {
  color: #104565;
}
.orange {
  color: #f6783a;
}

@media only screen and (min-width: 120px) and (max-width: 768px) {
  .criterion-btn {
    margin-left: 0.8%;
    margin-right: 0.8%;
    margin-top: 0.5%;
    width: 25vw;
    background-color: #104565 !important;
    color: #fff !important;
    border-radius: 25px !important;
  }
  .criterion-btn:hover {
    background-color: #fff !important;
    color: #104565 !important;
    border-color: #104565;
  }
  .ssr_btn {
    margin-left: 0.8%;
    margin-right: 0.8%;
    margin-top: 0.5%;
    width: 35vw;
    background-color: #f6783a !important;
    color: #fff !important;
    border-radius: 35px !important;
  }
  .ssr_btn:hover {
    background-color: #fff !important;
    color: #f6783a !important;
    border-color: #f6783a;
  }
  table {
    overflow-x: auto;
  }
}

table {
  width: 100%;
}
.col1 {
  width: 20%!important;
}

.col2 {
  width: 60%!important;
}

.col3 {
    text-align: center;
  width: 20%!important;
}


.col3-view{
    text-align: center;
}

    
</style>
<style>
        @import url(https://fonts.googleapis.com/css?family=Lato);

        @import url(https://fonts.googleapis.com/css?family=Open Sans);

        .faq-heading {
            background-color: #104565 !important;
            font-family: Lato;
            color: white !important;
            border-radius: 12px;
            font-weight: 400;
            padding: 12px;
            font-size: 21px;
            -webkit-transition: text-indent 0.2s;
            text-indent: 20px;
            color: #333;
        }

        .faq-text {
            font-family: Open Sans;
            font-weight: 400;
            color: #919191;
            width: 95%;
            padding-left: 20px;
            margin-bottom: 30px;
        }

        .faq {
            width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 4px;
            position: relative;
            border: 1px solid #E1E1E1;
        }

        .faq label {
            display: block;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            height: 56px;
            padding-top: 1px;

            background-color: #FAFAFA;
            border-bottom: 1px solid #E1E1E1;
        }

        .faq input[type="checkbox"] {
            display: none;
        }

        .faq .faq-arrow {
            width: 10px;
            height: 10px;
            transition: -webkit-transform 0.8s;
            transition: transform 0.8s;
            transition: transform 0.8s, -webkit-transform 0.8s;
            -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            border-top: 2px solid rgba(0, 0, 0, 0.33);
            border-right: 2px solid rgba(0, 0, 0, 0.33);
            float: right;
            position: relative;
            top: -30px;
            right: 27px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);

        }

        .faq input[type="checkbox"]:checked+label>.faq-arrow {
            transition: -webkit-transform 0.8s;
            transition: transform 0.8s;
            transition: transform 0.8s, -webkit-transform 0.8s;
            -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
        }

        .faq input[type="checkbox"]:checked+label {
            display: block;
            background: rgba(255, 255, 255, 255) !important;
            color: #4f7351;
            height: 600px;
            overflow: auto;
            transition: height 0.8s;
            -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            
        }

        .faq input[type='checkbox']:not(:checked)+label {
            display: block;
            transition: height 0.8s;
            height: 60px;
            -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

    </style>
<body>
    <div class="nav-switch" style="z-index: 100">
    <i class="fa fa-bars"></i>
  </div>
    <?php require_once '../../resources/header.php';?>
    <div style=" width: 100%;
      height: 200px; /* Set the height of your div */
      background-image: url('https://nscet.org/Home_Assets/img/dummy1/image.jpg'); /* Replace 'your-image.jpg' with the path to your image */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;">
      <h2 style="color:white; position: absolute;bottom: 30px;left:50px">NAAC - SSR</h2>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

::-webkit-scrollbar {
  width: 2px; /* Set the width of the scrollbar */
}

::-webkit-scrollbar-thumb {
  background-color: #f6783a; /* Set the color of the scrollbar thumb */
  border-radius: 6px; /* Set the border radius of the scrollbar thumb */
}

::-webkit-scrollbar-track {
  background-color: #104565; /* Set the color of the scrollbar track */
}
a {
  color: #000;
  text-decoration: none;
}

body {
  font-family: "Roboto", sans-serif;
}

.sidebar {
  width: 5rem;
  height: 100vh;
  position: fixed;
  top: 117px;
  left: 0;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  z-index: 100;
  cursor: pointer;
  background: #104565;
  transition: 0.5s;
  overflow: hidden;
}

.sidebar:hover {
  width: 20rem;
}

.brand {
  text-align: center;
  font-size: 1.4rem;
  padding: 1rem 0;
  color: #000;
}

.brand:hover {
  background: #f6783a;
}

.nav-item__icon{
  color: white;
}
.brand span {
  display: none;
}

.nav-list {
  list-style: none;
}

.nav-item {
  color: white;
  padding: 1rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

.nav-item:hover {
  background: #f6783a;
}

.nav-item a {
  position: relative;
  white-space: nowrap;
  display: flex;
  gap: 1rem;
}

.nav-item__icon {
  position: relative;
  font-size: 1.2rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

.nav-item__text {
  position: relative;
  display: none;
  font-size: 1em;
  color: #000;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.avatar {
  width: 1.5rem;
  height: 1.5rem;
  border-radius: 50%;
  background: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.8em;
  font-weight: 700;
}

.logout {
  margin-left: 0.2rem;
}

.sidebar:hover .brand span {
  display: inline;  
}

.sidebar:hover .nav-item {
  justify-content: start;
}

.sidebar:hover .nav-item__text {
  display: flex;
  align-items: center;
}
.nav-item__text{
  color: white;
}
.brand p{
  color: white;
  font-weight: bold;
}
h5{
  margin-bottom: 18px;
}
</style>

<div class="sidebar">
  <ul class="nav-list" style="overflow:scroll">
  <li class="nav-item">
      <a href="/ssr/ep.php">
        <span class="nav-item__icon">
        <ion-icon name="arrow-forward"></ion-icon>

        </span>
        <span class="nav-item__text">
        Extended Profile
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="../#criterion1">
        <span class="nav-item__icon">
          C1
        </span>
        <span class="nav-item__text">
           Criteria 1
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="../#criterion2">
        <span class="nav-item__icon">
          C2
        </span>
        <span class="nav-item__text">
        Criteria 2
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="../#criterion3">
        <span class="nav-item__icon">
          C3
        </span>
        <span class="nav-item__text">
        Criteria 3
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="../#criterion4">
        <span class="nav-item__icon">
          C4
        </span>
        <span class="nav-item__text">
        Criteria 4
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="../#criterion5">
        <span class="nav-item__icon">
          C5
        </span>
        <span class="nav-item__text">
        Criteria 5
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="../#criterion6">
        <span class="nav-item__icon">
          C6
        </span>
        <span class="nav-item__text">
        Criteria 6
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="../#criterion7">
        <span class="nav-item__icon">
          C7
        </span>
        <span class="nav-item__text">
        Criteria 7
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="#">
        <span class="nav-item__icon">
          <ion-icon name="arrow-forward"></ion-icon>
        </span>
        <span class="nav-item__text">
        SSR
        </span>
      </a>
    </li><li class="nav-item">
      <a href="#">
        <span class="nav-item__icon">
        <ion-icon name="arrow-forward"></ion-icon>

        </span>
        <span class="nav-item__text">
        DVV Clarifiation
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="#">
        <span class="nav-item__icon">
        <ion-icon name="arrow-forward"></ion-icon>

        </span>
        <span class="nav-item__text">
        Best Practices
        </span>
      </a>
    </li><li class="nav-item">
      <a href="#">
        <span class="nav-item__icon">
        <ion-icon name="arrow-forward"></ion-icon>

        </span>
        <span class="nav-item__text">
        Institutional Distinctiveness
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="#">
        <span class="nav-item__icon">
        <ion-icon name="arrow-forward"></ion-icon>

        </span>
        <span class="nav-item__text">
        Code of Conduct
        </span>
      </a>
    </li><li class="nav-item">
      <a href="#">
        <span class="nav-item__icon">
        <ion-icon name="arrow-forward"></ion-icon>

        </span>
        <span class="nav-item__text">
        HR Policy
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="#">
        <span class="nav-item__icon">
        <ion-icon name="arrow-forward"></ion-icon>

        </span>
        <span class="nav-item__text">
        Capacity Building and Skill Enhancement
        </span>
      </a>
    </li><li class="nav-item">
      <a href="#">
        <span class="nav-item__icon">
        <ion-icon name="arrow-forward"></ion-icon>

        </span>
        <span class="nav-item__text">
        Stakeholders Feedback
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="#">
        <span class="nav-item__icon">
        <ion-icon name="arrow-forward"></ion-icon>

        </span>
        <span class="nav-item__text">
        Annual Report
        </span>
      </a>
    </li>
  </ul>
  
</div>
        <section class="container">
        <!-- Buttons -->
        

        <h3 class="orange container" style="margin: 28px 0px;">Capacity Building and Skill Enhancement</h3>
        <div class='faq'>
            
            <input id='faq-a' type='checkbox' checked>
            <label for='faq-a'>
                
                <p class="faq-heading">SOFT SKILLS</p>
                
                <div style="padding: 32px; height: 300px;">
                    <p>Soft skills involve emphasizing the importance in various aspects of life, including academics,
                        career, and personal development. They're not about what you know academically but about
                        how you interact, communicate, and handle things in life. Think of them as the 'People Skills'
                        that help you succeed beyond just getting good grades. They are often categorized as, </p>

                    <ul>
                        <li>Interpersonal skills</li>
                        <li>Communication skills</li>
                        <li>Leadership skills</li>
                        <li>Emotional intelligence.</li>
                    </ul>
                    <br>
                    <p>Soft skills are different from technical skills, which are the specific knowledge and abilities
                        required for a particular job or task. Soft skills include abilities such as problem-solving,
                        teamwork, adaptability, time management, creativity, and active listening. These skills are
                        essential in the workplace as they contribute to a positive work environment, effective
                        collaboration, and the ability to build and maintain relationships with colleagues and clients.
                        Soft skills are also important in personal life as they help with personal growth, effective
                        communication, and building strong interpersonal connections.</p>
                        
                    <h3>Seminar on Group Discussion</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/1.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/2.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>27-04-2023 Dr.R.Athilingam, Associate Professor, Nadar Saraswathi College of Engineering and Technology, Theni. <br>60 Students benefited</p>
                    </div>
                    
                    <h3>Building Trust and Respect - Leadership Skills</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/3.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/4.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>02-02-2023 Dr.C.Chitra, Professor, Nadar Saraswathi College of Engineering and Technology, Theni. <br>25 Students benefited</p>
                    </div>
                    
                    
                    
                    <h3>Training on Confidence Building</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/5.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/6.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>02-09-2022 Mr.J.Chakravarthy Samydurai, Assistant Professor,Nadar Saraswathi College of Engineering and Technology, Theni.<br>29 Students benefited</p>
                    </div>
                    
                    
                    
                    <h3>Time Management for Personal and Professional Life</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/7.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/8.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>11-08-2022 Mrs.M.Mahalakshmi, Assistant Professor, Nadar Saraswathi College of Engineering and Technology, Theni.<br>59 Students benefited</p>
                    </div>
                    
                    <h3>Problem-Solving and Decision-Making in a Complex World</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/7.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/8.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>19-07-2022 Mr.R.Rajakarthick, Assistant Professor, Nadar Saraswathi College of Engineering and Technology, Theni.<br>31 Students benefited</p>
                    </div>
                    
                    <!--<table border="2">-->
                    <!--    <thead>-->
                    <!--        <th>S. No</th>-->
                    <!--        <th>Topic & Resource Person Name</th>-->
                    <!--        <th>Benefited Students</th>-->
                    <!--        <th>Photo no</th>-->
                    <!--    </thead>-->
                                
                    <!--    <tbody>-->
                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                1-->
                    <!--            </td>-->
                    <!--            <td>-->
                    <!--                “Seminar on Group Discussion” on 16-03--->
                    <!--                2023-->
                    <!--                Mrs.B.Sowmiya,-->
                    <!--                Assistant Professor,-->
                    <!--                Nadar Saraswathi College of Engineering and-->
                    <!--                Technology, Theni.-->
                    <!--            </td>-->
                    <!--            <td>-->
                    <!--                51 Students-->
                    <!--                benefited-->
                    <!--            </td>-->
                    <!--            <td>1, 2</td>-->
                    <!--        </tr>-->
                    <!--    </tbody>-->
                    <!--</table>-->
                    
                    <!--
                    <table border="2">
                        <thead>
                            <th>S. No</th>
                            <th>Topic & Resource Person Name</th>
                            <th>Benefited Students</th>
                            <th>Photo no</th>
                        </thead>

                        <tbody>

                        </tbody>
                    </table> -->
                    
                </div>

            </label>
            <input id='faq-b' type='checkbox'>
            <label for='faq-b'>
                <p class="faq-heading">LANGUAGE AND COMMUNICATION SKILLS</p>
                <div style="padding: 32px; height: 300px;">
                    <p>Language and communication skills are crucial in virtually every aspect of life, from personal
                        relationships to professional success. In essence, language and communication skills are the
                        bridge that connects individuals, facilitates understanding, and drives progress in both
                        personal and professional spheres. They empower you to express yourself, connect with
                        others, and navigate the complexities of the modern world. Language and communication
                        skills encompass a range of abilities that enable individuals to convey thoughts, ideas,
                        feelings, and information effectively to others. These skills involve both verbal and non-verbal
                        forms of communication</p>
                    <br>
                    
                    <h3>Seminar on Group Discussion</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/11.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/12.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>16-03- 2023 Mrs.B.Sowmiya, Assistant Professor, Nadar Saraswathi College of Engineering and Technology, Theni.<br>51 Students benefited</p>
                    </div>
                    
                    <h3>Motivational Program on Learning Skills</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/13.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/14.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>17-02-2023 Dr.C.Mathalai Sundaram, Principal, Nadar Saraswathi College of Engineering and Technology, Theni.<br>25 Students benefited</p>
                    </div>
                    
                    <h3>Training on Face to Face Interview</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/15.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/16.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>11-01-2023 Dr.C.Karthikeyan, Placement and Training Officer, Nadar Saraswathi College of Engineering and Technology, Theni.<br>20 Students benefited</p>
                    </div>
                    
                    <h3>Workshop on Leadership Skills</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/17.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/18.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>19-10- 2022 Mrs.T.Tamil Selvi, Assistant Professor, Nadar Saraswathi College of Engineering and Technology, Theni.<br>60 Students benefited</p>
                    </div>
                    
                    <h3>Training on Resume Writing / Cover Letter</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/19.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/20.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>26-09-2022 Mr.R.C. Richard Britto, Assistant Professor, Nadar Saraswathi College of Engineering and Technology, Theni.<br>31 Students benefited</p>
                    </div>

                </div>
            </label>
            <input id='faq-c' type='checkbox'>
            <label for='faq-c'>
                <p class="faq-heading">LIFE SKILLS</p>
                <div style="padding: 32px">
                    <p>Life skills are practical and essential for managing daily tasks and responsibilities of the
                        students. The maintaining personal health, practicing good hygiene, and making healthy
                        lifestyle choices. Life skills teaches good behaviour, consistency, help in building positive
                        relationships and making interactions smoother, respecting personal space and positive
                        reinforcement. It makes the students to improve self-management skills, Daily living skills,
                        adaptability and interpersonal skills 
                    </p>
                    <br>
                    
                    <h3>Awareness Program on Importance of Mental Health</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/21.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/22.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>06-05-2023 Mr.P.Rajan, Applied Psychology, PGDGC., Theni.<br>23 Students benefited</p>
                    </div>
                    
                    <h3>Workshop on Self Respect</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/23.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/24.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>23-02- 2023 RTN.Hermon Carduz, Director of Leaders Choice Art Gallery, Trichy<br>25 Students benefited</p>
                    </div>
                    
                    <h3>Awareness program on Prevention of Sexual Harassment at Workplace</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/25.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/26.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/27.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/28.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>15- 12-2022 Mrs.Sasikala, Group Advocate, DLSA  & Mrs.B.Nagashanthi Sub Inspector, IPEC  & Ms.Shiyamala Devi, District Social Welfare.<br>60 Students benefited</p>
                    </div>
    
                    <h3>Heartfulness Training Program (Meditation)</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/29.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/30.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>05-11-2022 Mr.S.Jagadeesh, Heartfulness Education Trust, Zonal Co-ordinator, Theni.<br>31 Students benefited</p>
                    </div>
                        
                    <h3>Awareness Program on Cyber Crimes and its Prevention</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/31.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/32.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/33.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/34.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>05-07-2022 Mr. Alagupandi, Inspector of Police, Cyber Crime Police, Theni.<br>60 Students benefited</p>
                    </div>
                    
                </div>
            </label>
            <input id='faq-d' type='checkbox'>
            <label for='faq-d'>
                <p class="faq-heading">ICT / COMPUTING SKILLS</p>

                <div style="padding: 32px">
                    <p>ICT (Information and Communications Technology) and computing skills encompass a wide
                        range of abilities related to technology and digital systems. Here are some key areas:
                        Computer Basics, Programming and Coding, Database Management, Web Development,
                        Networking, Cybersecurity, Data Analysis, Cloud Computing, Digital Literacy. This field
                        encompasses a broad range of technologies that handle information in various forms, such as
                        digital data, voice, video, etc. ICT involves the convergence of these technologies to manage
                        and process information effectively. It's not just about computers or the internet; it includes
                        the entire infrastructure and systems used to create, store, process, and exchange
                        information. These skills are essential in various industries and professions, as technology
                        continues to play a crucial role in our modern world. Proficiency in ICT and computing can
                        enhance job opportunities and productivity in many fields.
                    </p>
                    <br>

                    <h3>Workshop on Primavera Software and its Career Opportunities in Abroad</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/35.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/36.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>21-04- 2023 Mr.G.Rajakumar, Planning Manager, Qatar.<br>46 Students benefited</p>
                    </div>
                    
                    <h3>Workshop on Cyber Security</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/38.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/39.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>Mr.S.Harisuthan, Information Security Analyst, FIS, Pune.<br>20 Students benefited</p>
                    </div>
                    
                    <h3>Powerful Role of Semiconductor Product Development in AI</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/40.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/41.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>Mr.Kannan Srinivasagam, MD, UAW Technologies India Private Limited, Bengaluru<br>29 Students benefited</p>
                    </div>
                    
                    <h3>Exploration on Information Technology Requirement for Posterity</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/42.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/43.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>Mr.Pradeep Sivakaminathan, Associate Vice President, Infosys, Mysore<br>58 Students benefited</p>
                    </div>
                    
                    <h3>Interactive Session on Artificial Intelligence in Renewable Energy</h3>
                    <div class="row">
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/44.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                            
                        </div>
                        <div class="col-sm">
                            <img src="../../assets/img/ssr/cbase/45.JPG" class="" width='380px' height='320px' alt="Responsive image"/>
                        </div>
                        <p>Dr.D.Prince Winston, Dean Research & Professor, Kamaraj College of Engineering & Technology, Virudhunagar.<br>61 Students benefited</p>
                    </div>
                </div>
            </label>
        </div>


    </section>

        <?php include '../../resources/footer.php';?>
    </body>

</html>