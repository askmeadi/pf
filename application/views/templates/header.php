<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pesanfutsal beta</title>
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/css/foundation.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/css/app.css';?>"/>
  
  </head>

  <body>

<!-- HEADER SECTION -->
<div class="header-image">
<div class="row">

<div class="custom-top-bar">
  <ul class="menu vertical medium-horizontal">
    <li class="locations-service-times"><a href="">Locations &amp; Services</a></li><li class="watch-live"><a href="">Join Member</a></li><li class="give"><a href="">Bantuan</a></li>
  </ul>
</div>

<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="main-menu">

  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Site Title</li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu vertical medium-horizontal expanded" data-responsive-menu="drilldown medium-dropdown">
      <li><a href="#">Sign In</a></li>
      <li><a href="#">Sign Up</a></li>
    </ul>
  </div>
</div>
</div>

<div class="row top-mg">
<div class="medium-8 large-8 large-centered columns">
<div class="callout secondary">
<form>
<div class="row">
<div class="small-12 columns">
<label>Label
  <select>
    <option value="husker">Husker</option>
    <option value="starbuck">Starbuck</option>
    <option value="hotdog">Hot Dog</option>
    <option value="apollo">Apollo</option>
  </select>
</label>
</div>
 <div class="medium-6 columns">
      <label>Label
        <input type="text" placeholder=".medium-6.columns">
      </label>
    </div>
    <div class="medium-6 columns">
      <label>Label
        <input type="text" placeholder=".medium-6.columns">
      </label>
    </div>
<div class="small-12 columns">
<a class="success button float-right" href="<?=base_url().'index.php/main/result';?>" >Search Now</a>
</div>
</div>
</form>
</div>
</div>
</div>

</div>









