@extends('layouts.app')
@extends('layouts.topbar')
@extends('layouts.sidebar')
@extends('layouts.footer')

@section('content')
<div class="row">
    <div class="col-6">
        <div class="table-responsive">
            <table class="table table-sm align-middle col-6 table-hover" id="products" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>АРТИКУЛ</th>
                        <th>НАЗВАНИЕ</th>
                        <th>СТАТУС</th>
                        <th>АТРИБУТЫ</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr id="product_{{ $product->id }}" class="bg-white text-dark">
                        <td>{{ $product->article }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->status }}</td>
                        <td class="word-break">@foreach($product->data as $datum) {!! "<pre>{$datum['key']}: {$datum['value']}</pre>" !!} @endforeach</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-6">
        <div class="d-flex justify-content-end">
            <a id="products_create_button" href="javascript:void(0);" class="btn btn-primary ms-auto mt-4">Добавить</a>
        </div>
        @include('products.create')
        <div id="products_show_div" class="d-none row gap-3 needs-validation sb-sidenav-dark text-white">
        </div>
        <div id="products_edit_div"></div>
    </div>
</div>
@endsection
