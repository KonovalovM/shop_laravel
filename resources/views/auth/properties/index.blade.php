@extends('auth.layouts.master')

@section('title', 'Властивість')

@section('content')
    <div class="col-md-12">
        <h1>Властивість</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Назва
                </th>
                <th>
                    Действия
                </th>
            </tr>
            @foreach($properties as $property)
                <tr>
                    <td>{{ $property->id }}</td>
                    <td>{{ $property->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('properties.destroy', $property) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('properties.show', $property) }}">Відкрити</a>
                                <a class="btn btn-warning" type="button" href="{{ route('properties.edit', $property) }}">Редагувати</a>
                                <a class="btn btn-primary" type="button" href="{{ route('property-options.index', $property) }}">Властивість</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Видалити"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $properties->links() }}
        <a class="btn btn-success" type="button"
           href="{{ route('properties.create') }}">Добавити властивість</a>
    </div>
@endsection
