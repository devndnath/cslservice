<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'frontend.index')->name('home');
Route::view('/about','frontend.pages.about')->name('About-Us');
Route::view('/contact','frontend.pages.contact')->name('Contact-us');
Route::view('/whyus','frontend.pages.whyus')->name('Why-us');
Route::view('/clients','frontend.pages.clients')->name('clients');
Route::view('/partnars','frontend.pages.partnars')->name('partnars');
// Route::view('/Award-Certificates','frontend.pages.Award-Certificates')->name('Award-Certificates');
Route::prefix('/solutions')->group(function () {
    Route::view('/Structure-Local-Area-Network','frontend.pages.Structure-Local-Area-Network')->name('Structure-Local-Area-Network');
    Route::view('/Fiber-Optic-Backbone','frontend.pages.Fiber-Optic-Backbone')->name('Fiber-Optic-Backbone');
    Route::view('/Automate-Ip-Surveillance-and-Cctv','frontend.pages.Automate-Ip-Surveillance-and-Cctv')->name('Automate-Ip-Surveillance-and-Cctv');
    Route::view('/Smart-ip-pabx','frontend.pages.Smart-ip-pabx')->name('Smart-ip-pabx');
    Route::view('/Smart-wireless','frontend.pages.Smart-wireless')->name('Smart-wireless');
    Route::view('/Automated-Smart-Classroom-Lab','frontend.pages.Automated-Smart-Classroom-Lab')->name('Automated-Smart-Classroom-Lab');
    Route::view('/enterprise-server-and-storage','frontend.pages.enterprise-server-and-storage')->name('enterprise-server-and-storage');
    Route::view('/Smart-Public-Addressing-System-Solution','frontend.pages.Smart-Public-Addressing-System-Solution')->name('Smart-Public-Addressing-System-Solution');
    Route::view('/Access-control-and-attendance-system','frontend.pages.Access-control-and-attendance-system')->name('Access-control-and-attendance-system');
    Route::view('/enterprise-switching-and-routing','frontend.pages.enterprise-switching-and-routing')->name('enterprise-switching-and-routing');
    Route::view('/ICT-Consultancy-And-Project-Management','frontend.pages.ICT-Consultancy-And-Project-Management')->name('ICT-Consultancy-And-Project-Management');



});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
