<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\verify;
use App\Http\Requests\verifynotes;
use App\Http\Requests\verifySyllabus;
use App\course;
use App\assignment;
use App\note;
use App\syllabu;
use App\user;
use App\faculty;
use App\studentlist;

class FacultyController extends Controller
{
    //
    function home(){

    	$std = course::all();
    	return view('home.index')->with('users', $std);
       
    }
    function profile(){
        $user = User::where('username', 'sajib')
                    ->where('password', '1234')
                    ->first();

        return view("profile.index")->with('users',$user);
    }

    function othersfaculty(){
        $faculty = faculty::all();
        return view('faculty.index')->with('faculty', $faculty);
       
    }

    function studentlist($coursename){
          $studentlist = studentlist::where('coursename', $coursename)->get();
          return view('studentlist.index')->with('list', $studentlist);
        // echo $coursename;
    }

    // function studentlistpdf($coursename){
    //        $studentlist = studentlist::where('coursename', $coursename)->get();
    //       // return view('studentlist.index')->with('list', $studentlist);
    //      $pdf = \PDF::loadView('pdf', $studentlist);
    //      return $pdf->download('studentlist.pdf');
    // }

    function addAssignment(){
    	return view('assignment.index');
    }
    function addAssignmentStore(verify $request){

     	if($request->hasFile('assignmentfile')){
            $file = $request->file('assignmentfile');
            // echo "File Name: ".$file->getClientOriginalName()."<br>";
            // echo "File Extension: ".$file->getClientOriginalExtension()."<br>";
            // echo "File Size: ".$file->getSize()."<br>";
            // echo "File Type: ".$file->getMimeType();

            if($file->move('upload', $file->getClientOriginalName())){
                // echo "success";



               $assignment = new assignment();
               $assignment->assignmentname = $request->assignmentname;
               $assignment->coursename =$request->coursename;
               $assignment->updatedate =$request->updatedate;
               $assignment->submissiondate =$request->submissiondate;
               $assignment->assignmentfile = $file->getClientOriginalName();
       // $assignment->cgpa ='';

        if($assignment->save()){
            $request->session()->flash('msg', 'Successful');
            return redirect()->route('assignment.index');
        }else{
            $request->session()->flash('msg', 'Sorry,Failed');
            return redirect()->route('assignment.index');
        }
              


            }
            
        }else{
            echo "fail";
        }

    	
    }
    function AssignmentShow(){
    	$assignment = assignment::all();
    	return view('assignment.show')->with('assignment', $assignment);
    }

    function Assignmentedit($id){
        $assignment = assignment::find($id);
    	return view('assignment.edit')->with('user', $assignment);
    }

    function Assignmentupdate(Request $request, $id){
        $assignment = assignment::find($id);
        $assignment->assignmentname = $request->assignmentname;
        $assignment->coursename = $request->coursename;
        $assignment->updatedate = $request->updatedate;
        $assignment->submissiondate = $request->submissiondate;
        $assignment->save();
    	return redirect()->route('assignment.show.index');
    }

    function AssignmentDelete($id){
        $assignment = assignment::find($id);
        $assignment->delete();
        return redirect()->route('assignment.show.index');
    }

    function addNotes(){
        return view('notes.index');
    }
    function noteStrore(verifynotes $request){
        if($request->hasFile('file')){
            $file = $request->file('file');
            // echo "File Name: ".$file->getClientOriginalName()."<br>";
            // echo "File Extension: ".$file->getClientOriginalExtension()."<br>";
            // echo "File Size: ".$file->getSize()."<br>";
            // echo "File Type: ".$file->getMimeType();

            if($file->move('upload', $file->getClientOriginalName())){
                // echo "success";



               $note = new note();
               $note->notename = $request->notename;
               $note->coursename =$request->coursename;
               $note->uploaddate =$request->uploaddate;
               $note->submissiondate =$request->submissiondate;
               $note->file = $file->getClientOriginalName();
       // $assignment->cgpa ='';

        if($note->save()){
            $request->session()->flash('msg', 'Successful');
            return redirect()->route('note.index');
        }else{
            $request->session()->flash('msg', 'Sorry, Failed');
            return redirect()->route('note.index');
        }
              


            }
            
        }else{
            echo "fail";
        }
    }

    function notesShow(){
        $note = note::all();
        return view('notes.show')->with('note', $note);
    }

    function noteEdit($id){
          $note = note::find($id);
        return view('notes.edit')->with('user', $note);
    }
    function noteupdate(Request $request, $id){
        $note = note::find($id);
        $note->notename = $request->notename;
        $note->coursename = $request->coursename;
        $note->uploaddate = $request->uploaddate;
        $note->submissiondate = $request->submissiondate;
        $note->save();
        return redirect()->route('notes.show.index');
    }

    function noteDelete($id){
        $note = note::find($id);
        $note->delete();
        return redirect()->route('notes.show.index');
    }

    function addsyllabus(){
        return view('syllabus.index');
    }

    function syllabusStrore(verifySyllabus $request){


        if($request->hasFile('file')){
            $file = $request->file('file');
            // echo "File Name: ".$file->getClientOriginalName()."<br>";
            // echo "File Extension: ".$file->getClientOriginalExtension()."<br>";
            // echo "File Size: ".$file->getSize()."<br>";
            // echo "File Type: ".$file->getMimeType();

            if($file->move('upload', $file->getClientOriginalName())){
                // echo "success";



               $syllabu = new syllabu();
               // $syllabu->assignmentname = $request->assignmentname;
               $syllabu->coursename =$request->coursename;
               $syllabu->uploaddate =$request->uploaddate;
               $syllabu->submissiondate =$request->submissiondate;
               $syllabu->file = $file->getClientOriginalName();
       // $assignment->cgpa ='';

        if($syllabu->save()){
            $request->session()->flash('msg', 'Successful');
            return redirect()->route('syllabus.index');
        }else{
            $request->session()->flash('msg', 'Sorry,Failed');
            return redirect()->route('syllabus.index');
        }
              


            }
            
        }else{
            echo "fail";
        }

    }

    function syllabusShow(){
         $syllabu = syllabu::all();
        return view('syllabus.show')->with('syllabu', $syllabu);
    }

    function syllabusEdit($id){
        $syllabu = syllabu::find($id);
        return view('syllabus.edit')->with('user', $syllabu);
    }

    function syllabusupdate(Request $request, $id){
        
         $syllabu = syllabu::find($id);
       
        $syllabu->coursename = $request->coursename;
        $syllabu->uploaddate = $request->uploaddate;
        $syllabu->submissiondate = $request->submissiondate;
        $syllabu->save();
        return redirect()->route('syllabus.show.index');

    }

    function syllabusDelete($id){
        $syllabu = syllabu::find($id);
        $syllabu->delete();
        return redirect()->route('syllabus.show.index');
    }

}
