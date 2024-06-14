@extends('layouts.app')

@section('content')
<div class="estate-details">
    <h1>Queens Park Estate</h1>
    <p class="description">
        Queens Park Estate offers luxury living with modern amenities and beautiful surroundings.
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
    

    <h2>Gallery</h2>
    <h3>Interior</h3>
    <div class="gallery">
        @foreach($interiorImages as $image)
            <img src="{{ asset('images/interior/' . $image) }}" alt="Interior Image" class="gallery-image">
        @endforeach
    </div>

    <h3>Exterior</h3>
    <div class="gallery">
        @foreach($exteriorImages as $image)
            <img src="{{ asset('images/' . $image) }}" alt="Exterior Image" class="gallery-image">
        @endforeach
    </div>

    <div class="but-container">
        <a href="https://wa.me/233558871838"><button class="btn btn-primary">BUY NOW</button></a>
    </div>
</div>
@endsection
