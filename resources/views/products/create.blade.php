<form id="products_create_form" action="{{ route('products.store') }}" method="POST" class="d-none row gap-3 needs-validation sb-sidenav-dark text-white" novalidate>
    @csrf
    <div class="d-flex justify-content-between py-4">
        <h4 class="m-0">Добавить продукт</h4>
        <button id="product_create_form_close" type="button" class="btn-close btn-close-white" aria-label="Close"></button>
    </div>
    <div class="col-9">
        <label for="article" class="form-label">Артикул</label>
        <input type="text" name="article" id="article" class="form-control form-control-sm " value="{{ old('article') }}">
    </div>
    <div class="col-9">
        <label for="name" class="form-label">Название</label>
        <input type="text" name="name" id="name" class="form-control form-control-sm " value="{{ old('name') }}">
    </div>
    <div class="col-9">
        <label for="status" class="form-label">Статус</label>
        <select name="status" id="status" class="form-select form-select-sm ">
            <option value="available" @if(old('status') === 'available')selected @endif>Доступен</option>
            <option value="unavailable" @if(old('status') === 'unavailable')selected @endif>Не доступен</option>
        </select>
    </div>
    <div class="col-9 attribute-row">
        <h5>Атрибуты</h5>
        <a href="javascript:void(0);" class="text-decoration-underline-dotted-sm add-attribute">+ Добавить атрибут</a>
    </div>
    <div class="col-4 mb-5">
        <button type="submit" class="btn btn-primary">Добавить</button>
    </div>
</form>
