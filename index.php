<?php

include 'courses.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WrapUpGarage</title>
    <link rel="stylesheet" href="/Project1/WrapUpGarage/css/styles.css">
    <link rel="stylesheet" href="/Project1/WrapUpGarage/css/footer.css">

</head>
<body>
    <div class="header-block">
        <h1 class="three-d-text">WrapUpGarage</h1>
        <h6 class="three-d-text">Your Ultimate Destination for Car Customization</h6>
    </div>    

    <p><b>WrapUpGarage</b> is not just another automobile garage; it’s a haven for car enthusiasts looking to elevate their vehicles 
       to a whole new level of style, comfort, and performance. Specializing in both internal and external modifications, 
       we transform ordinary cars into extraordinary machines. With a team of skilled craftsmen, designers, and engineers, 
       we provide customized solutions that meet the unique preferences of our clients. Whether you are looking for a complete 
       transformation or just a subtle upgrade, <b>WrapUpGarage</b> has everything you need to make your car truly your own.
    </p>

    <div class="img-text">
        <h2>Exterior Modifications</h2>
        <p> At WrapUpGarage, we believe the exterior of a car is more than just its outer shell—it’s a reflection of the owner's personality and style. We offer a wide range of exterior modifications to give your car a standout look</p>
        <!-- Custom Paint Jobs Section -->
        <div class="modification-container">
            <div class="modification-content">
                <div class="text-section">
                    <h3><a href="custom_paint_jobs.php">Custom Paint Jobs</a></h3>
                    <p>Give your car a unique identity with our custom paint jobs. From solid, metallic, and matte finishes to more intricate designs like racing stripes and airbrushed artwork, we have a wide range of options to suit every taste.</p>
                </div>
                <div class="image-section">
                    <div class="image-container" id="paint-images">
                        <?php
                        $imageDir = 'Saved Pictures/paint';
                        $images = scandir($imageDir);
                        $images = array_diff($images, array('.', '..'));
                        foreach ($images as $image) {
                            echo '<img src="' . $imageDir . '/' . $image . '" alt="Custom Paint Image" class="image">';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vinyl Wraps Section -->
        <div class="modification-content">
            <div class="text-section">
                <h3><a href="vinyl_wraps.php">Vinyl Wraps</a></h3>
                <p>Transform the look of your car without committing to a permanent change. Our vinyl wraps come in various colors, textures, and finishes, including gloss, satin, and carbon fiber. Vinyl wraps also offer protection for the original paint, keeping your car looking brand new.</p>
            </div>
            <div class="image-section">
                <div class="image-container" id="wrap-images">
                    <?php
                    $imageDir = 'Saved Pictures/wrapcar';
                    $images = scandir($imageDir);
                    $images = array_diff($images, array('.', '..'));
                    foreach ($images as $image) {
                        echo '<img src="' . $imageDir . '/' . $image . '" alt="Vinyl Wrap Image" class="image">';
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Add more modification sections as needed -->
    </div>

    <!-- JavaScript for Image Slideshow -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Get all image containers
            const imageContainers = document.querySelectorAll(".image-container");

            imageContainers.forEach(container => {
                const images = container.querySelectorAll(".image");
                let currentIndex = 0;

                // Function to show the next image
                function showNextImage() {
                    images[currentIndex].classList.remove('active');
                    currentIndex = (currentIndex + 1) % images.length;
                    images[currentIndex].classList.add('active');
                }

                // Start the slideshow, change image every 2 seconds
                setInterval(showNextImage, 2000);

                // Initially show the first image
                images[currentIndex].classList.add('active');
            });
        });
    </script>
       <div class="img-text">
    <h2>Interior Modifications</h2>
    <p>The inside of your car should be just as impressive as the outside. <br>At <b>WrapUpGarage</b>, we offer a wide range of interior modifications designed to enhance comfort, aesthetics, and functionality:</p>
    
    <div class="modification-container">
        <div class="modification-content">
            <div class="text-section">
                <h3><a href="Custom_Cushioning.php">Custom Upholstery and Cushioning</a></h3>
                <p>Revitalize your car's interior with our premium custom upholstery services. Choose from a variety of materials such as leather, Alcantara, and vegan-friendly options, available in a wide range of colors and stitching patterns. Our expert craftsmanship ensures that every seat is as comfortable as it is stylish.</p>
                <h3> Dash and Console Wraps </h3>
                <p>Transform the look of your dashboard and center console with our vinyl wraps, available in materials like carbon fiber, brushed metal,and wood grain. This upgrade adds a touch of luxury and helps protect surfaces from wear and tear.</p>
       
            </div>
            <div class="image-section">
                <div class="image-container" id="Cushioning-images">
                    <?php
                    $imageDir = 'Saved Pictures/interior_cusion'; // Ensure the path is correct
                    $images = scandir($imageDir);
                    $images = array_diff($images, array('.', '..'));
                    foreach ($images as $image) {
                        echo '<img src="' . $imageDir . '/' . $image . '" alt="Custom Upholstery and Cushioning" class="image">';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Vinyl Wraps Section -->
    <div class="modification-content">
        <div class="text-section">
            <h3><a href="vinyl_wraps.php">Custom Steering Wheels</a></h3>
            <p>Add a personal touch to your driving experience with custom steering wheels. From carbon fiber to hand-stitched leather, our steering wheels are designed for optimal grip, comfort, and style.</p>
            <h3> Floor Mats and Custom Carpeting </h3>
        <p>Protect your car's flooring with durable, stylish floor mats and custom carpeting. Choose from a variety of materials and colors that complement your interior design.</p>
      
        </div>
        <div class="image-section">
            <div class="image-container" id="Steering-weels-images">
                <?php
                $imageDir = 'Saved Pictures/staring'; // Ensure the path is correct
                $images = scandir($imageDir);
                $images = array_diff($images, array('.', '..'));
                foreach ($images as $image) {
                    echo '<img src="' . $imageDir . '/' . $image . '" alt="Custom Steering Wheels" class="image">';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Add more modification sections as needed -->
</div>

 

<h2>Performance Modifications </h2>
        <p>At <b>WrapUpGarage</b>, we understand that true car enthusiasts are often just as concerned about what’s under the hood as they are about how their car looks. That’s why we offer a range of performance modifications designed <br>to improve your car’s power, handling, and efficiency:</p>
       
    <div class="modification-container">
        <div class="modification-content">
            <div class="text-section">
                <h3><a href="Custom_Cushioning.php">Engine Tuning and ECU Remapping</a></h3>
                <p>Maximize your car’s performance with our advanced engine tuning and ECU remapping services. By optimizing your engine’s control unit, we can increase horsepower, torque, and fuel efficiency, giving you a more responsive and thrilling driving experience.</p>
                <h3>Brake Upgrades</h3>
                <p>Stay safe and in control with our high-performance brake kits. We offer larger brake calipers, ventilated rotors, and high-quality pads to ensure superior stopping power for your vehicle.</p>
       
            </div>
            <div class="image-section">
                <div class="image-container" id="maintanance-images">
                    <?php
                    $imageDir = 'Saved Pictures/maintanance'; // Ensure the path is correct
                    $images = scandir($imageDir);
                    $images = array_diff($images, array('.', '..'));
                    foreach ($images as $image) {
                        echo '<img src="' . $imageDir . '/' . $image . '" alt="Engine Tuning and ECU Remapping" class="image">';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Vinyl Wraps Section -->
    <div class="modification-content">
        <div class="text-section">
            <h3><a href="vinyl_wraps.php">Suspension Upgrades</a></h3>
            <p>Improve your car’s handling and ride comfort with our suspension upgrades. From coilover kits to air suspension systems, we provide solutions tailored to your driving style, whether you prefer a sporty, stiff setup or a smooth, comfortable ride.</p>
            <h3> Cold Air Intakes and Exhaust Systems: </h3>
                <p>Enhance airflow and boost your car’s power with custom cold air intake systems. Pair this with our performance exhaust systems to improve sound and horsepower, giving your car a more aggressive presence on the road.</p>
       
           
        </div>
        <div class="image-section">
            <div class="image-container" id="Steering-weels-images">
                <?php
                $imageDir = 'Saved Pictures/staring'; // Ensure the path is correct
                $images = scandir($imageDir);
                $images = array_diff($images, array('.', '..'));
                foreach ($images as $image) {
                    echo '<img src="' . $imageDir . '/' . $image . '" alt="Custom Steering Wheels" class="image">';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Add more modification sections as needed -->
</div>
      
        
        
       
        <h2>Why Choose WrapUpGarage?</h2>
        <p>At WrapUpGarage, we are passionate about cars and dedicated to delivering top-notch craftsmanship. Here’s what sets us apart:</p>
        <h3>• Expert Team </h3>
        <p>Our team consists of experienced mechanics, designers, and technicians who bring a wealth of knowledge and expertise to every project. We pride ourselves on precision and attention to detail, ensuring every modification is executed flawlessly.</p>
        <h3>• Customer-Centric Approach </h3>
        <p>We believe that every car should be as unique as its owner. That’s why we take the time to understand your vision, preferences, and budget before recommending the best solutions for your car. Your satisfaction is our top priority.</p>
        <h3>• Quality Materials </h3>
    <p>We use only the best materials and products in our modifications, ensuring durability and a premium finish. From high-quality paints to top-of-the-line audio equipment, every component we use meets our strict standards for excellence.</p>
    <h3>• End-to-End Services </h3>
    <p><b>WrapUpGarage</b> offers a complete range of services, from initial consultations and design to installation and final inspection. We handle every step of the process, making your car customization journey smooth and hassle-free.</p>
    

    <footer class="wrapup-footer">
    <div class="social-links">
        <a href="https://www.facebook.com" class="social-item">
            <img src="Saved Pictures/footer icons/facebook.png" alt="Facebook" class="social-icon">
            FACEBOOK
        </a>
        <a href="https://www.instagram.com" class="social-item">
            <img src="Saved Pictures/footer icons/isntagram.png" alt="Instagram" class="social-icon">
            INSTAGRAM
        </a>
        <a href="https://www.linkedin.com" class="social-item">
            <img src="Saved Pictures/footer icons/linkedin-sign.png" alt="LinkedIn" class="social-icon">
            LINKEDIN
        </a>
        <a href="https://www.tiktok.com" class="social-item">
            <img src="Saved Pictures/footer icons/tiktok.png" alt="TikTok" class="social-icon">
            TIK TOK
        </a>
        <a href="https://www.x.com" class="social-item">
            <img src="Saved Pictures/footer icons/twitter.png" alt="X" class="social-icon">
            X
        </a>
        <a href="https://www.youtube.com" class="social-item">
            <img src="Saved Pictures/footer icons/youtube.png" alt="YouTube" class="social-icon">
            YOUTUBE
        </a>
    </div>

    <div class="company-info">
        Wrap Up Garage - © 2024 All rights reserved.
    </div>

    <div class="contact-info">
        Contact us: info@wrapupgarage.com | +123-456-7890
        <ul>
            <?php foreach ($courses as $course): ?>
                <ul><?php echo htmlspecialchars($course); ?></ul>
            <?php endforeach; ?>
        </ul>
    </div>
</footer>

   

</body>
</html>