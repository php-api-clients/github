<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class CommitComment
{
    public const SCHEMA_TITLE = 'Commit Comment';
    public const SCHEMA_DESCRIPTION = 'Commit Comment';
    private string $html_url;
    private string $url;
    private int $id;
    private string $node_id;
    private string $body;
    private ?string $path = null;
    private ?int $position = null;
    private ?int $line = null;
    private string $commit_id;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser $user = null;
    private string $created_at;
    private string $updated_at;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\ReactionRollup::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\ReactionRollup $reactions = null;
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
    public function path() : ?string
    {
        return $this->path;
    }
    public function position() : ?int
    {
        return $this->position;
    }
    public function line() : ?int
    {
        return $this->line;
    }
    public function commit_id() : string
    {
        return $this->commit_id;
    }
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser
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
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\ReactionRollup
    {
        return $this->reactions;
    }
}
