<div class="container">   
    <div class="kost-title">{{$detailKos->nama}}</div>
    <div class="kost-price">{{$detailKos->harga}}</div>
    <div class="kost-content">
        <div class="kost-images">
            <img src="{{ asset('storage/' . $detailKos['gambar']) }}" alt="Image" class="main-img">
            <div class="small-images">
                <img src="{{ asset('storage/' . $detailKos['gambar']) }}" alt="Image">
                <img src="{{ asset('storage/' . $detailKos['gambar']) }}" alt="Image">
            </div>
        </div>
    </div>
        <div class="kost-info">
            <h4>KATEGORI KOS:</h4>
            <p>Laki-laki</p>
            <h4>SPESIFIKASI KAMAR:</h4>
            <p>6 x 8</p>
            <h4>FASILITAS KAMAR:</h4>
            <p>Wi-Fi, Kasur Single Bed, Meja Belajar, Kursi Belajar, AC</p>
            <h4>FASILITAS KAMAR MANDI:</h4>
            <p>Kamar mandi dalam, Shower, Kloset</p>
            <h4>Contact:</h4>
            <p>No.Telp Kost: 0832-6753-0968</p>
            <h4>Lokasi Kost:</h4>
            <p>{{$detailKos->lokasi}}</p>
        </div>
    </div>
</div>