<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git\Ref;

use ApiClients\Foundation\Resource\ResourceInterface;

interface Object_Interface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Git\\Ref\\Object_';

    public function type(): string;

    public function sha(): string;

    public function url(): string;
}
