<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMarketplacePurchaseCancelled\PreviousMarketplacePurchase;

final readonly class Account
{
    public const SCHEMA_JSON = '{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organization_billing_email":{"type":["string","null"]},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $id;
    public ?string $login;
    public ?string $node_id;
    public ?string $organization_billing_email;
    public ?string $type;
    public function __construct(int $id, string $login, string $node_id, string $organization_billing_email, string $type)
    {
        $this->id = $id;
        $this->login = $login;
        $this->node_id = $node_id;
        $this->organization_billing_email = $organization_billing_email;
        $this->type = $type;
    }
}
