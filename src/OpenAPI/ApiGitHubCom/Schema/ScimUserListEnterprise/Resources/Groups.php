<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUserListEnterprise\Resources;

final class Groups
{
    public const SCHEMA_TITLE = 'scim-user-list-enterprise::Resources::groups';
    public const SCHEMA_DESCRIPTION = '';
    private string $value;
    public function value() : string
    {
        return $this->value;
    }
}
