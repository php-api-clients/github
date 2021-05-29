<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Link
{
    public const SCHEMA_TITLE       = 'Link';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link';
    private ?string $href           = null;

    public function href(): ?string
    {
        return $this->href;
    }
}
