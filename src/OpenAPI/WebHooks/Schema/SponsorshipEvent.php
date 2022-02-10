<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class SponsorshipEvent
{
    public const SCHEMA_TITLE = 'sponsorship_event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    private array $sponsorship = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    public function action() : string
    {
        return $this->action;
    }
    public function sponsorship() : array
    {
        return $this->sponsorship;
    }
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
}
