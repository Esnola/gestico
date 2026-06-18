<?php

it('does not use leading-8 in public blade views', function (): void {
    $paths = [
        resource_path('views/home.blade.php'),
        resource_path('views/pages/advisory.blade.php'),
        resource_path('views/pages/contact.blade.php'),
        resource_path('views/pages/font-compare.blade.php'),
        resource_path('views/pages/property.blade.php'),
        resource_path('views/pages/services.blade.php'),
    ];

    foreach ($paths as $path) {
        expect(file_get_contents($path))->not->toContain('leading-8');
    }
});
