<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class GistSimple
{
    public const SCHEMA_TITLE = 'Gist Simple';
    public const SCHEMA_DESCRIPTION = 'Gist Simple';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\GistSimple\Forks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\GistSimple\Forks::class)
     */
    private array $forks = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\GistHistory>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\GistHistory::class)
     */
    private array $history = array();
    /**
     * Gist
     */
    private array $fork_of = array();
    private string $url;
    private string $forks_url;
    private string $commits_url;
    private string $id;
    private string $node_id;
    private string $git_pull_url;
    private string $git_push_url;
    private string $html_url;
    private array $files = array();
    private bool $public;
    private string $created_at;
    private string $updated_at;
    private ?string $description = null;
    private int $comments;
    private ?string $user = null;
    private string $comments_url;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\SimpleUser $owner;
    private bool $truncated;
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\GistSimple\Forks>
     */
    public function forks() : array
    {
        return $this->forks;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\GistHistory>
     */
    public function history() : array
    {
        return $this->history;
    }
    /**
     * Gist
     */
    public function fork_of() : array
    {
        return $this->fork_of;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function forks_url() : string
    {
        return $this->forks_url;
    }
    public function commits_url() : string
    {
        return $this->commits_url;
    }
    public function id() : string
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function git_pull_url() : string
    {
        return $this->git_pull_url;
    }
    public function git_push_url() : string
    {
        return $this->git_push_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function files() : array
    {
        return $this->files;
    }
    public function public() : bool
    {
        return $this->public;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function comments() : int
    {
        return $this->comments;
    }
    public function user() : ?string
    {
        return $this->user;
    }
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    /**
     * Simple User
     */
    public function owner() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\SimpleUser
    {
        return $this->owner;
    }
    public function truncated() : bool
    {
        return $this->truncated;
    }
}
