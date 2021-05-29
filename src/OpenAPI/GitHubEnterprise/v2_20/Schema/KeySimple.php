<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class KeySimple
{
    public const SCHEMA_TITLE       = 'Key Simple';
    public const SCHEMA_DESCRIPTION = 'Key Simple';
    private ?int $id                = null;
    private ?string $key            = null;

    public function id(): ?int
    {
        return $this->id;
    }

    public function key(): ?string
    {
        return $this->key;
    }
}
