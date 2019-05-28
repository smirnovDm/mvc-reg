<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>web site</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="../../js/tasks.js" type="text/javascript"></script>
	<link href="css/question.css" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   
    </head>
    
    <body>
	<h1>My site</h1>
	<nav>
	    <ul>
		<li><a href="/">Home</a></li>
		<li><a href="/news">Tasks</a></li>
		<li><a href="#">Questions</a></li>
		<li><a href="#">Gallery</a></li>
	    </ul>
	</nav>
	<main>
	    <?php $path = ROOT . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $content_view . '.php';
            include_once $path;  ?>
	</main>
    </body>
</html>
