<html>

<head>

    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<body>

<form action="contact_check.php" method="post">
    <h1>Contact Us Form</h1>

    <div>
        <ul>
            <?php

            if ((!empty($_GET['nameErr'])))
            {
                ?>

                <li style="color: red"><?php echo $_GET['nameErr']?></li>

                <?php
            }



            if ((!empty($_GET['emailErr'])))
            {
                ?>

                <li style="color: red"><?php echo $_GET['emailErr']?></li>

                <?php
            }

            if ((!empty($_GET['subjectErr'])))
            {
                ?>

                <li style="color: red"><?php echo $_GET['subjectErr']?></li>

                <?php
            }

            if ((!empty($_GET['msgErr'])))
            {
                ?>

                <li style="color: red"><?php echo $_GET['msgErr']?></li>

                <?php
            }
            ?>

        </ul>

    </div>

    <div>

        <?php

        if(isset($_GET['su']))
        {
            ?>

           <div class="alert success">

               <strong>Success!</strong><?php if (!empty($_GET['su'])) echo $_GET['su']?>


           </div>

            <?php
        }

        if(isset($_GET['unsu']))
        {
            ?>

            <div class="alert">

                <strong>Danger!</strong><?php if (!empty($_GET['unsu'])) echo $_GET['unsu']?>


            </div>

            <?php
        }

        ?>
    </div>
    <label for="fullname">Full Name</label>
    <p><input type="text" name="fullname" placeholder="Full Name"></p>

    <label for="email">E-Mail</label>
    <p><input type="text" name="email" placeholder="E-Mail"></p>

    <label for="subject">Subject</label>
    <p><input type="text" name="subject" placeholder="Subject"></p>

    <label for="comment">Comment</label>
    <p><textarea name="msg" placeholder="Comment" style="height: 200px"></textarea></p>

    <input type="submit" value="Send">

</form>


</body>


</html>