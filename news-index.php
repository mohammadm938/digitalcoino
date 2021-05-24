<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موضوع اخبار</title>
    <link rel="stylesheet" href="news/css/page.css">
</head>
<body id="body-p">
    <?php include "include/header.php"?>
    <div id="content-page">
        <?php
            include "app/todo_list.php";
            $id=$_GET['id'];
            $obj=new todo_list();
            $obj->setTbl("news");
            $result=$obj->searchData("id",$id);
        ?>
        <h1><?php echo $result->title;?></h1>
        <div id="img-box-page">
            <img id="img-p" src="<?php echo $result->cover;?>" alt="یه عکس">
        </div>
        <h2><?php echo $result->title;?></h2>
        <div id="p-page">
        <?php echo $result->text;?>
        </div>

    </div>
    <?php include "include/Footer-with-logo.php"?>
</body>
</html>