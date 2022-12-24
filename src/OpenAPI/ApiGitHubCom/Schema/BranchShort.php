<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class BranchShort
{
    public const SCHEMA_JSON = '{"title":"Branch Short","required":["name","commit","protected"],"type":"object","properties":{"name":{"type":"string"},"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string"}}},"protected":{"type":"boolean"}},"description":"Branch Short"}';
    public const SCHEMA_TITLE = 'Branch Short';
    public const SCHEMA_DESCRIPTION = 'Branch Short';
    private string $name;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFf2B0C9F3076Dbb9A119C999B1595Cde::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFf2B0C9F3076Dbb9A119C999B1595Cde $commit;
    private bool $protected;
    public function name() : string
    {
        return $this->name;
    }
    public function commit() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFf2B0C9F3076Dbb9A119C999B1595Cde
    {
        return $this->commit;
    }
    public function protected() : bool
    {
        return $this->protected;
    }
}
