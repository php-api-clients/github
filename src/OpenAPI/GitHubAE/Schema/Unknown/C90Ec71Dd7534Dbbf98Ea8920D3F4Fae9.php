<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C90Ec71Dd7534Dbbf98Ea8920D3F4Fae9
{
    public const SCHEMA_JSON = '{"required":["name","commit","protected"],"type":"object","properties":{"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":["string","null"]},"url":{"type":["string","null"],"format":"uri"}}},"name":{"type":"string"},"protected":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'c_90ec71dd7534dbbf98ea8920d3f4fae9';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5115A19E1D8F421A8E68Ff1Ebb048Dd7::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5115A19E1D8F421A8E68Ff1Ebb048Dd7 $commit;
    private string $name;
    private bool $protected;
    public function commit() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5115A19E1D8F421A8E68Ff1Ebb048Dd7
    {
        return $this->commit;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function protected() : bool
    {
        return $this->protected;
    }
}
