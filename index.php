<?php include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$data['name']?> - <?=$data['title']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?=$data['name']?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span><?=$data['title']?></span> from <?=$data['place']?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <?php   
          if($data['twitter']){
        ?>
            <a href="<?=$data["twitter"]?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['facebook']){
        ?>
            <a href="<?=$data["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['instagram']){
        ?>
            <a href="<?=$data["instagram"]?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['youtube']){
        ?>
            <a href="<?=$data["youtube"]?>" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['github']){
        ?>
            <a href="<?=$data["github"]?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['linkedin']){
        ?>
            <a href="<?=$data["linkedin"]?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <?php
          }
        ?>

      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $data['title']?></h3>
          <p class="fst-italic">
            <?=$data['slogan']?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo date('d M Y', strtotime($data['birthday']))?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><a style="color: white;" href="tel:<?=$data['phone']?>"><?=$data['phone']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?=$data['city']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?=$data['age']?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?=$data['degree']?></span></li>

                <li><i class="bi bi-chevron-right"></i> <strong>Emailaddress:</strong> <span><a style="color: white;" href="mailto:<?=$data['email']?>"><?=$data['email']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>
                  <?php 
                  if($data['freelance'] == 1){
                    echo "Available";
                  }
                  else{
                    echo "Not Available";
                  }
                  ?>

                </span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->

    <?php
    
    $counter = "SELECT * FROM `counter`";
    $counter_result = mysqli_query($con, $counter);

    ?>
    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">
    <?php
    if($counter_result -> num_rows > 0){
      while($row = $counter_result -> fetch_assoc()){
      ?>
        <div class="col-lg-3 col-md-6 mt-5">
          <div class="count-box">
            <i class="<?=$row['icon']?>"></i>
            <span data-purecounter-start="<?=$row['pre']?>" data-purecounter-end="<?=$row['post']?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?=$row['title']?></p>
          </div>
        </div>
        <?php
      }
    }

    ?>

      </div>

    </div><!-- End Counts -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row">

      <?php
      
      $skills = "SELECT * FROM `skills`";
      $skills_result = mysqli_query($con, $skills);

      if($skills_result -> num_rows > 0){
        while($skills_row = $skills_result -> fetch_assoc()){
          ?>
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <i class="<?=$skills_row['icon']?>" style="color: #<?=$skills_row['color']?>;"></i>
                <h3><?=$skills_row['title']?></h3>
              </div>
            </div>
          <?php
        }
      }

      ?>
      </div>

    </div><!-- End Interests -->

   

        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>Olivia karmakar</h4>
            <p><em>Passionate and versatile marketing associate with expertise in graphic design, video editing, web development, and social media marketing.</em></p>
            <p>
            <ul>
              <li>Khardah, Kolkata-700118, West bengal</li>
              <li>8697626427</li>
              <li>oliviakarmakar27@gmail.com</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Master of Computer Application</h4>
            <h5>2023 - Present</h5>
            <p><em>Maulana Abul Kalam Azad university and Technology, West Bengal</em></p>
            <p>Currently pursuing an advanced degree with a focus on software engineering, application development, and system design.
Engaged in comprehensive studies involving advanced programming, machine learning, artificial intelligence, and cloud computing.
Actively involved in project-based learning, contributing to real-world applications and industry-relevant solutions.</p>
          </div>
          <div class="resume-item">
            <h4>Bachelor of Computer science</h4>
            <h5>2020 - 2023</h5>
            <h5>CGPA - 8.59</h5>
            <p><em>kalyani mahavidyalaya</em></p>
            <p>Achieved a foundation in computer science principles, programming, and software development.
Completed coursework in data structures, algorithms, databases, operating systems, and computer networks.
Participated in various academic projects and workshops, enhancing practical skills and theoretical knowledge.</p>
          </div>

          <div class="resume-item">
            <h4>Higher Secondary</h4>
            <h5>2018 - 2020</h5>
            <h5>Percentage - 84%</h5>
            <p><em>Rahara Bhabanath Institution For Girls</em></p>
            <p>Specialized in Pure Science, with a focus on subjects such as Physics, Chemistry, and Mathematics.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4>Marketing Associate Intern</h4>
            <h5>11/2023 - 04/2024</h5>
            <p><em>Finno AQ Private Limited</em></p>
            <p>
            <ul>
              <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
              <li>Developed engaging and targeted content for various platforms, ensuring consistency with the brand's voice and objectives. </li>
              <li>Assisted in planning and executing marketing strategies to enhance brand visibility and engagement.</li>
              <li>Created high-quality and efficient videos for promotional purposes, leveraging tools like Adobe Premiere Pro and After Effects.</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Graphics Designer, Video Editor</h4>
            <h5>12/2022 - Present</h5>
            <p><em>freelancer</em></p>
            <p>
            <ul>
              <li>Created custom graphics and visual content for clients, including logos, brochures, social media posts, and marketing materials. Utilized tools such as Adobe Photoshop, Illustrator, and InDesign to deliver high-quality designs that meet client specifications and brand standards.</li>
              <li>Produced and edited videos for a variety of purposes, including promotional content, social media campaigns, and corporate presentations. Used software like Adobe Premiere Pro and After Effects to ensure professional and polished final products. </li>
              <li>Developed and implemented social media strategies to increase brand awareness and engagement. Managed social media accounts, created content calendars, and analyzed performance metrics to optimize campaigns and drive growth.</li>
          
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Placement Ambassadort</h4>
            <h5>01/2023 - 06/2023</h5>
            <p><em>CS FOR ALL</em></p>
            <p>
            <ul>
              <li>Planned and executed projects to promote the CS FOR ALL mission, including online coding workshops, mentoring sessions, and community events..</li>
              <li>Marketed the organization and its events through various channels, ensuring wide reach and engagement.</li>
              <li> Managed volunteer recruitment and scheduling, ensuring adequate support and smooth operation of events.</li>
              <li>Collaborated with the executive team to ensure the successful execution of events and initiatives, providing regular updates and feedback.</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <?php 
        $services = "SELECT * FROM `services`";
        $services_result = mysqli_query($con, $services);
      ?>

      <div class="row">
        <?php
          if($services_result -> num_rows > 0){
            while($services_data = $services_result->fetch_assoc()){
              ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="icon-box">
                    <div class="icon"><i class="<?=$services_data['icon']?>"></i></div>
                    <h4><?=$services_data['title']?></h4>
                    <p><?=$services_data['text']?></p>
                  </div>
                </div>
              <?php
            }
          }
          else{
            echo "No Service Found.";
          }
        ?>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php
              $cat_list = "SELECT * FROM `category`";
              $cat_result = mysqli_query($con, $cat_list);
              if($cat_result -> num_rows > 0){
                while($cat_data = $cat_result -> fetch_assoc()){
                  ?>
                  <li data-filter=".<?php echo $cat_data['name']?>"><?php echo $cat_data['name']?></li>
                  <?php
                }
              }
            ?>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        <?php
          $portfolio = "SELECT * FROM `portfolio`";
          $portfolio_result = mysqli_query($con, $portfolio);

          if($portfolio_result -> num_rows > 0){
            while($portfolio_data = $portfolio_result->fetch_assoc()){
              $category = $portfolio_data['category'];
                $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
                $category_result = mysqli_query($con, $category_sql);
                $category_data = mysqli_fetch_assoc($category_result);
              ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?=$category_data['name']?>">
                  <div class="portfolio-wrap">
                    <img src="<?=$portfolio_data['image']?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4><?=$portfolio_data['title']?></h4>
                      <p><?=$category_data['name']?></p>
                      <div class="portfolio-links">
                        <a href="<?=$portfolio_data['image']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $portfolio_data['title']?>"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.php?id=<?php echo $portfolio_data['id']?>" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            }
          }
          else{
            echo "NO Portfolio Found.";
          }
        ?>
      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?=$data['address']?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <?php   
                if($data['twitter']){
              ?>
                  <a href="<?=$data["twitter"]?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['facebook']){
              ?>
                  <a href="<?=$data["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['instagram']){
              ?>
                  <a href="<?=$data["instagram"]?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['youtube']){
              ?>
                  <a href="<?=$data["youtube"]?>" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['github']){
              ?>
                  <a href="<?=$data["github"]?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['linkedin']){
              ?>
                  <a href="<?=$data["linkedin"]?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <?php
                }
              ?>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?=$data['email']?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?=$data['phone']?></p>
          </div>
        </div>
      </div>
      <?php
        if(isset($_POST['send_message'])){
          global $con;
          $name = mysqli_real_escape_string($con, $_POST['name']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $subject = mysqli_real_escape_string($con, $_POST['subject']);
          $message = mysqli_real_escape_string($con, $_POST['message']);

          $contact = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
          mysqli_query($con, $contact);
        }
      ?>
      <form action="#" method="post" class="mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="text-center"><button type="submit" name="send_message">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <?php 
    
    $details = "SELECT * FROM `details` WHERE `details`.`id` = 1";
    $details_result = mysqli_query($con, $details);
    $details_data = mysqli_fetch_assoc($details_result);

    ?>
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <?=$details_data['company']?></a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>