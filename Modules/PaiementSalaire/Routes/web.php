<?php
use Modules\PaiementSalaire\Http\Controllers\EmployeController;
use Modules\PaiementSalaire\Http\Controllers\ContratController;
use Modules\PaiementSalaire\Http\Controllers\PaiementSalaireController;
use Modules\PaiementSalaire\Http\Controllers\ExporterPdfController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('paiementsalaire')->group(function() {
    Route::get('/', [EmployeController::class,'showEmployees']);
    Route::post('/showEmploye',[EmployeController::class,'handleAddEmploye'])->name('handleAddEmployees');

    Route::get('/typeContrat', [ContratController::class,'showTypeContrat']);
    Route::post('/typeContrat',[ContratController::class,'handleAddTypeContrat'])->name('handleAddTypeContrats');

    Route::get('/calculSalaire', [PaiementSalaireController::class,'index'])->name('handleCalculSalaires');
    Route::get('/exporter',[ExporterPdfController::class,'downloadPdf']);
});

