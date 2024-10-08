@extends('auth.layouts.master')

@section('title', 'Купони')

@section('content')
    <div class="col-md-12">
        <h1>Купоны</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Код
                </th>
                <th>
                    Опис
                </th>
                <th>
                    Дія
                </th>
            </tr>
            @foreach($coupons as $coupon)
                <tr>
                    <td>{{ $coupon->id}}</td>
                    <td>{{ $coupon->code }}</td>
                    <td>{{ $coupon->description }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('coupons.destroy', $coupon) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('coupons.show', $coupon) }}">Відкрити</a>
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('coupons.edit', $coupon) }}">Редагувати</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Видалити"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $coupons->links() }}
        <a class="btn btn-success" type="button" href="{{ route('coupons.create') }}">Добавити купон</a>
    </div>
@endsection
