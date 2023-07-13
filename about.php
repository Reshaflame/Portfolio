<?php 
    include 'header.php'; 

    $skills = array(
        "HTML" => 85,
        "CSS" => 90,
        "JavaScript" => 80,
    );
?>

<main class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center my-4">About me:</h1>
        </div>
    </div>
    
    <!-- ID Card -->
    <div class="card mb-4">
        <div class="card-body">
            <!-- Left Side -->
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <img class='profile-img' src="images/mypic.png" alt="Your Image" class="img-thumbnail">
                        </div>
                        <div class="col-md-6">
                            <p>Name: Almog Kapach</p>
                            <p>Profile: Software developer</p>
                            <p>Email: <a href="mailto:reshaflame@gmail.com">reshaflame@gmail.com</a></p>
                            <p>GitHub: <a href="https://github.com/Reshaflame">My github</a></p>
                        </div>
                    </div>
                    <h3>Skills</h3>

                    <!-- Skill Bars -->
                    <?php foreach ($skills as $skill_name => $skill_percentage): ?>
                        <p><?php echo $skill_name . " - " . $skill_percentage . "%"; ?></p>
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $skill_percentage; ?>%;" aria-valuenow="<?php echo $skill_percentage; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Right Side -->
                <div class="col-lg-6">
                    <h1 class="card-title">Almog</h1>
                    <p class="card-text">A student at Shenkar College, majoring in Software Engineering and Data Science, Almog is well-versed in a symphony of languages: C++, Java, and JavaScript, you name it, he's got it, with a dash of algorithms, a sprinkle of AI, and a hefty scoop of object-oriented design to boot.</p>
                    <p class="card-text">In the realm of code, he is a Seuss, weaving tales of data and design with a rhyme and rhythm that sings. Every line of code, a verse in his grand opus, the screen his stage, the keyboard his quill.</p>
                    <p class="card-text">As he journeys through the wide world of software, Almog continues to learn, to grow, to code. For in the world of software, the learning never ends, and neither does the coding, and Almog wouldn't have it any other way.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>