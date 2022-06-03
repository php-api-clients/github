<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class GistCommit
{
    public const SCHEMA_TITLE = 'Gist Commit';
    public const SCHEMA_DESCRIPTION = 'Gist Commit';
    private string $url;
    private string $version;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\NullableSimpleUser $user = null;
    private array $change_status = array();
    private string $committed_at;
    public function url() : string
    {
        return $this->url;
    }
    public function version() : string
    {
        return $this->version;
    }
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\NullableSimpleUser
    {
        return $this->user;
    }
    public function change_status() : array
    {
        return $this->change_status;
    }
    public function committed_at() : string
    {
        return $this->committed_at;
    }
}
