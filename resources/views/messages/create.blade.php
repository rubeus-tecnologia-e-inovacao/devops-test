<form action="{{ route('message.store') }}" method='POST'>

    @csrf

    <div>
        <label for="subject">Subject</label>
        <div>
            <input type="text" id="subject" name="subject" value="">
        </div>
    </div>

    <div>
        <label for="message">Message</label>
        <div>
            <textarea id="message" name="message"></textarea>
        </div>
    </div>

    <div>
        <input type="submit" value='Salvar'>
    </div>

</form>
