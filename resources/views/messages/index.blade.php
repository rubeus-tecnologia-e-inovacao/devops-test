<h1>Messages</h1>
<hr>
    <a href="{{ route('message.create') }}">Nova Mensagem</a>
<hr>
<table>
    <thead>
        <tr>
            <th>Subject</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
            <tr>
                <td>{{ $message->subject }}</td>
                <td>{{ $message->message }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

