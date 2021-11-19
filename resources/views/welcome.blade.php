<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>login</title>
</head>
<body>
     <div class="container">
         <h1>Add Students</h1>
            <form method="POST" action="/add-student">
                @csrf
                <div class="form-group">
                  <label>name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                    <label>address</label>
                    <input type="text" class="form-control" name="address">
                  </div><br/>

                  <select class="form-control"  name="course_id">
                    @foreach ($course as $data)
                    <option value="{{ $data->id }}">
                          {{ $data->name }}
                    </option>
                    @endforeach
                  </select><br/>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
     </div> <br/>
     <div class="container">
        <h1>Add Courses</h1>
           <form method="POST" action="/add-course">
               @csrf
               <div class="form-group">
                 <label>Course Name</label>
                 <input type="text" class="form-control" name="cname">
               </div>
               <div class="form-group">
                 <label><i class="fas fa-exclamation-triangle"></i>Date</label>
                 <input type="date" class="form-control" name="date">
               </div>
               <div class="form-group">
                <label>Time</label>
                <input type="Time" class="form-control" name="time">
              </div><br/>
               <button type="submit" class="btn btn-warning">Submit</button>
             </form><br/><br/>

             <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">student name</th>
                    <th scope="col">email</th>
                    <th scope="col">course</th>
                    <th scope="col">date</th>
                  </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($dataaa as $data)
                  <tr>
                    <th>{{ $data->student->id }}</th>
                    <td>{{ $data->student->name }}</td>
                    <td>{{ $data->student->email }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->date }}</td>
                  </tr>
                  @endforeach --}}
                </tbody>
              </table>
    </div>
</body>
</html>
