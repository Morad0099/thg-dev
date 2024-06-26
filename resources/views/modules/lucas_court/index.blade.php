@extends('layouts.app')

@section('content')
<div class="estate-details">
    <h1>LUCAS COURT ESTATE</h1>
    <div class="content-container">
        <div class="image-section">
            <div class="gallery-container">
                <button class="arrow prev" onclick="prevImage('interior')">&#9664;</button>
                <img id="interior-image" src="{{ asset('images/interior/' . $interiorImages[0]) }}" alt="Interior Image" class="gallery-image">
                <button class="arrow next" onclick="nextImage('interior')">&#9654;</button>
            </div>
        </div>
        <div class="text-section">
            <p class="desc">
                Discover unparalleled luxury in this magnificent 6-bedroom estate. Perfect for large families or those who love to entertain, this home offers expansive living spaces and high-end amenities. Starting price $70,000.00.
            </p>
            <div class="features">
                <div class="scrollable-content">

                <h2>Key Features</h2>
                <ul>
                    <li><span style="font-weight: bold;">Grand Living Areas: </span>
                        Multiple spacious living areas, including a formal living room, family room, and a separate dining room.</li>
                    <li><span style="font-weight: bold;">Chef’s Kitchen: </span>
                        A state-of-the-art kitchen equipped with high-end appliances, granite countertops, and custom cabinetry.</li>
                    <li><span style="font-weight: bold;">Six Luxurious Bedrooms: </span>
                        Generously sized bedrooms with ample closet space, including a master suite with a walk-in closet and a spa-like en-suite bathroom.</li>
                    <li><span style="font-weight: bold;">Elegant Bathrooms: </span>
                        Multiple bathrooms with premium fixtures and finishes, including a luxurious master en-suite.</li>
                    <li><span style="font-weight: bold;">Exclusive Location: </span>
                        Located in a prestigious neighborhood with top-rated schools, shopping, parks, and easy access to transportation.</li>
                </ul>
                <span style="font-weight: bold;">Why You'll Love This Home: </span> estates offer the ultimate in luxury living, with attention to every detail. Whether you’re hosting large gatherings or enjoying quiet family time, these homes provide the perfect setting for all your needs.
            </div>
            <div class="butt-container">
                <a href="https://wa.me/233558871838"><button class="btn btn-primary">BUY NOW</button></a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

<script>
    let interiorIndex = 0;

    const interiorImages = @json($interiorImages);

    function showImage(type, index) {
        if (type === 'interior') {
            document.getElementById('interior-image').src = `{{ asset('images/interior/') }}/${interiorImages[index]}`;
        }
    }

    function prevImage(type) {
        if (type === 'interior') {
            interiorIndex = (interiorIndex > 0) ? interiorIndex - 1 : interiorImages.length - 1;
            showImage(type, interiorIndex);
        }
    }

    function nextImage(type) {
        if (type === 'interior') {
            interiorIndex = (interiorIndex < interiorImages.length - 1) ? interiorIndex + 1 : 0;
            showImage(type, interiorIndex);
        }
    }
</script>
