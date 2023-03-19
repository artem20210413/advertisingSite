@extends('layouts.layouts')

@section('title')
    list-tags
@endsection


@section('body')

    <a class="m-3 btn btn-primary" href="/admin/create-post">Create new post</a>

    @if(isset($successMessage))
        <div class="alert alert-success">
            <ul>
                <li>{{$successMessage}}</li>
            </ul>
        </div>
    @endif

    @error('name')
    <div class="alert alert-danger mt-3">
        <ul>
            <li>{{$message}}</li>
        </ul>
    </div>
    @enderror


    <table class="table table table-hover">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
        </tr>
        </thead>

        <tbody style="cursor: pointer;">
        @foreach($posts as $el)
            <a href="">
                <tr>
                    <form action="" method="POST">

                        <th scope="row">{{$el->id}}</th>
                        <td>{{$el->title}}</td>
                        <td>{{$el->description}}</td>
                    </form>
                </tr>
            </a>

        @endforeach
        </tbody>
    </table>
@endsection
