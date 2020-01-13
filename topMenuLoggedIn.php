<?php

echo'
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">OASA</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="/eam-oasa-website/index.php">Αρχική</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/eam-oasa-website/platform/index.php">Προφίλ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fortisi.php">Φόρτιση</a>
        </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Μετακίνηση
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Μέσα </a>
              <a class="dropdown-item" href="/eam-oasa-website/veltisti-diadromi.php">Βέλτιστη Διαδρομή</a>
              <a class="dropdown-item" href="#"
                >Πληροφόρηση σε Πραγματικό χρόνο</a
              >
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Πληροφόρηση
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/eam-oasa-website/search.php">Αναζήτηση</a>
              <a class="dropdown-item" href="/eam-oasa-website/lost.php">Απωλεσθέντα</a>
              <a class="dropdown-item" href="/eam-oasa-website/amea.php">Αμέα</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Νέα
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/eam-oasa-website/pressRelease.php">Δελτία τύπου </a>
              <a class="dropdown-item" href="#">Δρομολόγια</a>
              <a class="dropdown-item" href="#">Προκυρήξεις</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Οργανισμός
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/eam-oasa-website/history.php">Ιστορία </a>
              <a class="dropdown-item" href="#">Διοικητική Δομή</a>
              <a class="dropdown-item" href="#">Καταστατικό</a>
              <a class="dropdown-item" href="#">Εταιρείες ομίλου</a>
              <a class="dropdown-item" href="#">Οργανόγραμμα</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Επικοινωνία
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/eam-oasa-website/parapona.php">Παράπονα </a>
              <a class="dropdown-item" href="#">Επαγγελματίες</a>
              <a class="dropdown-item" href="#">Επικοινωνία με φορείς </a>
              <a class="dropdown-item" href="#">Σύνδεσμοι </a>
            </div>
          </li>
        </ul>
	    <button  style="margin-left:auto;" type="button" class="btn btn-light"><a style="color:#343A40;" href="/eam-oasa-website/platform/logout.php">Αποσύνδεση</a></button>

      </div>
    </nav>
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
	'
	?>