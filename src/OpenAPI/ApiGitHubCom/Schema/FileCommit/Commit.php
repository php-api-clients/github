<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit;

final readonly class Commit
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"sha":{"type":"string"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"author":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"committer":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"message":{"type":"string"},"tree":{"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}}},"parents":{"type":"array","items":{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}},"verification":{"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $sha;
    public ?string $node_id;
    public ?string $url;
    public ?string $html_url;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Commit\Author $author;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Commit\Author $committer;
    public ?string $message;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Commit\Tree $tree;
    public ?array $parents;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Commit\Verification $verification;
    public function __construct(string $sha, string $node_id, string $url, string $html_url, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Commit\Author $author, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Commit\Author $committer, string $message, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Commit\Tree $tree, array $parents, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Commit\Verification $verification)
    {
        $this->sha = $sha;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->author = $author;
        $this->committer = $committer;
        $this->message = $message;
        $this->tree = $tree;
        $this->parents = $parents;
        $this->verification = $verification;
    }
}
