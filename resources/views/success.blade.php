@include('link.bootstrap')
@include('components.header')

<div class="text-center">
    <h1>Your data</h1>
</div>      


<a href="/" class="btn btn-primary">Back to home</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Hobby</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$userdata->name}}</td>
      <td>{{$userdata->age}}</td>
      <td>{{$userdata->hobby}}</td>
    </tr>
  </tbody>
</table>