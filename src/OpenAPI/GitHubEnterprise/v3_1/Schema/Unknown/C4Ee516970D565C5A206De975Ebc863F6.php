<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C4Ee516970D565C5A206De975Ebc863F6
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["users"],"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"users parameter"}},"example":{"users":["mona"]}},{"type":"array","items":{"type":"string"}}]}';
    public const SCHEMA_TITLE = 'c_4ee516970d565c5a206de975ebc863f6';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * users parameter
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C4Ee516970D565C5A206De975Ebc863F6\Users>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C4Ee516970D565C5A206De975Ebc863F6\Users::class)
     */
    private array $users = array();
    /**
     * users parameter
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C4Ee516970D565C5A206De975Ebc863F6\Users>
     */
    public function users() : array
    {
        return $this->users;
    }
}
