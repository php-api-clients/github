<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PreviousMarketplacePurchase;

final class Plan
{
    public const SCHEMA_JSON = '{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"bullets":{"type":"array","items":{"type":"string"}},"description":{"type":"string"},"has_free_trial":{"type":"boolean"},"id":{"type":"integer"},"monthly_price_in_cents":{"type":"integer"},"name":{"type":"string"},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string"},"unit_name":{"type":["string","null"]},"yearly_price_in_cents":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'PreviousMarketplacePurchase\\Plan';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Plan\Bullets>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Plan\Bullets::class)
     */
    private array $bullets = array();
    private string $description;
    private bool $has_free_trial;
    private int $id;
    private int $monthly_price_in_cents;
    private string $name;
    private string $price_model;
    private $unit_name;
    private int $yearly_price_in_cents;
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Plan\Bullets>
     */
    public function bullets() : array
    {
        return $this->bullets;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function has_free_trial() : bool
    {
        return $this->has_free_trial;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function monthly_price_in_cents() : int
    {
        return $this->monthly_price_in_cents;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function price_model() : string
    {
        return $this->price_model;
    }
    public function unit_name()
    {
        return $this->unit_name;
    }
    public function yearly_price_in_cents() : int
    {
        return $this->yearly_price_in_cents;
    }
}
