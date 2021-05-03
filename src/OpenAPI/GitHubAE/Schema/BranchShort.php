<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class BranchShort
{
    public const SCHEMA_TITLE = 'Branch Short';
    public const SPL_HASH = '000000000c1ce3020000000065732ccc';
    public const SCHEMA_DESCRIPTION = 'Branch Short';
    private string $name;
    private object $commit;
    private boolean $protected;
    public function name() : string
    {
        return $this->name;
    }
    public function commit() : object
    {
        return $this->commit;
    }
    public function protected() : boolean
    {
        return $this->protected;
    }
}
