<div {{ $attributes->merge(['class' => 'contact-form-box quick-contact']) }}>
    <form id="{{ $id ?? 'quickcontactform' }}" method="{{ $method ?? 'post' }}" action="{{ $action ?? '#' }}">
        @csrf
        <input type="text" class="form-control" placeholder="Name*" name="name" required>
        <input type="text" class="form-control" placeholder="Phone*" name="phone" required>
        <textarea class="form-control" placeholder="Message*" rows="4" name="message" required></textarea>
        <button type="submit" class="btn-submit" style="width: 100%;">{{ $buttonText ?? 'QUICK INQUIRY' }}</button>
    </form>
</div>
