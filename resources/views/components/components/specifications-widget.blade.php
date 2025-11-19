@props(['specs' => []])

<section class="widget">
    <h3 class="widget-title">Specifications</h3>
    <div class="decor-1"></div>
    <div class="widget-content">
        <dl class="list-descriptions list-unstyled">
            @if(!empty($specs))
                @foreach($specs as $dt => $dd)
                    <dt>{{ $dt }}:</dt>
                    <dd>{!! $dd !!}</dd>
                @endforeach
            @else
                <dt>Make / model:</dt>
                <dd>Chevrolet Impala</dd>
                <dt>Make year:</dt>
                <dd>January 2016</dd>
                <dt>vehicle type:</dt>
                <dd>Front-engine, front-wheel-drive, 5-passenger, 4-door sedan</dd>
                <dt>ENGINE TYPE:</dt>
                <dd>DOHC 16-valve inline-4, aluminum block and head, direct fuel injection</dd>
                <dt>DIMENSIONS:</dt>
                <dd>
                    Wheelbase: 111.7 in<br />
                    Length: 201.3 in<br />
                    Width: 73.0 in Height: 58.9 in<br />
                    Curb weight: 3700 lb
                </dd>
                <dt>TRANSMISSION:</dt>
                <dd>6-speed automatic with manual shifting mode</dd>
                <dt>fuel economy:</dt>
                <dd>EPA city/highway: 21/31 mpg</dd>
                <dt>Passenger Capacity:</dt>
                <dd>5 Seats</dd>
            @endif
        </dl>
    </div>
</section>
