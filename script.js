const images = [
    'https://via.placeholder.com/600x400?text=Image+1',  // Example image 1
    'https://via.placeholder.com/600x400?text=Image+2',  // Example image 2
    'https://via.placeholder.com/600x400?text=Image+3',  // Example image 3
    'https://via.placeholder.com/600x400?text=Image+4'   // Example image 4
];

let currentIndex = 0;
const imgElement = document.getElementById("kalabasa");

// Function to update the image
function updateImage() {
    imgElement.src = images[currentIndex];
    imgElement.classList.add('active');
    
    // Change image every 3 seconds
    setTimeout(() => {
        imgElement.classList.remove('active'); // Fade out
        currentIndex = (currentIndex + 1) % images.length; // Loop back to first image
        setTimeout(updateImage, 1000); // Pause for fade-out effect
    }, 3000);
}

// Initial image load
updateImage();


