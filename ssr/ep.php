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
    
        <link href="../assets/css/ssr.css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="../assets/css/themify-icons.css" />
        <link rel="stylesheet" href="../assets/css/magnific-popup.css" />
        <link rel="stylesheet" href="../assets/css/animate.css" />
        <link rel="stylesheet" href="../assets/css/owl.carousel.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />

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
<body>
    <div class="nav-switch" style="z-index: 100">
    <i class="fa fa-bars"></i>
  </div>
    <?php include '../resources/header.php';?>
    <div style=" width: 100%;
      height: 200px; /* Set the height of your div */
      background-image: url('https://nscet.org/Home_Assets/img/dummy1/image.jpg'); /* Replace 'your-image.jpg' with the path to your image */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;">
      <h2 style="color:white; position: absolute;bottom: 30px;left:110px">NAAC - SSR</h2>
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
      <a href="https://nscet.org/ssr/ep.php">
        <span class="nav-item__icon">
        <ion-icon name="arrow-forward"></ion-icon>

        </span>
        <span class="nav-item__text">
        Extended Profile
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="./#criterion1">
        <span class="nav-item__icon">
          C1
        </span>
        <span class="nav-item__text">
           Criteria 1
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="./#criterion2">
        <span class="nav-item__icon">
          C2
        </span>
        <span class="nav-item__text">
        Criteria 2
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="./#criterion3">
        <span class="nav-item__icon">
          C3
        </span>
        <span class="nav-item__text">
        Criteria 3
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="./#criterion4">
        <span class="nav-item__icon">
          C4
        </span>
        <span class="nav-item__text">
        Criteria 4
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="./#criterion5">
        <span class="nav-item__icon">
          C5
        </span>
        <span class="nav-item__text">
        Criteria 5
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="./#criterion6">
        <span class="nav-item__icon">
          C6
        </span>
        <span class="nav-item__text">
        Criteria 6
        </span>
      </a>
    </li>
    <li class="nav-item">
      <a href="./#criterion7">
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
           
            <!-- CRITERAION 1 -->
            <!-- Table 1 -->
            <div class="container-fluid mt-5" id="criterion1">
                <div class="row">
                    <h3 class="blue">Extended Profile<h3 class="orange"></h3></h3>
                </div><hr> 
            </div>
            <div class="mx-5">
                <!-- <div class="row"><h5 class="blue pt5" style="display: inline;">Key Indicator - <h5 class="orange">1.1 Curricular Planning and Implementation (20)</h5> </h5></div> -->
                
             <table class="table table-hover" border="1">
                    <thead>
                      <tr>
                        <th class="col1" scope="col">Metric NO.</th>
                        <th class="col2" scope="col">Description</th>
                        <th class="col3" scope="col">Link</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1.1</th>
                        <td>Number of students year wise during the last five years</td>
                        <td class="col3-view"><a href="https://nscet.org/naac/ep/1.1/1.1.Mainpage.pdf"><u>View</u></a></td>
                      </tr>
                      <tr>
                        <th scope="row">2.1 & 2.2</th>
                        <td>Number of full time teachers during the last five years (Without repeat count)</td>
                        <td class="col3-view"><a href="https://nscet.org/naac/ep/2.1/2.1%20EP%20STAFF%20HOME.pdf"><u>View</u></a></td>
                      </tr>
                      <tr>
                        <th scope="row">3.1</th>
                        <td>Expenditure excluding salary component year wise during the last five years (INR in lakhs)</td>
                        <td class="col3-view"><a href="https://nscet.org/naac/ep/3.1/3.1%20Index.pdf"><u>View</u></a></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </section>

        <?php include '../resources/footer.php';?>
    </body>

</html>