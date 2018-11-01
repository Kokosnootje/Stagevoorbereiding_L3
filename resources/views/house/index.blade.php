@foreach($houses as $house)
    <div id="{{$house->id}}">
        {{$house->name}}
    </div>
@endforeach