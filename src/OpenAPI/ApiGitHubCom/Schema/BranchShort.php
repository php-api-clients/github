<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class BranchShort
{
    public const SCHEMA_JSON = '{"title":"Branch Short","required":["name","commit","protected"],"type":"object","properties":{"name":{"type":"string"},"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string"}}},"protected":{"type":"boolean"}},"description":"Branch Short"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Branch Short';
    public const SCHEMA_DESCRIPTION = 'Branch Short';
    public readonly string $name;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchShort\Commit $commit;
    public readonly bool $protected;
    public function __construct(string $name, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchShort\Commit $commit, bool $protected)
    {
        $this->name = $name;
        $this->commit = $commit;
        $this->protected = $protected;
    }
}
