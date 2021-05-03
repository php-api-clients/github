<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class BranchShort
{
    public const SCHEMA_TITLE = 'Branch Short';
    public const SPL_HASH = '000000000cd53b590000000040effa88';
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
