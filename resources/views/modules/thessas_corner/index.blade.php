@extends('layouts.app')

@section('content')
    <div class="estate-details">
        <h1>THESSAS'S ESTATE</h1>
        <div class="content-container">
            <div class="image-section">
                <div class="gallery-container">
                    <button class="arrow prev" onclick="prevImage('interior')">&#9664;</button>
                    <img id="interior-image" src="{{ asset('images/interior/' . $interiorImages[0]) }}" alt="Interior Image"
                        class="gallery-image">
                    <button class="arrow next" onclick="nextImage('interior')">&#9654;</button>
                </div>
            </div>
            <div class="text-section">
                <div class="scrollable-content">

                <p class="desc">
                    Explore our featured Thessa’s Corner in a prime location. This stunning 5-bedroom house offers the
                    perfect blend of luxury, comfort, and modern living. With spacious interiors, high-end finishes, and
                    thoughtful design, this home is ideal for families looking for their forever home. Starting price at
                    $250,000.00.
                </p>
                
                <div class="features">
                    <h2>Key Features</h2>
                    <ul>
                        <li> <span style="font-weight: bold;">Living Room:</span>
                            Enjoy the expansive living room with large windows that flood the space with natural light.
                            Perfect for entertaining guests or relaxing with family.</li>
                        <li><span style="font-weight: bold;">Modern Kitchen: </span>
                            The gourmet kitchen is a chef’s delight, featuring top-of-the-line appliances,
                            ample counter space, and custom cabinetry. Whether you’re preparing a quick meal or hosting a
                            dinner party, this kitchen has everything you need.</li>
                        <li><span style="font-weight: bold;">Five Bedrooms: </span>
                            Each bedroom is designed for comfort and privacy. The master suite boasts a
                            walk-in closet and a luxurious en-suite bathroom with a soaking tub, separate shower, and dual
                            vanities.</li>
                        <li><span style="font-weight: bold;">Elegant Bathrooms: </span>
                            In addition to the master en-suite, the house includes multiple full
                            bathrooms and a convenient powder room, all fitted with modern fixtures and stylish finishes.
                        </li>
                        <li><span style="font-weight: bold;">Location: </span>
                            Located in East Legon Adjiringanor, close to top schools, shopping centers, parks, and
                            other amenities. Enjoy the convenience of city living while residing in a peaceful,
                            family-friendly area.</li>
                    </ul>
                    Schedule a Viewing Today! Don’t miss the opportunity to make this exquisite house your new home. Contact
                    us today to schedule a private tour and see for yourself what makes this property so special. Welcome to
                    your dream home!
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
