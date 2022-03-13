<div class="d-flex justify-content-between py-4">
    <h4 class="m-0">{{ $product->name }}</h4>
    <div class="ms-auto me-3 d-flex justify-content-center">
        <a href="javascript:void(0);" class="p-1 btn btn-link btn-sm product-edit" data-id="{{ $product->id }}">
            <i class="fas fa-edit"></i>
        </a>
        <form method="POST" action="{{ route('products.destroy', $product) }}" id="destroy-{{ $product->id }}">
            @csrf
            @method ("DELETE")
            <button type="submit" class="p-1 btn btn-link btn-sm delete-product" data-destroy="destroy-{{ $product->id }}">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>
    </div>
    <button type="button" class="mt-1 btn-close btn-close-white"></button>
</div>
<div class="row pb-5">
    <div class="col-4">
        <div class="row ms-1 mb-1">Артикул</div>
        <div class="row ms-1 mb-1">Название</div>
        <div class="row ms-1 mb-1">Статус</div>
        <div class="row ms-1 mb-1">Атрибуты</div>
    </div>
    <div class="col-8">
        <div class="row mb-1">{{ $product->name }}</div>
        <div class="row mb-1">{{ $product->article }}</div>
        <div class="row mb-1">{{ $product->status }}</div>
        <div class="row mb-1">
            @foreach ($product->data as $datum)
                <p class="m-0 p-0">{{ "{$datum['key']}: {$datum['value']}" }}</p>
            @endforeach
        </div>
    </div>
</div>
