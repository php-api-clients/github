<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUserListEnterprise\Resources;

final class Emails
{
    public const SCHEMA_TITLE       = 'scim-user-list-enterprise::Resources::emails';
    public const SCHEMA_DESCRIPTION = '';
    private string $value;
    private bool $primary;
    private string $type;

    public function value(): string
    {
        return $this->value;
    }

    public function primary(): bool
    {
        return $this->primary;
    }

    public function type(): string
    {
        return $this->type;
    }
}
