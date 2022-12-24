<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CB0962D50Ed9A137436E89Ffb414475Ff
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"resource":{"type":"string"},"code":{"type":"string"},"message":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'c_b0962d50ed9a137436e89ffb414475ff';
    public const SCHEMA_DESCRIPTION = '';
    private string $message;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C6Ad9D3603354Ca4081307Cab441Abd7E>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C6Ad9D3603354Ca4081307Cab441Abd7E::class)
     */
    private array $errors = array();
    public function message() : string
    {
        return $this->message;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C6Ad9D3603354Ca4081307Cab441Abd7E>
     */
    public function errors() : array
    {
        return $this->errors;
    }
}
