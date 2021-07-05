<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formStyle.php" media="screen">
   
    <title>Contact Form</title>
</head>

<body>
    <div class="contact-form">
        <h1>Get in touch with us!</h1>
        <form method="POST">
            <!-- FIRST NAME -->
            <label for="firstname">First Name:
                <small>(Required)</small></label>
            <br />
            <input type="text" id="firstname" name="firstname">
            <br />

            <!-- LAST NAME -->
            <label for="lastname">Last Name:
                <small>(Required)</small></label>
                <br />
            <input type="text" id="lastname" name="lastname">
            <br />

            <!-- PHONE NUMBER -->
            <label for="phone">Phone Number:</label>
            <br />
            <input type="tel" id="phone" name="phone">
            <br />

            <!-- E-MAIL -->
            <label for="email">Your E-Mail:</label>
            <br />
            <input type="email" id="email" name="email">
            <br />

            <!-- CONTACT METHOD -->
            <div id="contact-methods">
                <label for="contact-methods">
                    Your preferred contact method:<br />
                    <small>(Required)</small> <br />

                    <div class="options">
                        <input type="radio" id="via-email" name="contact-method" value="via-email" tabindex="0">
                        <label for="via-email">E-Mail</label>
                    </div>

                    <div class="options">
                        <input type="radio" id="via-call" name="contact-method" value="via-call" tabindex="0">
                        <label for="via-call">Call</label>
                    </div>

                    <div class="options">
                        <input type="radio" id="via-text" name="contact-method" value="via-text" tabindex="0">
                        <label for="via-text">Text</label>
                    </div>
                </label>
            </div>
            <br />
            <br />
            <br />


            <input type="submit" class="submit">


        </form>
    </div>
    <!--  https://formsubmit.co/radridesstudio@gmail.com   -->
</body>

</html>
