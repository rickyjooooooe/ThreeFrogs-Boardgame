<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ThreeFrogs</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
        <a href="{{ route('adminindex') }}" class="admin-link me-4">Admin Panel</a>
          
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 817-0349-0707</span></i>
        </div>
       
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a  class="logo d-flex align-items-center me-auto me-xl-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">ThreeFrogs</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#games">Games</a></li>
            <li><a href="#gallery">Gallery</a></li>
           
              
            <li><a href="#contact">Location</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-book-a-table d-none d-xl-block" href="#book-a-table">Play Now</a>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/bg.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span>ThreeFrogs</span></h2>
            <p data-aos="fade-up" data-aos-delay="200">Unleashing unforgettable adventures, one game at a time!</p>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
              <a href="#games" class="cta-btn">Our Games</a>
              <a href="#book-a-table" class="cta-btn">Play Now!</a>
            </div>
          </div>
          
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

    <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
  <div class="row align-items-center gy-4">
    <!-- Image Column -->
    <div class="col-lg-6 order-1 order-lg-2 d-flex justify-content-center">
      <img src="assets/img/about.png" class="img-fluid about-img" alt="Board Games">
    </div>

    <!-- Text Content Column -->
    <div class="col-lg-6 order-2 order-lg-1 content text-start">
      <h3>About ThreeFrogs Board Games</h3>
      <p class="fst-italic">
        At ThreeFrogs, we bring people together through the timeless joy of board games. Whether you're a seasoned strategist or new to the tabletop world, we have something for everyone.
      </p>
      <ul class="text-start">
        <li><i class="bi bi-check2-all"></i> <span>Discover a wide selection of classic and modern board games.</span></li>
        <li><i class="bi bi-check2-all"></i> <span>Enjoy a cozy, welcoming space to play and connect with others.</span></li>
        <li><i class="bi bi-check2-all"></i> <span>Host your next event with us, from game nights to celebrations.</span></li>
      </ul>
      <p>
        Come join us for unforgettable moments of fun, strategy, and connection. Explore our board game library and let the games begin!
      </p>
    </div>
  </div>
</div>



    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

     <!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>WHY US</h2>
  <p>Why Choose ThreeFrogs Board Game Cafe</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <!-- Card Item 1 -->
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <div class="card-item">
        <span>01</span>
        <h4><a href="" class="stretched-link">Extensive Game Library</a></h4>
        <p>Choose from hundreds of classic and modern board games suitable for all ages and skill levels.</p>
      </div>
    </div><!-- Card Item -->

    <!-- Card Item 2 -->
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <div class="card-item">
        <span>02</span>
        <h4><a href="" class="stretched-link">Cozy Atmosphere</a></h4>
        <p>Enjoy a welcoming environment perfect for game nights, casual gatherings, or special celebrations.</p>
      </div>
    </div><!-- Card Item -->

    <!-- Card Item 3 -->
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
      <div class="card-item">
        <span>03</span>
        <h4><a href="" class="stretched-link">Tasty Treats & Drinks</a></h4>
        <p>Fuel your game sessions with delicious snacks, coffee, and beverages specially curated for gamers.</p>
      </div>
    </div><!-- Card Item -->

  </div>

</div>


    </section><!-- /Why Us Section -->

    <style>
  .game-img {
    width: 300px;
    height: 200px;
    object-fit: cover;
    border-radius: 10px; /* Optional: for rounded corners */
  }
</style>

<!-- Games Section -->
<section id="games" class="games section">

  <!-- Section Title -->
<div class="container section-title text-start" data-aos="fade-up">
  <h2>Games</h2>
  <p class="mb-5">Explore Our Exciting Board Games Collection</p>
</div><!-- End Section Title -->

  <div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 game-item isotope-item">
        <div class="game-card text-center">
        <img src="assets/img/games/splendor.jpg" class="game-img img-fluid rounded" alt="Splendor" width="300" height="300">
          <div class="game-content mt-3">
            <h4><a href="#" class="stretched-link">Splendor</a></h4>
            <p >Strategy</p>
          </div>
          <div class="game-description">
            Collect gems, build your empire, and outwit your opponents in this thrilling strategy game.
          </div>
        </div>
      </div><!-- Game Item -->

      <div class="col-lg-4 col-md-6 game-item isotope-item">
        <div class="game-card text-center">
        <img src="assets/img/games/azul.jpg" class="game-img img-fluid rounded" alt="Azul" width="300" height="0">
          <div class="game-content mt-3">
            <h4><a href="#" class="stretched-link">Azul</a></h4>
            <p>Tile Placement</p>
          </div>
          <div class="game-description">
            Craft beautiful mosaics in this award-winning tile-placement game.
          </div>
        </div>
      </div><!-- Game Item -->

      <div class="col-lg-4 col-md-6 game-item isotope-item">
        <div class="game-card text-center">
          <img src="assets/img/games/cluedo.jpg" class="game-img img-fluid rounded" alt="Cluedo">
          <div class="game-content mt-3">
            <h4><a href="#" class="stretched-link">Cluedo</a></h4>
            <p>Mystery</p>
          </div>
          <div class="game-description">
            Solve the murder mystery with your detective skills. Who did it, where, and how?
          </div>
        </div>
      </div><!-- Game Item -->

      <div class="col-lg-4 col-md-6 game-item isotope-item">
        <div class="game-card text-center">
          <img src="assets/img/games/werewolf.jpg" class="game-img img-fluid rounded" alt="Werewolf">
          <div class="game-content mt-3">
            <h4><a href="#" class="stretched-link">Werewolf</a></h4>
            <p>Social Deduction</p>
          </div>
          <div class="game-description">
            Bluff, deceive, and uncover the werewolves among you in this classic party game.
          </div>
        </div>
      </div><!-- Game Item -->

      <div class="col-lg-4 col-md-6 game-item isotope-item">
        <div class="game-card text-center">
          <img src="assets/img/games/camel-up.webp" class="game-img img-fluid rounded" alt="Camel Up">
          <div class="game-content mt-3">
            <h4><a href="#" class="stretched-link">Camel Up</a></h4>
            <p>Racing</p>
          </div>
          <div class="game-description">
            Bet on camels, manipulate the race, and aim to win big in this fun-filled racing game.
          </div>
        </div>
      </div><!-- Game Item -->

      <div class="col-lg-4 col-md-6 game-item isotope-item">
  <div class="game-card text-center">
    <div class="game-card-inner d-flex align-items-center justify-content-center h-100">
      <h4><a href="#" class="stretched-link">And a Lot More!</a></h4>
    </div>
  </div>
</div><!-- And a lot more -->



    </div><!-- Games Container -->

  </div>

</section><!-- /Games Section -->



    

   

    <section id="book-a-table" class="book-a-table section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Reserve Your Table</h2>
        <p>Play Now!</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Display success or error messages -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

       <!-- Reservation Form -->
<!-- Reservation Form -->
<form id="reservation-form" action="{{ route('reservations.store') }}" method="POST" role="form" class="php-email-form">
    @csrf
    <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-lg-4 col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
        <div class="col-lg-4 col-md-6">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
        </div>
        <div class="col-lg-4 col-md-6">
            <input type="date" name="date" class="form-control" id="date" placeholder="Date" required>
            @if ($errors->has('date'))
                <div class="text-danger" id="date-error">{{ $errors->first('date') }}</div>
            @endif
        </div>
        <div class="col-lg-4 col-md-6">
    <input type="time" class="form-control" name="time" id="time" placeholder="Time" required>
    <div class="text-danger" id="time-error" style="display: none;">Please select a time between 12:00 PM and 10:00 PM.</div>
</div>

<script>
    document.getElementById('time').addEventListener('change', function () {
        const timeInput = this.value;
        const errorDiv = document.getElementById('time-error');
        const time = parseInt(timeInput.split(':')[0], 10); // Extract the hour part of the time
        
        // Check if time is within the allowed range
        if (time < 12 || time > 22) {
            errorDiv.style.display = 'block';
            this.value = ''; // Reset the invalid value
        } else {
            errorDiv.style.display = 'none';
        }
    });
</script>


        <div class="col-lg-4 col-md-6">
            <input type="number" class="form-control" name="people" id="people" placeholder="# of table (5 person per table)" required>
        </div>
    </div>

    <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary" id="submit-button">Play Now!</button>
    </div>
</form>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('reservation-form');
    const submitButton = document.getElementById('submit-button');

    submitButton.addEventListener('click', function (event) {
        event.preventDefault();

        if (!isValidDateTime()) {
            showModal('Reservation Error', 'Please select a valid date and time between 12:00 PM and 10:00 PM.');
            return;
        }

        form.submit();
    });

    function isValidDateTime() {
        const date = document.querySelector('input[name="date"]').value;
        const time = document.querySelector('input[name="time"]').value;
        if (!date || !time) return false;

        const selectedDate = new Date(date);
        const now = new Date();

        // Validasi: Tanggal tidak boleh di masa lalu
        if (selectedDate.setHours(0, 0, 0, 0) < now.setHours(0, 0, 0, 0)) {
            return false;
        }

        // Validasi jam operasional (12:00 - 22:00)
        const [hour, minute] = time.split(":").map(Number);
        if (hour < 12 || hour >= 22) {
            return false;
        }

        return true;
    }

    // Cek session flash dari Laravel
    const reservationStatus = "{{ session('reservationStatus') }}";
    const errorMessage = "{{ session('errorMessage') }}";

    if (reservationStatus === 'error') {
        showModal('Reservation Failed', errorMessage || 'An error occurred. Please try again.');
    } else if (reservationStatus === 'success') {
        showModal('Reservation Successful', 'Thank you! Your reservation has been confirmed.');
    }

    function showModal(title, message) {
        const modalHTML = `
            <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" style="color: black;">${title}</h5>
                        </div>
                        <div class="modal-body" style="color: black;">${message}</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        `;

        document.body.insertAdjacentHTML('beforeend', modalHTML);
        const messageModal = new bootstrap.Modal(document.getElementById('messageModal'));
        messageModal.show();
    }
});
</script>









</section>


      </div>

    </section><!-- /Book A Table Section -->

   

    <!-- Gallery Section -->
   <!-- Gallery Section -->
<section id="gallery" class="gallery section">

<!-- Section Title -->
<div class="container section-title text-start" data-aos="fade-up">
  <h2>Gallery</h2>
  <p>Some photos from Our Place</p>
</div><!-- End Section Title -->

<div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

  <div class="row g-0">

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/gallery-1.png" class="glightbox" data-gallery="images-gallery">
          <img src="assets/img/gallery/gallery-1.png" alt="" class="img-fluid fixed-size">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/gallery-2.png" class="glightbox" data-gallery="images-gallery">
          <img src="assets/img/gallery/gallery-2.png" alt="" class="img-fluid fixed-size">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/gallery-3.png" class="glightbox" data-gallery="images-gallery">
          <img src="assets/img/gallery/gallery-3.png" alt="" class="img-fluid fixed-size">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/gallery-4.png" class="glightbox" data-gallery="images-gallery">
          <img src="assets/img/gallery/gallery-4.png" alt="" class="img-fluid fixed-size">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/gallery-5.png" class="glightbox" data-gallery="images-gallery">
          <img src="assets/img/gallery/gallery-5.png" alt="" class="img-fluid fixed-size">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/gallery-6.png" class="glightbox" data-gallery="images-gallery">
          <img src="assets/img/gallery/gallery-6.png" alt="" class="img-fluid fixed-size">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/gallery-7.png" class="glightbox" data-gallery="images-gallery">
          <img src="assets/img/gallery/gallery-7.png" alt="" class="img-fluid fixed-size">
        </a>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="assets/img/gallery/gallery-8.png" class="glightbox" data-gallery="images-gallery">
          <img src="assets/img/gallery/gallery-8.png" alt="" class="img-fluid fixed-size">
        </a>
      </div>
    </div><!-- End Gallery Item -->

  </div>

</div>

</section><!-- /Gallery Section -->



    <style>
      .fixed-size {
  width: 100%;
  height: 200px; /* Adjust height as needed */
  object-fit: cover; /* Ensures the image fills the space without distortion */
  border-radius: 8px; /* Optional: Add rounded corners */
}
</style>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Location</h2>
        <p>Our Location</p>
      </div><!-- End Section Title -->

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.560713908096!2d112.67166877375725!3d-7.290715971658368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fdac166ec2c3%3A0xb095a9ddd1996916!2sThree%20Frogs%20Boardgame!5e0!3m2!1sen!2sid!4v1734337281441!5m2!1sen!2sid" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Location</h3>
                <p>PTC lt. Ground/Homepro Pakuwon Mall GF (depan Sleep Center)</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Open Hours</h3>
                <p>Monday-Sunday<br>12PM-10PM</p>
              </div>
            </div><!-- End Info Item -->

          
         
          
            
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">
  <div class="container footer-top">
    <div class="row gy-4 justify-content-center">
      <div class="col-lg-4 col-md-6 footer-about text-center"> <!-- Added text-center class -->
      <div class="text-center">
  <span style="font-family: 'Times New Roman', serif; font-size: 2rem; color: white;">Three Frogs</span>
</div>


        <div class="footer-contact pt-3">
          <p>PTC lt. Ground</p>
          <p>Homepro Pakuwon Mall GF (depan Sleep Center)</p>
          <p>Surabaya</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+62 817-0349-0707</span></p>
        </div>
        <div class="social-links d-flex justify-content-center mt-4"> <!-- Added justify-content-center for centering icons -->
          <a href="https://g.co/kgs/9pPguuL"><i class="bi bi-google"></i></a>
          <a href="https://www.instagram.com/threefrogs.boardgame/"><i class="bi bi-instagram"></i></a>
          <a href="https://www.tiktok.com/@threefrogs.ptc"><i class="bi bi-tiktok"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>


  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

 
</body>
















</html>