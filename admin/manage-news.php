<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Manage News</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lexend&display=swap');

    * {
        font-family: 'Lexend', sans-serif;
    }

    .container {
        width: 90%;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 1.5em 3em;
    }


    .top-section {
        width: 100%;
        padding: 1.5em 3em;
    }

    .top-section a {
        display: flex;
        color: #0175a7;
        font-size: 1.25em;
        font-weight: bold;
        text-decoration: none;
        align-items: center;
        justify-content: flex-start;
    }

    .top-section a i {
        margin-right: .25em;
    }

    .bottom-section{
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }
    table{
        width: 55%;
    }

    form {
        width: 30%;
        display: flex;
        flex-direction: column;
    }

    input,
    select,
    textarea {
        width: 100%;
        font-size: .9em;
        margin: .75em 0;
        padding: .5em .25em;
        outline: none;
        border: .1em solid #0175a7;
        border-radius: .25em;
    }

    input[type=submit] {
        background-color: #0175a7;
        color: white;
        border: none;
        cursor: pointer;
        font-weight: bolder;
    }

    input[type=file]{
        border:none;
    }
</style>

<body>
    <div class="container">
        <div class="top-section">
            <a href="../admin/admin-dashboard.php">
                <i class="fa-solid fa-arrow-left-long"></i>
                <p>Back to dashboard</p>
            </a>
        </div>
        <div class="bottom-section">
            <!--form-->
            <form action="" method="post">
                <input type="text" name="video-title" id="" placeholder="Title of the news..">
                <textarea name="" id="" cols="10" rows="10" placeholder="Description of the news.."></textarea>
                <select name="" id="">
                    <option value="default">Select a category</option>
                </select>
                <input type="file" name="" id="">
                <input type="submit" value="Add">
            </form>
            <!--table-->
            <table>
                <thead>
                    <th>News Title</th>
                    <th>Description</th>
                    <th>Upload Date</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>