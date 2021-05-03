<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ShortBranch
{
    public const SCHEMA_TITLE = 'Short Branch';
    public const SPL_HASH = '0000000054d5e4410000000071115dec';
    public const SCHEMA_DESCRIPTION = 'Short Branch';
    private string $name;
    private object $commit;
    private boolean $protected;
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
    public function protected() : boolean
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
