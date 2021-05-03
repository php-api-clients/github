<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class BranchWithProtection
{
    public const SCHEMA_TITLE = 'Branch With Protection';
    public const SPL_HASH = '000000005dfdd5c80000000040885a06';
    public const SCHEMA_DESCRIPTION = 'Branch With Protection';
    private ?string $name = null;
    /**
     * Commit
     */
    private ?object $commit = null;
    private ?object $_links = null;
    private ?bool $protected = null;
    /**
     * Branch Protection
     */
    private ?object $protection = null;
    private ?string $protection_url = null;
    private ?string $pattern = null;
    private ?int $required_approving_review_count = null;
    public function name() : ?string
    {
        return $this->name;
    }
    public function commit() : ?object
    {
        return $this->commit;
    }
    public function _links() : ?object
    {
        return $this->_links;
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
    public function pattern() : ?string
    {
        return $this->pattern;
    }
    public function required_approving_review_count() : ?int
    {
        return $this->required_approving_review_count;
    }
}
