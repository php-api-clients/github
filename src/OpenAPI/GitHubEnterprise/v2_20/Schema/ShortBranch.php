<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class ShortBranch
{
    public const SCHEMA_TITLE = 'Short Branch';
    public const SCHEMA_DESCRIPTION = 'Short Branch';
    private ?string $name = null;
    private array $commit = array();
    private ?bool $protected = null;
    /**
     * Branch Protection
     */
    private array $protection = array();
    private ?string $protection_url = null;
    public function name() : ?string
    {
        return $this->name;
    }
    public function commit() : array
    {
        return $this->commit;
    }
    public function protected() : ?bool
    {
        return $this->protected;
    }
    public function protection() : array
    {
        return $this->protection;
    }
    public function protection_url() : ?string
    {
        return $this->protection_url;
    }
}
