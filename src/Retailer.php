<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted

		$dtype = $_POST['dtype'];
		$user_id =  $user_data['user'] ;
		}

?>

<?php
								$con= mysqli_connect("localhost","root","", "pharmacy");
								$sql= 'SELECT * from retailer WHERE utype="r_id"';
								$result= $con->query($sql);
								if ($result->num_rows>0){
									while($row= $result-> fetch_assoc()){
									 echo	 "<tr><td>".$row['user_name'] . "</td><td>" .$row['user_id'] . "</td>" ;
									}
								}
								else {
									echo "No results";
								}
								$con->close();
							 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
      .Stock{
        position: absolute;
        top:15%;
        right: 20%;
        background: rgb(144, 151, 64);
        max-width: auto;
        padding: 10px;
        border-radius: 10px;
      }
        .Report{
        position: absolute;
        bottom: -300%;
        right: 20%;
        background: rgb(135, 206, 235);
        max-width: auto;
        padding: 50px;
        border-radius: 10px;
      }
        
      .text{
        position: absolute;
        top:45%;
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
              <a href="search.html" class="btn" role="button">Search</a>
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
                >Sign Up</a
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

    <div class="Stock">
        <form action="">
            <div class="form-field">
                <input type="email" placeholder="Search Medicine" required/>
              </div>
              
              <div class="form-field">
                <button class="btn" type="submit">Check Stock</button>
              </div>
            
          <div class="Report">
        <form action="">
            <div class="form-field">
                <input type="email" placeholder="Month" required/>
              </div>
              
              <div class="form-field">
                <button class="btn" type="submit">Get Report</button>
              </div>
    


    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
