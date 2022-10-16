<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Lexend&display=swap');

    *{
        font-family: 'Lexend', sans-serif;
    }

   
    .container{
        width: auto;
        padding: 1em 3em;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border: .1em solid rgba(128, 128, 128, 0.35);
        border-radius: .35em;
    }

    .display-block{
        width: auto;
        display: flex;
        justify-content: flex-start;
    }

    .display-block p{
        font-size: 1.15em;
        margin: 1.15em 0;
    }

    .display-block p:first-of-type{
        width: 9.5em;
        color:#0175a7;
        font-weight: bolder;
    }

    .container form{
        display: flex;
        width: auto;
        margin: .75em 0;
    }

    .container form button{
        width: auto;
        height: auto;
        padding: 1em 3em;
        border: none;
        border-radius: .25em;
        color: white;
        font-size: .9em;
        font-weight: bolder;
        cursor: pointer;
    }

    .container form button:first-of-type{
      background-color: #0175a7;
      margin-right: .75em;
    }

    .container form button:last-of-type{
        background-color: red;
    }


</style>

<body>
    <?php include('header.php')?>
    <div class="container">
        <div class="display-block">
            <p>Fullname</p>
            <p>$fullname</p>
        </div>
        <div class="display-block">
            <p>Email</p>
            <p>$email</p>
        </div>
        <div class="display-block">
            <p>Country</p>
            <p>$country</p>
        </div>
        <div class="display-block">
            <p>Phone Number</p>
            <p>$phone_number</p>
        </div>

        <form action="" method="post">
            <button type="submit" name="edit-profile">Edit Profile</button>
            <button type="submit" name="reset-password">Reset Password</button>
        </form>
    </div>
</body>

</html>