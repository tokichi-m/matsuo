document.addEventListener('DOMContentLoaded', function() {
    loadComponent('header.html', 'header', initializeHeaderScripts);
    loadComponent('footer.html', 'footer');

    function loadComponent(url, elementSelector, callback) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.querySelector(elementSelector).innerHTML = xhr.responseText;
                if (callback) callback();
            }
        };
        xhr.send();
    }

    function initializeHeaderScripts() {
        const hamburger = document.querySelector('.hamburger');
        const navList = document.querySelector('.nav-list');

        if (hamburger) {
            hamburger.addEventListener('click', function() {
                navList.classList.toggle('active');
            });
        }
    }
});
