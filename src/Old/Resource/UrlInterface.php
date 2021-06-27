<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface UrlInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Url';

    public function url(): string;

    public function htmlUrl(): string;
}
