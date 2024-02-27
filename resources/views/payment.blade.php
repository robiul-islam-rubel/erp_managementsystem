<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>My Payment</title>
</head>
<body>
    <table class="table table-bordered table-light">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Semester</th>
            <th scope="col">Amount</th>
            <th scope="col">Method</th>
          </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$data->id}}</td>
          
                    @if ($data->semester=='1')
                        <td>Fall</td>
                    @endif
            
               <td>
                 {{$data->amount}}
               </td>
               
                @if ($data->method=='0')
                        <td>Bkash</td>
                    @endif
              
            </tr>
        
        </tbody>
      </table>
</body>
</html>