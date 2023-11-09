<h1>Dúvida {{ $support->id}}</h1>

<form action="{{ route('supports.store')}}">
    @csrf()
    <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ $support->body}}</textarea>
    <button type="submit">Enviar</button>
</form>