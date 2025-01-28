function changeImage(propertyId, direction) {
    var carouselId = 'carousel-' + propertyId;
    var carousel = document.getElementById(carouselId);
    var images = carousel.getElementsByTagName('img');
    var currentIndex = getCurrentIndex(images);

    var newIndex = (currentIndex + direction + images.length) % images.length;

    for (var i = 0; i < images.length; i++) {
        images[i].style.display = i === newIndex ? 'block' : 'none';
    }
}
function getCurrentIndex(images) {
    for (var i = 0; i < images.length; i++) {
        if (images[i].style.display !== 'none') {
            return i;
        }
    }
    return 0;
}
function filterProperties() {
    var searchInput = document.getElementById('search-input');
    var filter = searchInput.value.toLowerCase();
    var propertyCards = document.getElementsByClassName('property-card');
    for (var i = 0; i < propertyCards.length; i++) {
        var description = propertyCards[i].getAttribute('data-description').toLowerCase();
        if (description.includes(filter)) {
            propertyCards[i].style.display = 'block';
        } else {
            propertyCards[i].style.display = 'none';
        }
    }
}

function validateContactForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (name.trim() === '' || email.trim() === '' || message.trim() === '') {
        alert('Please fill in all fields.');
        return false;
    }
    return true;
}
