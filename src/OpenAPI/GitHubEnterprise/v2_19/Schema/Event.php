<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Event
{
    public const SCHEMA_TITLE = 'Event';
    public const SCHEMA_DESCRIPTION = 'Event';
    private ?string $id = null;
    private ?string $type = null;
    /**
     * Actor
     */
    private array $actor = array();
    private array $repo = array();
    /**
     * Actor
     */
    private array $org = array();
    private array $payload = array();
    private ?bool $public = null;
    private ?string $created_at = null;
    public function id() : ?string
    {
        return $this->id;
    }
    public function type() : ?string
    {
        return $this->type;
    }
    public function actor() : array
    {
        return $this->actor;
    }
    public function repo() : array
    {
        return $this->repo;
    }
    public function org() : array
    {
        return $this->org;
    }
    public function payload() : array
    {
        return $this->payload;
    }
    public function public() : ?bool
    {
        return $this->public;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
}
