@extends('website.layouts.website-layout')
@section('content')
    <div class="container">
        <h2>Edit Menu Item</h2>

        <form action="{{ route('menu.update', $menuItem->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $menuItem->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $menuItem->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $menuItem->price }}" required>
            </div>
            <div class="form-group">
                <label for="menu-code">Menu Code:</label>
                <input type="text" class="form-control" id="menu-code" name="menu-code" value="{{ $menuItem->menu_code }}" required>
            </div>
            <div class="form-group">
                <label for="menu-code-addition">Menu Code Addition:</label>
                <input type="text" class="form-control" id="menu-code-addition" name="menu-code-addition" value="{{ $menuItem->menu_code_addition }}" required>
            </div>
            <div class="form-group">
                <label for="dishtype">Dish Type:</label>
                <select class="form-control" id="dishtype" name="dishtype" required>
                    @foreach($dishtypes as $dishtype)
                        <option value="{{ $dishtype->id }}" {{ $dishtype->id == $menuItem->dish_type ? 'selected' : '' }}>{{ $dishtype->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Menu Item</button>
        </form>
    </div>
@endsection
