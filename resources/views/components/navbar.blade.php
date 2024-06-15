<!-- Company Logo -->
<div class="logo">
    <a href="/"><img src="{{ asset('logo/logo2.png') }}" alt="Company Logo"></a>
</div>


<!-- Menu Button for smaller screens -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#drawerMenu" aria-controls="drawerMenu"
    aria-expanded="false" aria-label="Toggle navigation" id="menuButton">Menu
</button>
<!-- Navigation Items -->
<div class="navbar-custom">
    <div class="nav-item" data-target="overlay1">
        <a class="nav-link" href="#">
            Estates
        </a>
    </div>
    <div class="nav-item" data-target="overlay2">
        <a class="nav-link" href="#">
            Enquiries
        </a>
    </div>
    <div class="nav-item" data-target="overlay3">
        <a class="nav-link" href="#">
            About Us
        </a>
    </div>
    <div class="nav-item" data-target="overlay4">
        <a class="nav-link" href="#">
            Contacts
        </a>
    </div>
    {{-- <div class="nav-item" data-target="overlay5">
        <a class="nav-link" href="#">
            Queens Park
        </a>
    </div> --}}
</div>

<!-- Drawer Menu -->
<div class="collapse drawer-menu" id="drawerMenu">
    <div class="drawer-header">
        <button class="close-button" type="button" data-toggle="collapse" data-target="#drawerMenu"
            aria-controls="drawerMenu" aria-expanded="false" aria-label="Close navigation" id="closeButton">
            &times;
        </button>
    </div>
    <div class="drawer-content">
        <div class="nav-item">
            <a class="nav-link" href="#" id="estatesLink">
                Estates <span class="arrow-icon">&#x25BC;</span>
            </a>
            <div class="dropdown-menu" id="estatesDropdown">
                <div class="drawer-item">
                    <a class="nav-link" href="/thessas_corner">Thessa's Corner</a>
                </div>
                <div class="drawer-item">
                    <a class="nav-link" href="/hillgrove">Hillgrove</a>
                </div>
                <div class="drawer-item">
                    <a class="nav-link" href="/lucas_court">Lucas Court</a>
                </div>
                <div class="drawer-item">
                    <a class="nav-link" href="/hill_rise_villas">Hill Rise Villas</a>
                </div>
                <div class="drawer-item">
                    <a class="nav-link" href="/queens_park">Queens Park</a>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="#">Enquiries</a>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="#">About Us</a>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="#">Contacts</a>
        </div>
    </div>
</div>



<!-- Overlay for displaying estate details -->
<div class="overlay" id="overlay1">
    <div class="overlay-content">
        <div class="estate-container">
            <div class="estate">
                <img src="images/w1.jpg" alt="Estate 1" class="estate-img">
                <h6 class="estate-name">Thessa's Corner</h6>
                <a href="https://wa.me/233558871838"><button class="btn btn-primary">Buy Now</button></a>
                <button class="btn btn-secondary" onclick="window.location.href='{{ route('thessas_corner') }}'">More
                    Details</button>
            </div>
            <div class="estate">
                <img src="images/w4.jpg" alt="Estate 1" class="estate-img">
                <h6 class="estate-name">Hillgrove</h6>
                <a href="https://wa.me/233558871838"><button class="btn btn-primary">Buy Now</button></a>
                <button class="btn btn-secondary" onclick="window.location.href='{{ route('hillgrove') }}'">More
                    Details</button>
            </div>
            <div class="estate">
                <img src="images/w3.jpg" alt="Estate 1" class="estate-img">
                <h6 class="estate-name">Lucas Court</h6>
                <a href="https://wa.me/233558871838"><button class="btn btn-primary">Buy Now</button></a>
                <button class="btn btn-secondary" onclick="window.location.href='{{ route('lucas_court') }}'">More
                    Details</button>
            </div>
            <div class="estate">
                <img src="images/x.2.jpg" alt="Estate 1" class="estate-img">
                <h6 class="estate-name">Hill Rise Villas</h6>
                <a href="https://wa.me/233558871838"><button class="btn btn-primary">Buy Now</button></a>
                <button class="btn btn-secondary"
                    onclick="window.location.href='{{ route('hill_rise_villas') }}'">More Details</button>
            </div>
            <div class="estate">
                <img src="images/x.1.jpg" alt="Estate 1" class="estate-img">
                <h6 class="estate-name">Queens Park</h6>
                <a href="https://wa.me/233558871838"><button class="btn btn-primary">Buy Now</button></a>
                <button class="btn btn-secondary" onclick="window.location.href='{{ route('queens_park') }}'">More
                    Details</button>
            </div>
        </div>
    </div>
</div>
<div class="overlay" id="overlay2">
    <div class="overlay-content">
        <h5 class="card-title">Enquiry Details</h5>
        <p class="card-text">Description of Enquiry...</p>
    </div>
</div>
<div class="overlay" id="overlay3">
    <div class="overlay-content">
        <h5 class="card-title">About us Details</h5>
        <p class="card-text">Description of About us...</p>
    </div>
</div>
<div class="overlay" id="overlay4">
    <div class="overlay-content">
        <h5 class="card-title">Contact Details</h5>
        <p class="card-text">Description of Contact...</p>
    </div>
</div>
{{-- <div class="overlay" id="overlay5">
    <div class="overlay-content">
        <h5 class="card-title">Estate 5 Details</h5>
        <p class="card-text">Description of Estate 5...</p>
    </div>
</div> --}}



<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.nav-item').forEach(item => {
            const targetId = item.getAttribute('data-target');
            const overlay = document.getElementById(targetId);

            item.addEventListener('mouseover', () => {
                document.querySelectorAll('.overlay').forEach(o => {
                    o.classList.remove('active');
                    o.querySelector('.overlay-content').classList.remove('visible');
                });

                overlay.classList.add('active');
                overlay.querySelector('.overlay-content').classList.add('visible');
            });
        });

        document.querySelectorAll('.overlay').forEach(overlay => {
            overlay.addEventListener('mouseover', () => {
                overlay.classList.add('active');
                overlay.querySelector('.overlay-content').classList.add('visible');
            });

            overlay.addEventListener('mouseout', () => {
                overlay.classList.remove('active');
                overlay.querySelector('.overlay-content').classList.remove('visible');
            });
        });

        // Handle dropdown in drawer menu
        const estatesLink = document.getElementById('estatesLink');
        const estatesDropdown = document.getElementById('estatesDropdown');
        const arrowIcon = estatesLink.querySelector('.arrow-icon');

        estatesLink.addEventListener('click', function(event) {
            event.preventDefault();
            estatesDropdown.classList.toggle('show');
            arrowIcon.innerHTML = estatesDropdown.classList.contains('show') ? '&#x25B2;' : '&#x25BC;';
        });

        // Optional: Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!estatesLink.contains(event.target) && !estatesDropdown.contains(event.target)) {
                estatesDropdown.classList.remove('show');
                arrowIcon.innerHTML = '&#x25BC;';
            }
        });
    });
</script>
