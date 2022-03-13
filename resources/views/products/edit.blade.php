<form id="products_edit_form" action="{{ route('products.update', $product->id) }}" method="post" class="row gap-3 needs-validation sb-sidenav-dark text-white" novalidate>
    @csrf
    @method('PATCH')
    <div class="d-flex justify-content-between py-4">
        <h4 class="m-0">Изменить продукт</h4>
        <button id="product_create_form_close" type="button" class="btn-close btn-close-white" aria-label="Close"></button>
    </div>
    <div class="col-9">
        <label for="article" class="form-label">Артикул</label>
        <input type="text" name="article" id="article" class="form-control form-control-sm @error('article') is-invalid @enderror" value="{{ old('article') ? old('article') : $product->article }}">
        @error('article')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-9">
        <label for="name" class="form-label">Название</label>
        <input type="text" name="name" id="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name') ? old('name') : $product->name }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-9">
        <label for="status" class="form-label">Статус</label>
        <select name="status" id="status" class="form-select form-select-sm @error('status') is-invalid @enderror">
            <option value="available" @if(old('status') === 'available' || $product->status === 'available')selected @endif>Доступен</option>
            <option value="unavailable" @if(old('status') === 'unavailable' || $product->status === 'available')selected @endif>Не доступен</option>
        </select>
        @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-9 attribute-row">
        <h5>Атрибуты</h5>
        <a id="add_attribute" href="javascript:void(0);" class="text-decoration-underline-dotted-sm">+ Добавить атрибут</a>
    </div>
    @foreach($product->data as $attribute)
        <div class="col-9 parent-attribute-row">
            <div class="row">
                <div class="col-5">
                    <label for="key_{{ $loop->index }}" class="form-label">Название</label>
                    <input type="text" name="data[{{ $loop->index }}][key]" id="key_{{ $loop->index }}" class="form-control form-control-sm" value="{{ $attribute['key'] }}">
                </div>
                <div class="col-5">
                    <label for="value_{{ $loop->index }}" class="form-label">Значение</label>
                    <input type="text" name="data[{{ $loop->index }}][value]" id="value_{{ $loop->index }}" class="form-control form-control-sm" value="{{ $attribute['value'] }}">
                </div>
                <div class="col d-flex align-items-end mb-2">
                    <a href="javascript:void(0);" class="delete-attribute"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>
    @endforeach
    <div class="col-4 mb-5">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>
