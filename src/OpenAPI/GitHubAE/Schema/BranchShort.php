<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class BranchShort
{
    public const SCHEMA_JSON = '{"title":"Branch Short","required":["name","commit","protected"],"type":"object","properties":{"name":{"type":"string"},"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string"}}},"protected":{"type":"boolean"}},"description":"Branch Short"}';
    public const SCHEMA_TITLE = 'Branch Short';
    public const SCHEMA_DESCRIPTION = 'Branch Short';
    private string $name;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BranchShort\Commit::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BranchShort\Commit $commit;
    private bool $protected;
    public function name() : string
    {
        return $this->name;
    }
    public function commit() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BranchShort\Commit
    {
        return $this->commit;
    }
    public function protected() : bool
    {
        return $this->protected;
    }
}
