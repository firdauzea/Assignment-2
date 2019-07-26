<?php
include "include/nav.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pizza</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Pizza Store</h1>
<body>
	<div class="container">
    <div class="row">
 <div class="col-lg-9">
 	<form name="Order" id="OrderForm" method="POST" action="functions/functions.php">
    <div class="control-group">
    	<label>Sizing : </label>
    	<div class="form-group col-xs-12 floating-label-form-group controls">
       <label>Small Sized Pizza</label>
       <input type="radio" name="PizzaSize" value="smallPizza"><br>
       <div class="control-group">
    	<div class="form-group col-xs-12 floating-label-form-group controls">
       <label>Medium Sized Pizza</label>
       <input type="radio" name="PizzaSize" value="medPizza"><br>
       <div class="control-group">
    	<div class="form-group col-xs-12 floating-label-form-group controls">
       <label>Large Sized Pizza</label>
       <input type="radio" name="PizzaSize" value="largePizza"><br>
   </div>
   <div class="form-group">
       <label>Sauce : </label>
       <div class="form-group col-xs-12 floating-label-form-group controls">
       <label>Royal Cheese</label>
       <input type="radio" name="Sauce" value="rc"><br>
       <div class="control-group">
    	<div class="form-group col-xs-12 floating-label-form-group controls">
       <label>Spicy Asian</label>
       <input type="radio" name="Sauce" value="sa"><br>
       <div class="control-group">
    	<div class="form-group col-xs-12 floating-label-form-group controls">
       <label>BBQ</label>
       <input type="radio" name="Sauce" value="bbq"><br>
   </div>
   <label>Topping :</label>
   <div class="form-group">
  <input type="checkbox" name="Topping[]" value="Beef">Beef<br>
    <input type="checkbox" name="Topping[]" value="Prawn">Prawn<br>
    <input type="checkbox" name="Topping[]" value="Chicken">Chicken<br>
    </div> 
       <!-- label>Topping :</label>
       <div class="form-group col-xs-12 floating-label-form-group controls">
       <label>Prawn</label>
       <input type="radio" name="Topping" value="PrawnTop"><br>
       <div class="control-group">
    	<div class="form-group col-xs-12 floating-label-form-group controls">
       <label>Chicken</label>
       <input type="radio" name="Topping" value="ChickenTop"><br>
       <div class="control-group">
    	<div class="form-group col-xs-12 floating-label-form-group controls">
       <label>Beef</label>
       <input type="radio" name="Topping" value="BeefTop"><br>
 -->   </div>  
 	   <div class="form-group">
            <button type="submit" class="btn btn-primary float-right">Order</button>
          </div>
            <!-- name="opt" value="1000" -->
</form>
<!-- <div class="container">
  <div class="form-group">
            <button type="submit" class="btn btn-primary" name="opt" value="0" >Add</button>
          </div>
</div> -->
</body>