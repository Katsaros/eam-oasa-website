<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
</head>

<body>
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
        <li class="breadcrumb-item " aria-current="page">Πληροφόρηση</li>
        <li class="breadcrumb-item " aria-current="page">Κόστος εισητηρίων</li>
    </ol>
    <div style="margin: 0 auto;width:75vw;">
        <h3 style="color:teal">ATH.ENA TICKET</h3>
        <p style="font-weight: bold">
            Το ATH.ENA TICKET είναι το νέο εισιτήριο για τις συγκοινωνίες της Αθήνας. Είναι κατασκευασμένο από χαρτί, με μέγεθος λίγο μεγαλύτερο από ένα συνηθισμένο εισιτήριο, αλλά περιλαμβάνει και μία ετικέτα RFID ώστε οι συναλλαγές (έκδοση-επικύρωση) να γίνονται ασύρματα.Το ATH.ENA TICKET δεν είναι ένα εισιτήριο μίας χρήσης. Μπορεί να «επαναφορτιστεί» ξανά και ξανά με οποιοδήποτε από τα διαθέσιμα προϊόντα κομίστρου μέσω των εκδοτηρίων ή των αυτόματων μηχανημάτων και να χρησιμοποιείται για μετακινήσεις μέχρις ότου να φθαρεί.
        </p>
        <div style="margin-left: -20px">
            <img src="https://www.athenstransport.com/wp-content/uploads/2019/05/%CE%95%CE%B9%CF%83%CE%B9%CF%84%CE%AE%CF%81%CE%B9%CE%B1-%CF%87%CF%89%CF%81%CE%AF%CF%82-%CE%B1%CE%B5%CF%81%CE%BF%CE%B4%CF%81%CF%8C%CE%BC%CE%B9%CE%BF-2019.png" alt="ticket">
        </div>
        <p style="font-weight: bold">
            Τα εισιτήρια 90 λεπτών, 24 ωρών και 5 ημερών ισχύουν για μετακινήσεις με: Λεωφορεία (πλην γραμμών Αεροδρομίου και Χ80), Τρόλεϊ, Μετρό (εκτός διαδρομών προς και από το Αεροδρόμιο), ΗΣΑΠ, Τραμ και Προαστιακό (μόνο στο αστικό τμήμα, δηλαδή εκτός Αεροδρομίου, σταθμών δυτικά της Μαγούλας και βόρεια του ΣΚΑ
        </p>
        <p style="font-weight: bold">
            Το εισιτήριο 24 ωρών είναι το μόνο από τα παραπάνω που ισχύει και στη γραμμή Χ80.
        </p>
        <p style="font-weight: bold">
            Το εισιτήριο 90 λεπτών ισχύει για απεριόριστο αριθμό μετεπιβιβάσεων μέσα σε 90 λεπτά. Το εισιτήριο 5 ημερών ισχύει για 5×24 ώρες από τη στιγμή της ακύρωσης.
        </p>
        <div style="margin-left: -20px">
            <img src="https://www.athenstransport.com/wp-content/uploads/2019/05/%CE%95%CE%B9%CF%83%CE%B9%CF%84%CE%AE%CF%81%CE%B9%CE%B1-%CE%B1%CE%B5%CF%81%CE%BF%CE%B4%CF%81%CE%BF%CE%BC%CE%AF%CE%BF%CF%85-2019.png" alt="ticket">
        </div>

    </div>
    <?php include 'footer.php'; ?>
</body>

</html>