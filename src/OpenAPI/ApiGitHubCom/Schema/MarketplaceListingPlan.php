<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MarketplaceListingPlan
{
    public const SCHEMA_JSON = '{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}';
    public const SCHEMA_TITLE = 'Marketplace Listing Plan';
    public const SCHEMA_DESCRIPTION = 'Marketplace Listing Plan';
    public readonly string $url;
    public readonly string $accounts_url;
    public readonly int $id;
    public readonly int $number;
    public readonly string $name;
    public readonly string $description;
    public readonly int $monthly_price_in_cents;
    public readonly int $yearly_price_in_cents;
    public readonly string $price_model;
    public readonly bool $has_free_trial;
    public readonly ?string $unit_name;
    public readonly string $state;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan\Bullets>
     */
    public readonly array $bullets;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan\Bullets> $bullets
     */
    public function __construct(string $url, string $accounts_url, int $id, int $number, string $name, string $description, int $monthly_price_in_cents, int $yearly_price_in_cents, string $price_model, bool $has_free_trial, string $unit_name, string $state, array $bullets)
    {
        $this->url = $url;
        $this->accounts_url = $accounts_url;
        $this->id = $id;
        $this->number = $number;
        $this->name = $name;
        $this->description = $description;
        $this->monthly_price_in_cents = $monthly_price_in_cents;
        $this->yearly_price_in_cents = $yearly_price_in_cents;
        $this->price_model = $price_model;
        $this->has_free_trial = $has_free_trial;
        $this->unit_name = $unit_name;
        $this->state = $state;
        $this->bullets = $bullets;
    }
}
