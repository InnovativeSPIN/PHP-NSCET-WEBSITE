<!DOCTYPE html>
<html lang="en">

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
              <form>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Marquee Section</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="marquee" required></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Marquee Section</label>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="subHeading" placeholder="subHeading" required/>
                  </div>
                  <div class="col-sm-10 col-lg-3">
                    <input class="form-control" name="heading" placeholder="heading" required/>
                  </div>
                  <div class="col-sm-10 col-lg-4">
                    <textarea class="form-control" style="height: 100px" name="paragraph" required></textarea>
                  </div>
                  
                </div>

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