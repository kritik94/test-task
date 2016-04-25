<a href="/balances/transfer">Transfer</a>
<hr>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Balance</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->balance }}</td>
        </tr>
    @endforeach
</table>