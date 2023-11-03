<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <header class="header">
        <img src="./img/logo-no-background.png" alt="Logo">
        <center><a href="home.html"><button>Home</button></a>
            <a href="aboutMe.html"><button>About Me</button></a>
            <a href="experience.html"><button>My Experience</button></a>
            <a href="work.html"><button>My Work</button></a>
            <a href="contact.html"><button>Contact Me</button></a>
</head>
<body>
<div class="profile-container">
        <?php
        $profiles = array(
          array(
            'name' => 'Profile 1',
            'image' => 'https://img.demorgen.be/412040aa02290eb651f309d87d1e26079f7e6f99/profielfoto-op-facebook-beinvloedt-wel-degelijk-jouw-jobkansen',
            'description' => 'Beschrijving van profiel 1',
            'location' => 'Almere, Netherlands',
            'occupation' => 'Web Developer',
            'education' => 'Bachelor in Computer Science',
            'interests' => 'Programming, Hiking, Photography',
            'projects' => array(
                'Project 1: UI/UX Redesign',
                'Project 2: Mobile App Design',)
           
        ),
        array(
            'name' => 'Profile 2',
            'image' => 'https://img.demorgen.be/412040aa02290eb651f309d87d1e26079f7e6f99/profielfoto-op-facebook-beinvloedt-wel-degelijk-jouw-jobkansen',
            'description' => 'Beschrijving van profiel 2',
            'location' => 'Amsterdam, Netherlands',
            'occupation' => 'UX Designer',
            'education' => 'Master in Design',
            'interests' => 'User Experience, Traveling, Music',
            'projects' => array(
                'Project 1: UI/UX Redesign',
                'Project 2: Mobile App Design',)
        ),
        array(
            'name' => 'Profile 3',
            'image' => 'https://img.demorgen.be/412040aa02290eb651f309d87d1e26079f7e6f99/profielfoto-op-facebook-beinvloedt-wel-degelijk-jouw-jobkansen',
            'description' => 'Beschrijving van profiel 3',
            'location' => 'Rotterdam, Netherlands',
            'occupation' => 'Data Scientist',
            'education' => 'Ph.D. in Data Science',
            'interests' => 'Data Analysis, Cooking, Reading',
            'projects' => array(
                'Project 1: UI/UX Redesign',
                'Project 2: Mobile App Design')
        )
    );

    foreach ($profiles as $profile) {
        echo '<div class="profile">';
        echo '<img src="' . $profile['image'] . '" alt="' . $profile['name'] . '">';
        echo '<h3>' . $profile['name'] . '</h3>';
        echo '<p>' . $profile['description'] . '</p>';
        echo '<p><strong>Location:</strong> ' . $profile['location'] . '</p>';
        echo '<p><strong>Occupation:</strong> ' . $profile['occupation'] . '</p>';
        echo '<p><strong>Education:</strong> ' . $profile['education'] . '</p>';
        echo '<p><strong>Interests:</strong> ' . $profile['interests'] . '</p>';
        echo '<div class="projects">';
        echo '<h4>Projects:</h4>';
        foreach ($profile['projects'] as $project) {
            echo '<p>' . $project . '</p>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
       
    }
        ?>
    </div>
</body>
</html>
