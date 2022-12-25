@include('link.bootstrap')
@include('components.header')

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <form name="edit-form" id="edit-form" method="post" action="{{url('update/'.$useredit->id)}}">
            @csrf
            @method('PUT')

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
                <a href="/" class="btn btn-warning mt-3 border-0">Back to Home</a>
            @endif
            <div class="card">
                <div class="card-header">
                    Edit Details
                </div>
                <div class="card-body">
                    <div class="d-flex row">
                        <div class="col-2">
                            <h4 class="me-2">Name:</h4>
                        </div>
                        <div class="col-10">
                            <input id="name" name="name" type="text" value="{{$useredit->name}}"/>
                        </div>
                    </div>
                    <div class="d-flex mt-3 row">
                        <div class="col-2">
                            <h4 class="me-2">Age:</h4>
                        </div>
                        <div class="col-10">
                            <input id="age" name="age" type="text" value="{{$useredit->age}}"/>
                        </div>
                    </div>
                    <div class="d-flex mt-3 row">
                        <div class="col-2">
                            <h4 class="me-2">Hobby:</h4>
                        </div>
                        <div class="col-10">
                            <input id="hobby" name="hobby" type="text" value="{{$useredit->hobby}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit edit</button>
        </form>
    </div>
    <div class="col-3"></div>
</div>