<!-- Company Logo -->
<div class="logo">
    <img src="{{ asset('logo/logo2.png') }}" alt="Company Logo">
</div>


<!-- Menu Button for smaller screens -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#drawerMenu" aria-controls="drawerMenu"
    aria-expanded="false" aria-label="Toggle navigation" id="menuButton">&#9776;
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
            <a class="nav-link" href="#">
                Estates <span class="arrow-icon">&gt;</span>
            </a>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="#">
                Enquiries  <span class="arrow-icon">&gt;</span>
            </a>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="#">
                About Us  <span class="arrow-icon">&gt;</span>
            </a>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="#">
                Contacts  <span class="arrow-icon">&gt;</span>
            </a>
        </div>
        {{-- <div class="nav-item">
            <a class="nav-link" href="#">
                Queens Park  <span class="arrow-icon">&gt;</span>
            </a>
        </div> --}}
    </div>
</div>

<!-- Overlay Cards -->
<div class="overlay" id="overlay1">
    <div class="overlay-content">
        <div class="estate-card">
            <img src="/images/w1.jpg" alt="Estate 1">
            <h5 class="card-title">Estate 1</h5>
            {{-- <p class="card-text">Description of Estate 1...</p> --}}
            <a href="https://wa.me/0558871838"><button class="btn btn-primary">BUY NOW</button></a>
            <button class="btn btn-secondary">MORE DETAILS</button>
        </div>
        <div class="estate-card">
            <img src="/images/w3.jpg" alt="Estate 2">
            <h5 class="card-title">Estate 2</h5>
            {{-- <p class="card-text">Description of Estate 2...</p> --}}
            <a href="https://wa.me/0558871838"><button class="btn btn-primary">BUY NOW</button></a>
            <button class="btn btn-secondary">MORE DETAILS</button>
        </div>
        <div class="estate-card">
            <img src="/images/w4.jpg" alt="Estate 3">
            <h5 class="card-title">Estate 3</h5>
            {{-- <p class="card-text">Description of Estate 2...</p> --}}
            <a href="https://wa.me/0558871838"><button class="btn btn-primary">BUY NOW</button></a>
            <button class="btn btn-secondary">MORE DETAILS</button>
        </div>
        <div class="estate-card">
            <img src="/images/w3.jpg" alt="Estate 2">
            <h5 class="card-title">Estate 4</h5>
            {{-- <p class="card-text">Description of Estate 2...</p> --}}
            <a href="https://wa.me/0558871838"><button class="btn btn-primary">BUY NOW</button></a>
            <button class="btn btn-secondary">MORE DETAILS</button>
        </div>
        <div class="estate-card">
            <img src="/images/w3.jpg" alt="Estate 5">
            <h5 class="card-title">Estate 5</h5>
            {{-- <p class="card-text">Description of Estate 2...</p> --}}
            <a href="https://wa.me/0558871838"><button class="btn btn-primary">BUY NOW</button></a>
            <button class="btn btn-secondary">MORE DETAILS</button>
        </div>
        <!-- Add more estate cards as needed -->
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
    });

    // document.addEventListener("DOMContentLoaded", function() {
    //         $('#menuButton').on('click', function() {
    //             $('#drawerMenu').collapse('toggle');
    //         });
    //         $('#closeButton').on('click', function() {
    //             $('#drawerMenu').collapse('hide');
    //         });
    //     });
</script>
