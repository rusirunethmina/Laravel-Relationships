<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <h1>hasOne relationship</h1>
      <table class="table">
          <thead>
              <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>email</th>
                  <th>country</th>
              </tr>
          </thead>
          <tbody>
              {{-- @foreach ($data as $item)
              <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->address->country }}</td>
              </tr>
              @endforeach --}}
          </tbody>
      </table>

       <h1>belonsTo relationship</h1>
      <table class="table">
          <thead>
              <tr>
                  <th>id</th>
                  <th>country</th>
                  <th>name</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($address as $item)
              <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->country }}</td>
                  <td>{{ $item->user->name }}</td>
              </tr>
              @endforeach
          </tbody>
      </table>
</body>
</html>
