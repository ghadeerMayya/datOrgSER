@extends('layouts.app')

@section('content')

    <!DOCTYPE html>
<html>
<head>
    <title>
        view penifits
    </title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View penifits') }}</div>
                <div class="card-body">
                    <table>
                    @foreach ($penifit as $mypenifit)


                        <tr>
                            <td>
                                name: {{$mypenifit->name}}
                            </td>
                            <td>
                                age: {{$mypenifit->age}}
                            </td>
                            <td>
                                edit
                            </td>
                            <td>
                                <form action="deletePenifit" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{ $mypenifit->id}}" "/>
                                    <input type="submit" value="delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection




