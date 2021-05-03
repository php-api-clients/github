<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class BranchShort
{
    public const SCHEMA_TITLE = 'Branch Short';
    public const SPL_HASH = '0000000054d5e25b0000000071115dec';
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
