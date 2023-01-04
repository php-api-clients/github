<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MarketplaceListingPlan
{
    public const SCHEMA_JSON = '{"title":"Marketplace Listing Plan","required":["url","accounts_url","id","number","name","description","has_free_trial","price_model","unit_name","monthly_price_in_cents","state","yearly_price_in_cents","bullets"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"]},"accounts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"]},"id":{"type":"integer","examples":[1313]},"number":{"type":"integer","examples":[3]},"name":{"type":"string","examples":["Pro"]},"description":{"type":"string","examples":["A professional-grade CI solution"]},"monthly_price_in_cents":{"type":"integer","examples":[1099]},"yearly_price_in_cents":{"type":"integer","examples":[11870]},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string","examples":["FLAT_RATE"]},"has_free_trial":{"type":"boolean","examples":[true]},"unit_name":{"type":["string","null"]},"state":{"type":"string","examples":["published"]},"bullets":{"type":"array","items":{"type":"string"},"examples":["Up to 25 private repositories","11 concurrent builds"]}},"description":"Marketplace Listing Plan"}';
    public const SCHEMA_TITLE = 'Marketplace Listing Plan';
    public const SCHEMA_DESCRIPTION = 'Marketplace Listing Plan';
    private string $url;
    private string $accounts_url;
    private int $id;
    private int $number;
    private string $name;
    private string $description;
    private int $monthly_price_in_cents;
    private int $yearly_price_in_cents;
    private string $price_model;
    private bool $has_free_trial;
    private $unit_name;
    private string $state;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan\Bullets>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan\Bullets::class)
     */
    private array $bullets = array();
    public function url() : string
    {
        return $this->url;
    }
    public function accounts_url() : string
    {
        return $this->accounts_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function monthly_price_in_cents() : int
    {
        return $this->monthly_price_in_cents;
    }
    public function yearly_price_in_cents() : int
    {
        return $this->yearly_price_in_cents;
    }
    public function price_model() : string
    {
        return $this->price_model;
    }
    public function has_free_trial() : bool
    {
        return $this->has_free_trial;
    }
    public function unit_name()
    {
        return $this->unit_name;
    }
    public function state() : string
    {
        return $this->state;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplaceListingPlan\Bullets>
     */
    public function bullets() : array
    {
        return $this->bullets;
    }
}
