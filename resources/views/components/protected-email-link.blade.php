@props([
    'label' => 'Email',
])

<a href="#"
   data-protected-email="{{ config('gestico.protected_email') }}"
        {{ $attributes }}>
  <x-aux-icon type="email"/>
  <span data-protected-email-label>{{ $label }}</span>
</a>
