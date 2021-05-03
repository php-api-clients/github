<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MarketplacePurchase
{
    public const SCHEMA_TITLE = 'Marketplace Purchase';
    public const SCHEMA_DESCRIPTION = 'Marketplace Purchase';
    private ?string $url = null;
    private ?string $type = null;
    private ?int $id = null;
    private ?string $login = null;
    private ?string $organization_billing_email = null;
    private ?string $email = null;
    private ?object $marketplace_pending_change = null;
    private ?object $marketplace_purchase = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function type() : ?string
    {
        return $this->type;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function login() : ?string
    {
        return $this->login;
    }
    public function organization_billing_email() : ?string
    {
        return $this->organization_billing_email;
    }
    public function email() : ?string
    {
        return $this->email;
    }
    public function marketplace_pending_change() : ?object
    {
        return $this->marketplace_pending_change;
    }
    public function marketplace_purchase() : ?object
    {
        return $this->marketplace_purchase;
    }
}
