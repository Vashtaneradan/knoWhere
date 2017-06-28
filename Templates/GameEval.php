<div id="gamewrapper">

   <?php
   if ($_POST['correct'] == true)
   {
   		$rightwrongmessage = "richtig";
   }
   else
   {
   		$rightwrongmessage = "falsch";
   }
   
   	$_SESSION['hearts'] = $_POST['hearts'];
	$_SESSION['score'] = $_POST['score'];
	$_SESSION['gameQuestionCounter'] += 1;
	
	header("refresh:5;url=index.php?page=Game");
	echo "<div id='QuizRightWrongMessage'>Das war $rightwrongmessage !</div>";
   ?>

</div>