<?php

//declaring a variable in php
$name = " <p> Adult Weather APP </p>";
echo $name;
echo "One of a kind $name";

// contatinating variables
$name2 = "<p> One of a kind </p>";
echo $name . "" . $name2;

// numbers in PHP
$numberOfBooksWantToRead = 100;
$membershipType = 4;
$membershipLenth = $numberOfBooksWantToRead / $membershipType;
echo $membershipLenth . " months to finish your read me list";

// Booleans in PHP
$membership = true;
echo "<p>Do you want a new membership? " . "" . $membership . "</p>";

// Storing variable names in variables
$variableName = "name";
echo $$variableName;

// create a line break in PHP
echo "<br><br>";

// Arrays
$genre = array("crime", "fiction", "non-fiction", "thriller", "biography", "sci-fi");
// adding to an array
$genre[] = "history";

// cannot echo an array
// how to print an array
print_r($genre);

// get some items in an array
echo "<p> $genre[2] </p>";

// another way to define an array is to create the values manually
$typesOfBookShelves[0] = "Read";
$typesOfBookShelves[1] = "Want to read";
$typesOfBookShelves[2] = "Wish List";
$typesOfBookShelves[8] = "Re read";
$typesOfBookShelves["Username"] = "Anja12";
print_r($typesOfBookShelves);

// length of array
echo "<br><br>";
echo sizeof($typesOfBookShelves);

// remove an item from an array
echo "<br><br>";
unset($genre["6"]);
print_r($genre);
echo "<br><br>";



// if statements
$username = "hamaoui261";

if ($username == "hamaoui261") {
    echo "Succesful";
} else {
    echo "Sign in Failed";
}

echo "<br><br>";

$age = 17;

if ($age >= 18) {
    echo "Proceed";
} else {
    echo "You are too young";
}

echo "<br><br>";

if ($username == "hamaoui261" && $age >= 18) {
    echo "Succesful";
} else {
    echo "Sign in Failed";
}

echo "<br><br>";

if ($username == "hamaoui261" || $age >= 18) {
    echo "Succesful";
} else {
    echo "Sign in Failed";
}

echo "<br><br>";

// for and for each loops
// example gmail showing your emails


for ($i = 0; $i < 11; $i++) {
    echo $i . "<br>";
}

echo "<br><br>";

// listing all even numbers from 0 to 30
for ($i = 0; $i <= 30; $i = $i + 2) {
    echo $i . "<br>";
}

echo "<br><br>";

for ($i = 10; $i >= 0; $i--) {
    echo $i . "<br>";
}

// looping through arrays - for loop
echo "<br><br>";
$genre = array("crime", "fiction", "non-fiction", "thriller", "biography", "sci-fi");
for ($i = 0; $i < sizeof($genre); $i++) {
    echo $genre[$i] . "<br>";
}

// foreach loop


foreach ($genre as $key => $value) {


    $genre[$key] = $value . "Do you like any others?";

    echo "The Genre item you selected " . $key . " is" . $value . ". Do you like any others? " . "<br>";

    // echo "<br><br>";

    // echo $value . "<br>";
}


echo "<br><br>";

$bookshelf = array("one", "two", "three", "four");

$i = 0;
while ($i < sizeof($bookshelf)) {
    echo $bookshelf[$i] . "<br>";
    $i++;
}

echo "<br><br>";

// GET variables

echo "The book " . $_GET['name'] . " is available";


?>

<p>What book are you looking for?</p>
<form action="">

    <input type="text" name="name">

    <input type="submit" value="Go">

</form>





<p>Is it a prime number?</p>
<form action="">

    <input type="text" name="numberInput">

    <input type="submit" value="Go">

</form>

<?php


if (is_numeric($_GET['numberInput']) && $_GET['numberInput'] > 0 && $_GET['numberInput'] == round($_GET['numberInput'], 0)) {

    $i = 2;

    $isPrime = true;

    while ($i < $_GET['numberInput']) {

        if ($_GET['numberInput'] % $i == 0) {
            // number is not prime
            $isPrime = false;
        }

        $i++;
    }

    if ($isPrime) {
        echo "<p>" . $i . " is a prime number";
    } else {
        echo "<p>" . $i . " is NOT a prime number";
    }
} else if ($_GET) {
    echo "Please enter a positive whole number";
}

?>



<!-- Post Variables -->
<!-- are not encoded in the URL and are more secure -->


<p>Testing POST variable:</p>
<form action="" method="post">

    <input type="text" name="number">

    <input type="submit" value="Go">

</form>

<?php

echo "<br><br>";

print_r($_POST);
echo "<br><br><br><br><br><br>";

echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";

?>



<!-- Creating a log in form. Comparing a user input name to variables in an array -->

<!-- 
    1. Create an array of names
    2. Creat form
    3. Take the input name in the form vis POST
    4. Loop through the array 
    5. if the input name matches return "successfull"

-->


<p>Enter your username:</p>
<form action="" method="post">

    <input type="text" name="userNameInput">

    <input type="submit" value="Submit">

</form>

<?php

// always check that the post is working with starting if ($_POST) {}
if ($_POST) {

    $userNames = array("apple", "banana", "orange");

    $isknown = false;

    foreach ($userNames as $value) {

        if ($value == $_POST['userNameInput']) {
            $isknown = true;
        }
    }
    if ($isknown) {

        echo "Sign in Succesful. Hello Mr " . $_POST['userNameInput'];
    } else {

        echo "Sorry we do not have a user by that name";
    }
}
?>


<!-- Sending an Email witH PHP -->

<!-- using the Mail function -->

<?php
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";

$emailTo = "xyz@gmail.com";

$subject = "Test PHP EMAIL";

$body = "Mail function in PHP";

$headers = "From: xyz@gmail.com";

// this returns a 1 or a 0 if successfull so put the mail function in an if statement. if true then successfull message appears
if (mail($emailTo, $subject, $body, $headers)) {

    echo "Email is off!";
} else {
    echo "email cannot be sent for some reason";
}
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
?>






<!-- 
1. Create Contact form
    a. Labels, Inputs, required, link for and name and ID
2. JS/Jquery Validation
3. PHP server side validation
4. Check that email is sent
 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact Form PHP</title>
</head>

<body>

    <header class="container">
        <h2>Get in Touch</h2>
    </header>


    <div class="container mt-5">

        <form action="" method="POST">

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Your email address" aria-describedby="helpId" require>
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject" aria-describedby="helpId" require>
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Your message"></textarea>
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>

            <button type="submit" class="btn btn-primary" id="submit">SEND</button>
        </form>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


    <script>
        // have to stop the form from submitting when you press the submit button as have to give time for js validation to take place then submit
        // this prevents the submit button on the form
        $("form").submit(function(e) {
            e.preventDefault();
        });
    </script>




</body>

</html>