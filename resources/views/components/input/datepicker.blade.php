<div class="form-group">
    {{ isset($label) ? $label : null }}
    <input {{ $attributes->merge(['class' => 'form-control']) }}>
</div>

@push('css')
<link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
@endpush

@push('js')
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
@endpush
