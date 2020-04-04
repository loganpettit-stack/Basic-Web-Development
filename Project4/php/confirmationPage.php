<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width"/>
    <title>Heading and Meta Tags</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/registration.css"  type="text/css"/>
    <link href="../html/registration.php"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>





<body>

<header>
    <div class="jumbotron text-center">
        <div class="header">

            <h1>The Archive</h1>
            <p>Bring Your Ideas To Life</p>
        </div>
    </div>
</header>


<div class="container-fluid text-center">
    <div class="image">
        <div class="row-content">
            <!-- The sidebar -->
            <div class="sidebar">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 sidebar">
                    <a href="../html/FrontPage.html">Home</>
                    <a href="../html/animation.html">Animation</a>
                    <a class="active" href="../html/registration.php">Register</a>
                    <a href="../html/game.html">Game</a>
                </div>
            </div>


            <!--Center body text -->
            <div class="content">
                <div class="col-xs-10 col-sm-10 col-md-5 col-lg-5 centered">
                  <?php
                  $servername = "localhost";
                  $username = "root";
                  $dbpassword = "";
                  $dbname = "project";

                  // Create connection
                  $conn = new mysqli($servername, $username, $dbpassword, $dbname);
                  // Check connection
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  }

                  $sql = "SELECT * FROM registration WHERE id = (SELECT MAX(id) FROM registration)";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      echo "<table>";
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                          echo "<tr><td>ID: </td> <td>" . $row["id"] . "</td></tr>" .
                              "<tr><td>Username: </td> <td>" . $row["userName"] . "</td></tr>" .
                              "<tr><td>Password: </td> <td>" . $row["password"] . "</td></tr>" .
                              "<tr><td>First name: </td> <td>" . $row["firstName"] . "</td></tr>" .
                              "<tr><td>Last name: </td> <td>" . $row["lastName"] . "</td></tr>" .
                              "<tr><td>Address: </td> <td>" . $row["address1"] . "</td></tr>" .
                              "<tr><td>Address 2: </td> <td>" . $row["address2"] . "</td></tr>" .
                              "<tr><td>City: </td> <td>" . $row["city"] . "</td></tr>" .
                              "<tr><td>State: </td> <td>" . $row["state"] . "</td></tr>" .
                              "<tr><td>Zip Code: </td> <td>" . $row["zipCode"] . "</td></tr>" .
                              "<tr><td>Phone: </td> <td>" . $row["phone"] . "</td></tr>" .
                              "<tr><td>Email:  </td> <td>" . $row["email"] . "</td></tr>" .
                              "<tr><td>Gender: </td> <td>" . $row["gender"] . "</td></tr>" .
                              "<tr><td>Marital Status: </td> <td>" . $row["maritalStatus"] . "</td></tr>";

                      }
                      echo "</table>";
                  } else {
                      echo "0 results";
                  }

                  $conn->close();
                  ?>

                </div>
        </div>
    </div>
</div>
</div>

<footer>
    <div class="footer">
        <div class="row">
            <div class="col-sm-4">
                <h3><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Click</a></h3>
            </div>
            <div class="col-sm-4">
                <h3><a href="https://www.youtube.com/watch?v=gkTb9GP9lVI" target="_blank">Do Not Click</a></h3>
            </div>
            <div class="col-sm-4">
                <h3><a href="https://www.youtube.com/watch?v=LTn90dTakOE" target="_blank">You Will Regret Clicking</a>
                </h3>
            </div>
        </div>
    </div>
</footer>

</body>



</html>