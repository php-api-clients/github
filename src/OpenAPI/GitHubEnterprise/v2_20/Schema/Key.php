<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class Key
{
    public const SCHEMA_TITLE = 'Key';
    public const SPL_HASH = '000000002493239600000000123fabb6';
    public const SCHEMA_DESCRIPTION = 'Key';
    private ?string $key = null;
    private ?int $id = null;
    private ?string $url = null;
    private ?string $title = null;
    private ?string $created_at = null;
    private ?bool $verified = null;
    private ?bool $read_only = null;
    public function key() : ?string
    {
        return $this->key;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function title() : ?string
    {
        return $this->title;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function verified() : ?bool
    {
        return $this->verified;
    }
    public function read_only() : ?bool
    {
        return $this->read_only;
    }
}
