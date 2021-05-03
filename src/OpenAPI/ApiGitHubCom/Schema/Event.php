<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Event
{
    public const SCHEMA_TITLE = 'Event';
    public const SPL_HASH = '00000000252f5cfe0000000029de5079';
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
