<div>
    <div class="search">
        <input type="text" name="Cari Kos" id="" placeholder="Masukan Nama Kos atau Lokasi">
     </div>
    
     <section class="Kost-card">
        <div class="kost-content">
            @foreach ($kosts as $kost)
            <div class="boarding-card">
                <img src="assets/img_3.png" alt="Kos Komar">
                <div class="card-text">
                    <h2>{{$kost->nama}}</h2>
                    <h3>{{$kost->harga}}<span>/Bln</span></h3>
                </div>
                <p>{{$kost->lokasi}}</p>
                <div class="icons">
                    <img src="assets/icons.svg" alt="" srcset="">
                </div>
                <a href="{{ route('detail', $kost->id) }}" class="btn">More Details</a>
            </div>
            @endforeach
     </section>
    </div>
