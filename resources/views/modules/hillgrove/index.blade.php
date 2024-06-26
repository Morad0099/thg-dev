@extends('layouts.app')

@section('content')
<div class="estate-details">
    <h1>HILLGROVE ESTATE</h1>
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
                Explore our featured Hillgrove in a prime location in East Legon - Adjiringanor. This stunning 3-bedroom house offers the perfect blend of luxury, comfort, and modern living. Discover the perfect blend of comfort and style in this delightful 2-bedroom house. Ideal for small families, couples, or individuals seeking a cozy yet modern living space, this home offers all the amenities you need for a comfortable lifestyle. Starting price $75,000.00.
            </p>
            <div class="features">
                <h2>Key Features</h2>
                <ul>
                    <li><span style="font-weight: bold;">Cozy Living Room: </span>
                         A warm and inviting living area with plenty of natural light, perfect for relaxing or entertaining guests.</li>
                    <li><span style="font-weight: bold;">Modern Kitchen: </span>
                        Fully equipped with modern appliances, ample storage, and a convenient layout, making meal preparation a breeze.</li>
                    <li><span style="font-weight: bold;">Two Comfortable Bedrooms: </span>
                        Spacious and well-lit bedrooms designed for rest and relaxation, each with ample closet space.</li>
                    <li><span style="font-weight: bold;">Stylish Bathroom: </span>
                        A sleek, contemporary bathroom with high-quality fixtures and finishes.</li>
                    <li><span style="font-weight: bold;">Outdoor Space: </span>
                        A private backyard or patio area, ideal for outdoor dining or enjoying a morning coffee.</li>
                    <li><span style="font-weight: bold;">Great Location: </span>
                        Situated in a friendly neighborhood close to schools, parks, shopping, and public transport.</li>
                </ul>
                Schedule a Viewing Today! Don’t miss the opportunity to make this exquisite house your new home. Contact us today to schedule a private tour and see for yourself what makes this property so special. Welcome to your dream home!
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
