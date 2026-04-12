<?php

# halaman auth
use App\Http\Controllers\Auth\LoginController;

# halaman frontend
use App\Http\Controllers\Pages\LandingPageController;

# halaman backend - Admin
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\JudgesController as Adm_JudgesController;
use App\Http\Controllers\Admin\ParticipantsController as Adm_ParticipantsController;
use App\Http\Controllers\Admin\TimelineController as Adm_TimelineController;
use App\Http\Controllers\Admin\VotersController as Adm_VotersController;

# halaman backend - Judges

# halaman backend - Participants

# halaman backend - Voters

# Other
use Illuminate\Support\Facades\Route;

# ------------------------------------------------------------------------------------------------- #
# Route Auth -------------------------------------------------------------------------------------- #
# ------------------------------------------------------------------------------------------------- #
Route::middleware('guest.role')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Frontend -------------------------------------------------------------------------- #
# ------------------------------------------------------------------------------------------------- #
Route::get('/', [LandingPageController::class, 'index']);

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Admin ------------------------------------------------------------------- #
# ------------------------------------------------------------------------------------------------- #
Route::middleware(['auth:admin', 'role:admin'])->prefix('admin')->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'showAdmin'])->name('dashboard');
        Route::resource('judges', Adm_JudgesController::class);
        Route::resource('participants', Adm_ParticipantsController::class);
        Route::resource('voters', Adm_VotersController::class);
        Route::resource('timeline', Adm_TimelineController::class);
        Route::resource('reward', Adm_TimelineController::class);
    });

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Judges ------------------------------------------------------------------ #
# ------------------------------------------------------------------------------------------------- #
Route::middleware(['auth:judges', 'role:judges'])->prefix('judges')->name('judges.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'showJudges'])->name('dashboard');
    });

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Participants ------------------------------------------------------------ #
# ------------------------------------------------------------------------------------------------- #
Route::middleware(['auth:participants', 'role:participants'])->prefix('participants')->name('participants.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'showParticipants'])->name('dashboard');
    });

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Voters ------------------------------------------------------------------ #
# ------------------------------------------------------------------------------------------------- #
Route::middleware(['auth:voters', 'role:voters'])->prefix('voters')->name('voters.')
    ->group(function () {
        # Belum dibuat
    });
