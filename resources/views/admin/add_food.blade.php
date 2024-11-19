<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <style>
    label{
        display: inline-block;
        width: 200px;
        color: white;

    }

    .div_deg{

        padding: 10px;

    }
   </style>

  </head>
  <body>

   @include('admin.header')
     
 @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


            <form action="{{url('upload_food')}}" method="post"
            enctype="multipart/form-data">

            @csrf

            <div class="div_deg">
                <label for="">Food Title</label>
                <input type="text" name="title" required>

            </div>

            <div class="div_deg">
                <label for="">Food Details</label>
                 <textarea name="details"  cols="50" rows="5" required></textarea>
            </div>

            <div class="div_deg">
                <label for="">Price</label>
                <input type="text" name="price" required>

            </div>

            <div class="div_deg">
                <label for="">Image</label>
               <input type="file" name="img" required>
            </div>

            <div class="div_deg">
               <input type="submit" value="Add Food" class="btn btn-warning">
            </div>


          


            </form>


          </div>
      </div>
    </div>
    <!-- JavaScript files-->
   @include('admin.js')
  </body>
</html>