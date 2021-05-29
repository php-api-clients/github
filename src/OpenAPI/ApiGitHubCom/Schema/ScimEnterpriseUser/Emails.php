<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimEnterpriseUser;

final class Emails
{
    public const SCHEMA_TITLE       = 'scim-enterprise-user::emails';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $value          = null;
    private ?string $type           = null;
    private ?bool $primary          = null;

    public function value(): ?string
    {
        return $this->value;
    }

    public function type(): ?string
    {
        return $this->type;
    }

    public function primary(): ?bool
    {
        return $this->primary;
    }
}
