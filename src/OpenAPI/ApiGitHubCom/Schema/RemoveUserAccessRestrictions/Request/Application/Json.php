<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RemoveUserAccessRestrictions\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["users"],"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The username for users"}},"example":{"users":["mona"]}},{"type":"array","items":{"type":"string"}}]}';
    public const SCHEMA_TITLE = 'RemoveUserAccessRestrictions\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The username for users
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Users>
     */
    public readonly array $users;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Users> $users
     */
    public function __construct(array $users)
    {
        $this->users = $users;
    }
}
