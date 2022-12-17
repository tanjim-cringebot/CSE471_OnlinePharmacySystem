<?php
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    
        <!-- Bootstrap CSS -->
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous"
        />

    <title>Online Pharmacy</title>
    <style>
      .de {
        text-decoration: none;
      }

      .box {
        height: 70px;
        width: 50%;
        line-height: 70px;
        text-align: center;

        justify-content: center;
      }

      .bordershadow {
        height: 70px;
        width: 80%;
        line-height: 70px;
        text-align: center;
        border-radius: 3px;
        box-shadow: 0 0 0 1px rgb(0 0 0 / 20%);
        transition: all 200ms ease-out;
      }

      .nav-text :hover {
        color: rgb(250, 0, 50);
      }
      .form-submit-button {
	    background: #0066A2;
	    color: white;
	    border-style: outset;
	    border-color: #0066A2;
	    height: 50px;
	    width: 100px;
	    font: bold15px arial,sans-serif;
	    text-shadow: none;
      }
      .login{
        position: absolute;
        top:37%;
        left: 40%;
        background: rgb(144, 151, 64);
        max-width: auto;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 50px;
      }
      .text{
        position: absolute;
        top:10%;
        left: 5%;
        background: #d0cece;
        max-width: auto;
        padding: 5px;
        border-radius: 4px;
      }
      form {
  width: 350px;
  position: relative;
}
form .form-field::before {
  font-size: 20px;
  position: absolute;
  left: 15px;
  top: 17px;
  color: #888888;
  content: " ";
  display: block;
  background-size: cover;
  background-repeat: no-repeat;
}
form .form-field:nth-child(1)::before {
  width: 20px;
  height: 20px;
  top: 15px;
}
form .form-field:nth-child(2)::before {
  background-image: url(img/lock-icon.png);
  width: 16px;
  height: 16px;
}
form .form-field {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  margin-bottom: 1rem;
  position: relative;
}
form input {
  font-family: inherit;
  width: 100%;
  outline: none;
  background-color: #fff;
  border-radius: 4px;
  border: none;
  display: block;
  padding: 0.9rem 0.7rem;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 17px;
  color: #4A4A4A;
  text-indent: 40px;
}
form .btn {
  outline: none;
  border: none;
  cursor: pointer;
  display: inline-block;
  margin: 0 auto;
  padding: 0.5rem 2.5rem;
  text-align: center;
  background-color: #47AB11;
  color: #fff;
  border-radius: 10px;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 17px;
}
form .btn2 {
  outline: none;
  border: none;
  cursor: pointer;
  display: inline-block;
  margin: 0 auto;
  padding: 0.5rem 2.5rem;
  text-align: center;
  background-color: #234411;
  color: #fff;
  border-radius: 10px;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 17px;
}
.OTP{
    position: absolute;
    size: 100px;
    left:63%;
    top: 34%;
}
/* Chat containers */
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

/* Clear floats */
.container::after {
  content: "";
  clear: both;
  display: table;
}

/* Style images */
.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

/* Style the right image */
.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarScroll"
        >
          <ul
            class="navbar-nav me-2 my-2 my-lg-0 navbar-nav-scroll"
            style="--bs-scroll-height: 100px"
          >
            <li class="nav-item nav-text">
              <a href="search.php" class="btn" role="button">Search</a>
            </li>
            <li class="nav-item nav-text">
              <a href="consultations.php" class="btn" role="button">Doctor's Consultations</a>
            </li>
            <li class="nav-item nav-text">
              <a href="cart.php" class="btn" role="button"
                >Cart</a
              >
            </li>
            <li class="nav-item nav-text">
              <a href="medicine_request.php" class="btn" role="button"
                >Medicine Request</a
              >
            </li>
            <li class="nav-item">
              <a href="signup.php" class="btn btn-warning" role="button"
                >Sign in</a
              >
            </li>
          </ul>
   
        </div>
      </div>
    </nav>
    <nav class= "text">
        <h1 >Welcome to Online Pharmacy</h1>
        <p>"""A Online solution where you can find Medicine and Doctor together"""</p>

    </nav>

    <div class="login">
        <P><b>Ask your queries!</b></P>
        <div class="container darker">
		<?php
          $my_id=$user_data['user'];
          $sql= "SELECT message_id, message, subject FROM chat WHERE to_id='$receiver_id'";
          $res=mysqli_query($con, $sql);
          // echo "<table border='1'>";
          // echo "<tr><td>Sender_id</td><td>Time</td><td>Sender_username</td><td>txt</td></tr>";
          while ($row= mysqli_fetch_assoc($res)){

            //echo "<tr><td>{$row["sender_id"]}</td><td>{$row["time"]}</td><td>{$row["sender_username"]}</td><td>{$row["txt"]}</td></tr>";
          }

          echo "</table>";
        ?>
            <img src="/img/customer.png" alt="Avatar" class="right">
            <p>Hello, Doctor</p>
            <span class="time-left">11:05</span>
          </div>
              
        <div class="container">  
            <img src="/img/doctor.webp" alt="Avatar">
            <p>Hello. How are you today?</p>
            <span class="time-right">11:00</span>
          </div>

          
          <div class="container darker">
            <img src="/img/customer.png" alt="Avatar" class="right">
            <p>Not good doctor, I am feeling so weak!</p>
            <span class="time-left">11:05</span>
          </div>
          <div class="chat-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
              <h1>Chat</h1>
          
              <label for="msg"><b>Message</b></label>
              <textarea placeholder="Type message.." name="msg" required></textarea>
          
              <button type="submit" class="btn">Send</button>
            </form>
          </div>
              
    </div>
    
    </section>

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
  </body>
</html>
