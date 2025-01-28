<?php
include('includes/header.php');
?>

    
<section class="section Section-About" data-bg="#FEF5F5" data-text="#000">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-lg-8 col-md-10 col-sm-12">
                    <div class="titile-section text-center">
                        <h3>Get all design and implementation services from one place </h3>
                        <p>The best designs and decorations of watch stores, elegant, attractive, and comfortable, create motivation to buy, with cheerful colors, and shelves that arouse astonishment and attract the eye to buy.</p>
                    </div>
                </div>
               
            </div>
        </div>
</section>
<section id="property-listings" class="sections">
        <div class="container-fluid header">
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
            ),
            array(
                'id' => 4,
                'images' => array('public/images/5.jpg', 'public/images/6.jpg'),
                'price' => '$1,500,000',
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
       
          

        </div>
        <div class="row">   <a href='estates.php' class="btn btn-success morebtn">See More</a></div>
    </div>
</section>
<div class="section About-items-section" data-bg="#F5F5F5" data-text="#000">
       
        <!--  ---------------------------------- -->
        <div class="banner-fluid-image">
            <img src="public/images/about.png" alt="image"/>
        </div> 
        <!-------------------------------------->
         <div class="text-attach-to-image-fluid">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <div class="card-text">
                            <h3> More About Royal Real</h3>
                            <p>Welcome to Royal Real Estate! We are a team of dedicated professionals passionate about helping you find the perfect property for your needs. Our mission is to make the process of buying, selling, or renting real estate as simple and efficient as possible.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<section  class="section_contact">
    <div  id="contact-form"  class="sections">
      <div class="container header">
            <div class="row text-center">
                <h5>Contact Us</h5>
                <p>Have questions or inquiries? Reach out to us using the form below:</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form action="process_contact.php" method="post" onsubmit="return validateContactForm()">
                   <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" required>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
                    </div>
                    <div class="col-12">
                        <label for="message">Message:</label>
                        <textarea id="message" class="form-control" name="message" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                   </div>
                </form>
                <div class="contact-info">
                    <p>You can contact us also at :<a href="tel: 0123456789"> 0123456789</a></p>
                    <p>Email : <a href="mailto:Royal@realestate.com">Royal@realestate.com</a></p>
                </div>
                   
            </div>
        </div>


    </div>
</section>

    <?php
include('includes/footer.php');
?>