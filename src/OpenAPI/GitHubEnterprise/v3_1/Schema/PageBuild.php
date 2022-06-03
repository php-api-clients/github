<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class PageBuild
{
    public const SCHEMA_TITLE = 'Page Build';
    public const SCHEMA_DESCRIPTION = 'Page Build';
    private string $url;
    private string $status;
    private array $error = array();
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser $pusher = null;
    private string $commit;
    private int $duration;
    private string $created_at;
    private string $updated_at;
    public function url() : string
    {
        return $this->url;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function error() : array
    {
        return $this->error;
    }
    /**
     * Simple User
     */
    public function pusher() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser
    {
        return $this->pusher;
    }
    public function commit() : string
    {
        return $this->commit;
    }
    public function duration() : int
    {
        return $this->duration;
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
