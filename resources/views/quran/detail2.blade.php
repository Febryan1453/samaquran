<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $nama }}</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/84/84664.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    @font-face {
        font-family: 'lpmq';
        src: url(/alamat_font/lpmq.otf) format('opentype');
        font-display: swap;
    }

    .bg-hover:hover{
        background-color: #f8f9fa;
    }

    .bg-hover-d:hover{
        background-color: #f8f9fa;
        border-radius: 10px;
    }
    .f {
        /* font-family: 'lpmq', Arial, sans-serif;
        font-size: 30px;
        text-align: right;
        line-height: 2; */

        font-family: IsepMisbah;
        font-size: 2.28571rem;
        direction: rtl;
        line-height: 64px;
        text-align: right;
        unicode-bidi: isolate;
    }
    .f-n{
        text-align: left;
        font-weight: 600;
    }
    .f-t{
        margin-top: 16px;
        text-align: left;
    }
    .ket{
        font-size: 18px;
    }

  </style>
  <body>

    <div class="container mt-5 mb-5">

        <h3 class="text-center mb-2">Surah {{ $nama }}</h3>
        <div class="container text-center mb-4">
            <!-- <div class="row">
                <div class="col-md-3">
                    <span>Arti : </span>
                </div>
                <div class="col-md-3">
                    <span>Diturunkan di : </span>
                </div>
                <div class="col-md-3">
                    <span>Surah ke : </span>
                </div>
                <div class="col-md-3">
                    <span>Jumlah  : </span>
                </div>
            </div> -->
            <p class="ket">
                <span style="text-transform:capitalize;">{{ $data->arti }}</span> <br>
                <span style="text-transform:capitalize;">{{ $data->tempat_turun }}</span> <br>
                <span>Surah ke-{{ $data->nomor }}</span> <br>
                <span>{{ $data->jumlah_ayat }} Ayat</span>
            </p>    
            <audio controls>
                <source src="{{ $data->audio }}" type="audio/ogg">
                <source src="{{ $data->audio }}" type="audio/mpeg">
            </audio>
            <hr>                       
        </div>
        
        <div class="container">       
            @foreach ($data->ayat as $datas)
                <div class="bg-hover-d ps-3 pe-3 pt-3 pb-1">
                    <div class="f-n">{{ $datas->nomor }}.</div>                                    
                    <div class="f">{{ $datas->ar }}</div>                                    
                    <!-- <div class="f-t">{{ $datas->tr }}</div>                                     -->
                    <div class="f-t">{{ $datas->idn }}</div>                                    
                    <hr>
                </div>           
            @endforeach
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>