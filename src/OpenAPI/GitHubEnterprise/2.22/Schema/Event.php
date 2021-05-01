<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Schema;

final class Event
{
    public const SCHEMA_TITLE = 'Event';
    public const SCHEMA_DESCRIPTION = 'Event';
    private string $id;
    private string $type;
    /**Actor**/
    private object $actor;
    private object $repo;
    /**Actor**/
    private object $org;
    private object $payload;
    private boolean $public;
    private string $created_at;
    public function id() : string
    {
        return $this->id;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function actor() : object
    {
        return $this->actor;
    }
    public function repo() : object
    {
        return $this->repo;
    }
    public function org() : object
    {
        return $this->org;
    }
    public function payload() : object
    {
        return $this->payload;
    }
    public function public() : boolean
    {
        return $this->public;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
}
