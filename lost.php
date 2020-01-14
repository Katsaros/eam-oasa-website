<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
</head>

<body>
  <div class=" d-flex flex-column justify-content-between" style="min-height:100vh;position:relative;color:#343A40;">
    <div>

      <?php
      // Initialize the session
      session_start();
      // Check if the user is logged in, if not then show logoutmenu
      if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        include 'topMenu.php';
      } else {
        include 'topMenuLoggedIn.php';
      }
      ?>
      <nav aria-label="breadcrumb">
        <ol style="background: #fff;border-bottom:2px solid black" class="breadcrumb">
          <li class="breadcrumb-item " aria-current="page">Πληροφόρηση</li>
          <li class="breadcrumb-item " aria-current="page">Απωλεσθέντα</li>
        </ol>
      </nav>
      <div style="padding: 5px;">
        <h4 style="margin: 5px 0px;">
          ΥΠΗΡΕΣΙΕΣ ΑΠΩΛΕΣΘΕΝΤΩΝ ΑΝΤΙΚΕΙΜΕΝΩΝ
        </h4>
        <div style="font-size: 14px;">
          Γραφεία απωλεσθέντων αντικειμένων λειτουργούν σε όλες τις εταιρείες
          παροχής συγκοινωνιακού έργου.
        </div>
        <h4 style="margin: 5px 0px;">
          ΟΣΥ ΑΕ
        </h4>
        <div style="font-size: 14px;">
          Πληροφορίες για την επικοινωνία και ώρες λειτουργείας: Απωλεσθέντα
        </div>
        <h4 style="margin: 5px 0px;">
          ΠΡΟΑΣΤΙΑΚΟΣ
        </h4>
        <div style="font-size: 14px;">
          τηλ. 210-52.72000, φαξ 210-52.72.176,<label style="color: blue;">
            info@trainose.gr
          </label>
          Η παραλαβή των απωλεσθέντων γίνεται κατά τις εργάσιμες ημέρες εκτός
          Τετάρτης και από τις 08:00 – 16:00 από τα γραφεία της εταιρείας,
          Κρατίνου 9 & Αθηνάς, Αθήνα.
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>