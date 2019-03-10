@extends('default.layouts.layout')

@section('content')
<div class="col-md-12">
<div class="class">
    <h2>{{ $title_head }}</h2>
</div>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid doloremque ducimus, ea fugit laboriosam laudantium natus nisi obcaecati omnis quidem ratione repellendus sequi sint voluptatum! Dicta neque non quae!
</p>

    {{dump(Session::all())}}

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form method="post" action="{{ route('contact') }}" >
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Jack">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="site">Site</label>
        <input type="text" class="form-control" id="site" name="site" value="{{ old('site') }}" placeholder="Site">
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea class="form-control" name="text" id="text">{{ old('text') }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
@endsection