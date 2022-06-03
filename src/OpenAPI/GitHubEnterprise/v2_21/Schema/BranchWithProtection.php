<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class BranchWithProtection
{
    public const SCHEMA_TITLE = 'Branch With Protection';
    public const SCHEMA_DESCRIPTION = 'Branch With Protection';
    private string $name;
    /**
     * Commit
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Commit::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Commit $commit;
    private array $_links = array();
    private bool $protected;
    /**
     * Branch Protection
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\BranchProtection::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\BranchProtection $protection;
    private string $protection_url;
    private ?string $pattern = null;
    private ?int $required_approving_review_count = null;
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Commit
     */
    public function commit() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Commit
    {
        return $this->commit;
    }
    public function _links() : array
    {
        return $this->_links;
    }
    public function protected() : bool
    {
        return $this->protected;
    }
    /**
     * Branch Protection
     */
    public function protection() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\BranchProtection
    {
        return $this->protection;
    }
    public function protection_url() : string
    {
        return $this->protection_url;
    }
    public function pattern() : ?string
    {
        return $this->pattern;
    }
    public function required_approving_review_count() : ?int
    {
        return $this->required_approving_review_count;
    }
}
