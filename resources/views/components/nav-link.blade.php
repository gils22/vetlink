@props(['active' => false])
<a {{ $attributes }}class="{{ $active ? 'block py-2 px-3 md:p-0 text-primary font-semibold' : 'hover:text-white' }} text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
