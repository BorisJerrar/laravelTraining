@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row column">
        <div class="content">
            <div class="title m-b-md">
                Modify Your Product
            </div>
        </div>
        @foreach ($data as $data)
        <form action="{{url('updateProduct/'.$data->id)}}" method="GET" class="row column">
        <label for="name">Name</label>
        <input required name="name" type='text' id="name" value="{{$data->name}}" />
        <label for="info">Infomrations</label>
        <input required name="info" type='text' id="info" value="{{$data->info}}" />
        <label for="category">Category</label>
        <select required name="category" id="category">
            <option {{$data->category == "" ? "selected" : ""}} name="empty" value=''>--Please choose a category--</option>
            <option {{$data->category == "WearableComputer" ? "selected" : ''}} name="WearableComputer" name="WearableComputer" value="WearableComputer">Wearable Computer</option>
            <option {{$data->category == "MobilePhone" ? "selected" : ''}} name="MobilePhone" value="MobilePhone">Mobile Phone</option>
            <option {{$data->category == "Computer" ? "selected" : ''}} name="Computer" value="Computer">Computer</option>
            <option {{$data->category == "Tablet" ? "selected" : ''}} name="Tablet" value="Tablet">Tablet</option>
        </select>
        <label for="barecode">barcode</label>
        <input value="{{$data->barecode}}" required name="barecode" type='number' id="barecode" />
        <button class="btn bg-dark text-light">Modify</button>
    </form>
    @endforeach
    </div>

</div>
@endsection