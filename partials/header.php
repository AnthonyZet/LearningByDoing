<?php 
	$page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
	if( $page_name == 'index') $page_name = 'home';
    require_once "functions.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Option 1: Include in HTML -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
 <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/main.css">
    <title>Brainzone</title>
</head>
<body>


    <div class="body-container">
<!--
        <div class="body-header">
            <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider round">
            </div>

            </label>
            <em>Zapni světlý režim!</em>
            </div>

        </div>
-->          
<section class="bg-dark text-light  p-5 text-center text-sm-start">
    <div class="container-fluid">
        <div class="row">
          <div class="col bg-secondary"><h1 class="text-center">Juráš smrdí</h1>
          </div>
        </div>
    </div>
</section>    
            

 <section class="bg-dark text-light   text-center text-sm-start">
    <div class="container-fluid">
        <div class="row">
          <div class="col-2 bg-dark">
          <ul class="list-group">MENU
                <?php require_once ("functions.php");
                                $words = glob('../*_words.php');
                                $words = array_reverse($words);

                                createMenu($page_name, $words);
                        ?>
                </ul>
                <ul class="nav-left-ul">Užitečné fráze
                    <?php 
                        $menu_temata = glob('*_remind.php');
                        
                        $menu_temata = array_reverse($menu_temata);

                        createMenu($page_name, $menu_temata);
                    ?>
                </ul>
          </div>

          <div class="col-8" style="min-height: 84vh">     
                