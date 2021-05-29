<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Link
{
    public const SCHEMA_TITLE       = 'Link';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $href           = null;

    public function href(): ?string
    {
        return $this->href;
    }
}
