const infoModal = document.getElementById("infoModal");
const otpModal = document.getElementById("otpModal");

// Get the buttons that open the modals
const requestInfoButtons = document.querySelectorAll(".btn");

// Get the <span> elements that close the modals
const closeBtns = document.getElementsByClassName("close-btn");

// Open info modal
requestInfoButtons.forEach(button => {
    button.onclick = function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        infoModal.style.display = "block";
    }
});

// Close modals
Array.from(closeBtns).forEach(btn => {
    btn.onclick = function() {
        infoModal.style.display = "none";
        otpModal.style.display = "none";
    }
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == infoModal) {
        infoModal.style.display = "none";
    } else if (event.target == otpModal) {
        otpModal.style.display = "none";
    }
}

// Handle contact form submission
document.getElementById("contactForm").onsubmit = function(event) {
    event.preventDefault();
    // Close the info modal
    infoModal.style.display = "none";
    // Open the OTP modal
    otpModal.style.display = "block";
};

// Handle OTP form submission
document.getElementById("otpForm").onsubmit = function(event) {
    event.preventDefault();
    const otpValue = document.getElementById("otp").value;
    // Here you can add logic to verify OTP
    alert(`OTP submitted: ${otpValue}`);
    otpModal.style.display = "none"; // Close the OTP modal
};