<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\EducadorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PlantillaController;

//PLANTILLA
Route::get('/modelo', [PlantillaController::class, 'modelo'])->name('plantilla.modelo');
Route::get('/modeloadmin', [PlantillaController::class, 'modeloadmin'])->name('plantilla.modeloadmin');
Route::get('/modelovendedor', [PlantillaController::class, 'modelovendedor'])->name('plantilla.modelovendedor');
Route::get('/modeloeducador', [PlantillaController::class, 'modeloeducador'])->name('plantilla.modeloeducador');
Route::get('/modelousuario', [PlantillaController::class, 'modelousuario'])->name('plantilla.modelousuario');

//HOME
Route::get('/', function () {return view('welcome'); });

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/loginme', [HomeController::class,'loginme'])->name('/loginme');
Route::get('/registro', [HomeController::class, 'registro'])->name('registro');
Route::post('/miregistro', [HomeController::class,'miregistro'])->name('/miregistro');
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/informacion', [HomeController::class, 'informacion'])->name('informacion');
Route::get('/listainfo', [HomeController::class, 'listainfo'])->name('listainfo');
Route::get('/listainfomotos', [HomeController::class, 'listainfomotos'])->name('listainfomotos');
Route::get('/listainfoautos', [HomeController::class, 'listainfoautos'])->name('listainfoautos');
Route::post('/infodescripcion', [HomeController::class, 'infodescripcion'])->name('infodescripcion');
Route::get('/opcionesinfo', [HomeController::class, 'opcionesinfo'])->name('opcionesinfo');
Route::get('/tiposmotos', [HomeController::class, 'tiposmotos'])->name('tiposmotos');
Route::get('/tiposautos', [HomeController::class, 'tiposautos'])->name('tiposautos');
Route::get('/registroinst', [HomeController::class, 'registroinst'])->name('registroinst');
Route::get('/miregistroinst', [HomeController::class,'miregistroinst'])->name('/miregistroinst');


//USUARIO
Route::get('usuario', [UsuarioController::class, 'index'])->name('usuario.index');
Route::get('usuario/ventas', [UsuarioController::class, 'ventas'])->name('usuario.ventas');
Route::get('usuario/ventasmotos', [UsuarioController::class, 'ventasmotos'])->name('usuario.ventasmotos');
Route::get('usuario/vendedores', [UsuarioController::class, 'vendedores'])->name('usuario.vendedores');
Route::get('usuario/autoescuelas', [UsuarioController::class, 'autoescuelas'])->name('usuario.autoescuelas');
Route::get('usuario/listaautos', [UsuarioController::class, 'listaautos'])->name('usuario.listaautos');
Route::get('usuario/listamotos', [UsuarioController::class, 'listamotos'])->name('usuario.listamotos');
Route::post('usuario/detalleautos', [UsuarioController::class, 'detalleautos'])->name('usuario.detalleautos');
Route::post('usuario/detallemotos', [UsuarioController::class, 'detallemotos'])->name('usuario.detallemotos');
Route::post('usuario/detalleinst', [UsuarioController::class, 'detalleinst'])->name('usuario.detalleinst');
Route::get('usuario/listacursos', [UsuarioController::class, 'listacursos'])->name('usuario.listacursos');
Route::post('usuario/detallecurso', [UsuarioController::class, 'detallecurso'])->name('usuario.detallecurso');
Route::post('usuario/inscribirte', [UsuarioController::class, 'inscribirte'])->name('inscribirte');
Route::get('usuario/miscursos', [UsuarioController::class, 'miscursos'])->name('usuario.miscursos');
Route::get('usuario/evaluacioncurso', [UsuarioController::class, 'evaluacioncurso'])->name('usuario.evaluacioncurso');
Route::post('usuario/pasarcurso', [UsuarioController::class, 'pasarcurso'])->name('usuario.pasarcurso');
Route::post('usuario/enviarevaluacion', [UsuarioController::class, 'enviarevaluacion'])->name('usuario.enviarevaluacion');
Route::get('usuario/miscertificados', [UsuarioController::class, 'miscertificados']);
Route::post('usuario/pdfcertificado', [UsuarioController::class,'pdfcertificado'])->name('usuario.pdfcertificado');
Route::get('usuario/certificadopdfuno', [UsuarioController::class, 'certificadopdfuno'])->name('usuario.certificadopdfuno');
Route::POST('usuario/micertificadoT', [UsuarioController::class, 'micertificadoT'])->name('usuario.micertificadoT');
Route::get('usuario/pdfmicertificad', [UsuarioController::class, 'pdfmicertificad'])->name('usuario.pdfmicertificad');
Route::get('usuario/calificaruncurso', [UsuarioController::class, 'calificaruncurso'])->name('usuario.calificaruncurso');
Route::POST('usuario/calicur', [UsuarioController::class, 'calicur'])->name('usuario.calicurso');

//ADMIN
Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/inicio', [AdminController::class, 'inicio'])->name('admin.inicio');
Route::get('admin/nuevainformacion', [AdminController::class, 'nuevainformacion'])->name('admin.nuevainformacion');
Route::post('/nuevainfo', [AdminController::class,'nuevainfo'])->name('nuevainfo');
Route::get('admin/vendedores', [AdminController::class, 'vendedores'])->name('admin.vendedores');
Route::get('admin/listainformacion', [AdminController::class, 'listainformacion'])->name('admin.listainformacion');
Route::get('admin/autoescuelas', [AdminController::class, 'autoescuelas'])->name('admin.autoescuelas');
Route::post('admin/detalleinst', [AdminController::class, 'detalleinst'])->name('admin.detalleinst');
Route::get('admin/listaautos', [AdminController::class, 'listaautos'])->name('admin.listaautos');
Route::get('admin/listamotos', [AdminController::class, 'listamotos'])->name('admin.listamotos');

//VENDEDOR
Route::get('vendedor', [VendedorController::class, 'index'])->name('vendedor.index');
Route::get('vendedor/registroauto', [VendedorController::class, 'registroauto'])->name('vendedor.registroauto');
Route::post('/nuevoauto', [VendedorController::class,'nuevoauto'])->name('nuevoauto');
Route::get('vendedor/registromoto', [VendedorController::class, 'registromoto'])->name('vendedor.registromoto');
Route::post('/nuevamoto', [VendedorController::class,'nuevamoto'])->name('nuevamoto');
Route::get('vendedor/listamotos', [VendedorController::class, 'listamotos'])->name('vendedor.listamotos');
Route::get('vendedor/listaautos', [VendedorController::class, 'listaautos'])->name('vendedor.listaautos');
Route::post('vendedor/detalleautos', [VendedorController::class, 'detalleautos'])->name('vendedor.detalleautos');
Route::post('vendedor/detallemotos', [VendedorController::class, 'detallemotos'])->name('vendedor.detallemotos');
Route::post('vendedor/nuevotipoauto1', [VendedorController::class, 'nuevotipoauto1'])->name('vendedor.nuevotipoauto1');
Route::post('vendedor/nuevocombustible1', [VendedorController::class, 'nuevocombustible1'])->name('vendedor.nuevocombustible1');
Route::post('vendedor/nuevotipotrans1', [VendedorController::class, 'nuevotipotrans1'])->name('vendedor.nuevotipotrans1');
Route::post('vendedor/nuevatraccion1', [VendedorController::class, 'nuevatraccion1'])->name('vendedor.nuevatraccion1');
Route::get('vendedor/nuevotipoauto', [VendedorController::class, 'nuevotipoauto'])->name('vendedor.nuevotipoauto');
Route::get('vendedor/nuevocombustible', [VendedorController::class, 'nuevocombustible'])->name('vendedor.nuevocombustible');
Route::get('vendedor/nuevotipotrans', [VendedorController::class, 'nuevotipotrans'])->name('vendedor.nuevotipotrans');
Route::get('vendedor/nuevatraccion', [VendedorController::class, 'nuevatraccion'])->name('vendedor.nuevatraccion');


//EDUCADOR
Route::get('educador', [EducadorController::class, 'index'])->name('educador.index');
Route::get('educador/contenido', [EducadorController::class, 'contenido'])->name('educador.contenido');
Route::get('educador/nuevocontenido', [EducadorController::class, 'nuevocontenido'])->name('educador.nuevocontenido');
Route::get('educador/nuevocurso', [EducadorController::class, 'nuevocurso'])->name('educador.nuevocurso');
Route::post('/nuevocur', [EducadorController::class,'nuevocur'])->name('nuevocur');
Route::post('/nuevocon', [EducadorController::class,'nuevocon'])->name('nuevocon');
Route::get('educador/nuevaevaluacion', [EducadorController::class, 'nuevaevaluacion'])->name('educador.nuevaevaluacion');
Route::post('/nuevaev', [EducadorController::class,'nuevaev'])->name('nuevaev');

Route::get('educador/listacursosmoto', [EducadorController::class, 'listacursosmoto'])->name('educador.listacursosmoto');
Route::get('educador/listacursosauto', [EducadorController::class, 'listacursosauto'])->name('educador.listacursosauto');
Route::POST('educador/detallecurso', [EducadorController::class, 'detallecurso'])->name('detallecurso');

Route::POST('educador/detallecontenido', [EducadorController::class, 'detallecontenido'])->name('detallecontenido');
Route::get('educador/listaestudiantes', [EducadorController::class, 'listaestudiantes'])->name('educador.listaestudiantes');
Route::get('educador/evaluacionesrevisadas', [EducadorController::class, 'evaluacionesrevisadas'])->name('educador.evaluacionesrevisadas');
Route::get('educador/evaluacionesporrevisar', [EducadorController::class, 'evaluacionesporrevisar'])->name('educador.evaluacionesporrevisar');
Route::POST('educador/verevaluacionrevisada', [EducadorController::class, 'verevaluacionrevisada'])->name('educador.verevaluacionrevisada');
Route::POST('educador/verevaluacionpararevisar', [EducadorController::class, 'verevaluacionpararevisar'])->name('educador.verevaluacionpararevisar');
Route::POST('educador/calificarevaluacion', [EducadorController::class, 'calificarevaluacion'])->name('educador.calificarevaluacion');
Route::post('educador/reportecursos', [EducadorController::class, 'reportecursos'])->name('usuario.reportecursos');
Route::get('educador/reportelista', [EducadorController::class, 'reportelista'])->name('usuario.reportelista');
