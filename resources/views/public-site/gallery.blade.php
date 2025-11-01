@extends('layouts.app')

@section('content')

<style>
    .gallery-img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<!--=================================
 inner-intro -->

<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="text-center row intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">Gallery </h1>
            </div>
            <div class="col-md-6 text-md-end float-end">
                <ul class="page-breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>Gallery</span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--=================================
 inner-intro -->


<!-- gallery-page-section -->
<section class="my-section-padding">
    <div class="container">
        <div class="row g-2">
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="assets/images/car/06.jpg" alt="" class="gallery-img">
            </div>
        </div>
    </div>
</section>
<!-- gallery-page-section end -->


<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<script>
    // init Isotope
    var iso = new Isotope('.gallery-grid', {
        itemSelector: '.gallery-block',
        layoutMode: 'fitRows'
    });

    // bind filter button click
    document.querySelectorAll('.filter-buttons button').forEach(button => {
        button.addEventListener('click', () => {
            const filterValue = button.getAttribute('data-filter');
            iso.arrange({
                filter: filterValue
            });
        });
    });
</script>
@endsection