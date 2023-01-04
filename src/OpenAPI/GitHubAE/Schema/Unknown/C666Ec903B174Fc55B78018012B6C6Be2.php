<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C666Ec903B174Fc55B78018012B6C6Be2
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["users"],"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The username for users"}},"example":{"users":["mona"]}},{"type":"array","items":{"type":"string"}}]}';
    public const SCHEMA_TITLE = 'c_666ec903b174fc55b78018012b6c6be2';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The username for users
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C666Ec903B174Fc55B78018012B6C6Be2\Users>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C666Ec903B174Fc55B78018012B6C6Be2\Users::class)
     */
    private array $users = array();
    /**
     * The username for users
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C666Ec903B174Fc55B78018012B6C6Be2\Users>
     */
    public function users() : array
    {
        return $this->users;
    }
}
