@php
    $isAttrBag = isset($attributes) && ($attributes instanceof \Illuminate\View\ComponentAttributeBag);
    $divClass = $class ?? ($isAttrBag ? $attributes->get('class') : 'service-form-box');
    $extraAttrs = $isAttrBag ? $attributes->except('class') : '';
@endphp
<div class="{{ $divClass }}" {!! $extraAttrs !!}>
    <form method="{{ $method ?? 'post' }}" action="{{ $action ?? '#' }}">
        @csrf
        <div class="row">
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" placeholder="Name*" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="col-md-4 mb-3">
                <input type="email" class="form-control" placeholder="Email*" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="col-md-4 mb-3">
                <input type="tel" class="form-control" placeholder="Phone*" name="phone" value="{{ old('phone') }}" required>
            </div>
        </div>
        <div class="mb-3">
            <textarea class="form-control" rows="5" placeholder="Comment*" name="message" required>{{ old('message') }}</textarea>
        </div>
        <button type="submit" class="btn btn-submit">{{ $buttonText ?? 'Send Your Message' }}</button>
    </form>
</div>
