@extends('layouts.app')

@section('content')
    <h1>Tentang Web Ini</h1>

    <div class="row">
        <div class="col-lg-7">
            <p>
                Jakarta memiliki portal bernama Jakarta Smart City, sebuah portal berbasis peta yang menampilkan banyak sekali
                informasi menarik. Berbagai data dipublikasikan berdasarkan lokasi geospasial dan kategori dari sudut pandang
                birokrasi Pemprov. Tapi saya merasa portal ini jadi terlalu besar dan berat, apalagi jika diakses melalui mobile web. Saya yang fakir
                kuota bandwidth rasanya tidak mungkin membuka web peta dan mengaktifkan layer informasinya satu per satu.
            </p>
            <p>
                Nah, waktu peluncuran portal Jakarta Smart City ini, developernya juga mengeluarkan fitur API (Application
                Programming Interface) dalam bentuk RESTful services dengan data berformat JSON. API ini memungkinkan
                kita mengambil data yang diperlukan saja dan menyajikannya kembali dalam format yang berbeda. Seperti
                website ini. Salah satu data menarik yang dikeluarkan API ini adalah CCTV Bali Tower yang menayangkan
                streaming CCTV di setiap titik di Jakarta. Kita bisa melihat berbagai tempat di Jakarta secara live
                seperti seolah-olah kita berada di Control Room Jakarta Smart City yang ada di Balai Kota sana.
            </p>
            <p>
                Kadang-kadang saya ingin tahu kondisi suatu tempat di Jakarta hujan atau tidak. Atau, perempatan tertentu
                lagi ada polisinya atau tidak, hehehe... Saya tinggal mengintip dari CCTV Bali Tower ini yang jumlahnya
                ada ribuan ini. Tapi kalau saya akses dari portal Jakarta Smart City, itu berat sekali jika dari mobile. Karena
                itu saya membuat website ini memanfaatkan API-nya.
            </p>
            <p>
                Sampai saat ini hanya data CCTV saja yang menurut saya menarik dari semua data yang dikeluarkan oleh API.
                Mudah-mudahan kelak fiturnya ditambah misalnya data keramaian halte busway dan tracking busway.
            </p>
            <br>
            <p>
                Website ini saya host di cloud OpenShift Online (http://openshift.com) versi gratisan (Developer Preview).
                Data disediakan dari API Jakarta Smart City di http://api.jakarta.go.id. Web ini menggunakan Laravel,
                source code saya share di https://github.com/galihsatria/jakcctv. Silakan di-clone atau di-fork jika
                menginginkan untuk dikembangkan lebih lanjut. Bebas. Gratis. Free.
            </p>
            <p>
                Seperti biasa jika ada pertanyaan lanjutan, silakan kontak saya di blog.galihsatria.com. Terima kasih!
            </p>
        </div>
    </div>

@stop
