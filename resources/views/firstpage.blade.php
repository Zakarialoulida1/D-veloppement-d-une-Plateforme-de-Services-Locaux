<h1>{{$head}}</h1>
{{-- @php
$test=1;
@endphp
{{$test}} --}}
@unless(count($list)==0)
    
{{-- @endunless
@if(count($list)==0)
<h1>no users</h1>
@endif --}}

@foreach ($list as $person)

<h1><a href="/description/{{$person['id']}}">{{$person['name']}}</a></h1>
<p>{{$person['description']}} </p>
@endforeach
@else
<h1>no users</h1>
@endunless