<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ShortBranch
{
    public const SCHEMA_TITLE = 'Short Branch';
    public const SPL_HASH = '000000001f1e25df000000004be6709d';
    public const SCHEMA_DESCRIPTION = 'Short Branch';
    private string $name;
    private object $commit;
    private bool $protected;
    /**
     * Branch Protection
     */
    private object $protection;
    private string $protection_url;
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
    public function protection() : object
    {
        return $this->protection;
    }
    public function protection_url() : string
    {
        return $this->protection_url;
    }
}
