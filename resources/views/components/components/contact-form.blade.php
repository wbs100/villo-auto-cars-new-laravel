<div {{ $attributes->merge(['class' => 'contact-form-box']) }}>
    <form id="{{ $id ?? 'contactform' }}" role="form" method="{{ $method ?? 'post' }}" action="{{ $action ?? '#' }}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Your Name*" name="name" required>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Your Email*" name="email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Phone Number*" name="phone" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea class="form-control" placeholder="Your Message*" rows="6" name="message" required></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn-submit">{{ $buttonText ?? 'SEND MESSAGE' }}</button>
            </div>
        </div>
    </form>
</div>
