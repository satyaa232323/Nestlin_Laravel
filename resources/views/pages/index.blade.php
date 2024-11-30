@extends('app')

@section('content')
  <!-- Hero Section -->
  <section class="hero-container">
    <div class="hero-content">
        <h2>Cari Kos Sambil Rebahan?</h2>
        <p>Cari Infonya Di sini aja</p>
    </div>
    <img src="assets/image 1.svg" alt=""/>
</section>

<!-- Hero Information S ection -->
<section class="hero-information">
    <div class="information-content">
        <h3>Cari Kos Kini Bisa sambil Rebahan dong</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro unde placeat inventore quae quas vel aspernatur quis ducimus magnam maxime?</p>
    </div>
    <img src="assets/img_3.png" alt="Information Image" />
</section>

 <!-- Blog Post Section -->
 <div class="blog-heading">
     <h2>Blog Posts</h2>
 </div>
 <section class="blog-post">
    <div class="blog-content">
        <div class="blog-post-container">
            <div class="blog-text">
                <h4>Blog Posts</h4>
                <h3>Kos Kosan Purwokerto</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec magna eu ante facilisis pulvinar at at orci. Donec mattis rutrum dapibus.</p>
                <div class="nav-arrows">
                    <button class="prev-btn"><</button>
                    <button class="next-btn">></button>
                </div>
            </div>
            <div class="blog-image">
                <img src="assets/img_4.png" alt="Blog Post Image">
            </div>
        </div>
    </div>
</section>

<!-- Boarding House -->
<div class="boarding-header">
    <h2>Boarding House</h2>
</div>

<section class="boarding-house">
    <div class="boarding-card">
        <img src="assets/img_3.png" alt="Kos Komar">
        <div class="card-text">
            <h2>Kos Komar</h2>
            <h3>Rp. 700.000 <span>/Bln</span></h3>
        </div>
        <p>Purwokerto Selatan</p>
        <div class="icons">
            <img src="assets/icons.svg" alt="" srcset="">
        </div>
        <button class="btn">More Details</button>
    </div>
    <div class="boarding-card">
        <img src="assets/img_3.png" alt="Kos Komar">
        <div class="card-text">
            <h2>Kos Komar</h2>
            <h3>Rp. 700.000 <span>/Bln</span></h3>
        </div>
        <p>Purwokerto Selatan</p>
        <div class="icons">
            <img src="assets/icons.svg" alt="" srcset="">
        </div>
        <button class="btn">More Details</button>
    </div>
    <div class="boarding-card">
        <img src="assets/img_3.png" alt="Kos Komar">
        <div class="card-text">
            <h2>Kos Komar</h2>
            <h3>Rp. 700.000 <span>/Bln</span></h3>
        </div>
        <p>Purwokerto Selatan</p>
        <div class="icons">
            <img src="assets/icons.svg" alt="" srcset="">
        </div>
        <button class="btn">More Details</button>
    </div>
    </div>
</section>
@endsection

