<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\FileCommit;

final class Commit
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"sha":{"type":"string"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"author":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"committer":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"message":{"type":"string"},"tree":{"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}}},"parents":{"type":"array","items":{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}},"verification":{"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = 'FileCommit\\Commit';
    public const SCHEMA_DESCRIPTION = '';
    private string $sha;
    private string $node_id;
    private string $url;
    private string $html_url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Author::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Author $author;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Committer::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Committer $committer;
    private string $message;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Tree::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Tree $tree;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Parents>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Parents::class)
     */
    private array $parents = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Verification::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Verification $verification;
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
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function author() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Author
    {
        return $this->author;
    }
    public function committer() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Committer
    {
        return $this->committer;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function tree() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Tree
    {
        return $this->tree;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Parents>
     */
    public function parents() : array
    {
        return $this->parents;
    }
    public function verification() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Commit\Verification
    {
        return $this->verification;
    }
}
