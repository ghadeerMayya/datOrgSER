@extends('layouts.app')

@section('content')

    <div class="container theme-showcase">
        <h1>Calendar</h1>
        <div id="holder" class="row" ></div>
    </div>


    <div class="container">
        <hr>
        <p>Resources</p>
        <ul>
            <li><a href="https://github.com/twbs/bootstrap">Bootstrap</a></li>
            <li><a href="https://bootstrap-calendar.azurewebsites.net/index-bs3.html">another calendar</a></li>
            <li><a href="http://www.bootply.com/rzNQTlDlFX">another calendar</a></li>
            <li><a href="http://slipsum.com">lipsum generator</a></li>
        </ul>
    </div>
    <div class="container">
        <hr>
        <p>Notes</p>
        <ul>
            <li>clicking on year to open and let you jump around 5ish years, don't care for current ui...</li>
            <li>work needed on day mode (buggy, unfinished)</li>
            <li>options missing still for classes</li>
            <li>not sure about popover contents</li>
            <li>? use of success state color and info state color ?</li>
            <li><a href="http://www.reddit.com/r/css/comments/2gvw4n/i_refactored_my_less_to_follow_fats_guidelines/">can do better with css rules</a></li>
        </ul>
    </div>

    <div class="modal" id="loading" >
        <p><img src="{{url('/images/loading.gif')}}" alt="Image"/> Please Wait</p>
    </div>

@endsection

@section('scripts')



    <script>



    </script>

@endsection
