{{-- to do comments in blade it's better to do it like this way to make it confidential --}}
<x-master title="page dacueil">

<x-alert type='success'>
    <strong>salam</strong>
</x-alert>
<x-alert type='warning'>
    <strong>warning</strong>
</x-alert>
<x-tablecomponent :users="$users" />

</x-master>
{{-- if the variable exist at the memory the code inside isset will be executed --}}
{{-- @isset($age)
        yees
    @endisset --}}
{{-- if the variable is empty at the memory the code inside isset will be executed --}}
{{-- @empty($name)
        yees
    @endempty --}}


{{-- @switch($color)
        @case('red')
            rouge
        @break

        @case('blue')
            bleu
        @break

        @default
            <h1>no color</h1>
    @endswitch --}}

{{-- @php     
        $n3 = $n1 + $n2;
    @endphp
    <h1>{{ $n3 }}</h1> --}}
