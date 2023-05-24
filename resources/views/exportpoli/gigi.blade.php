<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download PDF</title>
<!-- link css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="text-center">
        <h3>Data Pasien Poli Gigi di Puskesmas Tarik</h3><br>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>No.</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>ID Kesehatan</th>
            </tr>
            </thead>
            @if ($data !== null)
            @foreach ($data as $row )
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$row->pasien->nik}}</td>
                <td>{{$row->pasien->nama}}</td>
                <td>{{$row->pasien->no_layanan}}</td>
            </tr>
            @endforeach

            @else

            @endif
            </tbody>
        </table>
    </div>


</body>
</html>
