<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class GistHistory
{
    public const SCHEMA_TITLE = 'Gist History';
    public const SCHEMA_DESCRIPTION = 'Gist History';
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser $user = null;
    private string $version;
    private string $committed_at;
    private array $change_status = array();
    private string $url;
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser
    {
        return $this->user;
    }
    public function version() : string
    {
        return $this->version;
    }
    public function committed_at() : string
    {
        return $this->committed_at;
    }
    public function change_status() : array
    {
        return $this->change_status;
    }
    public function url() : string
    {
        return $this->url;
    }
}
