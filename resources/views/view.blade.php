@include('link.bootstrap')
@include('components.header')

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                View Details
            </div>
            <div class="card-body">
                <div class="d-flex row">
                    <div class="col-2">
                        <h4 class="me-2">Name:</h4>
                    </div>
                    <div class="col-10">
                        <h4>{{$userview->name}}</h4>
                    </div>
                </div>
                <div class="d-flex mt-3 row">
                    <div class="col-2">
                        <h4 class="me-2">Age:</h4>
                    </div>
                    <div class="col-10">
                        <h4>{{$userview->age}}</h4>
                    </div>
                </div>
                <div class="d-flex mt-3 row">
                    <div class="col-2">
                        <h4 class="me-2">Hobby:</h4>
                    </div>
                    <div class="col-10">
                        <h4>{{$userview->hobby}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="/" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
    <div class="col-3"></div>
</div>
