<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Hovercard
{
    public const SCHEMA_JSON = '{"title":"Hovercard","required":["contexts"],"type":"object","properties":{"contexts":{"type":"array","items":{"required":["message","octicon"],"type":"object","properties":{"message":{"type":"string"},"octicon":{"type":"string"}}}}},"description":"Hovercard"}';
    public const SCHEMA_TITLE = 'Hovercard';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C86Ce3A61C7F9D96662C77119E0F89F84>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C86Ce3A61C7F9D96662C77119E0F89F84::class)
     */
    private array $contexts = array();
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C86Ce3A61C7F9D96662C77119E0F89F84>
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
}
