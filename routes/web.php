<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\AchievementController;
use App\Http\Controllers\Dashboard\CommitteeController;
use App\Http\Controllers\Dashboard\CourseController;
use App\Http\Controllers\Dashboard\CrpImageSliderController;
use App\Http\Controllers\Dashboard\CrpMoreInfoController;
use App\Http\Controllers\Dashboard\CrpVideoSliderController;
use App\Http\Controllers\Dashboard\CrrController;
use App\Http\Controllers\Dashboard\EventController;
use App\Http\Controllers\Dashboard\ExecutiveController;
use App\Http\Controllers\Dashboard\FacilitatorController;
use App\Http\Controllers\Dashboard\OurMembershipController;
use App\Http\Controllers\Dashboard\PartnerController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\PublishController;
use App\Http\Controllers\Dashboard\ResuscitationController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\TrainerController;
use App\Http\Controllers\Dashboard\TrainingProgramController;
use App\Http\Controllers\Dashboard\UpcommingCourseController;
use App\Http\Controllers\Dashboard\UpcommingExamController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Site\AuthController;
use App\Http\Controllers\Site\BlockUserController;
use App\Http\Controllers\Site\ContactUsController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\StoryController;
use App\Models\User;
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

Route::get('/', function () {
    $query = User::query();
    $query->where('user_type', 'user');
    $newUsers = $query->latest()->limit(10)->get();

    $mostPopular = $query->get();

    return view('welcome', compact('newUsers', 'mostPopular'));
});

Auth::routes();

Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');


Route::group(['prefix' => 'user'], function () {
    Route::get('/register', [\App\Http\Controllers\HomeController::class, 'userRegister'])->name('user.register');
    Route::get('/login', [\App\Http\Controllers\HomeController::class, 'userLogin'])->name('user.login');
    Route::post('/register', [AuthController::class, 'register'])->name('user.register');
    Route::post('/login', [AuthController::class, 'login'])->name('user.login');
    Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('user.forgot_password');
    Route::get('/users/{user}/details', [HomeController::class, 'userDetails'])->name('user.details');

    //search component
    Route::get('/search', [HomeController::class, 'getSearch'])->name('user.get_search_page');
    Route::post('/search', [HomeController::class, 'search'])->name('user.search');
    Route::get('/details/search', [HomeController::class, 'detailsSearch'])->name('user.details_search');
    Route::get('/result/search', [HomeController::class, 'resultSearch'])->name('user.result_of_search');

    //type of married
    Route::get('/new-man', [HomeController::class, 'showMan'])->name('user.new_man');
    Route::get('/new-woman', [HomeController::class, 'showWoman'])->name('user.new_woman');
    Route::get('/polygamy-woman', [HomeController::class, 'showWomanWantMarriedMulti'])->name('user.woman_multi');
    Route::get('/msyar-woman', [HomeController::class, 'showWomanWantMarriedMsyar'])->name('user.woman_msyar');
    Route::get('/normal', [HomeController::class, 'showNormalMarried'])->name('user.normal_married');

    //user info
    Route::get('/{user}/details', [HomeController::class, 'userDetails'])->name('user.details');

    //stories
    Route::get('/stories', [StoryController::class, 'index']);
    Route::get('/story', [StoryController::class, 'show'])->name('user.story.show');
    Route::post('/story', [StoryController::class, 'store'])->name('user.story.store');
});

//ordinary user
Route::group(['middleware' => 'auth', 'prefix' => 'user'], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');
    Route::get('/profile', [AuthController::class, 'showProfile'])->name('user.show_profile');
    Route::post('/profile/{user}/update', [AuthController::class, 'updateProfile'])->name('user.update_profile');
    Route::get('blocked-user', [BlockUserController::class, 'index'])->name('user.blocked');
    Route::post('unblocked/{user}', [BlockUserController::class, 'unBlockedUser'])->name('user.unblocked');
    Route::post('blocked/{user}', [BlockUserController::class, 'block'])->name('user.blocked_post');
});

//user blocker, who_blocker who_blocked
//contacts us
Route::get('/contact-us', [\App\Http\Controllers\HomeController::class, 'contactUs'])->name('contactUs');
Route::post('contact-us', [ContactUsController::class, 'store'])->name('contact_us.store');


//dashboard
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {

    Route::group(['prefix' => 'contact-us'], function () {
        Route::get('/', [\App\Http\Controllers\Dashboard\ContactusController::class, 'index'])->name('contact_us.all');
        Route::get('/replay/{contactUs}', [\App\Http\Controllers\Dashboard\ContactusController::class, 'reply'])->name('contacts.replay');
        Route::post('/reply/{id}', [\App\Http\Controllers\Dashboard\ContactusController::class, 'postReply'])->name('contacts.replay.post');
        Route::post('/{id}', [\App\Http\Controllers\Dashboard\ContactusController::class, 'destroy'])->name('contacts.destroy');

    });

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::get('profile', [ProfileController::class, 'show'])
        ->name('profile.show');

    Route::put('profile', [ProfileController::class, 'update'])
        ->name('profile.update');

//    Route::post('delete/image', [CourseController::class, 'deleteImage'])
//        ->name('delete.course.image');

//    Route::resource('executives', ExecutiveController::class);
});
