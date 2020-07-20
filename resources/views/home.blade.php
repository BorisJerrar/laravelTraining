@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row column">
        <div class="content">
            <div class="title m-b-md">
                Add New Products
            </div>
        </div>
        <form action="{{url('sendingProduct')}}" method="POST" class="row column">
                <label for="name">Name</label>
                <input required name="name" type='text' id="name" placeholder="Iphone XI Pro" />
                <label for="info">Infomrations</label>
                <input required name="info" type='text' id="info" placeholder="Midnight Green" />
                <label for="category">Category</label>
                <select required name="category" id="category">
                    <option value="">--Please choose a category--</option>
                    <option value="WearableComputer">Wearable Computer</option>
                    <option value="MobilePhone">Mobile Phone</option>
                    <option value="Computer">Computer</option>
                    <option value="Tablet">Tablet</option>
                </select>
                <label for="barecode">barcode</label>
                <input required name="barecode" type='number' id="barecode" placeholder="010067281929367" />
                <button class="btn bg-dark text-light">Add</button>
        
        </form>
    </div>

</div>
@endsection