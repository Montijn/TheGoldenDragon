@extends('website.layouts.website-layout')

@section('content')

    <form method="POST" action="{{ route('menuoverview.store') }}" name="add-menuitem-form"
          enctype="multipart/form-data">
        @csrf
        <div >
            <p>Naam</p>
            <input type='text' name='name'>

            <p>Prijs</p>
            <input type='number'  name='price'>

            <p>Omschrijving</p>
            <textarea  type='text' name='description' rows="5"></textarea>

            <p>Menu code</p>
            <input type='number' name='menu-code'>

            <p>Menu code toevoeging</p>
            <input type='text'  name='menu-code-addition'>
            <br>

            <select class="form-control" name="dishtype">
                @foreach ($dishtypes as $dishtype)
                    <option value="{{ $dishtype->id}}" >
                        {{ $dishtype->name }}
                    </option>
                @endforeach
            </select>
            <input type='submit' value='Opslaan'>
        </div>
    </form>
@endsection
