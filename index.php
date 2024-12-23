<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FOCRG</title>
  <meta name="description" content="Minimal CSS3 for basic HTML5 Tags.">
  <meta name="keywords" content="CSS,Minimal,Tag,Style,Bootstrap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon" />
  <link id="maincss"  rel="stylesheet" href="assets/classless.css?v=<?=rand(1,100)?>" />
</head>
  
<body id="top">
  <!-- Header -->
  <header >
  <section>
    <h1>Classless.css</h1>
    <p><strong>Less classes. Less overhead.</strong></p>


  <!-- Navigation -->
  <nav class="noprint">
    <ul>
      <li>
        <img style="height: 1.2em;" src="assets/favicon.png">
        <span>&ensp;Hello</span>
      </li>
      <!--li><a href="#demo">Demo</a></li-->


      <li class="float-right sticky"><a onclick="addFontSize(-1)">ᴀ-</a>|<a onclick="addFontSize(1)">A+</a></li>
      <li class="float-right sticky"><a onclick="toggleDarkMode(this)" id="darkmode-toggle" title="Switch dark and light mode."></a></li>
      <li class="float-right"><a href="#" id="username">Demo</a>
        <ul>
          <li><a href="#profile">User Profile</a></li>
          <li><a href="#" onclick="logout()">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
 
 <main>
 
 <div class="row">
  <div class="col"> 
      hello
      </div>
    </div>    
    
    
  </main>

  <footer>
    <hr>
    <h5>DSWD FO Caraga / Regional ICT Management Section</h5>
    <p>
      <a href="#">caraga.dswd.gov.ph</a> / 
      <a href="mailto:#">rictms.focrg@dswd.gov.ph</a><br>
  </p>
  </footer>
</body>

<!-- Extra CSS -->

<link id="themecss" rel="stylesheet" href="assets/addons/themes.css" />
<script src="assets/app.js?v=123"></script>
 <script>
   window.addEventListener("load", function() {
     var dm = localStorage.getItem('data-theme');
     document.documentElement.setAttribute('data-theme', dm);
     this.document.getElementById('darkmode-toggle').innerHTML = (dm == 'dark') ? '☀️' : '🌙';
     getUserInfo();
 });
  </script>

</html>
