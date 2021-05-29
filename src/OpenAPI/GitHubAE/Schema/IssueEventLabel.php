<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class IssueEventLabel
{
    public const SCHEMA_TITLE       = 'Issue Event Label';
    public const SCHEMA_DESCRIPTION = 'Issue Event Label';
    private ?string $name           = null;
    private ?string $color          = null;

    public function name(): ?string
    {
        return $this->name;
    }

    public function color(): ?string
    {
        return $this->color;
    }
}
