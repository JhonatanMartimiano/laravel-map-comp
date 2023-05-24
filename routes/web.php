<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CompetenceController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Web\WebController;
use App\Http\Middleware\AuthenticateUser;
use Illuminate\Support\Facades\Route;

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

Route::controller(WebController::class)->group(function () {
    Route::get("/", "index")->name("home");
    Route::post("/contato", "contact")->name("contact.store");
    Route::post("/newsletter", "newsletter")->name("newsletter.store");
});

Route::namespace("Admin")->group(function () {
    Route::prefix("/admin")->group(function () {
        Route::middleware([AuthenticateUser::class])->group(function () {
            Route::get("/", [AdminController::class, "index"])->name("admin");
            Route::get("/login", [AuthController::class, "login"])->name("admin.login");
            Route::post("/login", [AuthController::class, "auth"])->name("admin.login.auth");
            Route::get("/register", [AuthController::class, "register"])->name("admin.register");
            Route::post("/register", [AuthController::class, "store"])->name("admin.register.store");
        });
        Route::get("/logout", [AuthController::class, "logout"])->name("admin.logout");
        Route::get("/dash", [DashController::class, "dash"])->name("admin.dash")->middleware('auth');
        Route::get("/dash/home", [DashController::class, "index"])->name("admin.dash.home")->middleware('auth');
        Route::post("/dash/general", [DashController::class, "general"])->name("admin.dash.general")->middleware('auth');
        Route::post("/dash/sector", [DashController::class, "sector"])->name("admin.dash.sector")->middleware('auth');
        Route::get("/sectors/home", [SectorController::class, "index"])->name("admin.sectors.home")->middleware('auth');
        Route::get("/sectors/create", [SectorController::class, "create"])->name("admin.sectors.create")->middleware('auth');
        Route::post("/sectors/store", [SectorController::class, "store"])->name("admin.sectors.store")->middleware('auth');
        Route::get("/sectors/edit/{sector}", [SectorController::class, "edit"])->name("admin.sectors.edit")->middleware('auth');
        Route::post("/sectors/update/{sector}", [SectorController::class, "update"])->name("admin.sectors.update")->middleware('auth');
        Route::post("/sectors/destroy/{sector}", [SectorController::class, "destroy"])->name("admin.sectors.destroy")->middleware('auth');
        Route::get("/users/home", [UserController::class, "index"])->name("admin.users.home")->middleware('auth');
        Route::get("/users/create", [UserController::class, "create"])->name("admin.users.create")->middleware('auth');
        Route::post("/users/store", [UserController::class, "store"])->name("admin.users.store")->middleware('auth');
        Route::get("/users/edit/{user}", [UserController::class, "edit"])->name("admin.users.edit")->middleware('auth');
        Route::post("/users/update/{user}", [UserController::class, "update"])->name("admin.users.update")->middleware('auth');
        Route::post("/users/destroy/{user}", [UserController::class, "destroy"])->name("admin.users.destroy")->middleware('auth');
        Route::get("/competences/home", [CompetenceController::class, "index"])->name("admin.competences.home")->middleware('auth');
        Route::get("/competences/create", [CompetenceController::class, "create"])->name("admin.competences.create")->middleware('auth');
        Route::post("/competences/store", [CompetenceController::class, "store"])->name("admin.competences.store")->middleware('auth');
        Route::get("/competences/edit/{competence}", [CompetenceController::class, "edit"])->name("admin.competences.edit")->middleware('auth');
        Route::post("/competences/update/{competence}", [CompetenceController::class, "update"])->name("admin.competences.update")->middleware('auth');
        Route::post("/competences/destroy/{competence}", [CompetenceController::class, "destroy"])->name("admin.competences.destroy")->middleware('auth');

        Route::get("/questions/home", [QuestionController::class, "index"])->name("admin.questions.home")->middleware('auth');
        Route::get("/questions/create", [QuestionController::class, "create"])->name("admin.questions.create")->middleware('auth');
        Route::post("/questions/store", [QuestionController::class, "store"])->name("admin.questions.store")->middleware('auth');
        Route::get("/questions/edit/{question}", [QuestionController::class, "edit"])->name("admin.questions.edit")->middleware('auth');
        Route::post("/questions/update/{question}", [QuestionController::class, "update"])->name("admin.questions.update")->middleware('auth');
        Route::post("/questions/destroy/{question}", [QuestionController::class, "destroy"])->name("admin.questions.destroy")->middleware('auth');
    });
});
