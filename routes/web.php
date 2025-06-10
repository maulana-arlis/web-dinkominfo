<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    DetailController,
    NewsController,
    ProfileController,
    ContactController,
    DashboardController,
    UserController,
    ViewNewsContoller,
    Profil\ProfilePejabatController,
    Profil\ProfileSelayangController,
    Profil\ProfileStrukturController,
    Profil\ProfileVisiMisiController,
    Ppid\PpidFormController,
    Ppid\PpidInformasiController,
    Ppid\PpidProfileController,
    Ppid\PpidPermohonanController,
    Layanan\LayananAduanController,
    Layanan\LayananInformasiController,
    Layanan\LayananMaklumatController
};

// ==============================
// PUBLIC ROUTES
// ==============================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail', [DetailController::class, 'index']);

// PPID
Route::get('/ppid/profile-ppid', [PpidProfileController::class, 'index']);
Route::get('/ppid/informasi-publik', [PpidInformasiController::class, 'index']);
Route::get('/ppid/form-permohonan', [PpidFormController::class, 'index']);
Route::post('/ppid/submit-permohonan', [PpidPermohonanController::class, 'store']);


// Layanan
Route::get('/layanan/layanan-aduan', [LayananAduanController::class, 'index']);
Route::get('/layanan/layanan-informasi', [LayananInformasiController::class, 'index']);
Route::get('/layanan/layanan-maklumat', [LayananMaklumatController::class, 'index']);

// Profil
Route::get('/profile/visi-misi', [ProfileVisiMisiController::class, 'index']);
Route::get('/profile/selayang-pandang', [ProfileSelayangController::class, 'index']);
Route::get('/profile/struktur-organisasi', [ProfileStrukturController::class, 'index']);
Route::get('/profile/profile-pejabat', [ProfilePejabatController::class, 'index']);

// Berita
Route::get('/berita', [ViewNewsContoller::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [ViewNewsContoller::class, 'show'])->name('berita.show');

// ==============================
// AUTH ROUTES
// ==============================
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');

// ==============================
// ADMIN ROUTES (prefix: /admin)
// ==============================
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profil Saya
    Route::get('/profile', fn () => view('profile.index'))->name('profile');
    Route::get('/profile/edit', fn () => view('profile.edit'))->name('profile.edit');
    Route::put('/profile', [UserController::class, 'editProfile'])->name('profile.update');

    // Upload gambar berita
    Route::post('/news/upload-image', [NewsController::class, 'uploadImage'])->name('news.uploadImage');

    // Berita, Kontak, Profil Pejabat
    Route::resource('/news', NewsController::class);
    Route::resource('/contacts', ContactController::class);
    Route::resource('/profiles', ProfileController::class);

    // User Management (khusus super_admin)
    Route::middleware('role:super_admin')->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', fn () => view('users.create'))->name('users.create');
        Route::post('/users', [UserController::class, 'createUser'])->name('users.store');
        Route::get('/users/{user}/edit', [UserController::class, 'editUser'])->name('users.edit');
        Route::put('/users/{user}', [UserController::class, 'updateUser'])->name('users.update');
        Route::delete('/users/{user}', [UserController::class, 'deleteUser'])->name('users.destroy');
    });
});