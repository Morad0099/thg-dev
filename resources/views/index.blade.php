@extends('layouts.app')

@section('content')

<div class="fullscreen-bg">
    <div class="content-overlay">
        <!-- Add any content you want to display over the image here -->
        <!-- Navigation Itemds -->
        <video autoplay muted loop id="bg-video">
            <source src="/videos/vid1.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>
    <x-navbar>
    </x-navbar>
    <div class="button-container">
        <a href="https://wa.me/233558871838"><button class="btn btn-primary">BUY NOW</button></a>
        <button class="btn btn-secondary">MORE DETAILS</button>
    </div>
</div>
<div class="fullscreen2-bg">
    <div class="description">
        <h3>Thessa's Corner</h3>
        <p class="price">FROM $70,000 to $140,000</p>
        <p class="location">Location: EAST LEGON AMERICA HOUSE</p>
    </div>
    <div class="content-overlay">
        <!-- Add any content you want to display over the image here -->
        <!-- Navigation Items -->
    </div>
    <div class="button-container">
        <a href="https://wa.me/233558871838"><button class="btn btn-primary">BUY NOW</button></a>
        <button class="btn btn-secondary">MORE DETAILS</button>
    </div>
</div>
<div class="fullscreen6-bg">
    <div class="description">
        <h3>Hillgrove</h3>
        <p class="price">FROM $70,000 to $140,000</p>
        <p class="location">Location: EAST LEGON ADJIRINGANOR</p>
    </div>
    <div class="content-overlay">
        <!-- Add any content you want to display over the image here -->
        <!-- Navigation Items -->
    </div>
    <div class="button-container">
        <a href="https://wa.me/233558871838"><button class="btn btn-primary">BUY NOW</button></a>
        <button class="btn btn-secondary">MORE DETAILS</button>
    </div>
</div>
<div class="fullscreen3-bg">
    <div class="description">
        <h3>Lucas Court</h3>
        <p class="price">FROM $100,000 to $340,000</p>
        <p class="location">Location: EAST LEGON HILLS</p>
    </div>
    <div class="content-overlay">
        <!-- Add any content you want to display over the image here -->
        <!-- Navigation Items -->
    </div>
    <div class="button-container">
        <a href="https://wa.me/233558871838"><button class="btn btn-primary">BUY NOW</button></a>
        <button class="btn btn-secondary">MORE DETAILS</button>
    </div>
</div>
<div class="fullscreen4-bg">
    <div class="description">
        <h3>Hill Rise Villas</h3>
        <p class="price">FROM $70,000 to $140,000</p>
        <p class="location">Location: EAST LEGON ADJIRINGONOR</p>
    </div>
    <div class="content-overlay">
        <!-- Add any content you want to display over the image here -->
        <!-- Navigation Items -->
    </div>
    <div class="button-container">
        <a href="https://wa.me/233558871838"><button class="btn btn-primary">BUY NOW</button></a>
        <button class="btn btn-secondary">MORE DETAILS</button>
    </div>
</div>
<div class="fullscreen5-bg">
    <div class="description">
        <h3>Queens Park</h3>
        <p class="price">FROM $100,000 to $340,000</p>
        <p class="location">Location: EAST LEGON HILLS</p>
    </div>
    <div class="content-overlay">
        <!-- Add any content you want to display over the image here -->
        <!-- Navigation Items -->
    </div>
    <div class="button-container">
        <a href="https://wa.me/233558871838"><button class="btn btn-primary">BUY NOW</button></a>
        <button class="btn btn-secondary">MORE DETAILS</button>
    </div>
</div>

@endsection


