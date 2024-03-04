<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marks</title>
</head>
<body>
    <form method="POST" action="">
        @csrf
        <table border="1" style="border-collapse: collapse" style="padding: 10px">
            <thead>
                <tr>
                    <th rowspan="2">SL</th>
                    <th rowspan="2">ID</th>
                    <th rowspan="2">Name</th>
                    <th rowspan="2">Batch</th>
                    <th colspan="6">Mark Info</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">GP</th>
                    <th rowspan="2">LG</th>
    
                </tr>
                <tr>
                    <th style="background: #D1E7DD;width: 10px" class="table-th-width-5">Attn.</th>
                    <th style="background: #D1E7DD;width: 10px" class="table-th-width-5">Viva</th>
                    <th style="background: #D1E7DD;width: 10px" class="table-th-width-5">Quiz</th>
                    <th style="background: #D1E7DD;width: 10px" class="table-th-width-5">Assign.</th>
                    <th style="background: #D1E7DD;width: 10px" class="table-th-width-5">Mid</th>
                    <th style="background: #D1E7DD;width: 10px" class="table-th-width-5">Final</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><input disabled name="std_id" value="2191081008"></td>
                    <td><input disabled name="name" value="Md. Robiul Islam"></td>
                    <td><input disabled name="batch" value="47"></td>
                    <td><input type="number" name="attn"></td>
                    <td><input type="number" name="viva"></td>
                    <td><input type="number" name="quiz"></td>
                    <td><input type="number" name="assign"></td>
                    <td><input type="number" name="mid"></td>
                    <td><input type="number" name="final"></td>
                    <td>{{$data->attn+$data->viva+$data->quiz+$data->assign+$data->mid+$data->final}}</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            
        </table>
        <button style="margin-top: 10px" type="submit">Submit</button>
    </form>
    
</body>
</html>