document.addEventListener('DOMContentLoaded', function() {
    var navItems = document.querySelectorAll('.nav-item');

    navItems.forEach(function(item) {
        item.addEventListener('mouseover', function() {
            var dropdown = this.querySelector('.dropdown-menu');
            dropdown.classList.add('show');
        });

        item.addEventListener('mouseleave', function() {
            var dropdown = this.querySelector('.dropdown-menu');
            dropdown.classList.remove('show');
        });
    });
});
