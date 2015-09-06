<?php include 'header.php' ?>

	<h2 class="title">Age-o-mometer -==> <a href="/PHP/years_counter/index.php" class="button">click</a></h2>
	<div class="container">
    <?php
        $randNum = 0;
	do {
		$age = rand(0,28);
		$randNum ++;

	} while ($age);
	$verb = "were";
	$last = "years old";

	if ($randNum <= 4) {
		$verb = "were a";
		$last = "year old";
		$years = "<strong>baby</strong>";
		echo "<img src='http://theartmad.com/wp-content/uploads/2015/02/Baby-34.jpg' style='width:100%' alt='baby' />";

	} elseif ($randNum >= 5 && $randNum <= 10) {
	$years = "<strong>little kid</strong>";
	echo "<img src='http://www.slipperybrick.com/wp-content/uploads/2006/12/fisher-price-fp3-player.jpg' alt='kid' />";

	} elseif ($randNum >= 11 && $randNum <= 17) {
		$years = "<strong>teen</strong>";
		echo "<img src='http://www.tnooz.com/wp-content/uploads/2013/11/moody-teenager-690x300.jpg' style='width:100%' alt='teenager' />";

	} elseif ($randNum >= 18 && $randNum <= 37) {
		$years = "<strong>adult</strong>";
		echo "<img src='http://thepowerinparenting.com/wp-content/uploads/2012/05/Young-Adult-Male.jpg' alt='adult' />";

	} elseif ($randNum >= 38 && $randNum <= 60) {
	 	// ========= Why is this line so special?
		// ========= Seems that everytime it loads, it won't echo unless I force it...
		$years = "<strong>mature</strong>";
		echo "<img src='http://www.prohealthcare.com.au/images/cms/medical/58_adult-vaccinations.jpg' alt='mature_adult/>";
		echo "<p>What if you {$verb} <span class=\"accent\"> {$randNum} {$last}</span>?
		  <br/>Here's what you may look like in years.</p>";
		// =========

	} else {
		$years = "<strong>elder</strong>";
		echo "<img src='http://www.aaawm.org/imgs/Older_Adult_Male.jpg' alt='old'/>";
	}

	echo "<p>What if you {$verb} <span class=\"accent\"> {$randNum} {$last}</span>?
		  <br/>Here's what you may look like in <span class=\"accent underline\"> {$years}</span> years.</p>";
    ?>
    </div>

<?php include 'footer.php' ?>