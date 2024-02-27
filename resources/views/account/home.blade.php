<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('login.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Payment</title>
</head>
<body>
  <form action="{{url('/payment')}}" method="POST">
    @csrf
    <div class="form-contaienr">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Semester</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="semester">
              <option selected>Semester</option>
              <option value="1">Spring</option>
              <option value="2">Fall</option>
            </select>
        </div>
        <input type="number" name="stdid" placeholder="Student ID">
        <input type="number" name="amount" placeholder="Amount">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Payment Method</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="method">
              <option value="0">Bkash</option>
              <option value="1">Nagad</option>
              <option value="2">Bank</option>
            </select>
        </div>
        
    </div>
    <button type="submit">Add</button>
  </form>
</body>
</html>