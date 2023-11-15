<h1>Nova Dúvida</h1>

<x-alert/>

<form action="{{ route('supports.store')}}">
    @include('admin.supports.partials.form')
</form>