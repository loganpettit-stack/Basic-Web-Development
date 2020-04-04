<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width"/>
    <title>Heading and Meta Tags</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/registration.css" type="text/css"/>
    <link href="./registration.php"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/formValidation.js"></script>

</head>


<body>

<!--Super cool jumbotron header-->
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
        <div class="row-content"></div>
        <!-- The sidebar -->
        <div class="sidebar">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="./FrontPage.html">Home</a>
                <a href="./animation.html">Animation</a>
                <a href="./registration.php" class="active">Register</a>
                <a href="./game.html">Game</a>
            </div>
        </div>


        <?php
        include '../php/formValidation.php';
        ?>

        <!--Center body text -->
        <div class="content ">
            <form method="post" onsubmit="return FormValidation();" oninput="FormValidation();" onreset="Reset();
             action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="textColor">

                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <label for="username">Username:</label>
                            <input id="username" type="text" name="username" class="form-control"
                                   value="<?php echo $userName; ?>"/>
                            <span class="error"> <?php echo $usernameErr;?></span>
                            <span id="usererror"></span>
                            <br/>

                            <label for="password">Password:</label>
                            <input type="password" id="password" type="text" name="password" class="form-control"
                                   value="<?php echo $password; ?>"/>
                            <span class="error"> <?php echo $passwordErr;?></span>
                            <span id="passerror"></span>
                            <br/>

                            <label for="REpassword">Re-Enter Password:</label>
                            <input type="password" id="REpassword" type="text" name="REpassword" class="form-control"
                                   value="<?php echo $REpassword; ?>"/>
                            <span id="REpasserror"></span>
                            <span class="error"> <?php echo $REpasswordErr;?></span>
                            <br/>

                            </hr>
                            <label for="firstname">First name:</label>
                            <input id="firstname" type="text" name="firstname" class="form-control"
                                   value="<?php echo $firstname; ?>"/>
                            <span class="error"> <?php echo $firstErr;?></span>
                            <span id="firsterror"></span>
                            <br/>

                            <label for="lastname">Last name:</label><br/>
                            <input id="lastname" type="text" name="lastname" class="form-control"
                                   value="<?php echo $lastname; ?>"/>
                            <span class="error"> <?php echo $lastErr;?></span>
                            <span id="lasterror"></span>
                            <br/>

                            </hr>
                            <label for="address1">Address:</label>
                            <input id="address1" type="text" name="address1" class="form-control"
                                   value="<?php echo $address; ?>"/>
                            <span class="error"> <?php echo $addressErr;?></span>
                            <span id="adderror"></span>
                            <br/>

                            <label for="address2">Alternate Address:</label>
                            <input id="address2" type="text" name="address2" class="form-control"
                                   value="<?php echo $address2; ?>"/>
                            <span class="error"> <?php echo $addressErr2;?></span>
                            <span id="adderror2"></span>
                            <br/>

                            </hr>
                            <label for="city">City:</label>
                            <input id="city" type="text" name="city" class="form-control"
                                   value="<?php echo $city; ?>"/>
                            <span class="error"> <?php echo $cityErr;?></span>
                            <span id="cityerror"></span>
                            <br/>

                            <label for="state">State:</label><br/>
                            <select id="state" name="state" class="form-control">
                                <option value="" selected="selected" hidden="hidden" disabled="disabled">
                                    Select an option
                                </option>
                                <option value="AL" <?php if(isset($_POST["state"]) && $state == "AL")
                                {echo 'selected="selected"';} ?> >Alabama</option>
                                <option value="AK" <?php if(isset($_POST["state"]) && $state == "AK")
                                {echo 'selected="selected"';} ?>>Alaska</option>
                                <option value="AZ" <?php if(isset($_POST["state"]) && $state == "AZ")
                                {echo 'selected="selected"';} ?>>Arizona</option>
                                <option value="AR" <?php if(isset($_POST["state"]) && $state == "AR")
                                {echo 'selected="selected"';} ?>>Arkansas</option>
                                <option value="CA" <?php if(isset($_POST["state"]) && $state == "CA")
                                {echo 'selected="selected"';} ?>>California</option>
                                <option value="CO" <?php if(isset($_POST["state"]) && $state == "CO")
                                {echo 'selected="selected"';} ?>>Colorado</option>
                                <option value="CT" <?php if(isset($_POST["state"]) && $state == "CT")
                                {echo 'selected="selected"';} ?>>Connecticut</option>
                                <option value="DE" <?php if(isset($_POST["state"]) && $state == "DE")
                                {echo 'selected="selected"';} ?>>Delaware</option>
                                <option value="DC" <?php if(isset($_POST["state"]) && $state == "DC")
                                {echo 'selected="selected"';} ?>>District Of Columbia</option>
                                <option value="FL" <?php if(isset($_POST["state"]) && $state == "FL")
                                {echo 'selected="selected"';} ?>>Florida</option>
                                <option value="GA" <?php if(isset($_POST["state"]) && $state == "GA")
                                {echo 'selected="selected"';} ?>>Georgia</option>
                                <option value="HI" <?php if(isset($_POST["state"]) && $state == "HI")
                                {echo 'selected="selected"';} ?>>Hawaii</option>
                                <option value="ID" <?php if(isset($_POST["state"]) && $state == "ID")
                                {echo 'selected="selected"';} ?>>Idaho</option>
                                <option value="IL" <?php if(isset($_POST["state"]) && $state == "IL")
                                {echo 'selected="selected"';} ?>>Illinois</option>
                                <option value="IN" <?php if(isset($_POST["state"]) && $state == "IN")
                                {echo 'selected="selected"';} ?>>Indiana</option>
                                <option value="IA" <?php if(isset($_POST["state"]) && $state == "IA")
                                {echo 'selected="selected"';} ?>>Iowa</option>
                                <option value="KS" <?php if(isset($_POST["state"]) && $state == "KS")
                                {echo 'selected="selected"';} ?>>Kansas</option>
                                <option value="KY" <?php if(isset($_POST["state"]) && $state == "KY")
                                {echo 'selected="selected"';} ?>>Kentucky</option>
                                <option value="LA" <?php if(isset($_POST["state"]) && $state == "LA")
                                {echo 'selected="selected"';} ?>>Louisiana</option>
                                <option value="ME" <?php if(isset($_POST["state"]) && $state == "ME")
                                {echo 'selected="selected"';} ?>>Maine</option>
                                <option value="MD" <?php if(isset($_POST["state"]) && $state == "MD")
                                {echo 'selected="selected"';} ?>>Maryland</option>
                                <option value="MA" <?php if(isset($_POST["state"]) && $state == "MA")
                                {echo 'selected="selected"';} ?>>Massachusetts</option>
                                <option value="MI" <?php if(isset($_POST["state"]) && $state == "MI")
                                {echo 'selected="selected"';} ?>>Michigan</option>
                                <option value="MN" <?php if(isset($_POST["state"]) && $state == "MN")
                                {echo 'selected="selected"';} ?>>Minnesota</option>
                                <option value="MS" <?php if(isset($_POST["state"]) && $state == "MS")
                                {echo 'selected="selected"';} ?>>Mississippi</option>
                                <option value="MO" <?php if(isset($_POST["state"]) && $state == "MO")
                                {echo 'selected="selected"';} ?>>Missouri</option>
                                <option value="MT" <?php if(isset($_POST["state"]) && $state == "MT")
                                {echo 'selected="selected"';} ?>>Montana</option>
                                <option value="NE" <?php if(isset($_POST["state"]) && $state == "NE")
                                {echo 'selected="selected"';} ?>>Nebraska</option>
                                <option value="NV" <?php if(isset($_POST["state"]) && $state == "NV")
                                {echo 'selected="selected"';} ?>>Nevada</option>
                                <option value="NH" <?php if(isset($_POST["state"]) && $state == "NH")
                                {echo 'selected="selected"';} ?>>New Hampshire</option>
                                <option value="NJ" <?php if(isset($_POST["state"]) && $state == "NJ")
                                {echo 'selected="selected"';} ?>>New Jersey</option>
                                <option value="NM" <?php if(isset($_POST["state"]) && $state == "NM")
                                {echo 'selected="selected"';} ?>>New Mexico</option>
                                <option value="NY" <?php if(isset($_POST["state"]) && $state == "NY")
                                {echo 'selected="selected"';} ?>>New York</option>
                                <option value="NC" <?php if(isset($_POST["state"]) && $state == "NC")
                                {echo 'selected="selected"';} ?>>North Carolina</option>
                                <option value="ND" <?php if(isset($_POST["state"]) && $state == "ND")
                                {echo 'selected="selected"';} ?>>North Dakota</option>
                                <option value="OH" <?php if(isset($_POST["state"]) && $state == "OH")
                                {echo 'selected="selected"';} ?>>Ohio</option>
                                <option value="OK" <?php if(isset($_POST["state"]) && $state == "OK")
                                {echo 'selected="selected"';} ?>>Oklahoma</option>
                                <option value="OR" <?php if(isset($_POST["state"]) && $state == "OR")
                                {echo 'selected="selected"';} ?>>Oregon</option>
                                <option value="PA" <?php if(isset($_POST["state"]) && $state == "PA")
                                {echo 'selected="selected"';} ?>>Pennsylvania</option>
                                <option value="RI" <?php if(isset($_POST["state"]) && $state == "RI")
                                {echo 'selected="selected"';} ?>>Rhode Island</option>
                                <option value="SC" <?php if(isset($_POST["state"]) && $state == "SC")
                                {echo 'selected="selected"';} ?>>South Carolina</option>
                                <option value="SD" <?php if(isset($_POST["state"]) && $state == "SD")
                                {echo 'selected="selected"';} ?>>South Dakota</option>
                                <option value="TN" <?php if(isset($_POST["state"]) && $state == "TN")
                                {echo 'selected="selected"';} ?>>Tennessee</option>
                                <option value="TX" <?php if(isset($_POST["state"]) && $state == "TX")
                                {echo 'selected="selected"';} ?>>Texas</option>
                                <option value="UT" <?php if(isset($_POST["state"]) && $state == "UT")
                                {echo 'selected="selected"';} ?>>Utah</option>
                                <option value="VT"b<?php if(isset($_POST["state"]) && $state == "VT")
                                {echo 'selected="selected"';} ?>>Vermont</option>
                                <option value="VA" <?php if(isset($_POST["state"]) && $state == "VA")
                                {echo 'selected="selected"';} ?>>Virginia</option>
                                <option value="WA" <?php if(isset($_POST["state"]) && $state == "WA")
                                {echo 'selected="selected"';} ?>>Washington</option>
                                <option value="WV" <?php if(isset($_POST["state"]) && $state == "WV")
                                {echo 'selected="selected"';} ?>>West Virginia</option>
                                <option value="WI" <?php if(isset($_POST["state"]) && $state == "WI")
                                {echo 'selected="selected"';} ?>>Wisconsin</option>
                                <option value="WY" <?php if(isset($_POST["state"]) && $state == "WY")
                                {echo 'selected="selected"';} ?>>Wyoming</option>
                            </select>
                            <span class="error"> <?php echo $stateErr;?></span>
                           <span id="stateerror"></span><br/>
                            <br/>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <label for="zip">Zip Code:</label><br/>

                            <input id="zip" type="text" name="zip" class="form-control" maxlength="10"
                                   value="<?php echo $zip; ?>"/>
                            <span class="error"> <?php echo $zipErr;?></span>
                            <span id="ziperror"></span>
                            <br/>

                            <label for="phone">Phone Number:</label><br/>

                            <input id="phone" type="text" name="phone" class="form-control" maxlength="12"
                                   value="<?php echo $phone; ?>"/>
                            <span class="error"> <?php echo $phoneErr;?></span>
                            <span id="phoneerror"></span>
                            <br/>

                            <label for="email">Email:</label><br/>
                            <input id="email" type="text" name="email" class="form-control"
                                   value="<?php echo $email; ?>"/>
                            <span class="error"> <?php echo $emailErr;?></span>
                            <span id="emailerror"></span>
                            <br/>

                            <label for="birthDay">Date of birth:</label><br/>
                            <input id="birthday" type="date" name="birthday" class="form-control"
                                   value="<?php echo $birth; ?>"/>
                            <span class="error"> <?php echo $birthErr;?></span>
                            <span id="birthdayerror"></span>
                            <br/>


                                <label>Gender: </label>
                                <span class="error"> <?php echo $genderErr;?></span><br/>
                                <span id="gendererror"></span><br/>
                                <input type="radio" name="gender" id="maleGender"
                                       <?php if ($gender=="male"){echo "checked";}?> value="male"/>
                                <label for="maleGender">Male</label>

                                <input type="radio" name="gender" id="femaleGender"
                                       <?php if ($gender=="female"){echo "checked";}?>value="female"/>
                                <label for="femaleGender">Female</label>

                                <input type="radio" name="gender" id="otherGender" value="other"
                                       <?php if ($gender=="other"){echo "checked";}?>/>
                                <label for="otherGender">Other</label><br/><br/>


                                <label>Marital Status:</label>
                                <span class="error"> <?php echo $maritalErr;?></span><br/>
                                <span id="mrtlerror"></span><br/>
                                <input type="radio" name="mstat" id="married"
                                       <?php if ($mstat=="married"){echo "checked";}?> value="married"/>
                                <label for="married">Married</label>
                                <input type="radio" name="mstat" id="single"
                                       <?php if ($mstat=="single"){echo "checked";}?> value="single"/>
                                <label for="single">Single</label>
                                <input type="radio" name="mstat" id="other"
                                       <?php if ($mstat=="other"){echo "checked";}?> value="other"/>
                                <label for="other">Other</label><br/><br/>


                            <div class="buttonColor">
                                <input type="submit" value="Submit Data"/>
                                <input type="reset" value="Reset Data" id="reset"/>
                            </div>
                        </div>
                    </div>

                </div>

            </form>
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

<?php
//var_dump($isValid);
if ($isValid) {
    ?>
    <form id="hiddenForm" name="hiddenForm"
          method="POST" action="../php/confirmationPage.php">
        <?php
        foreach($_POST as $key => $value) {
            ?>
            <input name="<?php echo $key;?>"
                   value="<?php echo $value;?>"
                   type="hidden"/>
            <?php
        }
        ?>
    </form>
    <script>
        document.createElement('form').submit.call(document.getElementById('hiddenForm'));
    </script>
    <?php
}
?>

</body>


</html>