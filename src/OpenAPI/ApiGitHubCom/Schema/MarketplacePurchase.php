<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MarketplacePurchase
{
    public const SCHEMA_JSON = '{"title":"Marketplace Purchase","required":["url","id","type","login","marketplace_purchase"],"type":"object","properties":{"url":{"type":"string"},"type":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"organization_billing_email":{"type":"string"},"email":{"type":["string","null"]},"marketplace_pending_change":{"type":["object","null"],"properties":{"is_installed":{"type":"boolean"},"effective_date":{"type":"string"},"unit_count":{"type":["integer","null"]},"id":{"type":"integer"},"plan":{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}}},"marketplace_purchase":{"type":"object","properties":{"billing_cycle":{"type":"string"},"next_billing_date":{"type":["string","null"]},"is_installed":{"type":"boolean"},"unit_count":{"type":["integer","null"]},"on_free_trial":{"type":"boolean"},"free_trial_ends_on":{"type":["string","null"]},"updated_at":{"type":"string"},"plan":{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}}}},"description":"Marketplace Purchase"}';
    public const SCHEMA_TITLE = 'Marketplace Purchase';
    public const SCHEMA_DESCRIPTION = 'Marketplace Purchase';
    public readonly string $url;
    public readonly string $type;
    public readonly int $id;
    public readonly string $login;
    public readonly ?string $organization_billing_email;
    public readonly ?string $email;
    public readonly array $marketplace_pending_change;
    public readonly array $marketplace_purchase;
    public function __construct(string $url, string $type, int $id, string $login, string $organization_billing_email, string $email, array $marketplace_pending_change, array $marketplace_purchase)
    {
        $this->url = $url;
        $this->type = $type;
        $this->id = $id;
        $this->login = $login;
        $this->organization_billing_email = $organization_billing_email;
        $this->email = $email;
        $this->marketplace_pending_change = $marketplace_pending_change;
        $this->marketplace_purchase = $marketplace_purchase;
    }
}
