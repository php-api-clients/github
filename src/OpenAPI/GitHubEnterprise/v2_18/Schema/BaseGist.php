<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class BaseGist
{
    public const SCHEMA_TITLE = 'Base Gist';
    public const SPL_HASH = '000000006e7b7a65000000005d0d00fd';
    public const SCHEMA_DESCRIPTION = 'Base Gist';
    private string $url;
    private string $forks_url;
    private string $commits_url;
    private string $id;
    private string $node_id;
    private string $git_pull_url;
    private string $git_push_url;
    private string $html_url;
    private object $files;
    private bool $public;
    private string $created_at;
    private string $updated_at;
    private string $description;
    private int $comments;
    private $user;
    private string $comments_url;
    private $owner;
    private bool $truncated;
    private array $forks;
    private array $history;
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
    public function files() : object
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
    public function description() : string
    {
        return $this->description;
    }
    public function comments() : int
    {
        return $this->comments;
    }
    public function user()
    {
        return $this->user;
    }
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    public function owner()
    {
        return $this->owner;
    }
    public function truncated() : bool
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
