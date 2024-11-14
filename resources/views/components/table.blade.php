<table class="users-table">
    <thead>
        <tr>
            @foreach($users[0] as $col)
                <th>{{ $col }}:</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach(array_slice($users, 1) as $user)
            <tr>
                @foreach($user as $data)
                    <td>{{ $data }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
