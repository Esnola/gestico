@props(['type'])

@if ($type === 'phone')
  <svg {{ $attributes->merge(['class' => 'size-4 shrink-0']) }} data-contact-icon="phone"
       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" aria-hidden="true">
    <path d="M6.6 3.8 8.9 3a1.8 1.8 0 0 1 2.2 1l1 2.4a1.8 1.8 0 0 1-.5 2.1l-1.1 1a10.8 10.8 0 0 0 4.1 4.1l1-1.1a1.8 1.8 0 0 1 2.1-.5l2.4 1a1.8 1.8 0 0 1 1 2.2l-.8 2.3a2.6 2.6 0 0 1-2.5 1.8A14.8 14.8 0 0 1 4.8 6.3a2.6 2.6 0 0 1 1.8-2.5Z"
          stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
@elseif ($type === 'email')
  <svg {{ $attributes->merge(['class' => 'size-4 shrink-0']) }} data-contact-icon="email"
       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" aria-hidden="true">
    <rect x="3.5" y="5.5" width="17" height="13" rx="2.2" stroke="currentColor" stroke-width="1.8"/>
    <path d="m5.5 8 6.5 5 6.5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
          stroke-linejoin="round"/>
  </svg>
@elseif ($type === 'location')
  <svg {{ $attributes->merge(['class' => 'size-4 shrink-0']) }} data-contact-icon="location"
       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" aria-hidden="true">
    <path d="M12 21s7-5.7 7-11.4A7 7 0 0 0 5 9.6C5 15.3 12 21 12 21Z" stroke="currentColor" stroke-width="1.8"
          stroke-linejoin="round"/>
    <circle cx="12" cy="9.8" r="2.3" stroke="currentColor" stroke-width="1.8"/>
  </svg>
@endif
