<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyLicense implements LicenseInterface, EmptyResourceInterface
{
    public function key(): string
    {
        return null;
    }

    public function name(): string
    {
        return null;
    }

    public function spdxId(): string
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }
}
