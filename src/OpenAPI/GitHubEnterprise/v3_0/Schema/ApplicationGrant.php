<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ApplicationGrant
{
    public const SCHEMA_TITLE = 'Application Grant';
    public const SCHEMA_DESCRIPTION = 'The authorization associated with an OAuth Access.';
    private int $id;
    private string $url;
    private array $app = array();
    private string $created_at;
    private string $updated_at;
    private array $scopes = array();
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\NullableSimpleUser $user = null;
    public function id() : int
    {
        return $this->id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function app() : array
    {
        return $this->app;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function scopes() : array
    {
        return $this->scopes;
    }
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\NullableSimpleUser
    {
        return $this->user;
    }
}
