
<!DOCTYPE html>
<html lang="en">
@if(!session('is_admin'))
    <script>
        window.location.href = "{{ route('adminlogin') }}";
    </script>
@endif
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Admin-TreeFrogs</title>
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
  <!-- token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>


  <header id="header" class="header fixed-top">

            <div class="branding d-flex align-items-cente">

                  <div class="container position-relative d-flex align-items-center justify-content-between">
                
              <h1 style="color: white;"class="logo d-flex align-items-center me-auto me-xl-0">ThreeFrogs</h1> 
            </a>




        <nav id="navmenu" class="navmenu">
          <ul>
            <li>Admin Homepage</li> 
           </ul>
         <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
       
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title position-relative" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
      <div class="container position-relative">
        <h1>Welcome, Admin! <br></h1>
        <p>Back to Home.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Reservation Table</h2>
        <p>Reservation<br></p>
      </div><!-- End Section Title -->

      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Reservations</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <style>
        /* Add some spacing between the input and table */
        .filter-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<style>
        /* Styling for the table */
        .table {
            border-collapse: collapse;
            width: 100%;
        }
        .table th, .table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        .table th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        /* Add some spacing between the input and table */
        .filter-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
  <!-- Date Filter -->
  <div class="filter-container" style="padding-left: 20px; padding-right: 20px;">
    <label for="filter-date" class="form-label">Filter by Date:</label>
    <input 
        type="date" 
        id="filter-date" 
        class="form-control mb-3" 
        onchange="filterByDate()"
    />
  </div>

  <!-- Reservations Table --><div id="main-content">
        <!-- Your main content here -->

  <div style="padding-left: 20px; padding-right: 20px;">
    <table class="table table-bordered" id="reservations-table">
      <thead>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Date</th>
              <th>Time</th>
              <th>Table</th>
              <th>Message</th>
              <th>Actions</th>
          </tr>
      </thead>
      <tbody>
          @foreach($reservations as $reservation)
          <tr data-reservation-date="{{ $reservation->reservation_date }}">
              <td>{{ $reservation->id }}</td>
              <td>{{ $reservation->name }}</td>
              <td>{{ $reservation->email }}</td>
              <td>{{ $reservation->phone }}</td>
              <td>{{ $reservation->reservation_date }}</td>
              <td>{{ $reservation->reservation_time }}</td>
              <td>{{ $reservation->num_people }}</td>
              <td>{{ $reservation->message }}</td>
              <td>
                  <button class="btn btn-danger btn-delete" onclick="deleteRow(this, {{ $reservation->id }})">Check Out</button>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
    <div class="container section-title" data-aos="fade-up">
    </div>
    <div class="container section-title" data-aos="fade-up">
   
<div class="container">
    <h1 class="text-center mb-4">Analytics</h1>

    <!-- 📊 Peak Hours Chart -->
    <div class="section-title text-center mt-5">
        <p>Peak Hours Chart</p>
    </div>
    <canvas id="peakHoursChart"></canvas>

    <!-- 📊 Top Customers Chart -->
    <div class="section-title text-center mt-5">
        <p>Customers Average Playtime</p>
    </div>
    <canvas id="avgPlaytimeChart"></canvas>


    <!-- 📊 Trend Reservations Over Time -->
    <div class="section-title text-center mt-5">
        <p>Trend of Reservations Over Time</p>
    </div>
    <canvas id="trendChart"></canvas>

    <!-- 📊 Reservations by Hour and Day -->
    <div class="section-title text-center mt-5">
        <p>Reservations by Hour and Day</p>
    </div>
    <canvas id="reservationsHourDayChart"></canvas>
</div>

<!-- ✅ Load Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // 📌 Peak Hours Chart
    var ctx1 = document.getElementById('peakHoursChart').getContext('2d');
    new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: @json($hours),
            datasets: [{
                label: 'Number of Reservations',
                data: @json($reservations_count),
                backgroundColor: 'rgba(242, 247, 247, 0.5)',
                borderColor: 'rgb(128, 152, 152)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: { title: { display: true, text: 'Hours of the Day' } },
                y: { beginAtZero: true, title: { display: true, text: 'Number of Reservations' } }
            }
        }
    });


     // 📌 Average Playtime Per Day Chart
     var ctxAvgPlaytime = document.getElementById('avgPlaytimeChart').getContext('2d');
    new Chart(ctxAvgPlaytime, {
        type: 'line',
        data: {
            labels: @json($dates),
            datasets: [{
                label: 'Avg Playtime (minutes)',
                data: @json($avg_playtimes),
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderWidth: 2,
                fill: true
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: { title: { display: true, text: 'Date' } },
                y: { title: { display: true, text: 'Avg Playtime (minutes)' }, beginAtZero: true }
            }
        }
    });


    // 📌 Trend of Reservations Over Time
    var ctx3 = document.getElementById('trendChart').getContext('2d');
    new Chart(ctx3, {
        type: 'line',
        data: {
            labels: @json($dates),
            datasets: [{
                label: 'Reservations Per Day',
                data: @json($daily_reservations),
                borderColor: 'rgb(240, 240, 245)',
                backgroundColor: 'rgba(162, 162, 197, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: { title: { display: true, text: 'Date' } },
                y: { beginAtZero: true, title: { display: true, text: 'Number of Reservations' } }
            }
        }
    });

    // 📌 Reservations by Hour and Day
    var ctx4 = document.getElementById('reservationsHourDayChart').getContext('2d');

    var hourlyData = @json($hourlyData);
    var daysOfWeek = @json($daysOfWeek);
    var hours = [...Array(24).keys()].map(h => `${h}:00`);

    var datasets = [];
    var colors = ['#FF5733', '#33FF57', '#3357FF', '#FF33A1', '#A133FF', '#33FFF5', '#FFD700'];

    daysOfWeek.forEach((day, index) => {
        datasets.push({
            label: day,
            data: hourlyData[day],
            backgroundColor: colors[index],
            borderColor: colors[index],
            borderWidth: 1
        });
    });

    new Chart(ctx4, {
        type: 'bar',
        data: {
            labels: hours,
            datasets: datasets
        },
        options: {
            responsive: true,
            scales: {
                x: { title: { display: true, text: 'Hour of the Day' } },
                y: { beginAtZero: true, title: { display: true, text: 'Number of Reservations' } }
            }
        }
    });
</script>





        <h2>Check In Out</h2>
        <p>Information Table<br></p>
      </div><!-- End Section Title -->
      <!-- Date Filter -->

  
      <div class="filter-container" style="padding-left: 20px; padding-right: 20px;">
      <label for="filter-date">Filter by Date:</label>
<input type="date" id="filter-date-deleted" class="form-control" onchange="filterReservationsByDate()" />
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Reservation Date</th>
            <th>Reservation Time</th>
            <th>End Time</th>
            <th>Duration (minutes)</th>
            <th>Table</th>
            <th>Checked Out At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($deletedReservations as $deleted)
            <tr id="log-{{ $deleted->id }}" data-reservation-date="{{ \Carbon\Carbon::parse($deleted->reservation_date)->format('Y-m-d') }}">
                <td>{{ $deleted->user_id }}</td>
                <td>{{ $deleted->name }}</td>
                <td>{{ $deleted->email }}</td>
                <td>{{ $deleted->phone }}</td>
                <td>{{ $deleted->reservation_date }}</td>
                <td>{{ $deleted->reservation_time }}</td>
                <td>{{ $deleted->end_time }}</td>
                <td>{{ $deleted->duration_time }}</td>
                <td>{{ $deleted->num_people }}</td>
                <td>{{ $deleted->created_at }}</td>
                <td>
                    <button class="btn btn-danger delete-log-button" data-id="{{ $deleted->id }}">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



</div>
<!-- JavaScript for handling the AJAX request -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('click', '.delete-log-button', function() {
    var logId = $(this).data('id'); // Get the log ID from the button's data-id attribute

    $.ajax({
        url: '/admin/deleted-reservations/' + logId, // Your delete route
        type: 'DELETE', // Use DELETE method
        data: {
            _token: '{{ csrf_token() }}', // Include CSRF token for security
        },
        success: function(response) {
            if (response.success) {
                // Remove the row from the table if deletion is successful
                $('#log-' + logId).remove();
            } else {
                alert(response.message); // Display error message if not successful
            }
        },
        error: function(xhr, status, error) {
            console.log("Error: " + error);
            alert('An error occurred while deleting the log.');
        }
    });
});

</script>

<script>
    function filterReservationsByDate() {
        const selectedDate = document.getElementById('filter-date-deleted').value; // Ambil tanggal yang dipilih
        console.log("Selected Date:", selectedDate); // Debugging: Cek nilai input date

        const rows = document.querySelectorAll('tbody tr'); // Ambil semua baris tabel

        rows.forEach(row => {
            const rowDate = row.getAttribute('data-reservation-date'); // Ambil tanggal dari atribut data
            console.log("Row Date:", rowDate); // Debugging: Cek apakah data-reservation-date terbaca

            if (rowDate === selectedDate || selectedDate === '') {
                row.style.display = ''; // Tampilkan jika tanggal cocok
            } else {
                row.style.display = 'none'; // Sembunyikan jika tidak cocok
            }
        });
    }
</script>



  </div>

  <script>
  function deleteRow(button, reservationId) {
    if (confirm("Are you sure you want to check out this reservation?")) {
        const row = button.closest('tr'); // Find the closest row to the button

        // Send a DELETE request to the server
        fetch(`/reservations/${reservationId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // Include CSRF token
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (response.ok) {
                row.remove(); // Remove the row from the table
                alert("Reservation checked out.");
  
            } else {
                return response.json().then(data => {
                    throw new Error(data.message || "Failed to check out reservation.");
                });
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert(error.message || "An error occurred while checking out the reservation.");
        });
    }
}

    // Function to filter rows by date
    function filterByDate() {
        const selectedDate = document.getElementById('filter-date').value; // Get the selected date
        const rows = document.querySelectorAll('#reservations-table tbody tr'); // Get all rows in the table body

        rows.forEach(row => {
            const rowDate = row.getAttribute('data-reservation-date'); // Get the date from the row's data attribute

            // Show the row if it matches the selected date, otherwise hide it
            if (rowDate === selectedDate || selectedDate === '') {
                row.style.display = ''; // Show row if the dates match
            } else {
                row.style.display = 'none'; // Hide row if the dates don't match
            }
        });
    }

  </script>

</body>

</html>

    </section><!-- /Starter Section Section -->

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