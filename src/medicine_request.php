<?php
session_start();

	include("connection.php");
	include("functions.php");


$name = $_POST['name'];
$type = $_POST['type'];
$quantity = $_POST['quantity'];
$company = $_POST['company'];

$query = "INSERT INTO personal (name, type, quantity, company) VALUES($name', '$type', '$quantity', '$company')";
mysqli_query($con,$query);

header('location:customer.php');

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
      .form-submit-button:hover {
	    background: #0066A2;
	    color: white;
	    border-style: outset;
	    border-color: #0066A2;
	    height: 50px;
	    width: 100px;
	    font: bold15px arial,sans-serif;
	    text-shadow: none;
      }
      .form-submit-button:hover{
        opacity: 1;
      }
      .container{
        padding: 16px;
      }
      input[type=text], input[type=number], input[type=file]{
        width: 100%;
        padding:15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
      }
      input[type=text], input[type=number], input[type=file]:focus{
        background-color: #ddd;
        outline: none;
      }
      hr{
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
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
              <a href="consultations.html" class="btn" role="button">Doctor's Consultations</a>
            </li>
            <li class="nav-item nav-text">
              <a href="cart.html" class="btn" role="button"
                >Cart</a
              >
            </li>
            <li class="nav-item nav-text">
              <a href="prescription_upload.html" class="btn" role="button"
                >Upload Prescription</a
              >
            </li>
            <li class="nav-item">
              <a href="logout.html" class="btn btn-warning" role="button"
                >Log Out</a
              >
            </li>
          </ul>
   
        </div>
      </div>
    </nav>


    <h1 class="text-center">Request for a medicine from anytime, anywhere</h1>
    <br />

    <section
      class="box container bg-info justify-content-center align-items-center rounded-3">
      <div>
        <p>
          Please enter necessary medicine details
        </p>
      </div>
      <div class="container">
        <h1>Medicine details: </h1>
        <hr>

        <label for="name"><b>Medicine Name: </b></label>
        <input type="text" placeholder="Enter medicine name" name="name" id="name" required>
        <label for="type"><b>Medicine Type: </b></label>
        <select name="type" id="type">
            <option value="liquid">Liquid</option>
            <option value="tablet">Tablet</option>
            <option value="capsule">Capsule</option>
            <option value="suppository">Suppository</option>
            <option value="drops">Drops</option>
            <option value="inhaler">Inhaler</option>
            <option value="injection">Injection</option>
            <option value="implantsorpatches">Implants or Patches</option>
        </select>
        </br>  
        <label for="quantity">Quantity: </label>
        <input type="number" placeholder="Enter quantity" id="quantity" name="quantity" min="1" max="999">
        <label for="prescription">Upload Prescription: </label>
        <input
        type = "file"
        id="myFile"
        name="filename"
        class="btn btn-warning"
        type="submit"
        />
        <button class="form-submit-button">Request for medicine</button>
    </div>
    </section>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
