@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>
        add penifit
    </title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add penifits') }}</div>
                <div class="card-body">

                    <form action="addPenifits" method="post">
                        {{csrf_field()}}
                        penifit name:<input type="text" class="form-control @error('email') is-invalid @enderror"  name="penifitName" placeholder="Enter name"/>
                        <br>
                        penifit age:<input type="number" class="form-control @error('email') is-invalid @enderror" name="penifitAge" placeholder="Enter age"/>
                        <br>
                        <input type="submit" class="btn btn-primary" value="add penifit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>
@endsection
