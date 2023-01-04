<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C9317Dd2525342858Be77Bcad419Aac90
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["teams"],"type":"object","properties":{"teams":{"type":"array","items":{"type":"string"},"description":"teams parameter"}},"example":{"teams":["my-team"]}},{"type":"array","items":{"type":"string"},"description":"teams parameter"}]}';
    public const SCHEMA_TITLE = 'c_9317dd2525342858be77bcad419aac90';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * teams parameter
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C9317Dd2525342858Be77Bcad419Aac90\Teams>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C9317Dd2525342858Be77Bcad419Aac90\Teams::class)
     */
    private array $teams = array();
    /**
     * teams parameter
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C9317Dd2525342858Be77Bcad419Aac90\Teams>
     */
    public function teams() : array
    {
        return $this->teams;
    }
}
