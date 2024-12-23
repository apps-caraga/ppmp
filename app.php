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
      <li class="float-right"><a href="#" id="username"></a>
        <ul>
          <li><a href="#profile">User Profile</a></li>
          <li><a href="#" onclick="logout()">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
 
 <main>
 
 <div class="row"  id="loginRegisterDiv">
  <div class="col-6" id="loginDiv"> 
      <form onsubmit="login(event)">
          <fieldset>
            <legend>Login</legend>
                <label for="username">Username</label>
                <input id="username" type="text" placeholder="Registered username" required>
                <label for="password">Password</label>
                <input id="password" type="password"  class="password-input"placeholder="Type your Password"  required>
                <input id="togglePassword" name="checkbox" type="checkbox"> 
                <label for="togglePassword" onclick="togglePasswordVisibility()">Show password</label><br/>
            <button type="submit">Login</button> or <a href='#register' onclick="toggle('loginDiv','registerDiv')">Create account</a>
          </fieldset>
        </form>
    </div>
    <div class="col-6" id="registerDiv" style="display:none"> 
      <form onsubmit="register(event)">
          <fieldset>
            <legend>Create Account</legend>
                <label for="r_username">Username</label>
                <input id="r_username" type="text" placeholder="Preferred username">
                <label for="r_password">Password</label>
                <input id="r_password" type="password" class="password-input" placeholder="Type your Password">
                <input id="togglePassword2" name="checkbox" type="checkbox"> 
                <label for="togglePassword2" onclick="togglePasswordVisibility()">Show password</label><br/>
            <button type="submit">Create Account</button> or <a href='#login' onclick="toggle('registerDiv','loginDiv')")">Login</a>
          </fieldset>
        </form>
      </div>
      <div class="col"> <br/>
      <h5>test</h5>
        </div>
  </div>    

  <div class="row">
 
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

<script>
   window.addEventListener("load", function() {
     var dm = localStorage.getItem('data-theme');
     document.documentElement.setAttribute('data-theme', dm);
     this.document.getElementById('darkmode-toggle').innerHTML = (dm == 'dark') ? '☀️' : '🌙';
     getUserInfo();
 });
  </script>
 

</html>
