document.addEventListener('wpcf7mailsent', function(event) {
        var element = document.getElementById("hidden-downloads");
        element.classList.add("form-submitted");
    },
false);