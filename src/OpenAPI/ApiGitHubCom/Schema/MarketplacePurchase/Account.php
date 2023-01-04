<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase;

final class Account
{
    public const SCHEMA_JSON = '{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organization_billing_email":{"type":["string","null"]},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'MarketplacePurchase\\Account';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $login;
    private string $node_id;
    private ?string $organization_billing_email;
    private string $type;
    public function id() : int
    {
        return $this->id;
    }
    public function login() : string
    {
        return $this->login;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function organization_billing_email() : ?string
    {
        return $this->organization_billing_email;
    }
    public function type() : string
    {
        return $this->type;
    }
}
