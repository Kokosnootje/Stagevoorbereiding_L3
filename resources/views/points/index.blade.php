@extends('layouts.app')

@section('content')
    <div id="score">
    </div>
    <script type="application/javascript" src="{{asset('js/getScore.js')}}"></script>
    <script type="application/javascript">
        $(function() {
            getScore();
        })
    </script>
@endsection
