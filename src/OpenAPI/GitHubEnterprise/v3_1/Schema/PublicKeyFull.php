<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class PublicKeyFull
{
    public const SCHEMA_JSON = '{"required":["id","key","url","title","verified","created_at","read_only","last_used","user_id","repository_id"],"type":"object","properties":{"id":{"type":"integer"},"key":{"type":"string"},"user_id":{"type":["integer","null"]},"repository_id":{"type":["integer","null"]},"url":{"type":"string"},"title":{"type":"string"},"read_only":{"type":"boolean"},"verified":{"type":"boolean"},"created_at":{"type":"string","format":"date-time"},"last_used":{"type":["string","null"],"format":"date-time"}}}';
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
