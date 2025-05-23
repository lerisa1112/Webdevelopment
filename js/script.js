// Script
let navbar = document.querySelector('.header .navbar');
let searchForm = document.querySelector('.header .search-form');
let loginForm = document.querySelector('.header .login-form');
let contactInfo = document.querySelector('.contact-info');

document.querySelector('#menu-btn').onclick = () => {
   navbar.classList.toggle('active');
   searchForm.classList.remove('active');
   loginForm.classList.remove('active');
};

document.querySelector('#search-btn').onclick = () => {
   searchForm.classList.toggle('active');
   navbar.classList.remove('active');
   loginForm.classList.remove('active');
};

document.querySelector('#login-btn').onclick = () => {
   loginForm.classList.toggle('active');
   navbar.classList.remove('active');
   searchForm.classList.remove('active');
};

document.querySelector('#info-btn').onclick = () => {
   contactInfo.classList.toggle('active');
};

document.querySelector('#info-btn').onclick = () => {
   contactInfo.classList.add('active');
};

document.querySelector('#close-contact-info').onclick = () => {
   contactInfo.classList.remove('active');
};

// home coast 
// document.getElementById('printButton').style.display = 'none';

// // Function to calculate the cost
// // Sample costs per square meter and square foot for different states
// const costPerUnit = {
//    "California": { sq_meters: 3000, sq_feet: 279 },
//    "Texas": { sq_meters: 2000, sq_feet: 186 },
//    "Florida": { sq_meters: 2500, sq_feet: 232 },
//    "New York": { sq_meters: 3500, sq_feet: 325 },
//    // Add more states as needed
// };

// function calculateCost() {
//    // Get user inputs
//    const state = document.getElementById('state').value.trim();
//    const city = document.getElementById('city').value.trim();
//    const area = parseFloat(document.getElementById('area').value);
//    const unit = document.getElementById('unit').value;

//    // Validate inputs
//    if (!state || !city || isNaN(area) || area <= 0) {
//        alert("Please enter valid inputs.");
//        return;
//    }

//    // Check if state is in the cost mapping
//    if (!costPerUnit[state]) {
//        alert("Cost information not available for this state.");
//        return;
//    }

//    // Calculate cost based on the unit selected
//    const costPerSqUnit = costPerUnit[state][unit];
//    const totalCost = costPerSqUnit * area;

//    // Display the result
//    document.getElementById('result').innerHTML = `
//        <p>The estimated cost for building in ${city}, ${state} is:</p>
//        <p><strong>$${totalCost.toFixed(2)}</strong></p>
//    `;

//    // Show the print button
//    document.getElementById('printButton').style.display = 'block';
// }

// // Optional: Event listener for the Print button
// document.getElementById('printButton').addEventListener('click', function() {
//    window.print();
// });

// end 

window.onscroll = () => {
   navbar.classList.remove('active');
   searchForm.classList.remove('active');
   loginForm.classList.remove('active');
   contactInfo.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
   loop: true,
   grabCursor: true,
   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", {
   loop: true,
   grabCursor: true,
   spaceBetween: 20,
   breakpoints: {
      640: {
         slidesPerView: 1
      },
      768: {
         slidesPerView: 2
      },
      991: {
         slidesPerView: 3
      },
   }
});

var swiper = new Swiper(".blogs-slider", {
   loop: true,
   grabCursor: true,
   spaceBetween: 20,
   breakpoints: {
      640: {
         slidesPerView: 1
      },
      768: {
         slidesPerView: 2
      },
      991: {
         slidesPerView: 3
      },
   }
});

var swiper = new Swiper(".logo-slider", {
   loop: true,
   grabCursor: true,
   spaceBetween: 20,
   breakpoints: {
      450: {
         slidesPerView: 2
      },
      640: {
         slidesPerView: 3
      },
      768: {
         slidesPerView: 4
      },
      1000: {
         slidesPerView: 5
      },
   }
});

