<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details - LAXMI CONSTRUCTION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Basic Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
        }
        .image-gallery {
            flex: 1;
            min-width: 300px;
            margin-right: 20px;
        }
        .main-image img {
            width: 100%;
            height: 300px;
            border-radius: 8px;
            object-fit: cover;
            margin-bottom: 10px;
            transition: transform 0.3s ease;
        }
        .main-image img:hover {
            transform: scale(1.05);
        }
        .thumbnail-container {
            display: flex;
            gap: 10px;
        }
        .thumbnail-container img {
            width: 70px;
            height: 70px;
            border-radius: 8px;
            cursor: pointer;
            object-fit: cover;
            transition: transform 0.3s ease;
            border: 2px solid transparent;
        }
        .thumbnail-container img:hover,
        .thumbnail-container img.active {
            border-color: #CBC3E3; /* Changed color */
            transform: scale(1.05);
        }
        .property-info {
            flex: 2;
            min-width: 300px;
        }
        .property-info h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }
        .property-info .price {
            font-size: 20px;
            color: #CBC3E3; /* Changed color */
            margin-bottom: 20px;
        }
        .property-info p {
            line-height: 1.6;
            color: #555;
        }
        .property-info .details {
            margin-top: 15px;
        }
        .property-info .details h3 {
            margin: 5px 0;
            color: #333;
        }
        .icon-details {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }
        .icon-details .detail-item {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #555;
            transition: color 0.3s ease;
        }
        .icon-details .detail-item:hover {
            color: #CBC3E3; /* Changed color */
        }
        .icon-details i {
            color: #CBC3E3; /* Changed color */
        }
    </style>
</head>
<body>
    <?php
    include("header.php");
    include("connection.php"); // Your existing connection file

    // Fetch property data (this should be replaced with actual database fetching logic)
    $propertyName = "THE CENTRUM"; 
    $price = "₹25,000 Per Month";
    $location = "Jahangirabad, Surat";
    $area = "1595 sqft";
    $beds = 3;
    $baths = 2;
    $balcony = 1;
    $description = "Beautiful 3 BHK apartment available in the heart of Surat. This property offers a perfect combination of comfort and elegance.";
    ?>

    <div class="container">
        <!-- Image Gallery -->
        <div class="image-gallery">
            <div class="main-image">
                <img id="currentImage" src="property/ri1.png" alt="Main Property Image">
            </div>
            <div class="thumbnail-container">
                <img src="property/ri1.png" alt="Thumbnail" onclick="changeImage(this)" class="active">
                <img src="property/ri2.png" alt="Thumbnail" onclick="changeImage(this)">
                <img src="property/ri3.png" alt="Thumbnail" onclick="changeImage(this)">
                <img src="property/ri3.png" alt="Thumbnail" onclick="changeImage(this)">
                <img src="property/ri3.png" alt="Thumbnail" onclick="changeImage(this)">
                <img src="property/ri3.png" alt="Thumbnail" onclick="changeImage(this)">
                
            </div>
        </div>

        <!-- Property Info -->
        <div class="property-info">
            <h1><?php echo $propertyName; ?></h1>
            <div class="price"><?php echo $price; ?></div>
            <p><?php echo $description; ?></p>
            <div class="details">
                <h3>Location: <?php echo $location; ?></h3>
                <h3>Area: <?php echo $area; ?></h3>
                <div class="icon-details">
                    <div class="detail-item"><i class="fas fa-bed"></i> <?php echo $beds; ?> Beds</div>
                    <div class="detail-item"><i class="fas fa-bath"></i> <?php echo $baths; ?> Baths</div>
                    <div class="detail-item"><i class="fas fa-archway"></i> <?php echo $balcony; ?> Balcony</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to change the main image when a thumbnail is clicked
        function changeImage(element) {
            const mainImage = document.getElementById("currentImage");
            const thumbnails = document.querySelectorAll(".thumbnail-container img");
            
            // Change the main image source
            mainImage.src = element.src;
            
            // Remove 'active' class from all thumbnails
            thumbnails.forEach(thumbnail => thumbnail.classList.remove("active"));
            
            // Add 'active' class to the clicked thumbnail
            element.classList.add("active");
        }
    </script>

    <?php include("footer.php"); ?>
</body>
</html>
