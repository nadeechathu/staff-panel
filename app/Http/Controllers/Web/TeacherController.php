<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teachersSection()
    {
        try{

            return view('web.teachers.all_section');

        }catch(\Exception $exception){

            return;
        }
    }




    public function classIssues()
    {
        try{

            return view('web.teachers.class_issues');

        }catch(\Exception $exception){

            return;
        }
    }

    public function classIssuesView()
    {
        try{

            return view('web.teachers.class_issues_view');

        }catch(\Exception $exception){

            return;
        }
    }



    public function videoIssues()
    {
        try{

            return view('web.teachers.video_issues');

        }catch(\Exception $exception){

            return;
        }
    }

    public function videoIssuesView()
    {
        try{

            return view('web.teachers.video_issues_view');

        }catch(\Exception $exception){

            return;
        }
    }





    public function teacherReviews()
    {
        try{

            return view('web.teachers.teacher_reviews');

        }catch(\Exception $exception){

            return;
        }
    }


    public function classAndVideoReport()
    {
        try{

            return view('web.teachers.class_video_report');

        }catch(\Exception $exception){

            return;
        }
    }




    public function classAndVideoAnalysing()
    {
        try{

            return view('web.teachers.class_video_analysing');

        }catch(\Exception $exception){

            return;
        }
    }


    public function classAndVideoSummery()
    {
        try{

            return view('web.teachers.class_video_summery');

        }catch(\Exception $exception){

            return;
        }
    }
    public function videoTimeTables()
    {
        try{

            return view('web.teachers.video_time_tables');

        }catch(\Exception $exception){

            return;
        }
    }

    public function gradewiseTimeTables()
    {
        try{

            return view('web.teachers.grade_time_tables');

        }catch(\Exception $exception){

            return;
        }
    }

    


}
