<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SimpleCheckSuite
{
    public const SCHEMA_TITLE = 'simple-check-suite';
    public const SCHEMA_DESCRIPTION = 'A suite of checks performed on the code of a given code change';
    private $after;
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration $app;
    private $before;
    private $conclusion;
    private string $created_at;
    private $head_branch;
    /**
     * The SHA of the head commit that is being checked.
     */
    private string $head_sha;
    private int $id;
    private string $node_id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal::class)
     */
    private array $pull_requests = array();
    /**
     * Minimal Repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository $repository;
    private string $status;
    private string $updated_at;
    private string $url;
    public function after()
    {
        return $this->after;
    }
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function app() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration
    {
        return $this->app;
    }
    public function before()
    {
        return $this->before;
    }
    public function conclusion()
    {
        return $this->conclusion;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function head_branch()
    {
        return $this->head_branch;
    }
    /**
     * The SHA of the head commit that is being checked.
     */
    public function head_sha() : string
    {
        return $this->head_sha;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal>
     */
    public function pull_requests() : array
    {
        return $this->pull_requests;
    }
    /**
     * Minimal Repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository
    {
        return $this->repository;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function url() : string
    {
        return $this->url;
    }
}
