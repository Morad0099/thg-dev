@extends('layouts.app')

@section('content')
<div class="estate-details">
    <h1>HILL RISE VILLAS ESTATE</h1>
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
                Explore our featured Hillrise Villas located in the East Legon Hills estate. This stunning 3 & 4-bedroom house offers the perfect blend of luxury, comfort, and modern living. With spacious interiors, high-end finishes, and thoughtful design, this home is ideal for families looking for their forever home. Starting price $90,000.00.
            </p>
            <div class="features">
                <h2>Key Features</h2>
                <ul>
                    <li><span style="font-weight: bold;">Spacious Living Areas: </span>
                        Multiple living spaces, including a formal living room and a family room, offering plenty of room for relaxation and entertainment.</li>
                    <li><span style="font-weight: bold;">State-of-the-Art Kitchen: </span>
                        A modern kitchen with high-end appliances, granite countertops, and custom cabinetry.</li>
                    <li><span style="font-weight: bold;">Four Generous Bedrooms: </span>
                        Well-appointed bedrooms with large windows and plenty of closet space, including a master suite with a walk-in closet and en-suite bathroom.</li>
                    <li><span style="font-weight: bold;">Three Bathrooms: </span>
                        Stylish and modern bathrooms, including a luxurious master en-suite.</li>
                    <li><span style="font-weight: bold;">Outdoor Entertainment: </span>
                        A large backyard with a deck or patio area, ideal for outdoor dining and gatherings.</li>
                    <li><span style="font-weight: bold;">Excellent Location: </span>
                        Located in a desirable neighborhood close to top schools, shopping, parks, and transportation.</li>
                </ul>
                Don’t miss the opportunity to make this exquisite house your new home. Contact us today to schedule a private tour and see for yourself what makes this property so special. Welcome to your dream home!
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
