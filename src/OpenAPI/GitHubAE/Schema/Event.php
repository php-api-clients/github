<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Event
{
    public const SCHEMA_TITLE = 'Event';
    public const SPL_HASH = '000000001f7786f3000000002b0b9da2';
    public const SCHEMA_DESCRIPTION = 'Event';
    private ?string $id = null;
    private ?string $type = null;
    /**
     * Actor
     */
    private ?object $actor = null;
    private ?object $repo = null;
    /**
     * Actor
     */
    private ?object $org = null;
    private ?object $payload = null;
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
    public function actor() : ?object
    {
        return $this->actor;
    }
    public function repo() : ?object
    {
        return $this->repo;
    }
    public function org() : ?object
    {
        return $this->org;
    }
    public function payload() : ?object
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
