<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Event
{
    public const SCHEMA_TITLE = 'Event';
    public const SCHEMA_DESCRIPTION = 'Event';
    private string $id;
    private $type;
    /**
     * Actor
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Actor::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Actor $actor;
    private array $repo = array();
    /**
     * Actor
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Actor::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Actor $org = null;
    private array $payload = array();
    private bool $public;
    private $created_at;
    public function id() : string
    {
        return $this->id;
    }
    public function type()
    {
        return $this->type;
    }
    /**
     * Actor
     */
    public function actor() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Actor
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
    public function org() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Actor
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
    public function created_at()
    {
        return $this->created_at;
    }
}
