<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Ιστορία</title>
</head>

<body>
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
		<ol style="background: #fff;border-bottom:2px solid black" class="breadcrumb">
			<li class="breadcrumb-item " aria-current="page">Οργανισμός</li>
			<li class="breadcrumb-item " aria-current="page">Ιστορία</li>
		</ol>
		<div style="padding: 0px 20px;">
			<h2>Οι Αστικές Συγκοινωνίες της Αθήνας μέσα στο χρόνο</h2>
			<p>
				Η Ανώνυμη Εταιρεία με την επωνυμία «ΟΡΓΑΝΙΣΜΟΣ ΑΣΤΙΚΩΝ ΣΥΓΚΟΙΝΩΝΙΩΝ ΑΘΗΝΩΝ» και τον διακριτικό τίτλο «Ο.Α.Σ.Α. Α.Ε.» είναι δημόσια επιχείρηση κοινωφελούς χαρακτήρα που ιδρύθηκε ως νομικό πρόσωπο ιδιωτικού δικαίου με τον ν.2175/93 (Α΄211) και υπόκειται νομοθετικά στις διατάξεις των ν. 3920/2011 (Α’ 33), ν. 3429/2005 (Α’ 314), ν. 4389/2016 (Α’ 94) και ν. 4548/2018 (Α’ 104), όπως ισχύουν. Σκοπός του Ο.Α.Σ.Α. είναι ο στρατηγικός και επιχειρησιακός σχεδιασμός, ο συντονισμός και ο έλεγχος του συγκοινωνιακού έργου που εκτελείται από τα μέσα (επίγεια και υπόγεια) μαζικής μεταφοράς στην περιφέρεια Αττικής. Η Ο.Α.Σ.Α. Α.Ε. είναι ο μοναδικός μέτοχος των εταιρειών παροχής συγκοινωνιακού έργου, «ΟΔΙΚΕΣ ΣΥΓΚΟΙΝΩΝΙΕΣ» (Ο.ΣΥ. Α.Ε) αρμόδια για τη λειτουργία των Λεωφορείων και των Τρόλεϊ και «ΣΤΑΘΕΡΕΣ ΣΥΓΚΟΙΝΩΝΙΕΣ» (ΣΤΑ.ΣΥ. Α.Ε), αρμόδια για τη λειτουργία των γραμμών 1 (πρώην ηλεκτρικός σιδηρόδρομος), 2 & 3 του ΜΕΤΡΟ και του Τραμ. Οι τρεις εταιρείες αποτελούν τον Όμιλο Ο.Α.Σ.Α.
				<br><br>
				Αρχές του 20ου αιώνα<br>
				Η εξέλιξη των δημόσιων συγκοινωνιών στην Αθήνα συνδέεται στενά με την αστική ανάπτυξη και την ανάγκη αστικών μετακινήσεων, που ξεκίνησαν στις αρχές του περασμένου αιώνα. Αρχικά οι Αστικές Συγκοινωνίες της Πρωτεύουσας λειτουργούσαν από ιδιώτες ιδιοκτήτες λεωφορείων, στους οποίους το Ελληνικό Δημόσιο είχε παραχωρήσει άδειες για εκτέλεση Αστικής Συγκοινωνίας.
				<br><br>
				1925<br>
				Ιδρύεται η πρώτη εταιρεία Αστικής Συγκοινωνίας στην Αθήνα με την επωνυμία Ελληνικοί Ηλεκτρικοί Σιδηρόδρομοι (Ε.Η.Σ.) Σκοπός της είναι η λειτουργία του υπόγειου σιδηρόδρομου από τον Πειραιά μέχρι τα βόρεια προάστια της Αθήνας.
				<br><br>
				1929<br>
				Ιδρύεται η Ηλεκτρική Εταιρεία Μεταφορών (Η.Ε.Μ.) με σκοπό τη λειτουργία των τραμ, των τρόλεϊ και των λεωφορείων στις κεντρικές περιοχές της Αθήνας και του Πειραιά.
				<br><br>
				1941<br>
				Ιδρύεται ο Οργανισμός Ελέγχου Αστικών Συγκοινωνιών (Ο.Ε.Α.Σ.) με σκοπό τον έλεγχο και την εποπτεία της παρεχόμενης εξυπηρέτησης από τους ιδιώτες λεωφορειούχους.
				<br><br>
				1952<br>
				Οι ιδιώτες λεωφορειούχοι οργανώνουν έξι Κοινά Ταμεία Εισπράξεως Λεωφορείων (Κ.Τ.Ε.Λ.).
				<br><br>
				1955<br>
				Η γραμμή του ηλεκτρικού σιδηροδρόμου φθάνει στην Κηφισιά.
				<br><br>
				1956<br>
				H Ηλεκτρική Εταιρεία Μεταφορών (Η.Ε.Μ.) περιορίζεται στη λειτουργία των τρόλεϊ μόνο.
				<br><br>
				1961<br>
				Ιδρύεται η πρώτη κρατική εταιρεία αστικών συγκοινωνιών με την επωνυμία Αστικές Συγκοινωνίες Περιοχής Αθηνών (Α.Σ.Π.Α.), γνωστή και ως 7ο Κ.Τ.Ε.Λ.
				<br><br>
				1968<br>
				Δημιουργείται το Ε.Κ.Τ.Ε.Λ. από την ένωση των έξι ιδιωτικών Κ.Τ.Ε.Λ.
				<br><br>
				1970<br>
				Η Ηλεκτρική Εταιρεία Μεταφορών (Η.Ε.Μ.) καταργείται και στη θέση της ιδρύεται εταιρεία με την επωνυμία Ηλεκτροκίνητα Λεωφορεία Πειραιώς Αθηνών Περιχώρων (Η.Λ.Π.Α.Π.) με μοναδικό μέτοχο το Ελληνικό Δημόσιο.
				<br><br>
				1976<br>
				Το Ελληνικό Δημόσιο αγοράζει την εταιρεία Ελληνικοί Ηλεκτρικοί Σιδηρόδρομοι (Ε.Η.Σ.) και ιδρύει μια νέα ανώνυμη εταιρεία με την επωνυμία Ηλεκτρικοί Σιδηρόδρομοι Αθηνών Πειραιώς (Η.Σ.Α.Π.), η οποία αναλαμβάνει τη λειτουργία του ηλεκτρικού σιδηροδρόμου και των λίγων λεωφορειακών γραμμών που διατηρούσε η προκάτοχός της Ε.Η.Σ. (γραμμή 1).
				<br><br>
				1977<br>
				Ψηφίζεται ο νόμος 588/1977 «Περί οργανώσεως των Αστικών Συγκοινωνιών Πρωτευούσης και άλλων τινών διατάξεων» (Α’ 148), με τον οποίο καταργείται ο Ο.Ε.Α.Σ. και ιδρύεται ο Οργανισμός Αστικών Συγκοινωνιών (Ο.Α.Σ.)., ο οποίος ανήκει εξ ολοκλήρου στο Ελληνικό Δημόσιο και έχει σκοπό τον σχεδιασμό, τον συντονισμό και την εποπτεία όλου του συστήματος αστικών συγκοινωνιών της Πρωτεύουσας. Με τον ίδιο νόμο, ιδρύεται δημόσια επιχείρηση με την επωνυμία Επιχείρηση Αστικών Συγκοινωνιών (Ε.Α.Σ.), με σκοπό τη, δια λεωφορείων, εξυπηρέτηση συγκοινωνιακών αναγκών της περιοχής Αθηνών – Πειραιώς.
				<br><br>
				1992<br>
				Ψηφίζεται ο νόμος 2078/1992 «Συγκοινωνίες με θερμικά λεωφορεία στην περιοχή Αθηνών - Πειραιώς και Περιχώρων» (Α΄139) με τον οποίο διαλύεται και τίθεται υπό εκκαθάριση η Επιχείρηση Αστικών Συγκοινωνιών (Ε.Α.Σ.). Η εκτέλεση του συγκοινωνιακού έργου με θερμικά λεωφορεία ανατίθεται σε Συγκοινωνιακές Επιχειρήσεις (Σ.ΕΠ.) που συνιστώνται για τον σκοπό αυτό, με μέλη (μετόχους) φυσικά πρόσωπα στα οποία παραχωρούνται άδειες κυκλοφορίας λεωφορείων.
				<br><br>
				1993<br>
				Ψηφίζεται ο ν. 2175/1993 «Οργάνωση ενιαίου φορέα αστικών συγκοινωνιών στην περιοχή Αθηνών – Πειραιώς και Περιχώρων» (Α΄ 211), με τον οποίο ιδρύεται η δημόσια επιχείρηση κοινωφελούς χαρακτήρα με την επωνυμία Ανώνυμη Εταιρεία Οργανισμός Αστικών Συγκοινωνιών Αθηνών (Ο.Α.Σ.Α. Α.Ε.) ως καθολικός διάδοχος του Οργανισμού Αστικών Συγκοινωνιών (Ο.Α.Σ.). Σκοπός του Ο.Α.Σ.Α. είναι η διεξαγωγή του συγκοινωνιακού έργου με όλα τα μέσα μαζικής μεταφοράς στην περιοχή Αθηνών – Πειραιώς και Περιχώρων, με ιδιαίτερη μέριμνα για την εξυπηρέτηση του επιβατικού κοινού και την ποιότητα ζωής στην περιοχή της αρμοδιότητάς του. Με τον ίδιο νόμο διαλύονται και τίθενται σε κατάσταση εκκαθάρισης οι Συγκοινωνιακές Επιχειρήσεις (Σ.ΕΠ.) που είχαν συσταθεί με τον ν. 2078/1992.
				<br><br>
				1996<br>
				Με Κοινή Απόφαση του Υπουργού Εθνικής Οικονομίας και Οικονομικών και του Υφυπουργού Μεταφορών και Επικοινωνιών, το καταστατικό του Ο.Α.Σ.Α. τροποποιείται και προσαρμόζεται στις διατάξεις του ν.2414/1996 «Εκσυγχρονισμός των Δημοσίων Επιχειρήσεων και Οργανισμών και άλλες διατάξεις» (Α΄ 135).
				<br><br>
				1998<br>
				Ψηφίζεται ο ν. 2669/1998 «Οργάνωση και λειτουργία των Αστικών Συγκοινωνιών στην περιοχή Αθηνών – Πειραιώς και Περιχώρων» (Α΄283), σύμφωνα με τις διατάξεις του οποίου οργανώνονται και διενεργούνται οι Αστικές Συγκοινωνίες της περιοχής Αθηνών – Πειραιώς και Περιχώρων, οι οποίες εξυπηρετούν το γενικότερο δημόσιο συμφέρον.
				<br><br>
				2004 - ΟΛΥΜΠΙΑΚΟΙ & ΠΑΡΑΟΛΥΜΠΙΑΚΟΙ ΑΓΩΝΕΣ «ΑΘΗΝΑ 2004»<br>
				Ο Ο.Α.Σ.Α. σχεδιάζει και υλοποιεί με επιτυχία το Ολυμπιακό Σχέδιο Μεταφορών που παρέχει υψηλού επιπέδου υπηρεσίες μετακίνησης με κύρια χαρακτηριστικά την ταχύτητα, την αξιοπιστία και την άνεση και συμβάλει καθοριστικά, κατά γενική ομολογία, στην επιτυχή διοργάνωση των Ολυμπιακών & Παραολυμπιακών Αγώνων της Αθήνας το καλοκαίρι του 2004.
				<br><br>
				2011<br>
				Ψηφίζεται ο ν. 3920/2011 «Εξυγίανση, αναδιάρθρωση και ανάπτυξη των αστικών συγκοινωνιών Περιφέρειας Αττικής και άλλες διατάξεις.» (Α΄33). Σύμφωνα με τις διατάξεις του ν. 3920/2011:
				<br><br>
				(α) Η εταιρεία ΕΘΕΛ Α.Ε.(λεωφορεία) συγχωνεύεται με την εταιρεία ΗΛΠΑΠ Α.Ε. (τρόλεϊ) με απορρόφηση της τελευταίας από την πρώτη και μετονομάζεται σε «ΟΔΙΚΕΣ ΣΥΓΚΟΙΝΩΝΙΕΣ ΑΝΩΝΥΜΗ ΕΤΑΙΡΕΙΑ» («Ο.ΣΥ.»).
				<br>
				(β) Η εταιρεία ΑΜΕΛ Α.Ε. (μετρό) συγχωνεύεται με τις εταιρείες ΗΣΑΠ Α.Ε. (ηλεκτρικός) και ΤΡΑΜ Α.Ε. (τραμ) με απορρόφηση των τελευταίων από την πρώτη και μετονομάζεται σε «ΣΤΑΘΕΡΕΣ ΣΥΓΚΟΙΝΩΝΙΕΣ ΑΝΩΝΥΜΗ ΕΤΑΙΡΕΙΑ» («ΣΤΑ.ΣΥ.»).
				<br>
				Μοναδικός μέτοχος των εταιρειών Ο.ΣΥ. Α.Ε. και ΣΤΑ.ΣΥ. Α.Ε. είναι η Ο.Α.Σ.Α. Α.Ε.
				<br><br>
				2018<br>
				Σύμφωνα με τις διατάξεις του άρθρου 380 του ν. 4512/2018, με το οποίο τροποποιείται ο ν. 4389/2016 «Επείγουσες διατάξεις για την εφαρμογή της συμφωνίας δημοσιονομικών στόχων και διαρθρωτικών μεταρρυθμίσεων και άλλες διατάξεις.» (Α΄94), την 01.01.2018 οι μετοχές της Ο.Α.Σ.Α. Α.Ε. (και των θυγατρικών της εταιρειών Ο.ΣΥ. ΑΕ και ΣΤΑ.ΣΥ. ΑΕ, σύμφωνα με τις διατάξεις του ν.3920/2011 που αφορούν τις διεταιρικές σχέσεις των εταιριών του Ομίλου Ο.Α.Σ.Α.) μεταβιβάζονται στην ΕΛΛΗΝΙΚΗ ΕΤΑΙΡΕΙΑ ΣΥΜΜΕΤΟΧΩΝ & ΠΕΡΙΟΥΣΙΑΣ Α.Ε. (Ε.Ε.ΣΥ.Π. Α.Ε.).
			</p>
		</div>


	</div>
	<?php include 'footer.php'; ?>
	</div>
</body>

</html>