<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <header class="header">
        <?php
        include 'nav/nav.php';
        ?>
    </header>
    </div>
    </header>
    <style>
        .container {
            max-width: 660px;
            margin: 0 auto;
        }

        .feed {
            flex: 2;
            background-color: #fff;
            padding: 20px;
        }

        .sidebar {
            width: 220px;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin: 20px;
            flex: 1;
        }

        .post {
            background-color: #fff;
            border: 1px solid #ddd;
            margin: 20px 0;
            padding: 20px;
        }

        .post header {
            display: flex;
            align-items: center;
        }

        .post header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .post header h2 {
            font-size: 1.2rem;
        }

        .post p {
            font-size: 1rem;
        }

        .post img {
            max-width: 100%;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="post">
            <header>
                <img src="https://www.techjuice.pk/wp-content/uploads/2015/02/wallpaper-for-facebook-profile-photo.jpg" alt="User 1">
                <h2>Name</h2>
            </header>
            <p>text</p>
            <img src="https://images0.persgroep.net/rcs/lntoKftt_NA02MsaJ03hreHofLc/diocontent/236564573/_fitwidth/694/?appId=21791a8992982cd8da851550a453bd7f&quality=0.8" alt="Post 1">
        </div>
        <div class="post">
            <header>
                <img src="https://www.techjuice.pk/wp-content/uploads/2015/02/wallpaper-for-facebook-profile-photo.jpg" alt="User 2">
                <h2>Name</h2>
            </header>
            <p>text</p>
            <img src="https://www.outdoordichtbij.nl/wp-content/uploads/2020/06/DSC_4437.jpg" alt="Post 2">
        </div>
    </div>
    <div class="sidebar">
        <h2>Jouw profiel</h2>
        <p>Name:</p>
        <p>Job Title:</p>
    </div>
</body>

</html>