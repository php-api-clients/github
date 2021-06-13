<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Sponsorship;

final class PendingTierChange
{
    public const SCHEMA_TITLE = 'sponsorship pending_tier_change event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    private array $sponsorship = array();
    /**
     * The `pending_cancellation` and `pending_tier_change` event types will include the date the cancellation or tier change will take effect.
     */
    private string $effective_date;
    private array $changes = array();
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
    /**
     * The `pending_cancellation` and `pending_tier_change` event types will include the date the cancellation or tier change will take effect.
     */
    public function effective_date() : string
    {
        return $this->effective_date;
    }
    public function changes() : array
    {
        return $this->changes;
    }
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
}
