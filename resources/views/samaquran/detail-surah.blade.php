<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SamaQuran - QS {{ $data->nama_latin }}</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/84/84664.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lateef:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('samaquran/mycss/main.css') }}">
    </head>
  <body>

  <!-- 
    Nama    : Febryan
    Stb     : 13020180047
    Kelas   : A2
    Matkul  : Sistem Terdistribusi
   -->
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand brand-samaquran" href="{{ url('/') }}">SAMAQURAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Terjemah</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Tafsir</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img class="icon me-3" src="{{ asset('samaquran/image/bxs_book-bookmark.png') }}" alt="Bookmark">
                        <img class="icon" src="{{ asset('samaquran/image/ic_baseline-account-circle.png') }}" alt="Bookmark">
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Detail Surah -->

    <div class="detail">
        <div class="container">
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">                    
                    <div class="tombol">
                        <a href="{{ route('samaquran.detail',[$dataPrev->nomor]) }}" class="btn btn-primary me-2">⬅️ {{ $dataPrev->nama_latin }}</a>                       
                    </div>
                    <h4>{{ $data->nama_latin }}
                        <!-- • <span style="font-family: 'Lateef';">{{ $data->nama }}</span> -->
                    </h4>
                    <div class="tombol">
                        <a href="{{ route('samaquran.detail',[$dataNext->nomor]) }}" class="btn btn-primary">{{ $dataNext->nama_latin }} ➡️</a>                       
                    </div>
                </div>
                <div class="card-body text-center">
                    <span style="text-transform:capitalize;">{{ $data->tempat_turun }} • {{ $data->jumlah_ayat }} Ayat • {{ $data->arti }}</span>
                </div>
            </div>

            <div class="mb-2">
                <audio controls style="width: 100%;">
                    <source src="{{ $data->audio }}" type="audio/ogg">
                    <source src="{{ $data->audio }}" type="audio/mpeg">
                </audio>
            </div>

            @foreach ($data->ayat as $datas)
                <div class="card mb-2">
                    <div class="card-header">
                        <span>{{ $datas->surah }} : {{ $datas->nomor }}</span>
                    </div>
                    <div class="card-body">
                        <p class="arab">{{ $datas->ar }}</p>
                        <span>{{ $datas->idn }}</span>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- Detail Surah -->

    <!-- Footer -->
    <div class="container footer">
        <div class="text-center">
            <h3 class="sama">
                SAMAQURAN
                <img style="margin-top: -10px;" class="ms-3" src="{{ asset('samaquran/image/Google-Play.png') }}" alt="Google-Play">
            </h3>
        </div>
        <div class="text-center t-footer">
            <p><a href="#">Home</a> &nbsp; <a href="#">Terjemah</a> &nbsp; <a href="#">Tafsir</a> &nbsp; <a href="#">Tentang Kami</a> &nbsp; @2022 SAMAQURAN. All Right Reserved</p>
        </div>
    </div>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>