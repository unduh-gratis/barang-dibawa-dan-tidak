@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">{{ __('Required Product') }}</div>

                <div class="card-body">
                    <ol>
                        @forelse ($required_products as $required_product)
                        <li>{{ $required_product->product->nama_barang }}</li>
                        @empty
                        <li>Nothing</li>
                        @endforelse
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">{{ __('Yang Dibawa') }}</div>

                <div class="card-body">
                    <ol>
                        @forelse ($products as $product)
                            <li>{{ $product->nama_barang }}</li>
                        @empty

                        @endforelse
                    </ol>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('Yang Tak Dibawa') }}</div>

                <div class="card-body">
                    <ol>
                        @forelse ($absen as $required_product)
                        <li>{{ $required_product->product->nama_barang }}</li>
                        @empty
                        <li>Nothing</li>
                        @endforelse
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
