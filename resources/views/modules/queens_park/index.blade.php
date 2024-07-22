@extends('layouts.app')

@section('content')
<div class="estate-details">
    <h1>QUEENS PARK ESTATE</h1>
    <div class="content-container">
        <div class="image-section">
            <div class="gallery-container">
                <button class="arrow prev" onclick="prevImage('interior')">&#9664;</button>
                <img id="interior-image" src="{{ asset('images/interior/' . $interiorImages[0]) }}" alt="Interior Image" class="gallery-image">
                <button class="arrow next" onclick="nextImage('interior')">&#9654;</button>
            </div>
        </div>
        <div class="text-section">
            <div class="scrollable-content">
                <p class="desc">
                    Welcome to Queens Park. This stunning 6-bedroom house offers the perfect blend of luxury, comfort, and modern living. This home is ideal for families looking for spacious living areas and high-end finishes. Starting price $550,000.00.
                </p>
                <div class="features">
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
                </div>
                <div class="butt-container">
                    <a href="https://wa.me/233558871838"><button class="btn btn-buy">Buy Now</button></a>
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
