@extends('user')
@section('addwater')
   <!--works section end -->
   <!--contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="work_taital">Add complaints</h1>
      </div>
   </div>
   <div class="contact_section_2">
      <div class="container-fluid">
         
            <form method="post" action="{{route('watersave')}}" class="form-group">
               @csrf
            <div class="col-md-6 ">
                  <div class="form-group">
                     <textarea name="complaint" id="" cols="30" rows="10">Complaints</textarea>
                  </div>
                  <div><button class="btn btn-primary">Add</button></div>
              
            </div>
</form>
         </div>
    
   </div>
   <!--contact section end -->
   <!--footer section start -->
   @endsection