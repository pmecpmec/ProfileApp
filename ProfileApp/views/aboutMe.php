<?php
global $hobbies, $Educations, $users;
//require_once 'education.php';
//require_once 'hobby.php';
//require_once 'user.php';
//require_once 'workexperience.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <header class="header">
        <nav>
            <div id="header">
                <img src="../img/logo-no-background.png" alt="Logo">
                <center><a href="index.html"><button>Home</button></a>
                    <a href="aboutMe.html"><button>About Me</button></a>
                    <a href="experience.html"><button>My Experience</button></a>
                    <a href="work.html"><button>My Work</button></a>
                    <a href="contact.html"><button>Contact Me</button></a></header></center>
    </div>
    </nav>
    </header>
</head>
<body>

<div class="grid-container">
    <div class="grid-item">1</div>
    <div class="grid-item">
        <?php foreach ($users as $user): ?>
        <div class="card">
            <div class="container">
                <div class="banner-container">
                    <div class="banner"><img class="profilePicture" src="../img/logo-color.png" alt="Avatar" style="width:200px"></div>
                    <div class="banner">
                        <div class="banner-grid-item"><h4><?php echo htmlspecialchars($user['username']); ?></h4></div>
                        <div class="banner-grid-item"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="grid-item">3</div>

    <div class="grid-item">4</div>
    <div class="grid-item">
        <div class="card">
            <div class="container">
                <b class="title">About me</b>
                <p></p>
                <p></p>
                <p></p>
            </div>
        </div>
    </div>
    <div class="grid-item">6</div>

    <div class="grid-item">4</div>
    <div class="grid-item">
        <?php foreach ($Educations as $Education): ?>
        <div class="card">
            <div class="container">
                <b class="title">Schoolprestatie</b>
                <p><?php echo htmlspecialchars($Education['education_name']); ?></p>
                <p><?php echo $Education['education_year']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="grid-item">6</div>

    <div class="grid-item">6</div>
    <div class="grid-item">
        <form method="post">
                <label for="new_education">Add a new education:</label>
                <input type="text" id="new_education" name="new_education">
                <input type="submit" value="Add">

                <label for="delete_education">Delete education:</label>
                <input type="text" id="delete_education" name="delete_education">
                <input type="submit" value="Delete">
        </form>
    </div>
    <div class="grid-item">6</div>

    <div class="grid-item">4</div>
    <div class="grid-item">

        <?php foreach ($workExperiences as $work): ?>
        <div class="card">
            <div class="container">
                <b class="title">Werkervaring</b>
                <p><?php
                    echo htmlspecialchars($work['job_title']); ?> at <?php echo htmlspecialchars($work['company_name']);
                    ?></p>
                <p><?php echo $work['job_year']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
    <div class="grid-item">6</div>

    <div class="grid-item">4</div>
    <div class="grid-item">

        <?php foreach ($hobbies as $hobby): ?>
        <div class="card">
            <div class="container">
                <b class="title">Hobby's</b>
                <p><?php echo htmlspecialchars($hobby['hobby_name']); ?></p>
                <p><?php echo $hobby['hobby_year']; ?></p>
                <p>Plaats</p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="grid-item">4</div>

    <div class="grid-item">4</div>
    <div class="grid-item">
        <form method="post">
                <label for="new_hobby">Add a new hobby:</label>
                <input type="text" id="new_hobby" name="new_hobby">
                <input type="submit" value="Add">

                <label for="delete_hobby">Delete a hobby:</label>
                <input type="text" id="delete_hobby" name="delete_hobby">
                <input type="submit" value="Delete">
            </form>
    </div>
    <div class="grid-item">4</div>

</div>
</body>
</html>

