<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>کتاب هایی برای ترید کردن</title>
	<link type="text/css" href="news/css/style.css" rel="stylesheet" />
</head>
<body>
    <?php include "include/header.php";?>

    <div id="cards">
		<!-- card one -->
        <?php 
         include "app/todo_list.php";
         $obj=new todo_list();
         $obj->setTbl2("books");
         $result=$obj->list_items();
		foreach($result as $value):
		?>
		<div id="card">
			<a href="books-index.php?id=<?php echo $value->id; ?>"><img id="card__image" src="<?php echo $value->cover; ?>" alt="wave" width="250px" height="150px" /></a>
			<div id="card-title">
				<a href="#" id="toggle-info btn">
					<span id="left"></span>
					<span id="right"></span>
				</a>
				<a href="books-index.php?id=<?php echo $value->id; ?>"><h2><?php echo $value->title; ?><small><?php echo $value->Summary; ?></small></h2></a>
			</div>
			
		</div>
		<?php endforeach;?>
		<!-- end card one -->
	</div>

    <?php include "include/Footer-with-logo.php";?>
    <script src="news/js/jquery-3.1.1.min.js"></script>
	<script src="news/js/modernizr.min.js"></script>
	<script  src="news/js/scripts.js"></script>
</body>
</html>