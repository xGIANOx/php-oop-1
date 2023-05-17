<?php
        require_once './models/category.php';
        require_once './models/movie.php';
        require_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Movie List</title>
</head>
<style>
    li{
        margin-bottom: 2rem;
    }
</style>
<body>
    <h1>Movies List</h1>
    <ul>
        
        <?php foreach ($movies as $movie): ?>
            <li>
                <strong>Name:</strong> <?php echo $movie->getName(); ?><br>
                <strong>Category:</strong> <?php echo $movie->getCategory()->category_name; ?><br>
                <strong>Recommended Age:</strong> <?php echo $movie->getCategory()->recommended_age; ?><br>
                <strong>Year:</strong> <?php echo $movie->getYear(); ?><br>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
