<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profile</title>
</head>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Lexend&display=swap');

    * {
        font-family: 'Lexend', sans-serif;
    }


    .container {
        width: auto;
        padding: 1em 3em;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border: .1em solid rgba(128, 128, 128, 0.35);
        border-radius: .35em;
    }

    .display-block {
        width: auto;
        display: flex;
        justify-content: flex-start;
    }

    .display-block p {
        font-size: 1.15em;
        margin: 1.15em 0;
    }

    .display-block p:first-of-type {
        width: 9.5em;
        color: #0175a7;
        font-weight: bolder;
    }

    .container form {
        display: flex;
        flex-direction: column;
        width: auto;
        margin: .75em 0;
    }

    .container form input {
        width: 70%;
        height: 2.75em;
        outline: none;
        border: none;
        border-radius: .25em;
        background-color: rgba(128, 128, 128, 0.15);
        margin: .3em 0;
        padding: 0 0 0 .75em;
        font-size: .9em;
    }

    .display-block {
        display: flex;
        align-items: center;
    }

    .container form button {
        width: auto;
        height: auto;
        padding: .75em 2.15em;
        background-color: #A438FF;
        color: white;
        font-weight: bold;
        cursor: pointer;
        border: none;
        border-radius: .5em;
    }

    a {
        display: flex;
        color: #0175a7;
        font-size: 1.25em;
        font-weight: bold;
        text-decoration: none;
        align-items: center;
        justify-content: flex-start;
        position: absolute;
        left: 50%;
        top: 20%;
        transform: translateX(-50%);

    }

    a i {
        margin-right: .25em;
    }
</style>

<body>
    <a href="../admin/admin-dashboard.php">
        <i class="fa-solid fa-arrow-left-long"></i>
        <p>Back to dashboard</p>
    </a>
    <div class="container">
        <h2>Edit Profile Details</h2>
        <form action="" method="post">
            <div class="display-block">
                <p>Fullname</p>
                <input type="text" name="fullname" id="" placeholder="Full Name">
            </div>
            <div class="display-block">
                <p>Email</p>
                <input type="text" name="email" id="" placeholder="Email">
            </div>
            <div class="display-block">
                <p>Country</p>
                <input type="text" name="country" id="" placeholder="Country">
            </div>
            <div class="display-block">
                <p>Phone Number</p>
                <input type="text" name="phone-number" id="" placeholder="Phone Number">
            </div>

            <button type="submit">Update profile details</button>
        </form>
    </div>
</body>

</html>