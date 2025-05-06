@extends('layouts.app')

@section('content')
    <h2>Data Pengelolaan</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['kategori'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
