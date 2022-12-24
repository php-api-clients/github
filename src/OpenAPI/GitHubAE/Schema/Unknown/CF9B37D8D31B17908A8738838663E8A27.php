<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CF9B37D8D31B17908A8738838663E8A27
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"auto_trigger_checks":{"type":"array","items":{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer"},"setting":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE = 'c_f9b37d8d31b17908a8738838663e8a27';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C73F16Dbd64105B0A07Db067B15Be6931>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C73F16Dbd64105B0A07Db067B15Be6931::class)
     */
    private array $auto_trigger_checks = array();
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C73F16Dbd64105B0A07Db067B15Be6931>
     */
    public function auto_trigger_checks() : array
    {
        return $this->auto_trigger_checks;
    }
}
