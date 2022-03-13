@section('footer')
<footer class="py-3 bg-light">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Все права защищены &copy; {{ env('APP_NAME') }} {{ now()->year }}</div>
            {{-- <div>
                <a href="#">Политика конфиденциальности</a>
                &middot;
                <a href="#">Условия и положения</a>
            </div> --}}
        </div>
    </div>
</footer>
@endsection
