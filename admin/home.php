<!DOCTYPE html>
<html lang="en">
<?php require_once("../resources/connection.php")?>
<?php require_once('./resources/header_link.php'); ?>

<body>

  <?php require_once('./resources/header.php'); ?>
  <?php require_once('./resources/sidebar.php'); ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Home Page Elements</h5>

              <!-- General Form Elements -->

              <!-- Marquee Section -->
              <?php 
              $marqueeSection = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='marquee'"));
              $marqueeData = json_decode($marqueeSection['content'], true);
              ?>
              <form method="post" action="./routes/homePageHandler.php">
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Marquee Section</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="marquee" required><?php echo $marqueeData['content']?></textarea>
                  </div>
                  <div class="col-sm-10">
                    <br>
                    <button type="submit" class="btn btn-primary" name="marqueeButton">Add</button>
                    <button type="submit" class="btn btn-danger" name="marqueeButton">Delete</button>
                  </div>
                </div>
              </form>

              <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with hoverable rows</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>
          
              <!-- Hero Section -->
              <form method="post" action="./routes/homePageHandler.php">
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Hero Section</label>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="subHeading" placeholder="subHeading" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="heading" placeholder="heading" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-4">
                    <textarea class="form-control" style="height: 100px" name="paragraph" required>Hero Section Paragraph</textarea>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="url" placeholder="Url" required/>
                    <br>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="btn" placeholder="Button Name" required/>
                    <br>
                  </div>
                  <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                    <br>
                  </div>
                </div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="marqueeButton">Update</button>
                  </div>
                </div>
              </form>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Marquee Section</label>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="title" placeholder="title" required/>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="time" placeholder="time" required/>
                  </div>
                  <div class="col-sm-10 col-lg-4">
                    <input class="form-control" name="countdown" placeholder="countdown" required/>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php require_once('./resources/footer_link.php'); ?>

</body>

</html>