<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class BranchShort
{
    public const SCHEMA_TITLE = 'Branch Short';
    public const SCHEMA_DESCRIPTION = 'Branch Short';
    private string $name;
    private array $commit = array();
    private bool $protected;
    public function name() : string
    {
        return $this->name;
    }
    public function commit() : array
    {
        return $this->commit;
    }
    public function protected() : bool
    {
        return $this->protected;
    }
}
