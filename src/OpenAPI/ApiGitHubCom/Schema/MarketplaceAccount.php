<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MarketplaceAccount
{
    public const SCHEMA_JSON = '{"title":"Marketplace Account","required":["url","id","type","login"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"id":{"type":"integer"},"type":{"type":"string"},"node_id":{"type":"string"},"login":{"type":"string"},"email":{"type":["string","null"],"format":"email"},"organization_billing_email":{"type":["string","null"],"format":"email"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Marketplace Account';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $url;
    public readonly int $id;
    public readonly string $type;
    public readonly ?string $node_id;
    public readonly string $login;
    public readonly ?string $email;
    public readonly ?string $organization_billing_email;
    public function __construct(string $url, int $id, string $type, string $node_id, string $login, string $email, string $organization_billing_email)
    {
        $this->url = $url;
        $this->id = $id;
        $this->type = $type;
        $this->node_id = $node_id;
        $this->login = $login;
        $this->email = $email;
        $this->organization_billing_email = $organization_billing_email;
    }
}
