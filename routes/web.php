<?php

use App\studentlist;

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
    // return view('welcome');
    echo "get it....";
});
Route::get('/logins', 'LoginController@index')->name('login.index');
Route::post('/logins', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/studentlist/{coursename}', 'FacultyController@studentlist')->name('student.list');

// Route::get('/studentlistpdf/{coursename}', 'FacultyController@studentlistpdf');

Route::get('/studentlistpdf/{coursename}', function($coursename){
	// return view('pdf');
	$list = studentlist::where('coursename', $coursename)->get();
    $pdf = PDF::loadView('pdf', compact('list'));
    return $pdf->download('studentlist.pdf');

	 // echo $list;

});



Route::group(['middleware'=>['sess']], function(){

Route::get('/home', 'FacultyController@home')->name('home.index');

Route::get('/profile', 'FacultyController@profile')->name('profile.index');
Route::get('/othersfaculty', 'FacultyController@othersfaculty')->name('othersfaculty.index');

Route:: get('/assignment', 'FacultyController@addAssignment')->name('assignment.index');
Route:: post('/assignment', 'FacultyController@addAssignmentStore');

Route:: get('/assignment/show', 'FacultyController@AssignmentShow')->name('assignment.show.index');

Route::get('/assignment/edit/{id}', 'FacultyController@Assignmentedit')->name('assignment.edit');
Route::post('/assignment/edit/{id}', 'FacultyController@Assignmentupdate');

Route:: get('/assignment/delete/{id}', 'FacultyController@AssignmentDelete')->name('assignment.delete.index');

Route:: get('/notes', 'FacultyController@addNotes')->name('note.index');
Route:: post('/notes', 'FacultyController@noteStrore');

Route:: get('/notes/show', 'FacultyController@notesShow')->name('notes.show.index');

Route::get('/note/edit/{id}', 'FacultyController@noteEdit')->name('note.edit');
Route::post('/note/edit/{id}', 'FacultyController@noteupdate');

Route:: get('/note/delete/{id}', 'FacultyController@noteDelete')->name('note.delete.index');

Route:: get('/syllabus', 'FacultyController@addsyllabus')->name('syllabus.index');
Route:: post('/syllabus', 'FacultyController@syllabusStrore');

Route:: get('/syllabus/show', 'FacultyController@syllabusShow')->name('syllabus.show.index');

Route::get('/syllabus/edit/{id}', 'FacultyController@syllabusEdit')->name('syllabus.edit');
Route::post('/syllabus/edit/{id}', 'FacultyController@syllabusupdate');

Route:: get('/syllabus/delete/{id}', 'FacultyController@syllabusDelete')->name('syllabus.delete.index');


Route::get('/studentlist/{coursename}', 'FacultyController@studentlist')->name('student.list');

});


