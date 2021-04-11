<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>

<body>
  
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark base-theme base-theme-header">
      <div class="container-fluid">

        <a class="navbar-brand" href="#">
          <img src="SoloPreneurjpgfinal.jpg" alt="" width="30" height="24" class="d-inline-block align-top">
          SoloPreneur
        </a>
        <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>
  
  <!--alert messages start-->
  <?php echo $alert; ?>
  <!--alert messages end-->

  <!--contact section start-->
  <div class="contact-section">
    <div class="contact-info">
      <div><i class="fas fa-map-marker-alt"></i>INDIA</div>
      <div><i class="fas fa-envelope">support@soloprenure.co.in</i></div>
      <div><i class="fas fa-phone"></i>+91 6202851936</div>

    </div>
    <div class="contact-form">
      <h2>Contact Us</h2>
      <form class="contact" action="" method="post">
        <input type="text" name="name" class="text-box" placeholder="Your Name" required>
        <input type="email" name="email" class="text-box" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <input type="submit" name="submit" class="send-btn" value="Send">
      </form>
    </div>
  </div>
  <!--contact section end-->

  <script type="text/javascript">
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>

</body>

</html>
