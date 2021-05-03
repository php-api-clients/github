<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CommitSearchResultItem
{
    public const SCHEMA_TITLE = 'Commit Search Result Item';
    public const SPL_HASH = '00000000269f27ff00000000005e85e5';
    public const SCHEMA_DESCRIPTION = 'Commit Search Result Item';
    private ?string $url = null;
    private ?string $sha = null;
    private ?string $html_url = null;
    private ?string $comments_url = null;
    private ?object $commit = null;
    private $author;
    private $committer;
    private array $parents = array();
    /**
     * Minimal Repository
     */
    private ?object $repository = null;
    private ?number $score = null;
    private ?string $node_id = null;
    private array $text_matches = array();
    public function url() : ?string
    {
        return $this->url;
    }
    public function sha() : ?string
    {
        return $this->sha;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function comments_url() : ?string
    {
        return $this->comments_url;
    }
    public function commit() : ?object
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
    public function repository() : ?object
    {
        return $this->repository;
    }
    public function score() : ?number
    {
        return $this->score;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function text_matches() : array
    {
        return $this->text_matches;
    }
}
