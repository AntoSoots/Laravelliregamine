@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header"><h1>Kasutajad </h1></div>

                <search-component></search-component>
            <hr>
        <div class="container">
            <table id="myTable" class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>Ettevõte</th>
                        <th>Ettevõtte nimi</th>
                        <th>Ettevõtte registrikood</th>
                        <th>Nimi</th>
                        <th>Vanus</th>
                        <th>E-mail</th>
                        <th>Muuda</th>
                    </tr>
                </thead>
                <tbody>

                @if(count ($users) > 0)
                    @foreach ($users as $user)
                        <tr>
                            <td>@if($user->company > 0) Jah @else Ei @endif</td>
                            <td>{{ $user->companyName }}</td>
                            <td>{{ $user->companyCode }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href = 'edit/{{ $user->id }}'>Muuda</a></td>
                        </tr>
                    @endforeach
                @else <tr>
                    <td colspan="7">Tabeli sisu puudub!!!</td>
                </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="container">
            {{ $users->links() }}
        </div>
    </div>


@endsection
