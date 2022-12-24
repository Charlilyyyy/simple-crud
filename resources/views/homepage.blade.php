@include('link.bootstrap')
@include('components.header')


<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('userdata.store')}}">
            @csrf
            
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Please insert your details</h1>
                </div>
                <div class="card-body">
                    <div class="d-flex row">
                        <div class="col-2">
                            <h4 class="me-2">Name:</h4>
                        </div>
                        <div class="col-10">
                            <input id="name" name="name" type="text" placeholder="Please enter name"/>
                        </div>
                    </div>
                    <div class="d-flex mt-3 row">
                        <div class="col-2">
                            <h4 class="me-2">Age:</h4>
                        </div>
                        <div class="col-10">
                            <input id="age" name="age" type="text" placeholder="Please enter age"/>
                        </div>
                    </div>
                    <div class="d-flex mt-3 row">
                        <div class="col-2">
                            <h4 class="me-2">Hobby:</h4>
                        </div>
                        <div class="col-10">
                            <input id="hobby" name="hobby" type="text" placeholder="Please enter hobby "/>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-3"></div>
</div>

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        
<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Hobby</th>
        <th class="text-center" scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($alluser as $user)
    <tbody>
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->hobby}}</td>
        <td class="text-center"><button class="btn btn-warning me-2">View</button><button class="btn btn-success me-2">Edit</button><button class="btn btn-danger">Delete</button></td>

      </tr>
    </tbody>
    @endforeach
  </table>
    </div>
    <div class="col-3"></div>
</div>


   

