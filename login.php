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
  <link rel="stylesheet" href="assets/native-toast.css" />
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
      <li class="float-right sticky"><a onclick="addFontSize(-1)">ᴀ-</a>|<a onclick="addFontSize(1)">A+</a></li>
      <li class="float-right sticky"><a onclick="toggleDarkMode(this)" id="darkmode-toggle" title="Switch dark and light mode."></a></li>
    </ul>
  </nav>
 
 <main>
 
 <div class="row">
  <div class="col-4"> 
      <form onsubmit="login(event)">
          <fieldset>
            <legend>Login</legend>
                <label for="username">Username</label>
                <input id="username" type="text" placeholder="Registered username" required>
                <label for="password">Password</label>
                <input id="password" type="password"  class="password-input"placeholder="Type your Password"  required>
                <input id="togglePassword" name="checkbox" type="checkbox"> 
                <label for="togglePassword" onclick="togglePasswordVisibility()">Show password</label><br/>
            <button type="submit">Login</button> or <a href='register.php'>Create account</a>
          </fieldset>
        </form>
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
<script src="assets/native-toast.min.js"></script>
<script src="assets/app.js?v=12345633"></script>
 

</html>
