@extends('layouts.app')

@section('content')
<div class="estate-details">
    <h1>THESSAS'S ESTATE</h1>
    <div class="content-container">
        <div class="image-section">
            <div class="gallery-container">
                <button class="arrow prev" onclick="prevImage('interior')">&#9664;</button>
                <img id="interior-image" src="{{ asset('images/interior/' . $interiorImages[0]) }}" alt="Interior Image" class="gallery-image lazyload">
                <button class="arrow next" onclick="nextImage('interior')">&#9654;</button>
            </div>
        </div>
        <div class="text-section">
            <p class="description">
                Thessas's Estate offers luxury living with modern amenities and beautiful surroundings.
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
            <div class="button-container">
                <a href="https://wa.me/233558871838"><button class="btn btn-primary">BUY NOW</button></a>
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
