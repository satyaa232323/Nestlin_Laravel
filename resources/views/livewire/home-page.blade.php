<div>
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
    </section>  kosts' => $kosts]);

    @foreach ($kosts as $kost)
    <section class="boarding-house">
        <div class="boarding-card">
            <img src="{{ asset('storage/' . $kost['gambar']) }}" alt="Image">
            <div class="card-text">
                <h2>{{$kost->nama}}</h2>
                <h3>{{$kost->harga}}<span>/Bln</span></h3>
            </div>
            <p>{{$kost->lokasi}}</p>
            <div class="icons">
                <img src="assets/icons.svg" alt="" srcset="">
            </div>
            <button class="btn">More Details</button>
        </div>
    </section>
    @endforeach
   
</div>
