<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');//Este middleware contro que el correo se encuentre confirmado

//esta ruta es la que genera la gestion de la cuenta del profesional
Route::get('/profesionales',  [App\Http\Controllers\infoProfesionalController::class,'index'])->middleware('auth');
Route::post('guardarProfesional', [App\Http\Controllers\infoProfesionalController::class,'gestionarPerfilProfesional']);

//esta ruta es la genera la gestion de la cuenta del paquete de estudiante 
Route::get('/estudiantes',  [App\Http\Controllers\infoEstudianteController::class,'index'])->middleware('auth');
Route::post('guardarPerfilEstudiante', [App\Http\Controllers\infoEstudianteController::class,'gestionarPerfilEstudiante']);


//Buscador
Route::post('busqueda',[App\Http\Controllers\generalesController::class,'buscador']);

//Datos Basicos
Route::get('/miCuenta', [App\Http\Controllers\infoUserController::class,'index'])->name('miCuenta')->middleware('auth');
Route::post('editUser', [App\Http\Controllers\infoUserController::class,'edit'])->middleware('auth');

//gestion de cuenta premiun 
Route::get('premiunView',[App\Http\Controllers\premiumController::class,'index'])->middleware('auth');

Route::get('guardarCompraPremiun', [App\Http\Controllers\premiumController::class,'create'])->middleware('auth');
Route::get('premiunViewHome',[App\Http\Controllers\premiumController::class,'abrirPreviewHome']);


//gestion de plan basico 
Route::get('basicView',[App\Http\Controllers\infoBasicoController::class,'index'])->name('basicView')->middleware('auth');
Route::post('editBasic', [App\Http\Controllers\infoBasicoController::class,'gestionarPerfilProfesional'])->middleware('auth');

//Selects dinamicos de los paises -- departamentos -- municipios -- ciudades 
Route::get('departamentoPorPais/{idPais}', [App\Http\Controllers\departamentoController::class,'showForCountry']);
Route::get('provinciaPorDepartamento/{idDepa}', [App\Http\Controllers\provinciaController::class,'showForDepartment']);
Route::get('municipioporProvincia/{idProv}', [App\Http\Controllers\municipioController::class,'showForProvince']);

Route::get('profesionPorArea/{idArea}',[App\Http\Controllers\busqueda\profesionesController::class,'profesionPorArea']);
Route::get('especialidadPorProfesion/{idProfesion}',[App\Http\Controllers\busqueda\especialidadesController::class,'especialidadPorProfesion']);

//Esto es para el Metodo de Pago PayU si se devuelve el cliente a zaabra
Route::get('responsePayU', [App\Http\Controllers\payuController::class,'response']);
Route::get('volverAtras', [App\Http\Controllers\generalesController::class,'volverAtras']);

//Esto es para el Metodo de Pago PayU directamente a zaabra
Route::post('confirmationPayU', [App\Http\Controllers\payuController::class,'confirmation']);

///Realizad por edsson 
//Esta es la ruta cuando retorna el formulario de openPay
Route::get('confirmacionOpenPay', [App\Http\Controllers\OpenPayController::class,'confirmacionOpenPay']);


//ESTE INSERTA EL FAVORITO
route::post('selecFavorito',[App\Http\Controllers\favoritosController::class,'index']);

//esta carga la landing page de profesionales
Route::get('/infoProfesional/{profesional}',  [App\Http\Controllers\infoProfesionalController::class,'cargarPerfil'])->name('infoProfesional');
Route::get('/infoProfesional/{profesional}/{NombreProfe}',  [App\Http\Controllers\infoProfesionalController::class,'cargarPerfilName']);


Route::post('guardarTestimonio',[App\Http\Controllers\testimoniosController::class,'create'])->middleware('auth');
//esta carga la plantilla del estudiante 
route::get('infoEstudiante/{estudiante}',[App\Http\Controllers\estudiantes\estudiantesController::class,'cargarPerfil'])->name('infoEstudiante');


Route::get('login/{driver}', [LoginController::class, 'redirectToProvider']);
Route::get('login/{driver}/callback', [LoginController::class, 'handleProviderCallback']);

//ruttas dinamicas busquedad especialidades ESTAS SIEMPREN DEBEN DE IR DE ULTIMAS
Route:: get('ESPECIALIDADES/{area}/{profesion}',[App\Http\Controllers\busqueda\profesionesController::class,'index'])->name('especialidades');;
Route:: get('galeriaProfesionales/{area}/{profesion}/{especialidad}',[App\Http\Controllers\busqueda\especialidadesController::class,'index'])->name('galeriaProfesionales');


Route:: get('galeriaEstudiantes/{area}/{profesion}/{especialidad}',[App\Http\Controllers\estudiantes\estudiantesController::class,'index']);

Route::get('quienes', function () { return view('quienes');});

Route::get('simulaCorreo', [App\Http\Controllers\generalesController::class,'simulaCorreo']);

Route::get('pruebatoken', [App\Http\Controllers\OpenPayController::class,'pagoOpenPay']);

