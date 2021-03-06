<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Δελτία Τύπου</title>
</head>

<body>
    <div style="min-height: 100vh;display:flex;flex-direction:column;">
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
        <ol style="background: #fff;border-bottom:2px solid black" class="breadcrumb">
            <li class="breadcrumb-item " aria-current="page">Νέα</li>
            <li class="breadcrumb-item " aria-current="page">Προκηρύξεις</li>
        </ol>
        <div style="padding:30px;padding-bottom:100px;">
            <h3 style="color:#343A40">Προκηρύξεις</h3>
            <div style="padding: 3px 0;">
                <a style="font-size:15px;" href="">18.09.19 Προκήρυξη Συνοπτικού Διαγωνισμού για την ανάθεση υπηρεσιών «ΚΑΘΑΡΙΣΜΟΥ</a>
            </div>
            <div style="padding: 3px 0;">
                <a style="font-size:15px;" href="">24.09.18 Προκήρυξη Συνοπτικού Διαγωνισμού Αρ. Διακήρυξης (16-2018)</a>
            </div>
            <div style="padding: 3px 0;">
                <a style="font-size:15px;" href="">18.09.18 Προκήρυξη Ηλεκτρονικού Ανοικτού Διαγωνισμού.</a>
            </div>
            <div style="padding: 3px 0;">
                <a style="font-size:15px;" href="">04.06.18 Προκήρυξη Διεθνούς Ηλεκτρονικού Ανοικτού Διαγωνισμού</a>
            </div>
            <div style="padding: 3px 0;">
                <a style="font-size:15px;" href="">23.07.19 Προκήρυξη Συνοπτικού Διαγωνισμού «Καμπάνια για την ενίσχυση της χρήσης της ATH.ENA CARD</a>
            </div>
            <div style="padding: 3px 0;">
                <a style="font-size:15px;" href="">16.11.18 Δελτίο τύπου της ΣΤΑΣΥ - ΠΟΛΥΤΕΧΝΕΙΟ 2018</a>
            </div>
            <div style="padding: 3px 0;">
                <a style="font-size:15px;" href="">09.11.18 Δελτίο τύπου της ΣΤΑΣΥ - Δρομολόγια προς αεροδρόμιο</a>
            </div>
            <!-- <div class="col-lg-3">
			</div>
			<div class="col-lg-6">
				<script src="//rss.bloople.net/?url=http%3A%2F%2Fwww.oasa.gr%2Fnews%2Fel%2Fdeltiatipounews.xml&showtitle=false&type=js"></script>
			</div>
			<div class="col-lg-3">
				</div> -->
        </div>
        <div>
            <?php include 'footer.php'; ?>
        </div>
    </div>
</body>

</html>