@foreach($houses as $house)
    <div id="div{{$house->id}}">
        {{$house->name}}
        <br />
        @if(!empty($house->current_points()->score))
            {{$house->current_points()->score}}
            @else
            0
        @endif
        <br />
        <img src="{{asset('photo/logo'.$house->id.'.png')}}" id="img{{$house->id}}">
    </div>
@endforeach
