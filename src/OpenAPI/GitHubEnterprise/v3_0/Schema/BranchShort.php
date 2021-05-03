<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class BranchShort
{
    public const SCHEMA_TITLE = 'Branch Short';
    public const SPL_HASH = '000000001f1e27cf000000004be6709d';
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
