<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class BranchShort
{
    public const SCHEMA_TITLE = 'Branch Short';
    public const SPL_HASH = '0000000008b927d200000000412ebbda';
    public const SCHEMA_DESCRIPTION = 'Branch Short';
    private ?string $name = null;
    private ?object $commit = null;
    private ?bool $protected = null;
    public function name() : ?string
    {
        return $this->name;
    }
    public function commit() : ?object
    {
        return $this->commit;
    }
    public function protected() : ?bool
    {
        return $this->protected;
    }
}
