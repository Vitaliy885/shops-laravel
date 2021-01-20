require('./bootstrap');

// div to top
(function () {
    let scrollUp = document.querySelector('.scrollUp');
    window.addEventListener('scroll', function () {
        if (window.pageYOffset >= 300) {
            scrollUp.classList.add('active');
        } else {
            scrollUp.classList.remove('active');
        }
    });

    scrollUp.addEventListener('click', function () {
        window.scrollTo({top: 0, left: 0, behavior: "smooth"});
    });
})();
