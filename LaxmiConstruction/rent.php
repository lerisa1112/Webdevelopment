<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAXMI CONSTRUCTION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/model.css">
</head>
<body>
    <?php
    include("header.php");
    include("connection.php"); // Your existing connection file

    // Check for form submission
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['name'])) {
        $name = $_POST['name'];
        $contactNumber = $_POST['contactNumber'];
        $email = $_POST['email'];
        $propertyName = $_POST['propertyName']; // Get the property name

        // Insert into database
        $stmt = $conn->prepare("INSERT INTO request (name, contact_number, email, property_name) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $contactNumber, $email, $propertyName);

        if ($stmt->execute()) {
            // Redirect to the rent page after successful submission
            header("Location: rent.php"); // Update to your actual rent page URL
            exit(); // Stop further execution
        } else {
            echo "<script>alert('Error: Could not store data.');</script>";
        }

        $stmt->close();
    }
    ?>
    <style>
        .b {
    background-color: black; /* Background color */
    color: #CBC3E3; /* Text color */
    border: none; /* Remove border */
    padding: 10px 20px; /* Add padding */
    text-align: center; /* Center text */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Block display */
    font-size: 16px; /* Font size */
    cursor: pointer; /* Pointer cursor */
    transition: background-color 0.3s, color 0.3s; /* Transition effects */
}

.b:hover {
    background-color: lightpurple; /* Hover background color */
    color: #CBC3E3; /* Hover text color */
}

    </style>
    
    <section class="featured" id="featured">
        <h1 class="heading"> <span>featured</span> properties </h1>
        <div class="box-container">
            <!-- Property box 1 -->
            <div class="box">
                <div class="image-container">
                    <img src="property/ri1.png" alt="">
                </div>
                <div class="content">
                    <div class="price">
                        <h3>₹25,000 Per Month</h3>
                        <a href="tel:+919876543210" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>THE CENTRUM</h3>
                        <p>Jahangirabad, Surat</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 1595 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn" onclick="openContactModal(event, 'THE CENTRUM')">request info</a>
                        <a href="view.php" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <!-- Property box 2 -->
            <div class="box">
                <div class="image-container">
                    <img src="property/ri1.png" alt="">
                </div>
                <div class="content">
                    <div class="price">
                        <h3>₹30,000 Per Month</h3>
                        <a href="tel:+919876543210" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>PROPERTY 2</h3>
                        <p>Some Location</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 1800 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 4 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 3 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn" onclick="openContactModal(event, 'PROPERTY 2')">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <!-- Property box 3 -->
            <div class="box">
                <div class="image-container">
                    <img src="property/ri1.png" alt="">
                </div>
                <div class="content">
                    <div class="price">
                        <h3>₹35,000 Per Month</h3>
                        <a href="tel:+919876543210" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>PROPERTY 3</h3>
                        <p>Another Location</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 2000 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 5 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 4 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn" onclick="openContactModal(event, 'PROPERTY 3')">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <!-- Modal for Request Info -->
    <div id="infoModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2 style="font-size: 1.5rem;">Share Your Contact</h2>
            <form id="contactForm" method="POST">
                <div class="form-field">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-field">
                    <input type="text" name="contactNumber" placeholder="Contact Number" required>
                </div>
                <div class="form-field">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <input type="hidden" name="propertyName" id="propertyName"> <!-- Hidden field for property name -->
                <button type="submit" class="b">Get Contact Details</button>
            </form>
        </div>
    </div>

    <script>
        // Get the modal
        const infoModal = document.getElementById("infoModal");

        // Get the <span> element that closes the modal
        const closeBtn = document.querySelector(".close-btn");

        // Close the modal
        closeBtn.onclick = function() {
            infoModal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == infoModal) {
                infoModal.style.display = "none";
            }
        }

        // Open the contact modal and set the property name
        function openContactModal(event, propertyName) {
            event.preventDefault(); // Prevent default anchor behavior
            document.getElementById("propertyName").value = propertyName; // Set the property name in the form
            infoModal.style.display = "block"; // Open the contact modal
        }
    </script>
</body>
</html>
