@php
$isAttrBag = isset($attributes) && ($attributes instanceof \Illuminate\View\ComponentAttributeBag);
$divClass = $class ?? ($isAttrBag ? $attributes->get('class') : 'opening-hours-box');
$extraAttrs = $isAttrBag ? $attributes->except('class') : '';
@endphp
<div class="{{ $divClass }}" {!! $extraAttrs !!}>
    <div class="tab-pane" id="tab3">

        <div class="opening-hours-widget">
            <ul>
                <li><strong>Sunday</strong> <span class="text-red">Closed</span>
                </li>
                <li><strong>Monday</strong> <span>9:00 AM to 9:00 PM</span></li>
                <li><strong>Tuesday</strong> <span>9:00 AM to 9:00 PM</span></li>
                <li><strong>Wednesday</strong> <span>9:00 AM to 9:00 PM</span></li>
                <li><strong>Thursday</strong> <span>9:00 AM to 9:00 PM</span></li>
                <li><strong>Friday</strong> <span>9:00 AM to 9:00 PM</span></li>
                <li><strong>Saturday</strong> <span>9:00 AM to 9:00 PM</span></li>
            </ul>
        </div>
    </div>
</div>
