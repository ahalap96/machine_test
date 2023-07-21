@extends('welcome')
@section('addemp')
   <!--works section end -->
   <!--contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="work_taital">Add employees</h1>
      </div>
   </div>
   <div class="contact_section_2">
      <div class="container-fluid">
      
            <form method="post" action="{{route('empsave')}}" class="form-group">
               @csrf
            <div class="col-md-6 ">
                  <div class="form-group">
                     <input type="text"  placeholder="Name" name="name">
                  </div>
                  <div class="form-group">
                     <input type="text"  placeholder="Email" name="email">
                  </div>
                  <div class="form-group">
                     <input type="text"  placeholder="Phone Numbar" name="mobile">
                  </div>
                  <div class="form-group">
                     <select name="dept" id="">
                        <option value="kseb">KSEB</option>
                        <option value="water authority">Water Authority</option>
                        <option value="transportation">Transportation</option>
                     </select>
                  </div>
                  <div><button class="btn btn-primary">Add</button></div>
              
            </div>
</form>
         </div>
    
   </div>
   <!--contact section end -->
   <!--footer section start -->
   @endsection