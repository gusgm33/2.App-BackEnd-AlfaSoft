<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//API para roles
Route::get('obtenerRoles'               ,'\App\Http\Controllers\RolController@getRol');
Route::get('obtenerRolesId/{id}'        ,'\App\Http\Controllers\RolController@getRolId');
Route::post('crearRol'                  ,'\App\Http\Controllers\RolController@createRol');
Route::put('actualizarRol/{id}'         ,'\App\Http\Controllers\RolController@updateRol');
Route::get('obtenerRolesActivos'        ,'\App\Http\Controllers\RolController@getRolesActivos');
Route::delete('eliminarRoles/{id}'      ,'\App\Http\Controllers\RolController@deleteRolId');

//API para los usuarios
Route::get('obtenerUsuarios'            ,'\App\Http\Controllers\UserController@getUser');
Route::get('obtenerUsuariosId/{id}'     ,'\App\Http\Controllers\UserController@getUserId');
Route::post('crearUsuarios'             ,'\App\Http\Controllers\UserController@createUser');
Route::put('actualizarUsuarios/{id}'    ,'\App\Http\Controllers\UserController@updateUser');
Route::delete('eliminarUsuarios/{id}'   ,'\App\Http\Controllers\UserController@deleteUserId');

//API para las solicitudes de aulas
Route::get('obtenerSolicitud'           ,'\App\Http\Controllers\SolicitudAulaController@getSolicitudAula');
Route::get('obtenerSolicitudId/{id}'    ,'\App\Http\Controllers\SolicitudAulaController@getSolicitudAulaId');
Route::post('crearSolicitud'            ,'\App\Http\Controllers\SolicitudAulaController@createSolicitudAula');
Route::put('actualizarSolicitud/{id}'   ,'\App\Http\Controllers\SolicitudAulaController@updateSolicitudAula');
Route::delete('eliminarSolicitud/{id}'  ,'\App\Http\Controllers\SolicitudAulaController@deleteSolicitudAulaId');

//API para las aulas
Route::get('obtenerAula'               ,'\App\Http\Controllers\AulaController@getAula');
Route::get('obtenerAulaId/{id}'        ,'\App\Http\Controllers\AulaController@getAulaId');
Route::post('crearAula'                ,'\App\Http\Controllers\AulaController@createAula');
Route::put('actualizarAula/{id}'       ,'\App\Http\Controllers\AulaController@updateAula');
Route::delete('eliminarAula/{id}'      ,'\App\Http\Controllers\AulaController@deleteAulaId');
