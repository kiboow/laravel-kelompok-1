@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Daftar Varian Rasa Pisjay</h2>
        <p class="text-muted">Nikmati sensasi kelezatan pisang goreng dalam berbagai rasa!</p>
    </div>

    <div class="row g-4">
        @php
        $menus = [
            ['nama' => 'Pisjay Cokelat Lumer', 'harga' => 15000, 'tag' => 'Best Seller'],
            ['nama' => 'Pisjay Keju Meleleh', 'harga' => 17000, 'tag' => 'New!'],
            ['nama' => 'Pisjay Matcha Green Tea', 'harga' => 16000, 'tag' => ''],
            ['nama' => 'Pisjay Caramel Peanut', 'harga' => 16500, 'tag' => ''],
            ['nama' => 'Pisjay Red Velvet', 'harga' => 17500, 'tag' => ''],
            ['nama' => 'Pisjay Taro Cream', 'harga' => 16000, 'tag' => ''],
            ['nama' => 'Pisjay Coffee Mocha', 'harga' => 16000, 'tag' => ''],
            ['nama' => 'Pisjay Durian Special', 'harga' => 20000, 'tag' => ''],
            ['nama' => 'Pisjay Classic Plain', 'harga' => 12000, 'tag' => '']
        ];
        @endphp

        @foreach($menus as $menu)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 p-3" style="border-radius: 15px;">
                <div class="card-body">
                    @if($menu['tag'])
                        <span class="badge bg-warning text-dark mb-2">{{ $menu['tag'] }}</span>
                    @endif
                    <h5 class="fw-bold">{{ $menu['nama'] }}</h5>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <span class="text-success fw-bold">Rp {{ number_format($menu['harga'], 0, ',', '.') }}</span>
                        <a href="#" class="btn btn-sm btn-success">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection