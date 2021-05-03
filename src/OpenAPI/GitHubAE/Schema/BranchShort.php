<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class BranchShort
{
    public const SCHEMA_TITLE = 'Branch Short';
    public const SPL_HASH = '000000007ee6eb4c0000000021479ea3';
    public const SCHEMA_DESCRIPTION = 'Branch Short';
    private string $name;
    private object $commit;
    private bool $protected;
    public function name() : string
    {
        return $this->name;
    }
    public function commit() : object
    {
        return $this->commit;
    }
    public function protected() : bool
    {
        return $this->protected;
    }
}
