<?php

use App\Models\Antrian;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KuotaController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PolikbController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\PolikiaController;
use App\Http\Controllers\PoligigiController;
use App\Http\Controllers\PoligiziController;
use App\Http\Controllers\PoliumumController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KuotaadminController;
use App\Http\Controllers\PolilansiaController;
use App\Http\Controllers\ShowsyaratController;
use App\Http\Controllers\HasildaftarController;

//halaman user
Route::get('/', function () {
    return view('layouts/regispasien');
})->name('regispasien');

Route::get('formpasienbaru', [PasienController::class, 'create'], function () {
    return view('layouts/formpasienbaru');
})->name('formpasienbaru');
Route::post('/formpasienbaru', [PasienController::class, 'store']);

Route::get('daftarpasien', function () {
    return view('layouts/daftarpasien');
})->name('daftarpasien');

// Route::get('formdaftarpasien', function () {
//     return view('layouts/formdaftarpasien');
// })->name('formdaftarpasien');
Route::post('/formdaftarpasien', [AntrianController::class, 'store']);
Route::get('/formdaftarpasien', [AntrianController::class, 'index']);

// Route::get('kuotapasien', function () {
//     return view('layouts/kuotapasien');
// })->name('kuotapasien1');
Route::get('/kuotapasien', [KuotaController::class, 'index'])->name('kuotapasien1');

// Route::get('syaratketentuan', function () {
//     return view('layouts/syaratketentuan');
// })->name('syaratketentuan1');
Route::get('/syaratketentuan', [ShowsyaratController::class, 'index'])->name('syaratketentuan1');
Route::get('/show-hasildaftar', [HasildaftarController::class, 'index']);
Route::get('hasildaftar', [HasildaftarController::class, 'exportPDF'], function () {
    return view('layouts/hasildaftar');
})->name('hasildaftar');
Route::post('/hasildaftar', [HasildaftarController::class, 'exportPDF']);

Route::get('hasildaftar/cetak', [HasildaftarController::class, 'exportPDF'], function () {
    return view('hasildaftar.cetak');
})->name('cetak');

//halaman admin

//login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['LoginMiddleware'])->group(function () {
    // logout
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//admin home
    Route::get('/admins/home', function () {
        return view('admins.home');
    })->name('home');

//dataadmin
    Route::get('admins/dataadmin', [AdminController::class, 'index'], function () {
        return view('admins.dataadmin');
    })->name('dataadmin');

//tambahadmin
    Route::get('admins/tambahadmin', [AdminController::class, 'create'], function () {
        return view('admins.tambahadmin');
    })->name('tambahadmin');
    Route::post('/tambahadmin', [AdminController::class, 'store']);

//detailadmin
    Route::get('admins/detailadmin/{id}', [AdminController::class, 'show'], function () {
        return view('admins.detailadmin');
    })->name('detailadmin');

//editadmin
    Route::get('admins/editadmin/{id}', [AdminController::class, 'edit'], function () {
        return view('admins.editadmin');
    })->name('editadmin');
    Route::put('admins/editadmin/{id}', [AdminController::class, 'update'])->name('update');

//hapus data admin
    Route::get('admins/delete-admin/{id}', [AdminController::class, 'destroy']);

//halaman admin data pasien

//data pasien
    Route::get('pasien/datapasien', [PasienController::class, 'index'], function () {
        return view('pasien.datapasien');
    })->name('datapasien');

//detail pasien
    Route::get('pasien/detailpasien/{id}', [PasienController::class, 'show'], function () {
        return view('pasien.detailpasien');
    })->name('detailpasien');

//hapus pasien
    Route::get('pasien/delete-pasien/{id}', [PasienController::class, 'destroy']);

//exportPDF
    Route::get('pdf/export-data', [PasienController::class, 'exportPDF'], function () {
        return view('pdf.export-data');
    })->name('export-data');

//export Excel
    Route::get('pdf/export-excel', [PasienController::class, 'ExportExcel'], function () {
        return view('pdf.export-excel');
    })->name('export-excel');
//index kuota pasien
    Route::get('pasien/kuotapasien', [KuotaadminController::class, 'index']);

//edit kuota poli
    Route::get('pasien/editkuota/{id}', [KuotaadminController::class, 'edit'])->name('editkuota');
    Route::put('pasien/editkuota/{id}', [KuotaadminController::class, 'update'])->name('update');

//halaman data poli
    Route::get('pasien/datapoli', function () {
        $datapoli1 = Antrian::with('pasien')->where('polis', 1)->where('delete', null)->count();
        $datapoli2 = Antrian::with('pasien')->where('polis', 2)->where('delete', null)->count();
        $datapoli3 = Antrian::with('pasien')->where('polis', 3)->where('delete', null)->count();
        $datapoli4 = Antrian::with('pasien')->where('polis', 4)->where('delete', null)->count();
        $datapoli5 = Antrian::with('pasien')->where('polis', 5)->where('delete', null)->count();
        $datapoli6 = Antrian::with('pasien')->where('polis', 6)->where('delete', null)->count();
        $datapoli7 = Antrian::with('pasien')->where('polis', 7)->where('delete', null)->count();
        return view('pasien.datapoli', compact('datapoli1', 'datapoli2', 'datapoli3', 'datapoli4', 'datapoli5', 'datapoli6', 'datapoli7'));
    })->name('datapoli');

//poli umum
    Route::get('pasien/poliumum', [PoliumumController::class, 'index'])->name('poliumumindex');
    Route::delete('pasien/poliumum', [PoliumumController::class, 'destroy'])->name('poliumumdestroy');
//export pdf poli umum
    Route::get('exportpoli/umum', [PoliumumController::class, 'exportPDF'], function () {
        return view('exportpoli.umum');
    })->name('umum');

//poli lansia
    Route::get('pasien/polilansia', [PolilansiaController::class, 'index'])->name('polilansiaindex');
    Route::delete('pasien/polilansia', [PolilansiaController::class, 'destroy'])->name('polilansiadestroy');
//export pdf polilansia
    Route::get('exportpoli/lansia', [PolilansiaController::class, 'exportPDF1'], function () {
        return view('exportpoli.lansia');
    })->name('lansia');
//poli KIA
    Route::get('pasien/polikia', [PolikiaController::class, 'index'])->name('polikiaindex');
    Route::delete('pasien/polikia', [PolikiaController::class, 'destroy'])->name('polikiadestroy');
//export pdf polikia
    Route::get('exportpoli/kia', [PolikiaController::class, 'exportPDF'], function () {
        return view('exportpoli.kia');
    })->name('kia');
//poli Gigi
    Route::get('pasien/poligigi', [PoligigiController::class, 'index'])->name('poligigiindex');
    Route::delete('pasien/poligigi', [PoligigiController::class, 'destroy'])->name('poligigidestroy');
//export gigi
    Route::get('exportpoli/gigi', [PoligigiController::class, 'exportPDF'], function () {
        return view('exportpoli.gigi');
    })->name('gigi');
//poli Gizi
    Route::get('pasien/poligizi', [PoligiziController::class, 'index'])->name('poligiziindex');
    Route::delete('pasien/poligizi', [PoligiziController::class, 'destroy'])->name('poligizidestroy');
//export pdf poli gizi
    Route::get('exportpoli/gizi', [PoligiziController::class, 'exportPDF'], function () {
        return view('exportpoli.gizi');
    })->name('gizi');
// //poli KB
    Route::get('pasien/polikb', [PolikbController::class, 'index'])->name('polikbindex');
    Route::delete('pasien/polikb', [PolikbController::class, 'destroy'])->name('polikbdestroy');
//export KB
    Route::get('exportpoli/kb', [PolikbController::class, 'exportPDF'], function () {
        return view('exportpoli.kb');
    })->name('kb');

    Route::get('pasien/laborat', [LabController::class, 'index'])->name('laboratindex');
    Route::delete('pasien/laborat', [LabController::class, 'destroy'])->name('laboratdestroy');
//export Lab
    Route::get('exportpoli/lab', [LabController::class, 'exportPDF'], function () {
        return view('exportpoli.lab');
    })->name('lab');
//Syarat dan Ketentuan
Route::get('syarat/syaratketentuan', [SyaratController::class, 'index']);
//edit syarat dan katentuan
Route::get('syarat/editsyaratketentuan/{id}', [SyaratController::class, 'edit'])->name('editsyaratketentuan');
Route::put('syarat/editsyaratketentuan/{id}', [SyaratController::class, 'update'])->name('update');

//konfirmasi diterima
Route::get('pasien/konfirmasi/{id}', [PasienController::class, 'KonfirmasiDiterima']);

//konfirmasi diterima
Route::get('pasien/konfirmasiditolak/{id}', [PasienController::class, 'KonfirmasiDitolak']);


});
