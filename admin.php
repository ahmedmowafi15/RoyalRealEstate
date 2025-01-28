<?php
include('includes/header.php');
login_check_admin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Royal Real Estate</title>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="public/css/Bootstrap-select.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="public/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="public/js/jQuery.js"></script>
    <script src="public/js/scripts.js"></script>
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>

    <header>
        <h1>Admin - Royal Real Estate</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact Us</a>
        <a href="admin.php">Admin</a>
    </nav>

    <section id="admin-form">
        <form action="admin_process.php" method="post">
            <label for="image">Image URL:</label>
            <input type="text" id="image" name="image" required>

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <button type="submit">Add Property</button>
        </form>
    </section>

    <div class="container-fluid">
        <div class="row" id="cards-container">
            <?php
            $placeholderProperties = array(
                array(
                    'id' => 1,
                    'images' => array('public/images/1.jpg', 'public/images/2.jpg'),
                    'price' => '$500,000',
                    'description' => 'Spacious 3-bedroom house with a beautiful garden.',
                ),
                array(
                    'id' => 2,
                    'images' => array('public/images/3.jpg', 'public/images/4.jpg'),
                    'price' => '$700,000',
                    'description' => 'Modern apartment with stunning city views.',
                ),
                array(
                    'id' => 3,
                    'images' => array('public/images/5.jpg', 'public/images/6.jpg'),
                    'price' => '$1,000,000',
                    'description' => 'Luxury minimalist house with swimming pool and beautiful sea view.',
                ),
            );

            foreach ($placeholderProperties as $property) {
                echo '<div class="property-card property-card " data-description="' . strtolower($property["description"]) . '">';
                echo '<div class="property-image-container">';
                echo '<div class="property-image-carousel" id="carousel-' . $property["id"] . '">';

                foreach ($property['images'] as $index => $image) {
                    echo '<img src="' . $image . '" alt="Property Image" style="display: ' . ($index === 0 ? 'block' : 'none') . ';">';
                }

                echo '</div>';
                echo '<button class="prev" onclick="changeImage(' . $property["id"] . ', -1)">❮</button>';
                echo '<button class="next" onclick="changeImage(' . $property["id"] . ', 1)">❯</button>';
                echo '</div>';
                echo '<div class="property-details">';
                echo '<div class="property-price">' . $property["price"] . '</div>';
                echo '<div class="property-description">' . $property["description"] . '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
            </section>

            <script src="script.js"></script>

            <footer>
                &copy; 2023 Royal Real Estate
            </footer>

</body>

</html>