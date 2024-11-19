 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  @include('admin.css')'
 </head>
 <body>
  
 @include('admin.header')

 @include('admin.sidebar')


  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

      @include('admin.body')

    </div>
  </div>
 </div>

 <!-- JavaScript Files -->
 @include('admin.js')
</body>
</html>