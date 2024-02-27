<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Table</title>
</head>
<body>     
  <table class="table table-bordered">
    <thead class="thead-dark">
     <tr>
        <th scope="col">#</th>
        <th scope="col">Course Name</th>
        <th scope="col">Course Code</th>
        <th scope="col">Course Credit</th>
        <th scope="col">Batch</th>
        <th scope="col">Section</th>
        <th scope="col">Faculty Name</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="col">{{$data->id}}</th>
           <td>{{$data->course_name}}</td>
           <td>{{$data->course_code}}</td>
           <td>{{$data->course_credit}}</td>
           <td>{{$data->batch}}</td>
           <td>{{$data->section}}</td>
           <td>{{$data->faculty_id}}</td>
         </tr>
            
        
    </tbody>
  </table>
</body>
</html>