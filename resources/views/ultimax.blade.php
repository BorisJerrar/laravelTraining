@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="content">
            <div class="title m-b-md">
                Products
            </div>
        </div>
    </div>
    <form action="{{url('productsByCategories')}}" method="GET">
        <label for="category">Category</label>
        <select name="category" id="category">
            <option value="">--Please choose a category--</option>
            <option value="WearableComputer">Wearable Computer</option>
            <option value="MobilePhone">Mobile Phone</option>
            <option value="Computer">Computer</option>
            <option value="Tablet">Tablet</option>
        </select>
        <button class="btn btn-sm bg-dark text-light">Go</button>
    </form>
    <table class="table table-striped text-center">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Informations</th>
                <th>Category</th>
                <th>Barecode</th>
                <th>Remove From the list</th>
                <th>Modify</th>
            </tr>
        </thead>
        @foreach($data as $item)
        <tr>
            <td>{{$item -> name}}</td>
            <td>{{$item -> info}}</td>
            <td>{{$item -> category}}</td>
            <td>{{$item -> barecode}}</td>
            <td><a href='deleteUnique/{{ $item->id }}' class="text-danger">X</a></td>
            <td><a href='redirectmodify/{{ $item->id }}' class="text-danger">✏️</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection