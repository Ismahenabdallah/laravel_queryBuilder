
@extends("layouts.nav")
@section('content')
<form action="{{ route('routequerybuilder.update' , ['routequerybuilder' => $e->id]) }}" method="POST">

    @csrf
    @method("put")
    <h1> Edit  QueryBuilder</h1>
    <input type="text" name="title" value="{{ $e->title }}" placeholder="Enter title"/>
    @error('title')
            {{-- <p style="color: red">name must be required</p> --}}
            <p style="color: red">{{ $message }}</p>

            @enderror
    <br/>
    <br/>
    <input type="text" value="{{ $e->body }}" name="body" placeholder="Enter body"/>
    @error('body')
    {{-- <p style="color: red">name must be required</p> --}}
    <p style="color: red">{{ $message }}</p>

    @enderror
    <br/>
    <br/>
    <button type="submit">edit</button>
</form>
@endsection

