@props(['users'])
<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->


@unless (count($users) < 0)
<table class="table">

    <tr>
        <th>id</th>
        <th>name</th>
        <th>lastname</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td> {{ $user['id'] }}</td>
            <td> {{ $user['name'] }}</td>
            <td> {{ $user['lastname'] }}</td>
        </tr>
    @endforeach

</table>
@else
<h1>pas de cours</h1>
@endunless
</div>