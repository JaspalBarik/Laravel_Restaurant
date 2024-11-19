<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>

 @include('admin.css')'

 <style>

table{

     border: 1px solid skyblue;
     margin: auto;
     width: 1000px;
     margin-top: 100px;

}

th{

    background-color: skyblue;
     padding: 20px;
     text-align: center;
     color: white;
     font-size: 18px;

}

td{

    padding: 20px;
    text-align: center;
    color: white;
    font-weight: bold;


}

 </style>

</head>
<body>
 
@include('admin.header')

@include('admin.sidebar')


 <div class="page-content">
   <div class="page-header">
     <div class="container-fluid">



  <table>
    <tr>
        <th>Phone Number</th>
        <th>Number of Guest</th>
        <th>Date</th>
        <th>Time</th>

    </tr>

    @foreach($book as $book)

    <tr>
        <td>{{$book->phone}}</td>
        <td>{{$book->guest}}</td>
        <td>{{$book->date}}</td>
        <td>{{$book->time}}</td>

    </tr>  

    @endforeach

  </table>



   </div>
 </div>
</div>

<!-- JavaScript Files -->
@include('admin.js')
</body>
</html>