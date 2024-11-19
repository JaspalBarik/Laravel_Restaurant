<!DOCTYPE html>
<html>
  <head> 

    <base href="/public">

   @include('admin.css')
   <style>

   .div_deg{

   padding: 10px;

   }

   label{

    display: inline-block;
    width: 200px;

   }

   </style>
  </head>

  <body>

   @include('admin.header')
     
 @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


            <h1>Update Food</h1>

          <form action="{{url('edit_food',$food->id)}}" method="post" enctype="multipart/form-data">

            @csrf
        
            <div class="div_deg">
            <label for="">Food Title</label>
            <input type="text" name="title" value="{{$food->title}}">

            </div>

            <div class="div_deg">
                <label for="">Details</label>

     <textarea name="details" id="">{{$food->detail}}</textarea>    
                </div>

                <div class="div_deg">
                    <label for="">Price</label>
              <input type="text" name="price" value="{{$food->price}}">
                    </div>

                 <div class="div_deg">
                     <label for="">Current Image</label>
                     <img width="150" src="food_img/{{$food->image}}" alt="">
                    </div>

                 <div class="div_deg">
                     <label for="">Change Image</label>
                     <input type="file" name="image">
                     </div>

                     <div class="div_deg">
                        
                     <input class="btn btn-warning" type="submit" value="Update Food">

                       </div>
   



               

          </form>



          </div>
      </div>
    </div>
    <!-- JavaScript files-->
   @include('admin.js')
  </body>
</html>