<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class BaseGist
{
    public const SCHEMA_TITLE = 'Base Gist';
    public const SCHEMA_DESCRIPTION = 'Base Gist';
    private ?string $url = null;
    private ?string $forks_url = null;
    private ?string $commits_url = null;
    private ?string $id = null;
    private ?string $node_id = null;
    private ?string $git_pull_url = null;
    private ?string $git_push_url = null;
    private ?string $html_url = null;
    private ?object $files = null;
    private ?bool $public = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?string $description = null;
    private ?int $comments = null;
    private $user;
    private ?string $comments_url = null;
    private $owner;
    private ?bool $truncated = null;
    private array $forks = array();
    private array $history = array();
    public function url() : ?string
    {
        return $this->url;
    }
    public function forks_url() : ?string
    {
        return $this->forks_url;
    }
    public function commits_url() : ?string
    {
        return $this->commits_url;
    }
    public function id() : ?string
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function git_pull_url() : ?string
    {
        return $this->git_pull_url;
    }
    public function git_push_url() : ?string
    {
        return $this->git_push_url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function files() : ?object
    {
        return $this->files;
    }
    public function public() : ?bool
    {
        return $this->public;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function comments() : ?int
    {
        return $this->comments;
    }
    public function user()
    {
        return $this->user;
    }
    public function comments_url() : ?string
    {
        return $this->comments_url;
    }
    public function owner()
    {
        return $this->owner;
    }
    public function truncated() : ?bool
    {
        return $this->truncated;
    }
    public function forks() : array
    {
        return $this->forks;
    }
    public function history() : array
    {
        return $this->history;
    }
}
