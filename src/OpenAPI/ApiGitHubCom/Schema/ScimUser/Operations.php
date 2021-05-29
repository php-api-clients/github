<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser;

final class Operations
{
    public const SCHEMA_TITLE       = 'scim-user::operations';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $op             = null;
    private ?string $path           = null;
    private $value;

    public function op(): ?string
    {
        return $this->op;
    }

    public function path(): ?string
    {
        return $this->path;
    }

    public function value()
    {
        return $this->value;
    }
}
