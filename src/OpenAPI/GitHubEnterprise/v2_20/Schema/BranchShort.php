<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class BranchShort
{
    public const SCHEMA_TITLE = 'Branch Short';
    public const SPL_HASH = '0000000037ddb95c0000000010a967e8';
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
