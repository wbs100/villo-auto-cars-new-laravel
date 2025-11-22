<!-- Vehicle Import Inquiry Form -->
@if(session('success'))
<div class="alert alert-success" style="position: fixed; top: 20px; right: 20px; z-index: 9999; background-color: green; color: white; padding: 10px; border-radius: 5px;">
    {{ session('success') }}
</div>
@endif
<section class="section_default section_mod-e section-bg-2 wow bounceInLeft" style="padding-top: 30px; padding-bottom: 30px;" data-wow-duration="2s">
    <div class="container">
        <div class="row"><div class="col-xs-12"><h2 class="ui-title-block">Import Your Dream Vehicle</h2><div class="ui-subtitle-block_mod-b">Let us help you import the perfect vehicle tailored to your needs</div></div></div>
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-8 col-md-offset-2">
                <div class="import-inquiry-form">
                    <form id="vehicleImportForm" class="vehicle-import-form" action="{{ route('import.inquiry') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Full Name *</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Phone Number *</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="Enter your phone number" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Preferred Brand *</label>
                                    <select name="brand" class="form-control" required>
                                        <option value="">--Select Brand--</option>
                                        @foreach($makes as $make)
                                            <option value="{{ $make['name'] }}">{{ $make['name'] }}</option>
                                        @endforeach
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Model</label>
                                    <select name="model" class="form-control" required>
                                        <option value="">--Select Model--</option>
                                        @foreach($models as $model)
                                            <option value="{{ $model['name'] }}">{{ $model['name'] }}</option>
                                        @endforeach
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Preferred Year</label>
                                    <select name="year" class="form-control">
                                        <option value="">--Select Year--</option>
                                        @foreach($years as $year)
                                            <option value="{{ $year['name'] }}">{{ $year['name'] }}</option>
                                        @endforeach
                                        <option value="Older">Older than Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Color</label>
                                    <select name="color" class="form-control">
                                        <option value="">--Select Color--</option>
                                        @foreach($colors as $color)
                                            <option value="{{ $color['name'] }}">{{ $color['name'] }}</option>
                                        @endforeach
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Condition *</label>
                                    <select name="condition" class="form-control" required>
                                        <option value="">--Select Condition--</option>
                                        @foreach($conditions as $condition)
                                            <option value="{{ $condition['name'] }}">{{ $condition['name'] }}</option>
                                        @endforeach
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Additional Requirements</label>
                                    <textarea name="message" class="form-control" rows="4" placeholder="Please describe any specific requirements, budget range, or additional details..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn-import-submit"><i class="fa fa-paper-plane"></i> Submit Import Inquiry</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@if(session('success'))
<script>
setTimeout(function() {
    var alert = document.querySelector('.alert-success');
    if (alert) {
        alert.style.display = 'none';
    }
}, 5000); // Hide after 5 seconds
</script>
@endif
