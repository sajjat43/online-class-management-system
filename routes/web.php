<?php

use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\AboutController;
use App\Http\Controllers\website\LoginController;
use App\Http\Controllers\website\ShowstudentController;
use App\Http\Controllers\website\RoutineController as WebsiteRoutineController;
use App\Http\Controllers\website\ProfileController;
use App\Http\Controllers\website\TeacherprofileController;
use App\Http\Controllers\website\TeacherLoginController;
use App\Http\Controllers\website\TeacherRoutineController;
use App\Http\Controllers\website\TeacherResultController;
use App\Http\Controllers\website\StudentResultController;
use App\Http\Controllers\website\WebAdminLoginController;



use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\StudentsController;
use App\Http\Controllers\admin\teachersController;
use App\Http\Controllers\admin\SubjectController;
use App\Http\Controllers\admin\ClassController;
use App\Http\Controllers\admin\RoutineController;
use App\Http\Controllers\admin\ExamController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\AttendanceController;
use App\Http\Controllers\admin\classConroller;
use App\Http\Controllers\admin\ResultController;
use App\Http\Controllers\attendanceController as ControllersAttendanceController;
use App\Http\Controllers\fileController;
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


//website

Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/website', function () {
    return view('website.layouts.home');
})->name('home');

//home
Route::get('/website/home', [HomeController::class, 'home'])->name('website.home');


//about
Route::get('/website/about', [AboutController::class, 'about'])->name('website.about');



//student signup
Route::get('/website/student', [ShowstudentController::class, 'student'])->name('website.student.signup');
Route::post('/user/student/signup', [ShowstudentController::class, 'studentSignup'])->name('user.signup.store');



//login & logout
Route::get('/user/login', [LoginController::class, 'login'])->name('user.login');
Route::post('/user/do/login', [LoginController::class, 'doLogin'])->name('user.do.login');
Route::get('/user/logout', [LoginController::class, 'logout'])->name('user.logout');




//routine
Route::get('/website/routine', [websiteRoutineController::class, 'routine'])->name('website.routine');



//result & exam
Route::get('/website/result', [StudentResultController::class, 'result'])->name('website.result');
Route::get('/website/exam', [StudentResultController::class, 'exam'])->name('website.exam');


//Attendance

Route::get('admin/attendance/a/view/{id}', [TeachersController::class, 'attendanceView'])->name('student.attendance');
Route::post('admin/attendance/store', [ControllersAttendanceController::class, 'attendanceStore'])->name('student.attendance.store');




//teacher add result
Route::get('/website/teacher/result', [TeacherResultController::class, 'result'])->name('website.teacher.result');
Route::get('/website/teacher/result/add', [TeacherResultController::class, 'resultAdd'])->name('website.teacher.result.add');
Route::post('/website/teacher/result/store', [TeacherResultController::class, 'store'])->name('website.teacher.result.store');
Route::get('/website/teacher/result/delete/{id}', [TeacherResultController::class, 'delete'])->name('website.teacher.result.delete');


//techer routine and exam routine
Route::get('/website/teacher/routine', [TeacherRoutineController::class, 'routine'])->name('website.teacher.routine');
Route::get('/website/teacher/exam', [TeacherRoutineController::class, 'exam'])->name('website.teacher.exam');






//profile
Route::get('/website/profile', [ProfileController::class, 'profile'])->name('website.profile');
Route::get('/website/profile/edit/{id}', [ProfileController::class, 'edit'])->name('website.profile.edit');
Route::put('/website/profile/update/{id}', [ProfileController::class, 'update'])->name('website.profile.update');

//teacher profile
Route::get('/website/teacher/profile', [TeacherprofileController::class, 'profile'])->name('website.teacherprofile');
Route::get('/website/teacher/profile/edit/{id}', [TeacherprofileController::class, 'edit'])->name('website.teacher.profile.edit');
Route::put('/website/teacher/profile/update/{id}', [TeacherprofileController::class, 'update'])->name('website.teacher.profile.update');






// Admin



//login

Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/admin/dologin', [AdminLoginController::class, 'dologin'])->name('admin.do.login');


Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/admin', function () {
        return view('admin.master');
    });



    Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    //dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'dash'])->name('admin.dashboard');



    //user
    Route::get('/admin/user/list', [UserController::class, 'userList'])->name('admin.user.list');
    Route::get('/admin/user/accept/{user_id}', [UserController::class, 'pending'])->name('admin.user.accept');

    Route::get('/admin/user/view/{user_id}', [UserController::class, 'view'])->name('admin.user.view');
    Route::get('/admin/user/delete/{user_id}', [UserController::class, 'delete'])->name('admin.user.delete');
    Route::get('/admin/user/edit/{user_id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('/admin/user/update/{user_id}', [UserController::class, 'update'])->name('admin.user.update');





    //student
    Route::get('/admin/student', [StudentsController::class, 'student'])->name('admin.student');
    Route::get('/admin/student/add', [StudentsController::class, 'studentAdd'])->name('admin.student.add');
    Route::post('/admin/student/store', [StudentsController::class, 'store'])->name('admin.student.store');
    Route::get('/admin/student/accept/{id}', [StudentsController::class, 'pending'])->name('admin.student.accept');

    Route::get('/admin/student/view/{id}', [StudentsController::class, 'view'])->name('admin.student.view');
    Route::get('/admin/student/delete/{id}', [StudentsController::class, 'delete'])->name('admin.student.delete');
    Route::get('/admin/student/edit/{id}', [StudentsController::class, 'edit'])->name('admin.student.edit');
    Route::put('/admin/student/update/{id}', [StudentsController::class, 'update'])->name('admin.student.update');



    //teacher
    Route::get('/admin/teacher', [TeachersController::class, 'teacher'])->name('admin.teacher');
    Route::get('/admin/teacher/add', [TeachersController::class, 'teacherAdd'])->name('admin.teacher.add');
    Route::get('/admin/teacher/accept/{id}', [TeachersController::class, 'pending'])->name('admin.teacher.accept');

    Route::get('/admin/teacher/view/{id}', [TeachersController::class, 'view'])->name('admin.teacher.view');
    Route::get('/admin/teacher/delete/{id}', [TeachersController::class, 'delete'])->name('admin.teacher.delete');
    Route::get('/admin/teacher/edit/{id}', [TeachersController::class, 'edit'])->name('admin.teacher.edit');
    Route::put('/admin/teacher/update/{id}', [TeachersController::class, 'update'])->name('admin.teacher.update');



    //subject
    Route::get('/admin/subject', [SubjectController::class, 'subject'])->name('admin.subject');
    Route::get('/admin/subject/add', [SubjectController::class, 'subjectAdd'])->name('admin.subject.add');
    Route::post('/admin/subject/store', [SubjectController::class, 'store'])->name('admin.subject.store');
    Route::get('/admin/subject/delete/{id}', [SubjectController::class, 'delete'])->name('admin.subject.delete');
    Route::get('/admin/subject/edit/{id}', [SubjectController::class, 'edit'])->name('admin.subject.edit');
    Route::put('/admin/subject/update/{id}', [SubjectController::class, 'update'])->name('admin.subject.update');


    //class
    //    Route::get('/admin/class',[ClassController::class,'class'])->name('admin.class');
    //    Route::get('/admin/class/add',[ClassController::class,'classAdd'])->name('admin.class.add');
    //    Route::post('/admin/class/store',[ClassController::class,'store'])->name('admin.class.store');


    //exam
    Route::get('/admin/exam', [ExamController::class, 'exam'])->name('admin.exam');
    Route::get('/admin/exam/add', [ExamController::class, 'examAdd'])->name('admin.exam.add');
    Route::post('/admin/exam/store', [ExamController::class, 'store'])->name('admin.exam.store');
    Route::get('/admin/exam/delete/{id}', [ExamController::class, 'delete'])->name('admin.exam.delete');
    Route::get('/admin/exam/edit/{id}', [ExamController::class, 'edit'])->name('admin.exam.edit');
    Route::put('/admin/exam/update/{id}', [ExamController::class, 'update'])->name('admin.exam.update');

    //routine
    Route::get('/admin/routine', [RoutineController::class, 'routine'])->name('admin.routine');
    Route::get('/admin/routine/add', [RoutineController::class, 'routineAdd'])->name('admin.routine.add');
    Route::post('/admin/routine/store', [RoutineController::class, 'store'])->name('admin.routine.store');
    Route::get('/admin/routine/delete/{id}', [RoutineController::class, 'delete'])->name('admin.routine.delete');
    Route::get('/admin/routine/edit/{id}', [RoutineController::class, 'edit'])->name('admin.routine.edit');
    Route::put('/admin/routine/update/{id}', [RoutineController::class, 'update'])->name('admin.routine.update');



    //payment
    Route::get('/admin/payment', [PaymentController::class, 'payment'])->name('admin.payment');
    Route::get('/admin/payment/add', [PaymentController::class, 'paymentAdd'])->name('admin.payment.add');
    Route::post('/admin/payment/store', [PaymentController::class, 'store'])->name('admin.payment.store');

    //report
    Route::get('/admin/attendance', [AttendanceController::class, 'attendance'])->name('admin.attendance');


    //result
    Route::get('/admin/result', [ResultController::class, 'result'])->name('admin.result');
    Route::get('/admin/result/add', [ResultController::class, 'resultAdd'])->name('admin.result.add');
    Route::post('/admin/result/store', [ResultController::class, 'store'])->name('admin.result.store');
    Route::get('/admin/result/delete/{id}', [ResultController::class, 'delete'])->name('admin.result.delete');
    Route::get('/admin/result/edit/{id}', [ResultController::class, 'edit'])->name('admin.result.edit');
    Route::put('/admin/result/update/{id}', [ResultController::class, 'update'])->name('admin.result.update');

    // class

    Route::get('admin/class/add', [classConroller::class, 'classAdd'])->name('admin.class.add');
    Route::post('admin/class/store', [classConroller::class, 'classStore'])->name('admin.class.store');

    // class under students
    Route::get('class/under/student', [StudentsController::class, 'class_under_students'])->name('class.under.students');
    Route::get('admin/student/view/{id}', [StudentsController::class, 'studentView'])->name('student.view');
    Route::get('admin/student/details/{id}', [StudentsController::class, 'studentDetails'])->name('student.details');
});



// file systrm -----question

Route::get('question/uplode', [fileController::class, 'questionUpload'])->name('question.uploade');
Route::post('question/store', [fileController::class, 'questionStore'])->name('question.store');
Route::get('question/view/a', [fileController::class, 'questionView'])->name('question.view');
Route::get('question/download/{id}', [fileController::class, 'questionDownload'])->name('question.download');
Route::get('question/file/view/{id}', [fileController::class, 'questionFileView'])->name('question.file.view');

// student question show

Route::get('view', [fileController::class, 'viewQ'])->name('qsn.view');
Route::get('student/question/{id}', [fileController::class, 'studentQuestionView'])->name('student.qsn.view');
