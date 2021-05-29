<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_TITLE       = 'Gitignore Template';
    public const SCHEMA_DESCRIPTION = 'Gitignore Template';
    private ?string $name           = null;
    private ?string $source         = null;

    public function name(): ?string
    {
        return $this->name;
    }

    public function source(): ?string
    {
        return $this->source;
    }
}
