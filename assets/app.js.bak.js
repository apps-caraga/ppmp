 const api_url = "http://localhost/ppmp/testapi.php";

 function switchTheme(el) { document.documentElement.setAttribute('data-theme', el.value) }

 function switchCSS(cssid, el) { document.getElementById(cssid).href = el.value; }

 function addFontSize(addPx) {
     html = document.querySelector('html');
     currentSize = parseFloat(window.getComputedStyle(html, null)
         .getPropertyValue('font-size'));
     html.style.fontSize = (currentSize + addPx) + 'px';
 }

 function toggleDarkMode(el) {
     var theme = 'light'
     if (el.innerText == '🌙') {
         el.innerText = '☀️';
         theme = 'dark';
     } else {
         el.innerText = '🌙';
     }
     document.documentElement.setAttribute('data-theme', theme)
     localStorage.setItem('data-theme', theme);
 }

 function toggle(div1, div2) {
     document.getElementById(div1).style.display = 'none';
     document.getElementById(div2).style.display = 'block';
 }


 function togglePasswordVisibility() {
     // const passwordInput = document.getElementById('password'); // Get the password input field
     //passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password'; // Toggle between 'password' and 'text'
     const passwordInputs = document.querySelectorAll('.password-input');
     passwordInputs.forEach(input => {
         input.type = input.type == 'password' ? 'text' : 'password';
     });

 }

 function message(msg, mtype = 'success') {
     nativeToast({
         message: msg,
         edge: true,
         timeout: 8000,
         type: mtype
     });
 }


 function showUserInfo(data) {
     document.getElementById('loginDiv').style.display = 'none';
     document.getElementById('registerDiv').style.display = 'none';
     document.getElementById('username').innerHTML = data.username + ' 🡣';
 }

 function getUserInfo() {
     fetch(api_url + '/me', {
             method: 'GET',
         })
         .then(response => response.json())
         .then(data => {
             console.log(data)
             if (data.id != null) {
                 showUserInfo(data);
             } else {
                 document.location.replace('login.php');
             }
         })
         .catch((error) => {
             console.error('Error:', error);
         });
 }

 function login(event) { // Define the login function
     event.preventDefault(); // Prevent the default form submission

     const username = document.getElementById('username').value; // Get username
     const password = document.getElementById('password').value; // Get password
     if (username.length === 0 || password.length === 0) {
         message('Please enter username and password.');
     } else {
         fetch(api_url + '/login', {
                 method: 'POST',
                 headers: {
                     'Content-Type': 'application/json',
                 },
                 body: JSON.stringify({ username, password }), // Send username and password as JSON
             })
             .then(response => response.json())
             .then(data => {
                 console.log(data)
                 if (data.id != null) {
                     document.location.replace('/ppmp');
                 } else {
                     // Handle login failure (e.g., show an error message)
                     message(data.message, 'error');
                 }
             })
             .catch((error) => {
                 console.error('Error:', error);
             });
     }
 }


 function logout() {
     fetch(api_url + '/logout', {
             method: 'POST',
         })
         .then(response => response.json())
         .then(data => {
             console.log(data)
             if (data.id != null) {
                 // Handle successful login (e.g., redirect or show a success message)
                 console.log('Bye:', data.username);
                 document.location.replace('login.php');
             } else {
                 // Handle login failure (e.g., show an error message)
                 console.error('Login failed:', data.message);
             }
         })
         .catch((error) => {
             console.error('Error:', error);
         });
 }





 window.addEventListener("load", function() {
     var dm = localStorage.getItem('data-theme');
     document.documentElement.setAttribute('data-theme', dm);
     this.document.getElementById('darkmode-toggle').innerHTML = (dm == 'dark') ? '☀️' : '🌙';
 });