@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="/"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">STUDENT TIME MANAGEMENT

         </h1>
         <p class="font-20 fw-500 text-purple">< STUDENT NAME > - < GRADE >
         </p>
        
      </div>



      
   </div>




</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="row middle-hight">
      
 
        <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <i class="fa-solid fa-business-time fs-1 text-purple mb-3"></i>
               
               <p
                  class="font-20 border-2 text-uppercase fw-bold text-purple py-3 rounded-35  border border-primary text-center bg-light-blue">
                  JANUARY<br>
                  JANUARY
               </p>
               <div class="row justify-content-center pt-4">
                  <div class="col-lg-12 text-white e">
                     <a href="{{ route('web.time-mgt.list-table') }}" class=" w-100 text-uppercase font-11 text-white rounded-pill py-2 px-2 bg-secondary fw-500 align-items-center   hvr-shrink">CLICK TO ENTER YOUR DETAILS</a>


                     <a href="{{ route('web.time-mgt.list-report') }}" class=" w-100 text-uppercase font-11 text-white rounded-pill py-2 px-2 bg-warning fw-500 align-items-center   hvr-shrink mt-3">DETAILED REPORT OF THE
                        MONTH</a>
                  </div>


                  


               </div>
            </div>
         </div>
 
 
 
 
 
    </div>
 </div>
@endsection

