<?php

declare(strict_types=1);

function env(string $key): mixed
{
    print_r($_ENV[$key]);
    return $_ENV[$key] ?? null;
}