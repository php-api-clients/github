<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GistComment
{
    public const SCHEMA_TITLE = 'Gist Comment';
    public const SCHEMA_DESCRIPTION = 'A comment made to a gist.';
    private int $id;
    private string $node_id;
    private string $url;
    /**The comment text.**/
    private string $body;
    private $user;
    private string $created_at;
    private string $updated_at;
    /**How the author is associated with the repository.**/
    private string $author_association;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function body() : string
    {
        return $this->body;
    }
    public function user()
    {
        return $this->user;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function author_association() : string
    {
        return $this->author_association;
    }
}
