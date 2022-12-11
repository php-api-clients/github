<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CommitComment
{
    public const SCHEMA_TITLE = 'Commit Comment';
    public const SCHEMA_DESCRIPTION = 'Commit Comment';
    private string $html_url;
    private string $url;
    private int $id;
    private string $node_id;
    private string $body;
    private $path;
    private $position;
    private $line;
    private string $commit_id;
    private $user;
    private string $created_at;
    private string $updated_at;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReactionRollup::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReactionRollup $reactions = null;
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function body() : string
    {
        return $this->body;
    }
    public function path()
    {
        return $this->path;
    }
    public function position()
    {
        return $this->position;
    }
    public function line()
    {
        return $this->line;
    }
    public function commit_id() : string
    {
        return $this->commit_id;
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
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReactionRollup
    {
        return $this->reactions;
    }
}
