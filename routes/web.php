<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\EmeetingController;
use App\Http\Controllers\AwsApnController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\AdminController;
use App\Http\Controllers\Blog\WriterController;
use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\Blog\CommentController;


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
/*
5 TYPE OF SESSION IN THIS PROJECT
|   Language= session()->get('ticon_user_language');
|   Admin= session()->get('user');
|   Blog= session()->get('item');
|   Blog= Writer session()->has('writer');
|   Blog= admin session()->get('admin');
|
*/


//----------------------------------------------------TICON ADMIN----------------------------------------------------//
//TICON ADMIN SIGNIN
Route::get('admin/signin', function()
        {
            if (session()->has('user'))
            {
                return redirect('/admin/dashboard');
            }
            return view('admin/signin');
        })->name('ticon.admin.signin');

Route::post('/admin/signIn',[UserController::class,'login']);
Route::get('/admin', function()
        {
            if(!session()->has('user'))
            {
                return redirect('/admin/signin');
            }
            else{

                return redirect('/admin/dashboard');
            }
        });

//TICON ADMIN DASHBOARD
Route::get('/admin/dashboard',[UserController::class,'dashboard'])->name('ticon.admin.dashboard');
//TICON ADMIN CAREER APPLICANT/CV
Route::get('/admin/applicants',[UserController::class,'applicants']);
//TICON ADMIN APPLICANT CV SHOW
Route::get('/admin/applicant/viewCV/{id}',[UserController::class,'showCv']);
//TICON ADMIN APPLICANT CV DELETE
Route::get('/admin/applicant/dltCV/{id}',[UserController::class,'deleteCv']);

//TICON ADMIN SITE USER
Route::get('/admin/registrations',[UserController::class,'registrations']);
//TICON PORTFOLIO PAGE
Route::get('/admin/portfolio',[UserController::class,'portfolio']);
//TICON NEW PORTFOLIO CREATE
Route::post('/admin/portfolio/insert',[PortfolioController::class,'portfolioAdd']);
//TICON PORTFOLIO EDIT
// Route::get('admin/portfolio/update/{id}',[PortfolioController::class,'edit']);
Route::post('admin/portfolio/update/{id}',[PortfolioController::class,'portfolioUpdate']);
//TICON PORTFOLIO DELETE
Route::get('admin/portfolio/delete/{id}',[PortfolioController::class,'portfolioDelete']);
//TICON ADMIN SIGNOUT
Route::get('/adminsignOut',[UserController::class,'logout']);


//TICON SITE USER REGISTRATION
Route::get('/register',[RegistrationController::class,'registrationPageShow']);
Route::post('register',[RegistrationController::class,'store']);

//----------------------------------------------------TICON WEBSITE----------------------------------------------------//
//HOME
Route::get('/',[HomeController::class,'homePageShow']);
Route::get('/home',[HomeController::class,'homePageShow'])->name('home.index');
Route::get('changelanguageKr',[HomeController::class,'languageKr'])->name('home.languageKr');
Route::get('changelanguageEn',[HomeController::class,'languageEn'])->name('home.languageEn');
Route::post('/home/siteuseradd',[HomeController::class,'storeSiteUser']);
//EMAIL SEND OF SITE USER
Route::view('email/business','email/business');

//COMPANY
Route::get('/company',[CompanyController::class,'companyPageShow'])->name('company.index');
//COMPANY/CAREER/USER CV
Route::post('/copmany/sendUserCv',[CompanyController::class,'storeUserCv']);

//SERVICE
Route::get('/service',[ServiceController::class,'service'])->name('service');
//SERVICE/managR
Route::get('/solution/manager',[ServiceController::class,'managR'])->name('service.managR');
//SERVICE/wev Development
Route::get('/service/web-development',[ServiceController::class,'wevDev'])->name('service.wevdev');
//SERVICE/Mobile Development
Route::get('/service/mobile-app-development',[ServiceController::class,'mobileDev'])->name('service.mobiledev');
//SERVICE/Custom Development
Route::get('/service/custom-software-development',[ServiceController::class,'customSoftDev'])->name('service.wevdev');
//SERVICE/Mobile Development
Route::get('/service/software-product-development',[ServiceController::class,'softwareProductionDev'])->name('service.softproductdev');
//SERVICE/Enterprise Application Integration
Route::get('/service/enterprise-application-integration',[ServiceController::class,'enterpriseApp'])->name('service.enterpriseapp');
//SERVICE/echnology Consulting
Route::get('/service/technology-consulting',[ServiceController::class,'techConsulting'])->name('service.techconslt');

//SOLUTION PAGE
Route::get('/solution',[SolutionController::class,'solutionPage'])->name('solution');
//SOLUTION
Route::get('/solution/ai-integration',[SolutionController::class,'aiIntegration'])->name('solution.aiIntegration');
//SOLUTION
Route::get('/solution/web-crawler',[SolutionController::class,'crawler'])->name('solution.crawler');
//SOLUTION
Route::get('/solution/hr-solution',[SolutionController::class,'hr'])->name('solution.hr');
//SOLUTION
Route::get('/solution/trivia-mobile-apps',[SolutionController::class,'trivia'])->name('solution.trivia');
//SOLUTION
Route::get('/solution/ecommerce-and-web-solution',[SolutionController::class,'eCom'])->name('solution.eCom');


//TECHNOLOGY PAGE
Route::get('/technology',[TechnologyController::class,'technology'])->name('technology');
Route::get('/technology/mobile-technology',[TechnologyController::class,'mobileTech'])->name('technology.mobileTech');
Route::get('/technology/web-development',[TechnologyController::class,'wevDev'])->name('technology.wevDev');
Route::get('/technology/streaming',[TechnologyController::class,'streaming'])->name('technology.streaming');
Route::get('/technology/artificial-intelligence',[TechnologyController::class,'ai'])->name('technology.ai');

//PORTFOLIO PAGE SHOW / ALL
Route::get('/portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');
//PORTFOLIO DETAILS SHOW / SPECIFIC

//PORTFOLIO DETAILS SHOW FROM DB
Route::get('/portfolio/product/{id}',[PortfolioController::class,'getPortfolios'])->name('product.show');

//PORTFOLIO DETAILS SHOW FROM BLADE PAGE
Route::get('/product/bless-bit',[PortfolioController::class,'blessBit']);
Route::get('/product/rabbithole-prime',[PortfolioController::class,'rabbithole']);
Route::get('/product/theia',[PortfolioController::class,'theia']);
Route::get('/product/fotoboss',[PortfolioController::class,'fotoboss']);
Route::get('/product/willy',[PortfolioController::class,'willy']);
Route::get('/product/tiger-gen',[PortfolioController::class,'tigerGeN']);
Route::get('/product/ch-box',[PortfolioController::class,'chBox']);
Route::get('/product/nrb-tv',[PortfolioController::class,'NRBTV']);
Route::get('/product/quiz-yard',[PortfolioController::class,'quizYard']);
Route::get('/product/smart-consular',[PortfolioController::class,'SmartConsular']);
Route::get('/product/app-store',[PortfolioController::class,'AppStore']);
Route::get('/product/hello-cockpit',[PortfolioController::class,'HelloCockpit']);
Route::get('/product/runway',[PortfolioController::class,'RUNWAY']);
Route::get('/product/sunplex',[PortfolioController::class,'Sunplex']);
Route::get('/product/ch-vod',[PortfolioController::class,'CHVOD']);
Route::get('/product/j-vod',[PortfolioController::class,'JVOD']);
Route::get('/product/willfon',[PortfolioController::class,'WILLFON']);
Route::get('/product/vision-facewatch',[PortfolioController::class,'VISIONFACEWATCH']);
Route::get('/product/banchin-or-hifriend',[PortfolioController::class,'BanchinorHiFriend']);
Route::get('/product/sbt-neat',[PortfolioController::class,'SBTNEAT']);
Route::get('/product/5-dimentional-edu',[PortfolioController::class,'DIMENTIONALEDU']);
Route::get('/product/j-vision',[PortfolioController::class,'JVISION']);
Route::get('/product/icallring',[PortfolioController::class,'ICALLRING']);
Route::get('/product/miru-phone',[PortfolioController::class,'MIRU']);
Route::get('/product/veterinary-clinics',[PortfolioController::class,'VETERINARYCLINICS']);
Route::get('/product/teletalk-bangladesh',[PortfolioController::class,'TELETALK']);
Route::get('/product/dis-erp',[PortfolioController::class,'DISERP']);
Route::get('/product/intra-erp',[PortfolioController::class,'INTRAERP']);
Route::get('/product/mlm',[PortfolioController::class,'MLM']);
Route::get('/product/cloudaccountica',[PortfolioController::class,'CLOUDACCOUNTICA']);
Route::get('/product/coronabot',[PortfolioController::class,'CORONABOT']);
Route::get('/product/mlm-management-system',[PortfolioController::class,'MLMSystem']);
Route::get('/product/ship-entry',[PortfolioController::class,'ShipEntry']);
Route::get('/product/ship-access',[PortfolioController::class,'ShipAccess']);
Route::get('/product/restaurant-reservation-v',[PortfolioController::class,'ReservationV']);


//CASE STUDY- CHVOD PAGE
Route::get('/solution/case-study-chvod',[CaseController::class,'chvod'])->name('technology.streaming');
//CASE STUDY- RABBITHOLE PAGE
Route::get('/solution/case-study-rabbiteholebd',[CaseController::class,'rabbitHole'])->name('technology.ai');

//AWS APN PAGE
Route::get('/apn',[AwsApnController::class,'index'])->name('apn.index');
//AWS USER ADD/WITH MAIL SEND
Route::post('/apn/saveSiteUser',[AwsApnController::class,'storeSiteUser']);

//E-METTING
Route::get('/emeeting',[EmeetingController::class,'emeeting'])->name('emeeting');

//TICON FOOTER
//CONTACT PAGE
Route::get('/contact',[ContactController::class,'contact'])->name('contact');

//TERMS AND CONDITION PAGE
Route::get('/terms',[HomeController::class,'termsCondition'])->name('terms.index');

//PRIVACY PAGE
Route::get('/privacy',[HomeController::class,'privacyPolicy'])->name('privacy.index');




//----------------------------------------------------TICON BLOG----------------------------------------------------//
Route::get("/blog",[BlogController::class,'blogsShow'])->name('blog.show');
//BLOG FILTER/CATEGORY
Route::get('blog/category/{id}',[BlogController::class,'blogsShowByCategory'])->name('blog.filter.category');
//BLOG FILTER/CATEGORY
Route::get('blog/tag/{id}',[BlogController::class,'blogsShowByTag'])->name('blog.filter.tag');
//BLOG FILTER/Writer
Route::get('blog/writers/{id}',[BlogController::class,'blogsShowByWriter'])->name('blog.filter.writer');
//BLOG DETAILS

if (!(strpos(Request::url(),"admin") || strpos(Request::url(),"writer"))) {
    Route::get('blog/{slug}',[BlogController::class,'blogDetailShow'])->name('blog.detail');
}


//COMMENT ADD
Route::get('/blog/comment/{id}',[CommentController::class,'commentAdd'])->name('blog.comment.create');

//"WRITER" MIDDLEWARE [IF LOGIN, REDIRECT TO DASHBOARD]
Route::group(['middleware' => 'writerHome'],function(){
    //WRITER LOGIN
    // Route::view('/blog/writer/login','ticon/blog/writer/writerlogin');
    Route::get('/blog/writer/login',[WriterController::class,'writerLoginPageShow'])->name('writer.login');
    Route::post('/writer/login',[WriterController::class,'writerAuthenticateLogin']);
    //WRITER REGISTRATION
    Route::get('/blog/writer/register',[WriterController::class,'writerRegisterPageShow']);
    Route::post('/register',[WriterController::class,'writerRegister']);
});

//WRITER MIDDLEWARE [IF NOT LOGIN, REDIRECT TO LOGIN PAGE]
Route::group(['middleware' => 'writerAuth'],function(){
    //WRITER DASHBOARD
    Route::get('/blog/writer',[WriterController::class,'dashboard'])->name('writer');
    Route::get("/blog/writer/dashboard",[WriterController::class,'dashboard'])->name('writer.dashboard');
    //WRITER DASHBOARD BLOG
    Route::get("/blog/writer/blogs",[WriterController::class,'blogs'])->name('writer.dashboard.blogs');
    //BLOG ADD PAGE SHOW
    Route::get('/blog/writer/blogadd',[BlogController::class,'addBlogPageShow']);
    Route::post('/blogadd',[BlogController::class,'addNewBlog']);
    //BLOG EDIT
    Route::get('blog/writer/update/{id}',[BlogController::class,'blogEditPageShow']);
    Route::post('blogupdate/{id}',[BlogController::class,'blogUpdate']);
    //WRITER PROFILE EDIT
    Route::get("/blog/writer/profile/update",[WriterController::class,'profileEditPageShow'])->name('writer.edit');
    Route::post('writerupdate/{id}',[WriterController::class,'writerProfileUpdate']);
    //WRITER SETTINGS/ PASSWORD CHANGE
    Route::get("/blog/writer/profile/settings",[WriterController::class,'writerSettingPage'])->name('writer.setting');
    Route::post('/writerPassChange/{id}',[WriterController::class,'writerPassChange']);
    //WRITER LOGOUT
    Route::get('/writerlogout', [WriterController::class,'logout']);
});



//ADMIN MIDDLEWARE [IF LOGIN, REDIRECT TO DASHBOARD]
Route::group(['middleware' => 'adminHome'],function(){

    //ADMIN LOGIN PAGE SHOW
    Route::get('/blog/admin/login',[AdminController::class,'adminLoginPageShow'])->name('admin.login');
    //ADMIN LOGIN
    Route::post('/admin/login',[AdminController::class,'adminAuthenticateLogin']);
});

//ADMIN MIDDLEWARE [IF NOT LOGIN, REDIRECT TO LOGIN PAGE]
Route::group(['middleware' => 'adminAuth'],function(){

    //DASHBOARD
    Route::get('/blog/admin',[AdminController::class,'dashboard'])->name('admin');
    Route::get('/blog/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/blog/admin/blogs',[AdminController::class,'blogs']);
    Route::get('/blog/admin/writers',[AdminController::class,'writers']);
    Route::get('/blog/admin/comments',[AdminController::class,'comments']);
    Route::get('/blog/admin/categories',[AdminController::class,'categories']);
    Route::get('/blog/admin/tags',[AdminController::class,'tags']);

    //BLOG'S STATE CHANGE
    Route::get('/blog/admin/change/state/{id}/{state}',[BlogController::class,'blogStateChange']);
    //BLOG SEARCH
    Route::get('/blog/admin/search',[BlogController::class,'search']);
    //BLOG DELETE
    Route::get('/blog/admin/delete/{id}',[BlogController::class,'blogDeletePageShow']);
    Route::post('blogDelete/{id}',[BlogController::class,'deleteBlog']);

    //CATEGORY CREATE
    Route::post('/categoryAdd',[CategoryController::class,'categoryCreate']);
    //CATEGORY EDIT
    Route::get('/blog/admin/category/edit/{id}',[CategoryController::class,'categoryEditPageShow']);
    Route::post('categoryupdate/{id}',[CategoryController::class,'categoryUpdate']);
    //CATEGORY DELETE
    Route::get('/blog/admin/category/delete/{id}',[CategoryController::class,'categoryDeletePageShow']);
    Route::post('categoryDelete/{id}',[CategoryController::class,'deleteCategory']);

    //COMMENT'S STATE CHANGE
    Route::get('/blog/admin/comment/state/{id}/{state}',[CommentController::class,'commentStateChange']);
    //COMMENT DELETE
    Route::get('/blog/admin/comment/delete/{id}',[CommentController::class,'commentDelete']);

    //WRITER CREATE
    Route::get('/blog/admin/writer/create',[WriterController::class,'writerAddPageShow']);
    Route::post('/addwriter',[WriterController::class,'addNewWriter']);
    //WRITER'S STATE CHANGE
    Route::get('/blog/admin/writer/state/{id}/{state}',[WriterController::class,'writerStateChange']);

    //ADMIN LOGOUT
    Route::get('/adminlogout', [AdminController::class,'logout']);
});





