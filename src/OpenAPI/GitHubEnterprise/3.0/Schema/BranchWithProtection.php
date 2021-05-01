<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Schema;

final class BranchWithProtection
{
    public const SCHEMA_TITLE = 'Branch With Protection';
    public const SCHEMA_DESCRIPTION = 'Branch With Protection';
    private string $name;
    /**Commit**/
    private object $commit;
    private object $_links;
    private boolean $protected;
    /**Branch Protection**/
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
    public function pattern() : string
    {
        return $this->pattern;
    }
    public function required_approving_review_count() : int
    {
        return $this->required_approving_review_count;
    }
}
