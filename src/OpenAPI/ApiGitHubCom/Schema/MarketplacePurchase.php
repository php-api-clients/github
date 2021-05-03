<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MarketplacePurchase
{
    public const SCHEMA_TITLE = 'Marketplace Purchase';
    public const SPL_HASH = '0000000054d5f8de0000000071115dec';
    public const SCHEMA_DESCRIPTION = 'Marketplace Purchase';
    private string $url;
    private string $type;
    private int $id;
    private string $login;
    private string $organization_billing_email;
    private string $email;
    private object $marketplace_pending_change;
    private object $marketplace_purchase;
    public function url() : string
    {
        return $this->url;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function login() : string
    {
        return $this->login;
    }
    public function organization_billing_email() : string
    {
        return $this->organization_billing_email;
    }
    public function email() : string
    {
        return $this->email;
    }
    public function marketplace_pending_change() : object
    {
        return $this->marketplace_pending_change;
    }
    public function marketplace_purchase() : object
    {
        return $this->marketplace_purchase;
    }
}
