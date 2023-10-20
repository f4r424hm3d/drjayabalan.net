<?php

use App\Http\Controllers\admin\AddressC;
use App\Http\Controllers\admin\AdminDashboard;
use App\Http\Controllers\admin\AdminLogin;
use App\Http\Controllers\admin\AuthorC;
use App\Http\Controllers\admin\CourseCategoryC;
use App\Http\Controllers\admin\CourseModeC;
use App\Http\Controllers\admin\CourseSpecializationC;
use App\Http\Controllers\admin\DefaultSeoC;
use App\Http\Controllers\admin\DestinationC;
use App\Http\Controllers\admin\DestinationContentC;
use App\Http\Controllers\admin\DestinationGalleryC;
use App\Http\Controllers\admin\DestinationPageFaqC;
use App\Http\Controllers\admin\DestinationTabC;
use App\Http\Controllers\admin\ExamC;
use App\Http\Controllers\admin\ExamPageC;
use App\Http\Controllers\admin\ExamPageContentC;
use App\Http\Controllers\admin\ExamPageFaqC;
use App\Http\Controllers\admin\InstituteTypeC;
use App\Http\Controllers\admin\LevelC;
use App\Http\Controllers\admin\NewsC;
use App\Http\Controllers\admin\NewsCategoryC;
use App\Http\Controllers\admin\ProgramC;
use App\Http\Controllers\admin\SeoC;
use App\Http\Controllers\admin\ServiceC;
use App\Http\Controllers\admin\ServiceContentC;
use App\Http\Controllers\admin\StudyModeC;
use App\Http\Controllers\admin\TestimonialC;
use App\Http\Controllers\admin\UniversityC;
use App\Http\Controllers\admin\UniversityGalleryC;
use App\Http\Controllers\admin\UniversityOverviewC;
use App\Http\Controllers\admin\UniversityVideoGalleryC;
use App\Http\Controllers\admin\UserC;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\sitemap\SitemapController;
use App\Http\Controllers\AboutFc;
use App\Http\Controllers\AppointmentFc;
use App\Http\Controllers\BlogFc;
use App\Http\Controllers\ContactFc;
use App\Http\Controllers\FaqFc;
use App\Http\Controllers\GalleryFc;
use App\Http\Controllers\HomeFc;
use App\Http\Controllers\TreatmentFc;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeFc::class, 'index']);
Route::get('/about-us', [AboutFc::class, 'index']);
Route::get('/faq', [FaqFc::class, 'index']);
Route::get('/gallery', [GalleryFc::class, 'index']);
Route::get('/contact-us', [ContactFc::class, 'index']);

Route::get('/treatments', [TreatmentFc::class, 'index']);

Route::get('/blog', [BlogFc::class, 'index']);

Route::get('/appointment', [AppointmentFc::class, 'index']);

/* ADMIN ROUTES BEFORE LOGIN */
Route::middleware(['adminLoggedOut'])->group(function () {
  Route::get('/admin/login/', [AdminLogin::class, 'index']);
  Route::post('/admin/login/', [AdminLogin::class, 'login']);
});
/* ADMIN ROUTES AFTER LOGIN */
Route::middleware(['adminLoggedIn'])->group(function () {
  Route::get('/admin/logout/', function () {
    session()->forget('adminLoggedIn');
    return redirect('admin/login');
  });
  Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminDashboard::class, 'index']);
    Route::get('/dashboard/', [AdminDashboard::class, 'index']);
    Route::get('/profile/', [AdminDashboard::class, 'profile']);
    Route::post('/update-profile/', [AdminDashboard::class, 'updateProfile']);

    Route::prefix('/destinations')->group(function () {
      Route::get('', [DestinationC::class, 'index']);
      Route::post('/store/', [DestinationC::class, 'store']);
      Route::get('/delete/{id}/', [DestinationC::class, 'delete']);
      Route::get('/update/{id}/', [DestinationC::class, 'index']);
      Route::post('/update/{id}/', [DestinationC::class, 'update']);
    });
    Route::prefix('/destination-content/')->group(function () {
      Route::get('/delete/{id}/', [DestinationContentC::class, 'delete']);
      Route::get('{page_id}/{tab_id?}/', [DestinationContentC::class, 'index']);
      Route::post('store/', [DestinationContentC::class, 'store']);
      Route::get('{page_id}/{tab_id}/update/{id}/', [DestinationContentC::class, 'index']);
      Route::post('update/{id}/', [DestinationContentC::class, 'update']);
    });
    Route::prefix('/destination-gallery/')->group(function () {
      Route::get('/delete/{id}/', [DestinationGalleryC::class, 'delete']);
      Route::get('{destination_id}/', [DestinationGalleryC::class, 'index']);
      Route::post('store/', [DestinationGalleryC::class, 'store']);
      Route::get('{destination_id}/update/{id}/', [DestinationGalleryC::class, 'index']);
      Route::post('update/{id}/', [DestinationGalleryC::class, 'update']);
    });
    Route::prefix('/destination-faq/')->group(function () {
      Route::get('/delete/{id}/', [DestinationPageFaqC::class, 'delete']);
      Route::get('{page_id}/', [DestinationPageFaqC::class, 'index']);
      Route::post('store/', [DestinationPageFaqC::class, 'store']);
      Route::get('{page_id}/update/{id}/', [DestinationPageFaqC::class, 'index']);
      Route::post('update/{id}/', [DestinationPageFaqC::class, 'update']);
    });
    Route::prefix('/destination-tabs')->group(function () {
      Route::get('', [DestinationTabC::class, 'index']);
      Route::post('/store/', [DestinationTabC::class, 'store']);
      Route::get('/delete/{id}/', [DestinationTabC::class, 'delete']);
      Route::get('/update/{id}/', [DestinationTabC::class, 'index']);
      Route::post('/update/{id}/', [DestinationTabC::class, 'update']);
    });

    Route::prefix('/course-category')->group(function () {
      Route::get('', [CourseCategoryC::class, 'index']);
      Route::post('/store/', [CourseCategoryC::class, 'store']);
      Route::get('/delete/{id}/', [CourseCategoryC::class, 'delete']);
      Route::get('/update/{id}/', [CourseCategoryC::class, 'index']);
      Route::post('/update/{id}/', [CourseCategoryC::class, 'update']);
      Route::post('/import/', [CourseCategoryC::class, 'import']);
    });
    Route::prefix('/course-specialization')->group(function () {
      Route::get('', [CourseSpecializationC::class, 'index']);
      Route::post('/store/', [CourseSpecializationC::class, 'store']);
      Route::get('/delete/{id}/', [CourseSpecializationC::class, 'delete']);
      Route::get('/update/{id}/', [CourseSpecializationC::class, 'index']);
      Route::post('/update/{id}/', [CourseSpecializationC::class, 'update']);
      Route::post('/import/', [CourseSpecializationC::class, 'import']);
      Route::get('/export/', [CourseSpecializationC::class, 'export']);
      Route::get('/get-by-category/', [CourseSpecializationC::class, 'getByCategory']);
    });
    Route::prefix('/programs')->group(function () {
      Route::get('', [ProgramC::class, 'index']);
      Route::post('/store/', [ProgramC::class, 'store']);
      Route::get('/delete/{id}/', [ProgramC::class, 'delete']);
      Route::get('/update/{id}/', [ProgramC::class, 'index']);
      Route::post('/update/{id}/', [ProgramC::class, 'update']);
      Route::post('/import/', [ProgramC::class, 'import']);
      Route::get('/get-by-spc-and-cat', [ProgramC::class, 'getBySpcCat']);
    });
    Route::prefix('/levels')->group(function () {
      Route::get('', [LevelC::class, 'index']);
      Route::post('/store/', [LevelC::class, 'store']);
      Route::get('/delete/{id}/', [LevelC::class, 'delete']);
      Route::get('/update/{id}/', [LevelC::class, 'index']);
      Route::post('/update/{id}/', [LevelC::class, 'update']);
      Route::post('/import/', [LevelC::class, 'import']);
    });

    Route::prefix('/institute-types')->group(function () {
      Route::get('', [InstituteTypeC::class, 'index']);
      Route::post('/store/', [InstituteTypeC::class, 'store']);
      Route::get('/delete/{id}/', [InstituteTypeC::class, 'delete']);
      Route::get('/update/{id}/', [InstituteTypeC::class, 'index']);
      Route::post('/update/{id}/', [InstituteTypeC::class, 'update']);
    });
    Route::prefix('/study-modes')->group(function () {
      Route::get('', [StudyModeC::class, 'index']);
      Route::post('/store/', [StudyModeC::class, 'store']);
      Route::get('/delete/{id}/', [StudyModeC::class, 'delete']);
      Route::get('/update/{id}/', [StudyModeC::class, 'index']);
      Route::post('/update/{id}/', [StudyModeC::class, 'update']);
    });
    Route::prefix('/course-modes')->group(function () {
      Route::get('', [CourseModeC::class, 'index']);
      Route::post('/store/', [CourseModeC::class, 'store']);
      Route::get('/delete/{id}/', [CourseModeC::class, 'delete']);
      Route::get('/update/{id}/', [CourseModeC::class, 'index']);
      Route::post('/update/{id}/', [CourseModeC::class, 'update']);
    });
    Route::prefix('/university')->group(function () {
      Route::get('add', [UniversityC::class, 'add']);
      Route::get('', [UniversityC::class, 'index']);
      Route::post('/store/', [UniversityC::class, 'store']);
      Route::get('/delete/{id}/', [UniversityC::class, 'delete']);
      Route::get('/update/{id}/', [UniversityC::class, 'index']);
      Route::post('/update/{id}/', [UniversityC::class, 'update']);
      Route::post('/import/', [UniversityC::class, 'import']);
    });
    Route::prefix('/university-overview')->group(function () {
      Route::get('/{university_id}', [UniversityOverviewC::class, 'index']);
      Route::post('/{university_id}/store', [UniversityOverviewC::class, 'store']);
      Route::get('/delete/{id}/', [UniversityOverviewC::class, 'delete']);
      Route::get('/{university_id}/update/{id}/', [UniversityOverviewC::class, 'index']);
      Route::post('/{university_id}/update/{id}/', [UniversityOverviewC::class, 'update']);
    });

    Route::prefix('/university-gallery')->group(function () {
      Route::get('/{university_id}', [UniversityGalleryC::class, 'index']);
      Route::post('/{university_id}/store', [UniversityGalleryC::class, 'store']);
      Route::get('/delete/{id}/', [UniversityGalleryC::class, 'delete']);
      Route::get('/{university_id}/update/{id}/', [UniversityGalleryC::class, 'index']);
      Route::post('/{university_id}/update/{id}/', [UniversityGalleryC::class, 'update']);
    });
    Route::prefix('/university-video-gallery')->group(function () {
      Route::get('/{university_id}', [UniversityVideoGalleryC::class, 'index']);
      Route::post('/{university_id}/store', [UniversityVideoGalleryC::class, 'store']);
      Route::get('/delete/{id}/', [UniversityVideoGalleryC::class, 'delete']);
      Route::get('/{university_id}/update/{id}/', [UniversityVideoGalleryC::class, 'index']);
      Route::post('/{university_id}/update/{id}/', [UniversityVideoGalleryC::class, 'update']);
    });

    Route::prefix('/services')->group(function () {
      Route::get('', [ServiceC::class, 'index']);
      Route::post('/store/', [ServiceC::class, 'store']);
      Route::get('/delete/{id}/', [ServiceC::class, 'delete']);
      Route::get('/update/{id}/', [ServiceC::class, 'index']);
      Route::post('/update/{id}/', [ServiceC::class, 'update']);
    });
    Route::prefix('/service-content')->group(function () {
      Route::get('/{service_id}/', [ServiceContentC::class, 'index']);
      Route::post('/{service_id}/store/', [ServiceContentC::class, 'store']);
      Route::get('/delete/{id}/', [ServiceContentC::class, 'delete']);
      Route::get('/{service_id}/update/{id}/', [ServiceContentC::class, 'index']);
      Route::post('/{service_id}/update/{id}/', [ServiceContentC::class, 'update']);
    });
    Route::prefix('/exams')->group(function () {
      Route::get('', [ExamC::class, 'index']);
      Route::post('/store/', [ExamC::class, 'store']);
      Route::get('/delete/{id}/', [ExamC::class, 'delete']);
      Route::get('/update/{id}/', [ExamC::class, 'index']);
      Route::post('/update/{id}/', [ExamC::class, 'update']);
    });
    Route::prefix('/exam-pages')->group(function () {
      Route::get('/{exam_id}/', [ExamPageC::class, 'index']);
      Route::post('/store/', [ExamPageC::class, 'store']);
      Route::get('/delete/{id}/', [ExamPageC::class, 'delete']);
      Route::get('/{exam_id}/update/{id}/', [ExamPageC::class, 'index']);
      Route::post('/update/{id}/', [ExamPageC::class, 'update']);
    });
    Route::prefix('/exam-page-contents')->group(function () {
      Route::get('/{page_id}/', [ExamPageContentC::class, 'index']);
      Route::post('/store/', [ExamPageContentC::class, 'store']);
      Route::get('/delete/{id}/', [ExamPageContentC::class, 'delete']);
      Route::get('/{page_id}/update/{id}/', [ExamPageContentC::class, 'index']);
      Route::post('/update/{id}/', [ExamPageContentC::class, 'update']);
    });
    Route::prefix('/exam-page-faqs')->group(function () {
      Route::get('/{page_id}/', [ExamPageFaqC::class, 'index']);
      Route::post('/store/', [ExamPageFaqC::class, 'store']);
      Route::get('/delete/{id}/', [ExamPageFaqC::class, 'delete']);
      Route::get('/{page_id}/update/{id}/', [ExamPageFaqC::class, 'index']);
      Route::post('/update/{id}/', [ExamPageFaqC::class, 'update']);
    });

    Route::prefix('/news-category')->group(function () {
      Route::get('/', [NewsCategoryC::class, 'index']);
      Route::post('/store/', [NewsCategoryC::class, 'store']);
      Route::get('/delete/{id}/', [NewsCategoryC::class, 'delete']);
      Route::get('/update/{id}/', [NewsCategoryC::class, 'index']);
      Route::post('/update/{id}/', [NewsCategoryC::class, 'update']);
    });
    Route::prefix('/news')->group(function () {
      Route::get('/', [NewsC::class, 'index']);
      Route::post('/store/', [NewsC::class, 'store']);
      Route::get('/delete/{id}/', [NewsC::class, 'delete']);
      Route::get('/update/{id}/', [NewsC::class, 'index']);
      Route::post('/update/{id}/', [NewsC::class, 'update']);
    });
    Route::prefix('/testimonials')->group(function () {
      Route::get('/', [TestimonialC::class, 'index']);
      Route::post('/store/', [TestimonialC::class, 'store']);
      Route::get('/delete/{id}/', [TestimonialC::class, 'delete']);
      Route::get('/update/{id}/', [TestimonialC::class, 'index']);
      Route::post('/update/{id}/', [TestimonialC::class, 'update']);
    });
    Route::prefix('/authors')->group(function () {
      Route::get('/', [AuthorC::class, 'index']);
      Route::post('/store/', [AuthorC::class, 'store']);
      Route::get('/delete/{id}/', [AuthorC::class, 'delete']);
      Route::get('/update/{id}/', [AuthorC::class, 'index']);
      Route::post('/update/{id}/', [AuthorC::class, 'update']);
    });
    Route::prefix('/seos')->group(function () {
      Route::get('/', [SeoC::class, 'index']);
      Route::post('/store/', [SeoC::class, 'store']);
      Route::get('/delete/{id}/', [SeoC::class, 'delete']);
      Route::get('/update/{id}/', [SeoC::class, 'index']);
      Route::post('/update/{id}/', [SeoC::class, 'update']);
    });
    Route::prefix('/default-seos')->group(function () {
      Route::get('/', [DefaultSeoC::class, 'index']);
      Route::get('add/', [DefaultSeoC::class, 'index']);
      Route::post('/store/', [DefaultSeoC::class, 'store']);
      Route::get('/delete/{id}/', [DefaultSeoC::class, 'delete']);
      Route::get('/update/{id}/', [DefaultSeoC::class, 'index']);
      Route::post('/update/{id}/', [DefaultSeoC::class, 'update']);
    });
    Route::prefix('/addresses')->group(function () {
      Route::get('/', [AddressC::class, 'index']);
      Route::post('/store/', [AddressC::class, 'store']);
      Route::get('/delete/{id}/', [AddressC::class, 'delete']);
      Route::get('/update/{id}/', [AddressC::class, 'index']);
      Route::post('/update/{id}/', [AddressC::class, 'update']);
    });

    Route::prefix('/users')->group(function () {
      Route::get('/', [UserC::class, 'index']);
      Route::post('/store/', [UserC::class, 'store']);
      Route::get('/delete/{id}/', [UserC::class, 'delete']);
      Route::get('/update/{id}/', [UserC::class, 'index']);
      Route::post('/update/{id}/', [UserC::class, 'update']);
    });
  });
});

Route::prefix('common')->group(function () {
  Route::get('/change-status/', [CommonController::class, 'changeStatus']);
  Route::get('/update-field/', [CommonController::class, 'updateFieldById']);
  Route::get('/update-bulk-field/', [CommonController::class, 'updateBulkField']);
  Route::get('/get-country-by-destination/', [CommonController::class, 'getCountryByDestination']);
  Route::get('/search-university-and-program/', [HomeFc::class, 'searchUniversity']);
  Route::get('/slugify/', [CommonController::class, 'slugifyString']);
});