<li class="{{ !empty($active) && $active ? 'active' : '' }}">
    <a href="#" data-filter="{{ $filter ?? 'all' }}">{{ $label ?? strtoupper($filter ?? 'all') }}</a>
</li>
