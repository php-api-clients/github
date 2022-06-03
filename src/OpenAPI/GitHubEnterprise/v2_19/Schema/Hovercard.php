<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Hovercard
{
    public const SCHEMA_TITLE = 'Hovercard';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\Hovercard\Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\Hovercard\Contexts::class)
     */
    private array $contexts = array();
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\Hovercard\Contexts>
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
}
