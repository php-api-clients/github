<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Commit
{
    public const SCHEMA_TITLE = 'Commit';
    public const SPL_HASH = '000000006312faab0000000044ad25fc';
    public const SCHEMA_DESCRIPTION = 'Commit';
    private string $url;
    private string $sha;
    private string $node_id;
    private string $html_url;
    private string $comments_url;
    private object $commit;
    private $author;
    private $committer;
    private array $parents;
    private object $stats;
    private array $files;
    public function url() : string
    {
        return $this->url;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    public function commit() : object
    {
        return $this->commit;
    }
    public function author()
    {
        return $this->author;
    }
    public function committer()
    {
        return $this->committer;
    }
    public function parents() : array
    {
        return $this->parents;
    }
    public function stats() : object
    {
        return $this->stats;
    }
    public function files() : array
    {
        return $this->files;
    }
}
