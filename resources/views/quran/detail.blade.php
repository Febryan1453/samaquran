<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Al-Qur'an</title>
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

  </style>
  <body>

    <div class="container mt-5">
        <h3 class="text-center mb-5">Surah {{ $nama }}</h3>

       

        @foreach ($data->data as $datas)
            <div class="row mb-2">
                <div class="col-md-1"></div>            
                    <div class="col-md-10 bg-hover-d ps-3 pe-3 pt-3">
                        <div class="f-n">{{ $datas->nomor }}.</div>                                    
                        <div class="f">{{ $datas->ar }}</div>                                    
                        <div class="f-t">{{ $datas->id }}</div>                                    
                        <hr>
                    </div>           
                <div class="col-md-1"></div>
            </div>
        @endforeach

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>