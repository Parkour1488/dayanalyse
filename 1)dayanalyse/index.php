<?php 
include("webclass.php");
$sc=new SiteClass;
?> 
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Анализ дней в выбранном месяце</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="jqui/jquery-ui.css" rel="stylesheet">
<script src="js/jquery-3.7.1.js"></script>
<script src="jqui/jquery-ui.js"></script>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
 
<main class=" w-50 m-auto">
  <form action="" method="post">
  Год :
  <select name="year" id="year" class="form-select form-select-sm">
  <?php $sc->year_select(); ?>	
	</select>
	<br>
  <hr>
  
  Месяц:
  <select name="mouth" id="mouth"class="form-select form-select-sm">
  <?php $sc->mouth_select(); ?>	
	</select>
	<br>
  <hr>
  <button type="submit" id="sbmbutton" class="btn btn-primary">посчитать</button>
  </form>
 <?php $sc->result(); ?>
</main>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script>
 
$( "#sbmbutton" ).on( "click", function() {
let year= $('#year option:selected').val();
let mouth= $('#mouth option:selected').val();

console.log(year);
console.log(mouth);
 
    $.post('webclass.php', {year: year,mouth:mouth}, function(data){
    
    });
} );

</script>
    </body>
</html>
