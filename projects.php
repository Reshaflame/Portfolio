<?php 
    include 'header.php'; 
    include 'config.php'; // include your database connection
?>

<main class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center my-4">Portfolio</h1>
            <p class="text-center">Not a lot but many to come!</p>
        </div>
    </div>
        
    <!-- Project List -->
    <div class="row">
        <?php
            // Your SQL query to fetch the projects
            $sql = "SELECT * FROM portfolio_almogKapach WHERE for_port = 1 ORDER BY project_date DESC";
            
            // Prepare and execute the SQL statement
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            // Fetch all the rows (projects) as an associative array
            $projects = $stmt->fetchAll();

            // Loop through the projects and output the HTML for each one
            foreach ($projects as $project) {
                echo "<div class='col-md-4 my-2'>";
                echo "<div class='card'>";
                echo "<img class='card-img-top' src='" . $project['project_img_link'] . "' alt='Project Image'>";
                echo "<div class='card-body'>";
                echo "<h3 class='card-title'>" . $project['project_name'] . "</h3>";
                echo "<p class='card-text'>" . $project['project_category'] . " / " . date_format(new DateTime($project["project_date"]), 'd/m/Y') . "</p>";
                echo "<a href='" . $project['project_link'] . "' class='btn btn-primary' target='_blank'>View Project</a>";
                echo "</div></div></div>";
            }

            
        ?>
    </div>
</main>

<?php include 'footer.php'; ?>