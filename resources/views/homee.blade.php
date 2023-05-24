<html>
<head>

</head>

<body>
<h1>welcome ,{{$name?? "guest"}}</h1>

{!!$demo!!}

<!--
@if($name ==""){
{{"NAME HERE ="}}{{$name}}
{{"empty"}}
}
@elseif($name =='adnan'){
    {{"name is coorect"}}
}
@else{
    {{"name is incoorect"}}
}
@endif

@unless($name =="umair"){
    {{"name is not umair"}}
}
@endunless -->

<!-- @isset($name){
    {{"isset workng"}}
}
@endisset

@for( $i=1;$i<10;$i++)
    <h2>
        {{$i}}
    </h2>

@endfor -->

<!-- @php
$i=5;
@endphp
@while($i<10)
{{$i}}
@php
$i++;
@endphp

@endwhile -->

<!-- @php
$country=["pakistan","india","japan","america"]
@endphp
<select>

    @foreach($country as $key => $country)

    <option value="{{$key}}"> {{$country}}</option>

    @endforeach
</select> -->

<!-- @for($i=0;$i<10;$i++)
@if($i==5)
@break
@endif
{{$i}}
@endfor -->
</body>
</html>
