<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class GitCommit
{
    public const SCHEMA_JSON = '{"title":"Git Commit","required":["sha","node_id","url","html_url","author","committer","tree","message","parents","verification"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"author":{"required":["email","name","date"],"type":"object","properties":{"date":{"type":"string","description":"Timestamp of the commit","format":"date-time","examples":["2014-08-09T08:02:04+12:00"]},"email":{"type":"string","description":"Git email address of the user","examples":["monalisa.octocat@example.com"]},"name":{"type":"string","description":"Name of the git user","examples":["Monalisa Octocat"]}},"description":"Identifying information for the git-user"},"committer":{"required":["email","name","date"],"type":"object","properties":{"date":{"type":"string","description":"Timestamp of the commit","format":"date-time","examples":["2014-08-09T08:02:04+12:00"]},"email":{"type":"string","description":"Git email address of the user","examples":["monalisa.octocat@example.com"]},"name":{"type":"string","description":"Name of the git user","examples":["Monalisa Octocat"]}},"description":"Identifying information for the git-user"},"message":{"type":"string","description":"Message describing the purpose of the commit","examples":["Fix #42"]},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}},"parents":{"type":"array","items":{"required":["sha","url","html_url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}},"verification":{"required":["verified","reason","signature","payload"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}},"html_url":{"type":"string","format":"uri"}},"description":"Low-level Git commit operations within a repository"}';
    public const SCHEMA_TITLE = 'Git Commit';
    public const SCHEMA_DESCRIPTION = 'Low-level Git commit operations within a repository';
    /**
     * SHA for the commit
     */
    private string $sha;
    private string $node_id;
    private string $url;
    /**
     * Identifying information for the git-user
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Author::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Author $author;
    /**
     * Identifying information for the git-user
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Committer::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Committer $committer;
    /**
     * Message describing the purpose of the commit
     */
    private string $message;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Tree::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Tree $tree;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Parents>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Parents::class)
     */
    private array $parents = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Verification::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Verification $verification;
    private string $html_url;
    /**
     * SHA for the commit
     */
    public function sha() : string
    {
        return $this->sha;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    /**
     * Identifying information for the git-user
     */
    public function author() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Author
    {
        return $this->author;
    }
    /**
     * Identifying information for the git-user
     */
    public function committer() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Committer
    {
        return $this->committer;
    }
    /**
     * Message describing the purpose of the commit
     */
    public function message() : string
    {
        return $this->message;
    }
    public function tree() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Tree
    {
        return $this->tree;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Parents>
     */
    public function parents() : array
    {
        return $this->parents;
    }
    public function verification() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GitCommit\Verification
    {
        return $this->verification;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
}
