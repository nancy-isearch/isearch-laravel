@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h3>
            Edit Section
        </h3>
        <form method="POST" action="{{ route('admin.sections.update', $section->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @foreach ($schema as $field)
                {!! \App\Helpers\DynamicFormRenderer::render($field, $section->content) !!}
            @endforeach

            <button class="btn btn-success">

                Save

            </button>

        </form>

    </div>
@endsection
