@props(['to'=> "#", 'active'=> false])
<li class="nav-link"><a class="{{ $active ? 'active' : '' }}" href="{{ $to }}" role="link">{{ $slot }}</a></li>
