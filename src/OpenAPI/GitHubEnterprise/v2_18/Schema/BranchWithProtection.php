<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class BranchWithProtection
{
    public const SCHEMA_TITLE = 'Branch With Protection';
    public const SPL_HASH = '000000006e7b77cb000000005d0d00fd';
    public const SCHEMA_DESCRIPTION = 'Branch With Protection';
    private string $name;
    /**
     * Commit
     */
    private object $commit;
    private object $_links;
    private bool $protected;
    /**
     * Branch Protection
     */
    private object $protection;
    private string $protection_url;
    private string $pattern;
    private int $required_approving_review_count;
    public function name() : string
    {
        return $this->name;
    }
    public function commit() : object
    {
        return $this->commit;
    }
    public function _links() : object
    {
        return $this->_links;
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
    public function pattern() : string
    {
        return $this->pattern;
    }
    public function required_approving_review_count() : int
    {
        return $this->required_approving_review_count;
    }
}
