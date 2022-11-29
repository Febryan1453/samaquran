<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Al-Qur'an Digital</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/84/84664.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    .bg-hover:hover{
        background-color: #f8f9fa;
    }
  </style>
  <body>

    <div class="container mt-5">
        <h3 class="text-center mb-4">Al-Qur'an</h3>

        @foreach ($data as $datas)
            <div class="row mb-3">
                <div class="col-md-3"></div>            
                    <div class="col-md-6">
                        <a href="{{ route('quran.detail2',[$datas->nama_latin,$datas->nomor]) }}" style="text-decoration: none; color:black;">
                            <div class="card bg-hover">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><span style="font-size: 16px;" class="fw-bold">{{ $datas->nomor}}. {{ $datas->nama_latin}}</span></div>
                                        <div>{{ $datas->jumlah_ayat}} Ayat</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>           
                <div class="col-md-3"></div>
            </div>
        @endforeach

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>