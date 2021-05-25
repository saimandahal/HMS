@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@extends('layout.main2')
@section('content2')


                            <hr>
                            <button class="btn btn-success" style="margin-left:300px">Print this slip</button>


@endsection