<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Key
{
    public const SCHEMA_TITLE = 'Key';
    public const SCHEMA_DESCRIPTION = 'Key';
    private string $key;
    private int $id;
    private string $url;
    private string $title;
    private string $created_at;
    private bool $verified;
    private bool $read_only;
    public function key() : string
    {
        return $this->key;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function verified() : bool
    {
        return $this->verified;
    }
    public function read_only() : bool
    {
        return $this->read_only;
    }
}
