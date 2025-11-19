@php
	$isAttrBag = isset($attributes) && ($attributes instanceof \Illuminate\View\ComponentAttributeBag);
	$divClass = $class ?? ($isAttrBag ? $attributes->get('class') : 'opening-hours-box');
	$extraAttrs = $isAttrBag ? $attributes->except('class') : '';
@endphp
<div class="{{ $divClass }}" {!! $extraAttrs !!}>
	<h3 class="hours-title">{{ $title ?? 'OPENING HOURS' }}</h3>
	<div class="hours-divider"></div>
	<ul class="hours-list">
		@foreach($hours ?? [
			['day' => 'Sunday', 'time' => 'closed', 'closed' => true],
			['day' => 'Monday', 'time' => '9:00 AM to 9:00 PM'],
			['day' => 'Tuesday', 'time' => '9:00 AM to 9:00 PM'],
			['day' => 'Wednesday', 'time' => '9:00 AM to 9:00 PM'],
			['day' => 'Thursday', 'time' => '9:00 AM to 9:00 PM'],
			['day' => 'Friday', 'time' => '9:00 AM to 9:00 PM'],
			['day' => 'Saturday', 'time' => '9:00 AM to 9:00 PM']
		] as $hour)
			<li>
				<span class="day">{{ $hour['day'] }}</span>
				<span class="time {{ isset($hour['closed']) && $hour['closed'] ? 'closed' : '' }}">{{ $hour['time'] }}</span>
			</li>
		@endforeach
	</ul>
</div>
