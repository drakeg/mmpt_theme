jQuery(document).ready(function($) {
    $('a').on('click', function() {
        $('body').css('background-image', 'none');
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var searchIcon = document.querySelector(".search-icon");
    var searchContainer = document.querySelector(".search-container");

    searchIcon.addEventListener("click", function() {
        if (searchContainer.style.display === "none" || searchContainer.style.display === "") {
            searchContainer.style.display = "block";
        } else {
            searchContainer.style.display = "none";
        }
    });
});