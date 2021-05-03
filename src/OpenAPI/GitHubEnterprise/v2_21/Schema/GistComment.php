<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class GistComment
{
    public const SCHEMA_TITLE = 'Gist Comment';
    public const SPL_HASH = '000000006887e0c00000000064418fb6';
    public const SCHEMA_DESCRIPTION = 'A comment made to a gist.';
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $url = null;
    /**
     * The comment text.
     */
    private ?string $body = null;
    private $user;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    /**
     * How the author is associated with the repository.
     */
    private ?string $author_association = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    public function user()
    {
        return $this->user;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function author_association() : ?string
    {
        return $this->author_association;
    }
}
