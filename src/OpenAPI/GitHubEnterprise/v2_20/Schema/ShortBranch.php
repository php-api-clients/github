<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class ShortBranch
{
    public const SCHEMA_TITLE = 'Short Branch';
    public const SPL_HASH = '0000000024935cf800000000123fabb6';
    public const SCHEMA_DESCRIPTION = 'Short Branch';
    private ?string $name = null;
    private ?object $commit = null;
    private ?bool $protected = null;
    /**
     * Branch Protection
     */
    private ?object $protection = null;
    private ?string $protection_url = null;
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
    public function protection() : ?object
    {
        return $this->protection;
    }
    public function protection_url() : ?string
    {
        return $this->protection_url;
    }
}
