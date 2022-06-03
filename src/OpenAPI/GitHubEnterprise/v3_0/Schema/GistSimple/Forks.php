<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\GistSimple;

final class Forks
{
    public const SCHEMA_TITLE = 'gist-simple::forks';
    public const SCHEMA_DESCRIPTION = '';
    private string $id;
    private string $url;
    /**
     * Public User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\PublicUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\PublicUser $user;
    private string $created_at;
    private string $updated_at;
    public function id() : string
    {
        return $this->id;
    }
    public function url() : string
    {
        return $this->url;
    }
    /**
     * Public User
     */
    public function user() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\PublicUser
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
}
