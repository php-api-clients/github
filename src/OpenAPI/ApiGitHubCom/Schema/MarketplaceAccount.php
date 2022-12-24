<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MarketplaceAccount
{
    public const SCHEMA_JSON = '{"title":"Marketplace Account","required":["url","id","type","login"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"id":{"type":"integer"},"type":{"type":"string"},"node_id":{"type":"string"},"login":{"type":"string"},"email":{"type":["string","null"],"format":"email"},"organization_billing_email":{"type":["string","null"],"format":"email"}}}';
    public const SCHEMA_TITLE = 'Marketplace Account';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private int $id;
    private string $type;
    private ?string $node_id = null;
    private string $login;
    private $email;
    private $organization_billing_email;
    public function url() : string
    {
        return $this->url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function login() : string
    {
        return $this->login;
    }
    public function email()
    {
        return $this->email;
    }
    public function organization_billing_email()
    {
        return $this->organization_billing_email;
    }
}
