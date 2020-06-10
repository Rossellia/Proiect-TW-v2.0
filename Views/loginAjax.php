<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../CSSs/login.css">
    <title>Log in - GoMaR</title>
    <?php include '../PHPs/loginControllerAjax.php';
    if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
      header('Location: home.php');
    };
    if(!isset($_SESSION['age_category']) && isset($_SESSION['username'])) {
      header('Location: initial_category.php');
    }
    ?>

    <script src="../JSs/login.js"></script>
    <!-- <script src="../JSs/ajaxLogin.js"></script> -->
  </head>
  <body>
    <nav class="topnav" id="myTopnav">
        <b>GoMaR</b>
        <a class="active" href="login.php">Log in</a>  <!--Pagina pe care se afla userul in mod curent-->
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </nav>

      <main>
        <h1>Having a fancy dinner? <br> Don't know what to do and what not?</h1>
        <h2>We help! Log in, good manners are on the way.</h2>
        <!-- <form action="home.php" method="POST" onsubmit="return submitFormAjax()"> -->
        <div>
            <ul id="form-messages"></ul>
          <p>Username*<br>
          <input type="text" name="username" id="username"></p>
          <br>
          <p>Password*<br>
          <input type="password" name="password" id="password"></p>
          <br><br>
          <!-- <input  id="button1" type="submit" value="Login" name="login"> -->
          <button type="submit" id="btn-submit">Login</button>
          <br><br>
        <!-- </form> -->
            <h3>Don't have an account? Register now!</h3>
            <a href ='register.php ' class="registerButton">Register</a>
        </div>



        <script>
        const form = {
            username: document.getElementById('username'),
            password: document.getElementById('password'),
            submit: document.getElementById('btn-submit'),
            messages: document.getElementById('form-messages')
        };

        form.submit.addEventListener('click', () => {
            const request = new XMLHttpRequest();

            request.onload = () => {
                let responseObject = null;

                try {
                    responseObject = JSON.parse(request.responseText);
                } catch (e) {
                    console.error('Could not parse JSON!');
                }

                if (responseObject) {
                    handleResponse(responseObject);
                }
            };

            const requestData = `username=${form.username.value}&password=${form.password.value}`;

            request.open('post', '../PHPs/loginControllerAjax.php');
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            request.send(requestData);
        });

        function handleResponse (responseObject) {
            if (responseObject.ok) {
                location.href = 'home.php';
            } else {
                while (form.messages.firstChild) {
                    form.messages.removeChild(form.messages.firstChild);
                }

                responseObject.messages.forEach((message) => {
                    const li = document.createElement('li');
                    li.textContent = message;
                    form.messages.appendChild(li);
                });

                form.messages.style.display = "block";
            }
        }
    </script>

      </main>
  </body>

  