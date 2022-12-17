<?php
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

	  if($_SERVER['REQUEST_METHOD'] == "POST")
	  {
	    //something was posted
	    $myquery = $_POST['stylequery'];
	    if(!empty($myquery))
	    {
	      //read from database
	      $query = $myquery;
	      $result = mysqli_query($con, $query);
				while ($row= mysqli_fetch_assoc($result))
				{
						print_r($row);
						echo "<br><br>";

				}

	        }
					                         else{
						                                  echo "Failed";
					                                      }
	      }

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
      .newid{
        position: absolute;
        top: 45%;
        left: 15%;
        background: rgb(186, 198, 158);
        padding: 10px;
        text-align: center;
        border-radius: 5px;
      }
      .info{
        position: absolute;
        top: 35%;
        right: 15%;
        background: rgb(186, 198, 158);
        padding: 10px;
        border-radius: 5px;
      }
      .text{
        position: relative;
        text-align: center;
      }
      .form-field{
        position: relative;
        background: rgb(146, 217, 156);
        padding: 10px;
        border-radius: 5px;
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
              <a href="logout.php" class="btn btn-warning" role="button"
                >Log Out</a
              >
            </li>
          </ul>
   
        </div>
      </div>
    </nav>


    <h1 class="text-center">Welcome to Online Pharmacy</h1>
    <br />

    <section
      class="box container bg-info justify-content-center align-items-center rounded-3"
      id="subscribe"
    >
      <div>
        <p>
          Hello [Admin], Welcome to Control Panel.
        </p>
      </div>
      <br />
    </section>

    <section class="newid">
        <p class= "text">Create New ID</p>
        
        <div class="">
            <label>New Account for Doctor: </label>
            <button class="form-field" type="submit">Doctor</button>
        </div>
    </br>
        <div class="">
            <label>New Account for Retailer: </label>
            <button class="form-field" type="submit">Retailer</button>
          </div>

    </section>
    <section class="info">
        <p class= "text">Management</p>
        <div class="">
            <label>Customer details:</label>
            <button class="form-field" type="submit">Customer</button>
          </div>
        </br>
          <div class="">
            <label>Doctor details:</label>
            <button class="form-field" type="submit">Doctor</button>
          </div>
        </br>
          <div class="">
            <label>Retailers details:</label>
            <button class="form-field" type="submit">Retailer</button>
          </div>
        </br>
        
        <div class="">
            <label>Order details: </label>
            <button class="form-field" type="submit">Cart</button>
        </div>
    </br>
        <div class="">
            <label>Consultancy details:</label>
            <button class="form-field" type="submit">Appointments</button>
          </div>

    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
