<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Event
{
    public const SCHEMA_TITLE = 'Event';
    public const SCHEMA_DESCRIPTION = 'Event';
    private string $id;
    private ?string $type = null;
    /**
     * Actor
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Actor::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Actor $actor;
    private array $repo = array();
    /**
     * Actor
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Actor::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Actor $org = null;
    private array $payload = array();
    private bool $public;
    private ?string $created_at = null;
    public function id() : string
    {
        return $this->id;
    }
    public function type() : ?string
    {
        return $this->type;
    }
    /**
     * Actor
     */
    public function actor() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Actor
    {
        return $this->actor;
    }
    public function repo() : array
    {
        return $this->repo;
    }
    /**
     * Actor
     */
    public function org() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Actor
    {
        return $this->org;
    }
    public function payload() : array
    {
        return $this->payload;
    }
    public function public() : bool
    {
        return $this->public;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
}
