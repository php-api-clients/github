<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C150Ef33Cc9F86Aa05Ae4206A71487Ae0
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"strict":{"type":"boolean","description":"Require branches to be up to date before merging."},"contexts":{"type":"array","items":{"type":"string"},"description":"The list of status checks to require in order to merge into this branch","deprecated":true}}}';
    public const SCHEMA_TITLE = 'c_150ef33cc9f86aa05ae4206a71487ae0';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Require branches to be up to date before merging.
     */
    private bool $strict;
    /**
     * The list of status checks to require in order to merge into this branch
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C150Ef33Cc9F86Aa05Ae4206A71487Ae0\Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C150Ef33Cc9F86Aa05Ae4206A71487Ae0\Contexts::class)
     */
    private array $contexts = array();
    /**
     * Require branches to be up to date before merging.
     */
    public function strict() : bool
    {
        return $this->strict;
    }
    /**
     * The list of status checks to require in order to merge into this branch
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C150Ef33Cc9F86Aa05Ae4206A71487Ae0\Contexts>
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
}
