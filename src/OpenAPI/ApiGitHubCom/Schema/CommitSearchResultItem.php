<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CommitSearchResultItem
{
    public const SCHEMA_TITLE = 'Commit Search Result Item';
    public const SPL_HASH = '0000000054d5ede20000000071115dec';
    public const SCHEMA_DESCRIPTION = 'Commit Search Result Item';
    private string $url;
    private string $sha;
    private string $html_url;
    private string $comments_url;
    private object $commit;
    private $author;
    private $committer;
    private array $parents;
    /**
     * Minimal Repository
     */
    private object $repository;
    private number $score;
    private string $node_id;
    private array $text_matches;
    public function url() : string
    {
        return $this->url;
    }
    public function sha() : string
    {
        return $this->sha;
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
    public function repository() : object
    {
        return $this->repository;
    }
    public function score() : number
    {
        return $this->score;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function text_matches() : array
    {
        return $this->text_matches;
    }
}
