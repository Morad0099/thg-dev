@extends('layouts.app')

@section('content')
    <div class="carousel-container">
        <div class="carousel-slide">
            <img src="/images/hil1.jpg" alt="Image 1">
            <img src="/images/high.jpg" alt="Image 2">
            <img src="/images/hil2.jpg" alt="Image 3">
            <img src="/images/w2..jpg" alt="Image 4">
            <img src="/images/x.2.jpg" alt="Image 5">
        </div>
        <div class="content-overlay">
            <h1 class="welcome-message">Redefining Elegance in the Heart of the City.</h1>
            <!-- Navigation Items -->
        </div>
        <div class="content-overlay">
            <h4 class="desktop-view">We are dedicated to helping you find your dream home. <br> Explore our listings and discover the possibilities.</h4>
            <h4 class="mobile-view">We are dedicated to helping you find your dream home. Explore our listings and discover the possibilities.</h4>
        </div>
        
        

        
        {{-- <x-navbar></x-navbar> --}}
        {{-- <div class="button-container">
            <a href="https://wa.me/233558871838"><button class="btn btn-primary">Buy Now</button></a>
            <button class="btn btn-secondary">More Details</button>
        </div> --}}
    </div>
    <div class="fullscreen2-bg">
        <div class="description">
            <h3>Thessa's Corner</h3>
            <p class="price">Starting price $250,000.00.</p>
            <p class="location">Location: EAST LEGON AMERICA HOUSE</p>
        </div>
        <div class="content-overlay">
            <!-- Add any content you want to display over the image here -->
            <!-- Navigation Items -->
        </div>
        <div class="button-container">
            <a href="https://wa.me/233558871838"><button class="btn btn-primary">Buy Now</button></a>
            <button class="btn btn-secondary" onclick="window.location.href='{{route('thessas_corner')}}'">More Details</button>
        </div>
    </div>
    <div class="fullscreen6-bg">
        <div class="description">
            <h3>Hillgrove</h3>
            <p class="price">Starting price $75,000.00</p>
            <p class="location">Location: EAST LEGON ADJIRINGANOR</p>
        </div>
        <div class="content-overlay">
            <!-- Add any content you want to display over the image here -->
            <!-- Navigation Items -->
        </div>
        <div class="button-container">
            <a href="https://wa.me/233558871838"><button class="btn btn-primary">Buy Now</button></a>
            <button class="btn btn-secondary" onclick="window.location.href='{{route('hillgrove')}}'">More Details</button>
        </div>
    </div>
    <div class="fullscreen3-bg">
        <div class="description">
            <h3>Lucas Court</h3>
            <p class="price">Starting price $70,000.00</p>
            <p class="location">Location: EAST LEGON HILLS</p>
        </div>
        <div class="content-overlay">
            <!-- Add any content you want to display over the image here -->
            <!-- Navigation Items -->
        </div>
        <div class="button-container">
            <a href="https://wa.me/233558871838"><button class="btn btn-primary">Buy Now</button></a>
            <button class="btn btn-secondary" onclick="window.location.href='{{route('lucas_court')}}'">More Details</button>
        </div>
    </div>
    <div class="fullscreen4-bg">
        <div class="description">
            <h3>Hill Rise Villas</h3>
            <p class="price">Starting price $90,000.00</p>
            <p class="location">Location: EAST LEGON ADJIRINGONOR</p>
        </div>
        <div class="content-overlay">
            <!-- Add any content you want to display over the image here -->
            <!-- Navigation Items -->
        </div>
        <div class="button-container">
            <a href="https://wa.me/233558871838"><button class="btn btn-primary">Buy Now</button></a>
            <button class="btn btn-secondary" onclick="window.location.href='{{route('hill_rise_villas')}}'">More Details</button>
        </div>
    </div>
    <div class="fullscreen5-bg">
        <div class="description">
            <h3>Queens Park</h3>
            <p class="price">Starting price $550,000.00</p>
            <p class="location">Location: EAST LEGON HILLS</p>
        </div>
        <div class="content-overlay">
            <!-- Add any content you want to display over the image here -->
            <!-- Navigation Items -->
        </div>
        <div class="button-container">
            <a href="https://wa.me/233558871838"><button class="btn btn-primary">Buy Now</button></a>
            <button class="btn btn-secondary" onclick="window.location.href='{{route('queens_park')}}'">More Details</button>
        </div>
    </div>

    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.carousel-slide img');
        const totalSlides = slides.length;

        function showSlide(index) {
            const slideWidth = 100 / totalSlides; // Adjust for 6 images
            const newTransformValue = `translateX(-${index * slideWidth}%)`;
            document.querySelector('.carousel-slide').style.transform = newTransformValue;
        }

        function nextSlide() {
            slideIndex++;
            if (slideIndex >= totalSlides) {
                slideIndex = 1; // Reset to the first image (skip the duplicate)
                document.querySelector('.carousel-slide').style.transition = 'none'; // Disable transition for reset
                showSlide(0); // Immediately move to the first slide (which is duplicate)
                setTimeout(() => {
                    document.querySelector('.carousel-slide').style.transition =
                    'transform 1s ease-in-out'; // Re-enable transition
                    showSlide(slideIndex);
                }, 20);
            } else {
                showSlide(slideIndex);
            }
        }

        // Initial call to show the first slide
        showSlide(slideIndex);

        // Change slide every 3 seconds (3000ms)
        setInterval(nextSlide, 3000);
    </script>
@endsection
