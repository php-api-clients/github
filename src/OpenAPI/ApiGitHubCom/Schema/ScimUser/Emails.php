<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimUser;

final class Emails
{
    public const SCHEMA_TITLE = 'scim-user::emails';
    public const SCHEMA_DESCRIPTION = '';
    private string $value;
    private bool $primary;
    public function value() : string
    {
        return $this->value;
    }
    public function primary() : bool
    {
        return $this->primary;
    }
}
