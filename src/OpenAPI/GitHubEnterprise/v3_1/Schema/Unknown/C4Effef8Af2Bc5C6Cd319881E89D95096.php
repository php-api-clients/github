<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C4Effef8Af2Bc5C6Cd319881E89D95096
{
    public const SCHEMA_JSON = '{"required":["login"],"type":"object","properties":{"login":{"type":"string","description":"The user\'s new username."}}}';
    public const SCHEMA_TITLE = 'c_4effef8af2bc5c6cd319881e89d95096';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The user's new username.
     */
    private string $login;
    /**
     * The user's new username.
     */
    public function login() : string
    {
        return $this->login;
    }
}
