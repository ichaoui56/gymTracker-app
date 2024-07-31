<?php

use App\Http\Controllers\Auth\ForgetPasswrodController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontOffice\homeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\backOffice\ClasseController;
use App\Http\Controllers\backOffice\PricingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\backOffice\AbonnementController;
use App\Http\Controllers\backOffice\BenefitsController;
use App\Http\Controllers\backOffice\CategoryController;
use App\Http\Controllers\backOffice\DashboardController;
use App\Http\Controllers\frontOffice\BlogsController;
use App\Http\Controllers\frontOffice\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*
|--------------------------------------------------------------------------
| Home Section Route
|--------------------------------------------------------------------------
*/

Route::get('/', [homeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Coach Section Route
|--------------------------------------------------------------------------
*/
Route::get('/coaches', [HomeController::class, 'showCoaches'])->name('show.coaches');

/*
|--------------------------------------------------------------------------
| Pricing Section Route
|--------------------------------------------------------------------------
*/
Route::get('/pricing', [HomeController::class, 'showPricing'])->name('show.pricing');

/*
|--------------------------------------------------------------------------
| Pricing Section Route
|--------------------------------------------------------------------------
*/
Route::get('/schedule', [HomeController::class, 'showSchedule'])->name('show.pricing');

/*
|--------------------------------------------------------------------------
| Classe Section Route
|--------------------------------------------------------------------------
*/
Route::get('/classeDetail/{id}/{category_id}', [HomeController::class, 'showClasseDetails'])->name('class.detail');
Route::get('/classes', [HomeController::class, 'showClasses'])->name('show.classes');

/*
|--------------------------------------------------------------------------
| Bim Section Route
|--------------------------------------------------------------------------
*/
Route::get('/bim', [HomeController::class, 'showBim'])->name('show.BIM')->middleware('sub:Business|Expensive');
Route::post('/bim/result', [HomeController::class, 'calculateBmr'])->name('calculate.bmr')->middleware('sub:Business|Expensive');

/*
|--------------------------------------------------------------------------
| Coach Details Section Route
|--------------------------------------------------------------------------
*/
Route::get('/coachDetail/{id}', [HomeController::class, 'showCoachDetail'])->name('coach.detail')->middleware('sub:Business|Basic|Expensive');

Route::middleware(['guest'])->group(
    function () {

        /*
        |--------------------------------------------------------------------------
        | Register Section Route
        |--------------------------------------------------------------------------
        */
        Route::get('/register', [RegisterController::class, 'index'])->name('show.register');
        Route::post('/register', [RegisterController::class, 'store'])->name('store.register');

        /*
        |--------------------------------------------------------------------------
        | Login Section Route
        |--------------------------------------------------------------------------
        */
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('check.login');

        /*
        |--------------------------------------------------------------------------
        | Reset Password Section Route
        |--------------------------------------------------------------------------
        */
        Route::get('/resetPassword', [ResetPasswordController::class, 'index'])->name('show.resetPassword');
        Route::get('/forgetPassword', [ForgetPasswrodController::class, 'index'])->name('show.forgetPassword');
    }
);


Route::middleware(['auth'])->group(
    function () {

        /*
        |--------------------------------------------------------------------------
        | Dashboard Section Route
        |--------------------------------------------------------------------------
        */
        Route::post('/add-user-abonnement/{id}', [AbonnementController::class, 'addUserAbonnement'])->name('add.userAbonnement');


        Route::middleware(['role:Admin'])->group(
            function () {

                /*
                |--------------------------------------------------------------------------
                | Dashboard Section Route
                |--------------------------------------------------------------------------
                */
                Route::get('/categoryDash', [DashboardController::class, 'showCategoryTable'])->name('show.categories'); // Category Section
                Route::get('/userDash', [DashboardController::class, 'showUserTable'])->name('show.users'); // User Section
                Route::get('/classeDash', [DashboardController::class, 'showClasseSection'])->name('show.classes'); // Classe Section
                Route::get('/AbonnementDash', [DashboardController::class, 'showAbonnementSection'])->name('show.abonnement'); // Abonnement Section
                Route::get('/benefitDash', [DashboardController::class, 'showBenefitTable'])->name('show.benefits'); // Benefit Section
                Route::get('/featureDash', [DashboardController::class, 'showFeatureTable'])->name('show.features'); // Feature Section
                Route::get('/staticDash', [DashboardController::class, 'showStaticSection'])->name('show.static'); // Static Section
                Route::get('/profileDash', [DashboardController::class, 'showProfilSection'])->name('show.profile'); // Profil Section

                /*
                |--------------------------------------------------------------------------
                | Class Crud Route
                |--------------------------------------------------------------------------
                */
                Route::post('/class/add', [ClasseController::class, 'store'])->name('store.class');
                Route::put('/updateClass/{id}', [ClasseController::class, 'updateClasse'])->name('update.classe');
                Route::delete('/deleteClass/{id}', [ClasseController::class, 'deleteClasse'])->name('delete.classe');

                /*  
                |--------------------------------------------------------------------------
                | Category Crud Route
                |--------------------------------------------------------------------------
                */
                Route::post('/category/add', [CategoryController::class, 'store'])->name('store.category');
                Route::put('/updateCategory/{id}', [CategoryController::class, 'updateCategory'])->name('update.category');
                Route::delete('/deleteCategory/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');

                /*  
                |--------------------------------------------------------------------------
                | Benefit Crud Route
                |--------------------------------------------------------------------------
                */
                Route::post('/benefit/add', [BenefitsController::class, 'store'])->name('store.benefit');
                Route::put('/updateBenefit/{id}', [BenefitsController::class, 'updateBenefit'])->name('update.benefit');
                Route::delete('/deleteBenefit/{id}', [BenefitsController::class, 'deleteBenefit'])->name('delete.benefit');

                /*  
                |--------------------------------------------------------------------------
                | Abonnement Crud Route
                |--------------------------------------------------------------------------
                */
                Route::post('/abonnement/add', [AbonnementController::class, 'store'])->name('store.abonnement');

                /*  
                |--------------------------------------------------------------------------
                | Delete User Route
                |--------------------------------------------------------------------------
                */
                Route::delete('/deleteUser/{id}', [UserController::class, 'deleteUser'])->name('delete.user');

                /*  
                |--------------------------------------------------------------------------
                | Abonnement Approve/Decline Route
                |--------------------------------------------------------------------------
                */
                Route::get('/apporoveAbonnement/{id}', [AbonnementController::class, 'approveAbonnement'])->name('approve.abonnement');
                Route::get('/declineAbonnement/{id}', [AbonnementController::class, 'declineAbonnement'])->name('decline.abonnement');
            }
        );

        Route::middleware(['role:Trainer'])->group(
            function () {

                /*
                |--------------------------------------------------------------------------
                | User Blog Section Route
                |--------------------------------------------------------------------------
                */
                Route::get('/MyBlogs/{id}', [HomeController::class, 'MyBlogs'])->name('show.myBlogs');

                /*
                |--------------------------------------------------------------------------
                | Blog Section Route
                |--------------------------------------------------------------------------
                */
                Route::get('/Blogs/{id}', [HomeController::class, 'showBlogs'])->name('show.blogs')->middleware('sub:Business|Basic|Expensive');
                Route::get('/blogDetail/{id}', [HomeController::class, 'showBlogDetails'])->name('blog.detail')->middleware('sub:Business|Basic|Expensive');

                /*
                |--------------------------------------------------------------------------
                | Comments Add/Fetch Route
                |--------------------------------------------------------------------------
                */
                Route::post('/ajaxupload', [CommentController::class, 'upload'])->name('add.comment');
                Route::get('/comments/{id}', [CommentController::class, 'fetchComments']);

                /*
                |--------------------------------------------------------------------------
                | User Blog Crud Route
                |--------------------------------------------------------------------------
                */
                Route::post('/MyBlogs', [BlogsController::class, 'store'])->name('store.blogs');
                Route::delete('/deleteBlog/{id}', [BlogsController::class, 'deleteBlog'])->name('delete.blog');
            }
        );



        /*
        |--------------------------------------------------------------------------
        | Logout Route
        |--------------------------------------------------------------------------
        */
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');

        /*
        |--------------------------------------------------------------------------
        | Update Role Route
        |--------------------------------------------------------------------------
        */
        Route::post('/dashboard/update', [UserController::class, 'updateRole'])->name('update.role');
    }
);












// Route::get('/tableDash', [DashboardController::class, 'showTableSection'])->name('show.profile');
