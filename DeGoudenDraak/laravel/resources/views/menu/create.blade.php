@extends('website.layouts.website-layout')

@section('content')
    <div class="container mt-4">
        <form method="POST" action="{{ route('menu.store') }}" name="add-menuitem-form" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Naam</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prijs</label>
                <input type="number" class="form-control" name="price" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Omschrijving</label>
                <textarea class="form-control" name="description" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label for="menu-code" class="form-label">Menu code</label>
                <input type="number" class="form-control" name="menu-code" required>
            </div>

            <div class="mb-3">
                <label for="menu-code-addition" class="form-label">Menu code toevoeging</label>
                <input type="text" class="form-control" name="menu-code-addition" required>
            </div>

            <div class="mb-3">
                <label for="dishtype" class="form-label">Dish Type</label>
                <select class="form-control" name="dishtype" required>
                    @foreach ($dishtypes as $dishtype)
                        <option value="{{ $dishtype->id }}">
                            {{ $dishtype->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
