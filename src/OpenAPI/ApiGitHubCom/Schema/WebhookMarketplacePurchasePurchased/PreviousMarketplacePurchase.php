<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMarketplacePurchasePurchased;

final class PreviousMarketplacePurchase
{
    public const SCHEMA_JSON = '{"title":"Marketplace Purchase","required":["account","billing_cycle","unit_count","on_free_trial","free_trial_ends_on","plan"],"type":"object","properties":{"account":{"required":["type","id","node_id","login","organization_billing_email"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organization_billing_email":{"type":["string","null"]},"type":{"type":"string"}}},"billing_cycle":{"type":"string"},"free_trial_ends_on":{"type":["null"]},"next_billing_date":{"type":["string","null"]},"on_free_trial":{"type":"boolean"},"plan":{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"bullets":{"type":"array","items":{"type":"string"}},"description":{"type":"string"},"has_free_trial":{"type":"boolean"},"id":{"type":"integer"},"monthly_price_in_cents":{"type":"integer"},"name":{"type":"string"},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string"},"unit_name":{"type":["string","null"]},"yearly_price_in_cents":{"type":"integer"}}},"unit_count":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Marketplace Purchase';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PreviousMarketplacePurchase\Account $account;
    public readonly string $billing_cycle;
    public readonly mixed $free_trial_ends_on;
    public readonly ?string $next_billing_date;
    public readonly bool $on_free_trial;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PreviousMarketplacePurchase\Plan $plan;
    public readonly int $unit_count;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PreviousMarketplacePurchase\Account $account, string $billing_cycle, mixed $free_trial_ends_on, string $next_billing_date, bool $on_free_trial, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PreviousMarketplacePurchase\Plan $plan, int $unit_count)
    {
        $this->account = $account;
        $this->billing_cycle = $billing_cycle;
        $this->free_trial_ends_on = $free_trial_ends_on;
        $this->next_billing_date = $next_billing_date;
        $this->on_free_trial = $on_free_trial;
        $this->plan = $plan;
        $this->unit_count = $unit_count;
    }
}
