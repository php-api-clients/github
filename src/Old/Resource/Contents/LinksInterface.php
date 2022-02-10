<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Resource\ResourceInterface;

interface LinksInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Contents\\Links';

    public function git(): string;

    public function self(): string;

    public function html(): string;
}
