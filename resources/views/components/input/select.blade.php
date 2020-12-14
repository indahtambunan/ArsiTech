<div wire:ignore class="form-group">
    <x-input.label for="{{$label}}">{{ucfirst($label)}}</x-input.label>
    <select {{ $attributes->merge(['class' => 'form-control', 'data-placeholder' => 'Pilih Data']) }}>
        <option></option>
        {{$opt}}
    </select>
    @error(strtolower(substr($label, 0, strrpos($label, ' ') ? strrpos($label, ' ') : strlen($label))))
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
