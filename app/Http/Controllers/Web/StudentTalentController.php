<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentTalentController extends Controller
{
    //
    public function studentTalent()
    {
        try{

            return view('web.student_talents.view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function studentDetails()
    {
        try{

            return view('web.student_talents.details');

        }catch(\Exception $exception){

            return;
        }
    }

    public function inactiveAccounts()
    {
        try{

            return view('web.student_talents.inactive_account');

        }catch(\Exception $exception){

            return;
        }
    }



    public function nonPaidAccounts()
    {
        try{

            return view('web.student_talents.non_paid_account');

        }catch(\Exception $exception){

            return;
        }
    }

    public function scholarshipDetails()
    {
        try{

            return view('web.student_talents.scholarship');

        }catch(\Exception $exception){

            return;
        }
    }


    public function scholarshipAdd()
    {
        try{

            return view('web.student_talents.add_scholarship');

        }catch(\Exception $exception){

            return;
        }
    }


    public function recAccess()
    {
        try{

            return view('web.student_talents.rec_access');

        }catch(\Exception $exception){

            return;
        }
    }


    public function AddRecAccess()
    {
        try{

            return view('web.student_talents.add_rec_access');

        }catch(\Exception $exception){

            return;
        }
    }











}
