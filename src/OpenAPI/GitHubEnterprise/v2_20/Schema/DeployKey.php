<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class DeployKey
{
    public const SCHEMA_TITLE = 'Deploy Key';
    public const SPL_HASH = '00000000249358bf00000000123fabb6';
    public const SCHEMA_DESCRIPTION = 'An SSH key granting access to a single repository.';
    private ?int $id = null;
    private ?string $key = null;
    private ?string $url = null;
    private ?string $title = null;
    private ?bool $verified = null;
    private ?string $created_at = null;
    private ?bool $read_only = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function key() : ?string
    {
        return $this->key;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function title() : ?string
    {
        return $this->title;
    }
    public function verified() : ?bool
    {
        return $this->verified;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function read_only() : ?bool
    {
        return $this->read_only;
    }
}
