<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TimelineCrossReferencedEvent
{
    public const SCHEMA_TITLE = 'Timeline Cross Referenced Event';
    public const SCHEMA_DESCRIPTION = 'Timeline Cross Referenced Event';
    private string $event;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $actor = null;
    private string $created_at;
    private string $updated_at;
    private array $source = array();
    public function event() : string
    {
        return $this->event;
    }
    /**
     * Simple User
     */
    public function actor() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->actor;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function source() : array
    {
        return $this->source;
    }
}
