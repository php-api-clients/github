<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList;

final class ActionsCaches
{
    public const SCHEMA_TITLE = 'actions-cache-list::actions_caches';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $ref;
    private string $key;
    private string $version;
    private string $last_accessed_at;
    private string $created_at;
    private int $size_in_bytes;
    public function id() : int
    {
        return $this->id;
    }
    public function ref() : string
    {
        return $this->ref;
    }
    public function key() : string
    {
        return $this->key;
    }
    public function version() : string
    {
        return $this->version;
    }
    public function last_accessed_at() : string
    {
        return $this->last_accessed_at;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function size_in_bytes() : int
    {
        return $this->size_in_bytes;
    }
}
