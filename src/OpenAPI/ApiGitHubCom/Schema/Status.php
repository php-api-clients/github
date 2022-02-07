<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Status
{
    public const SCHEMA_TITLE = 'Status';
    public const SCHEMA_DESCRIPTION = 'The status of a commit.';
    private string $url;
    private ?string $avatar_url = null;
    private int $id;
    private string $node_id;
    private string $state;
    private string $description;
    private string $target_url;
    private string $context;
    private string $created_at;
    private string $updated_at;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableSimpleUser $creator = null;
    public function url() : string
    {
        return $this->url;
    }
    public function avatar_url() : ?string
    {
        return $this->avatar_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function target_url() : string
    {
        return $this->target_url;
    }
    public function context() : string
    {
        return $this->context;
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
     * Simple User
     */
    public function creator() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableSimpleUser
    {
        return $this->creator;
    }
}
