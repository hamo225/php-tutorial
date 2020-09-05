<!-- 
1. Create Contact form
    a. Labels, Inputs, required, link for and name and ID
2. JS/Jquery Validation
3. PHP server side validation
4. Check that email is sent
 -->

<?php

print_r($_POST);


// set up PHP server side validation
if ($_POST) {

    $error = "";

    if (!$_POST['email']) {
        $error .= "An email address is required.<br>";
    } else {
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error .= "Invalid email format";
        }
    }

    if (!$_POST['content']) {
        $error .= "Content field is required.<br>";
    }


    if (!$_POST['subject']) {
        $error .= "Subject is required.<br>";
    }

    if ($error != "") {

        // then the div with id error. The inner html of it will add this string with the alert class of bootstrap
        $error = '<div class = "alert alert-danger"><p><strong>There are error(s) in your form:</strong></p>' . $error . '</div>';
    } else {

        $error = '<div class = "alert alert-success"><p><strong>Email Sent</strong></p></div>';
    }
}
?>



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

    <div id="error">


    </div>
    <div class="container mt-5">

        <form method="post">
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


            //    Js/Jq validation

            // create an empty string
            var error = "";

            if ($("#email").val() == "") {

                error += "<p>Your email is required.</p>";
            }

            // if statement - if the id subject inner value is an empty string then add to the error string above "the subject is required"
            if ($("#subject").val() == "") {

                error += "<p>The subject field is required.</p>";
            }

            if ($("#message").val() == "") {

                error += "<p>The message field is required.</p>";
            }

            // then here you are then adding the error variable above to the error id div above the form.
            // If the error variable is not empty. If a user did not add the fields.
            if (error != "") {

                // then the div with id error. The inner html of it will add this string with the alert class of bootstrap
                $("#error").html('<div class = "alert alert-danger"><p><strong>There are error(s) in your form:</strong></p>' + error + '</div>');

            } else {

                // once validation has happened. We want to submit the form if there are no errors.
                // this will unbind the form from the submit function above as it has already been validated
                // and will submit it as normal
                // added the if statement to allow a green box to appear indicating email has been sent
                if ($("form").unbind("submit").submit()) {

                    $("#error").html('<div class = "alert alert-success"><p><strong>Email Sent</strong></p></div>');

                };
            }


        });
    </script>




</body>

</html>