<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ShortBranch
{
    public const SCHEMA_TITLE = 'Short Branch';
    public const SCHEMA_DESCRIPTION = 'Short Branch';
    private string $name;
    private array $commit = array();
    private bool $protected;
    /**
     * Branch Protection
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\BranchProtection::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\BranchProtection $protection = null;
    private ?string $protection_url = null;
    public function name() : string
    {
        return $this->name;
    }
    public function commit() : array
    {
        return $this->commit;
    }
    public function protected() : bool
    {
        return $this->protected;
    }
    /**
     * Branch Protection
     */
    public function protection() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\BranchProtection
    {
        return $this->protection;
    }
    public function protection_url() : ?string
    {
        return $this->protection_url;
    }
}
