<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Bukti Antrian</title>
<!-- link css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="card-body table-responsive p-0">
        <div class="row text-center">
            <div class="col-sm-4 text-center">
              <div class="card ">
                <div class="card-body">
                  <h4 class="card-title">Nomor Antrian Puskesmas Tarik</h4>
                  <h1 class="card-text text-center">{{$data->no_antrian}}</h1>
                  <p>Harap dibawa ketika ke Puskesmas</p>
                </div>
              </div>
            </div>
          </div>
    </div>


</body>
</html>
