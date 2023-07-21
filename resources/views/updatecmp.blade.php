@extends('employee')
@section('updatecomplaints')
   <!--about section end -->
   <!--services section start -->
   <div class="services_section layout_padding">
      <div class="container">
        <h1 align="center">View Complaints</h1>
         <div class="row">
            <!-- <div class="col-md-6">
               <h1 class="services_taital">What We Do </h1>
               <div class="image_2"><img src="images/img-2.png"></div>
            </div> -->
            @foreach($complaint as $num)
            <div class="col-md-6">
               <div class="box_main">
               <h1 class="technology_text">{{$num->department}}</h1>
                  <p class="dummy_text">{{$num->complaints}}</p>
                  <h2>Status:{{$num->status}}</h2>
               </div>
               @if(($num->status)=='0')
                <a class="btn btn-primary" href="{{route('pending',encrypt($num->id))}}">pending</a>
                @else if(($num->status)=='1')
                <a class="btn btn-primary" href="{{route('processing',encrypt($num->id))}}">processing</a>
                @else
                <a class="btn btn-primary" href="">Solved</a>
                @endif
            </div>
            @endforeach
         </div>
         <!-- <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/img-3.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">Long Live UX</h1>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
               </div>
               <div class="readmore_bt"><a href="#">Read More</a></div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/img-4.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">Web Trends</h1>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
               </div>
               <div class="readmore_bt"><a href="#">Read More</a></div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/img-5.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">User Interfaces</h1>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
               </div>
               <div class="readmore_bt"><a href="#">Read More</a></div>
            </div>
         </div> -->
      </div>
   </div>
   <!--services section end -->
   <!--software section start -->
  @endsection