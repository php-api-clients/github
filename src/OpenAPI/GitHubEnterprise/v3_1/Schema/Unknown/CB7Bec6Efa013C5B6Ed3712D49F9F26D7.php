<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CB7Bec6Efa013C5B6Ed3712D49F9F26D7
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["contexts"],"type":"object","properties":{"contexts":{"type":"array","items":{"type":"string"},"description":"contexts parameter"}},"example":{"contexts":["contexts"]}},{"type":"array","items":{"type":"string"},"description":"contexts parameter"}]}';
    public const SCHEMA_TITLE = 'c_b7bec6efa013c5b6ed3712d49f9f26d7';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * contexts parameter
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CB7Bec6Efa013C5B6Ed3712D49F9F26D7\Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CB7Bec6Efa013C5B6Ed3712D49F9F26D7\Contexts::class)
     */
    private array $contexts = array();
    /**
     * contexts parameter
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CB7Bec6Efa013C5B6Ed3712D49F9F26D7\Contexts>
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
}
