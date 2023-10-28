<h1>Student Details </h1>

@foreach ($data as $id => $student )
<h4>Name : {{$student->name }}</h4>
<h4>Email : {{$student->email }}</h4>
<h4>Age : {{$student->age }}</h4>
<h4>City : {{$student->city }}</h4>

@endforeach