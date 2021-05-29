<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimEnterpriseUser;

final class Groups
{
    public const SCHEMA_TITLE       = 'scim-enterprise-user::groups';
    public const SCHEMA_DESCRIPTION = '';
    private string $value;

    public function value(): string
    {
        return $this->value;
    }
}
