<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class PublicKeyFull
{
    public const SCHEMA_TITLE = 'public-key-full';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $key;
    private $user_id;
    private $repository_id;
    private string $url;
    private string $title;
    private bool $read_only;
    private bool $verified;
    private string $created_at;
    private $last_used;
    public function id() : int
    {
        return $this->id;
    }
    public function key() : string
    {
        return $this->key;
    }
    public function user_id()
    {
        return $this->user_id;
    }
    public function repository_id()
    {
        return $this->repository_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function read_only() : bool
    {
        return $this->read_only;
    }
    public function verified() : bool
    {
        return $this->verified;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function last_used()
    {
        return $this->last_used;
    }
}
