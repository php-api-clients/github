<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Sponsorship_Created
{
    public const SCHEMA_TITLE = 'sponsorship created event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private array $sponsorship = array();
    private array $sender = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function sponsorship() : array
    {
        return $this->sponsorship;
    }
    public function sender() : array
    {
        return $this->sender;
    }
}
