@extends('layouts.app')

@section('content')
<div class="estate-details">
    <h1>THESSAS'S ESTATE</h1>
    <div class="content-container">
        <div class="image-section">
            <h2 style="margin-left: 50px">Gallery</h2>
            <h3 style="margin-left: 50px">Interior</h3>
            <div class="gallery-container">
                <button class="arrow prev" onclick="prevImage('interior')">&#9664;</button>
                <img id="interior-image" src="{{ asset('images/interior/' . $interiorImages[0]) }}" alt="Interior Image" class="gallery-image">
                <button class="arrow next" onclick="nextImage('interior')">&#9654;</button>
            </div>

            <h3 style="margin-left: 50px; margin-top: 10px">Exterior</h3>
            <div class="gallery-container">
                <button class="arrow prev" onclick="prevImage('exterior')">&#9664;</button>
                <img id="exterior-image" src="{{ asset('images/' . $exteriorImages[0]) }}" alt="Exterior Image" class="gallery-image">
                <button class="arrow next" onclick="nextImage('exterior')">&#9654;</button>
            </div>
        </div>
        <div class="text-section">
            <p class="description">
                Thessa's Corner Estate offers luxury living with modern amenities and beautiful surroundings.
                Located in the heart of the city, it provides easy access to all major attractions and facilities.
            </p>
            <div class="features">
                <h2>Features</h2>
                <ul>
                    <li>Spacious living areas</li>
                    <li>Modern kitchen with state-of-the-art appliances</li>
                    <li>Beautifully landscaped gardens</li>
                    <li>24/7 security</li>
                    <li>Swimming pool</li>
                </ul>
            </div>
            <div class="but-container">
                <a href="https://wa.me/233558871838"><button class="btn btn-primary">BUY NOW</button></a>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    let interiorIndex = 0;
    let exteriorIndex = 0;

    const interiorImages = @json($interiorImages);
    const exteriorImages = @json($exteriorImages);

    function showImage(type, index) {
        if (type === 'interior') {
            document.getElementById('interior-image').src = `{{ asset('images/interior/') }}/${interiorImages[index]}`;
        } else {
            document.getElementById('exterior-image').src = `{{ asset('images/') }}/${exteriorImages[index]}`;
        }
    }

    function prevImage(type) {
        if (type === 'interior') {
            interiorIndex = (interiorIndex > 0) ? interiorIndex - 1 : interiorImages.length - 1;
            showImage(type, interiorIndex);
        } else {
            exteriorIndex = (exteriorIndex > 0) ? exteriorIndex - 1 : exteriorImages.length - 1;
            showImage(type, exteriorIndex);
        }
    }

    function nextImage(type) {
        if (type === 'interior') {
            interiorIndex = (interiorIndex < interiorImages.length - 1) ? interiorIndex + 1 : 0;
            showImage(type, interiorIndex);
        } else {
            exteriorIndex = (exteriorIndex < exteriorImages.length - 1) ? exteriorIndex + 1 : 0;
            showImage(type, exteriorIndex);
        }
    }
</script>
