<?php
include('includes/header.php');
?>


<section id="property-listings" class="sections">
        <div class="container header">
            <div class="row text-center">
                <h5>Estates</h5>
                <p>The best designs and decorations of watch stores, elegant, attractive, and comfortable, create motivation to buy, with cheerful colors, and shelves that arouse astonishment and attract the eye to buy.</p>
            </div>
        </div>
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
                ),array(
                    'id' => 4,
                    'images' => array('public/images/1.jpg', 'public/images/2.jpg'),
                    'price' => '$500,000',
                    'description' => 'Spacious 3-bedroom house with a beautiful garden.',
                ),
                array(
                    'id' => 5,
                    'images' => array('public/images/3.jpg', 'public/images/4.jpg'),
                    'price' => '$700,000',
                    'description' => 'Modern apartment with stunning city views.',
                ),
                array(
                    'id' => 6,
                    'images' => array('public/images/5.jpg', 'public/images/6.jpg'),
                    'price' => '$1,000,000',
                    'description' => 'Luxury minimalist house with swimming pool and beautiful sea view.',
                ),
            );
            
            foreach ($placeholderProperties as $property) {
                echo '<div class="property-card " data-description="' . strtolower($property["description"]) . '">';
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
            </div>
        </div>
</section>

<?php
include('includes/footer.php');
?>