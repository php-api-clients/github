<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RemoveUserAccessRestrictions;

final class Request
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["users"],"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The username for users"}},"example":{"users":["mona"]}},{"type":"array","items":{"type":"string"}}]}';
    public const SCHEMA_TITLE = 'RemoveUserAccessRestrictions\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The username for users
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Users>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Users::class)
     */
    private array $users = array();
    /**
     * The username for users
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Users>
     */
    public function users() : array
    {
        return $this->users;
    }
}
