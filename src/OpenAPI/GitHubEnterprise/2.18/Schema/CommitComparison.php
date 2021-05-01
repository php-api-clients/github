<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Schema;

final class CommitComparison
{
    public const SCHEMA_TITLE = 'Commit Comparison';
    public const SCHEMA_DESCRIPTION = 'Commit Comparison';
    private string $url;
    private string $html_url;
    private string $permalink_url;
    private string $diff_url;
    private string $patch_url;
    /**Commit**/
    private object $base_commit;
    /**Commit**/
    private object $merge_base_commit;
    private string $status;
    private int $ahead_by;
    private int $behind_by;
    private int $total_commits;
    private array $commits;
    private array $files;
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function permalink_url() : string
    {
        return $this->permalink_url;
    }
    public function diff_url() : string
    {
        return $this->diff_url;
    }
    public function patch_url() : string
    {
        return $this->patch_url;
    }
    public function base_commit() : object
    {
        return $this->base_commit;
    }
    public function merge_base_commit() : object
    {
        return $this->merge_base_commit;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function ahead_by() : int
    {
        return $this->ahead_by;
    }
    public function behind_by() : int
    {
        return $this->behind_by;
    }
    public function total_commits() : int
    {
        return $this->total_commits;
    }
    public function commits() : array
    {
        return $this->commits;
    }
    public function files() : array
    {
        return $this->files;
    }
}
