@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
    <h1>Katalog Produk</h1>
    <p>Harga dan stok toko</p>

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; text-align: left;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produk as $item)
                <tr>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['kategori'] }}</td>
                    <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td>
                        @if ($item['stok'] > 0)
                            <span style="color: green; font-weight: bold;">Tersedia ({{ $item['stok'] }})</span>
                        @else
                            <span style="color: red; font-weight: bold;">Habis</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center; padding: 20px;">Belum ada produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection