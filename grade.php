<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/stlyes.css" />
</head>

<body>

	<div id="page-wrap">

		           <h1>You Scored</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
			$answer5 = $_POST['question-5-answers'];
			$answer6 = $_POST['question-6-answers'];
			$answer7 = $_POST['question-7-answers'];
			$answer8 = $_POST['question-8-answers'];
			$answer9 = $_POST['question-9-answers'];
			$answer10 = $_POST['question-10-answers'];
			$answer11 = $_POST['question-11-answers'];
			$answer12 = $_POST['question-12-answers'];
			$answer13 = $_POST['question-13-answers'];
			$answer14 = $_POST['question-14-answers'];
			$answer15 = $_POST['question-15-answers'];
			$answer16 = $_POST['question-16-answers'];
			$answer17 = $_POST['question-17-answers'];
			$answer18 = $_POST['question-18-answers'];
			$answer19 = $_POST['question-19-answers'];
			$answer20 = $_POST['question-20-answers'];


        
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
			if ($answer5 == "A") { $totalCorrect++; }
			if ($answer6 == "A") { $totalCorrect++; }
			if ($answer7 == "D") { $totalCorrect++; }
			if ($answer8 == "C") { $totalCorrect++; }
			if ($answer9 == "D") { $totalCorrect++; }
			if ($answer10 == "B") { $totalCorrect++; }
			if ($answer11 == "C") { $totalCorrect++; }
			if ($answer12 == "B") { $totalCorrect++; }
			if ($answer13 == "A") { $totalCorrect++; }
			if ($answer14 == "C") { $totalCorrect++; }
			if ($answer15 == "D") { $totalCorrect++; }
			if ($answer16 == "C") { $totalCorrect++; }
			if ($answer17 == "A") { $totalCorrect++; }
			if ($answer18 == "C") { $totalCorrect++; }
			if ($answer19 == "D") { $totalCorrect++; }
			if ($answer20 == "D") { $totalCorrect++; }






			
            
            if($totalCorrect==20){
				echo"<h2>Congratulations 2018 Fifa world cup champion</h2> "."<div id='results'>$totalCorrect /20 correct</div>";
			} elseif($totalCorrect>=16&&$totalCorrect<20){echo"<h2>well done with more training you can take the prize</h2>"."<div id='results'>$totalCorrect /20 correct</div>";

			} else{echo"<h2>You need More training</h2>". "<div id='results'>$totalCorrect /20 correct</div>";
			
			}
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>