<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C8F4D3A54370Cc5777Dc54Def65Bab167
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["contexts"],"type":"object","properties":{"contexts":{"type":"array","items":{"type":"string"},"description":"The name of the status checks"}},"example":{"contexts":["contexts"]}},{"type":"array","items":{"type":"string"},"description":"The name of the status checks"}]}';
    public const SCHEMA_TITLE = 'c_8f4d3a54370cc5777dc54def65bab167';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the status checks
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C8F4D3A54370Cc5777Dc54Def65Bab167\Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C8F4D3A54370Cc5777Dc54Def65Bab167\Contexts::class)
     */
    private array $contexts = array();
    /**
     * The name of the status checks
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C8F4D3A54370Cc5777Dc54Def65Bab167\Contexts>
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
}
