<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MarketplacePurchase;

final class Plan
{
    public const SCHEMA_JSON = '{"required":["id","name","description","monthly_price_in_cents","yearly_price_in_cents","price_model","has_free_trial","unit_name","bullets"],"type":"object","properties":{"bullets":{"type":"array","items":{"type":"string"}},"description":{"type":"string"},"has_free_trial":{"type":"boolean"},"id":{"type":"integer"},"monthly_price_in_cents":{"type":"integer"},"name":{"type":"string"},"price_model":{"enum":["FREE","FLAT_RATE","PER_UNIT"],"type":"string"},"unit_name":{"type":["string","null"]},"yearly_price_in_cents":{"type":"integer"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'MarketplacePurchase\\Plan';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Plan\Bullets>
     */
    public readonly array $bullets;
    public readonly string $description;
    public readonly bool $has_free_trial;
    public readonly int $id;
    public readonly int $monthly_price_in_cents;
    public readonly string $name;
    public readonly string $price_model;
    public readonly ?string $unit_name;
    public readonly int $yearly_price_in_cents;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Plan\Bullets> $bullets
     */
    public function __construct(array $bullets, string $description, bool $has_free_trial, int $id, int $monthly_price_in_cents, string $name, string $price_model, string $unit_name, int $yearly_price_in_cents)
    {
        $this->bullets = $bullets;
        $this->description = $description;
        $this->has_free_trial = $has_free_trial;
        $this->id = $id;
        $this->monthly_price_in_cents = $monthly_price_in_cents;
        $this->name = $name;
        $this->price_model = $price_model;
        $this->unit_name = $unit_name;
        $this->yearly_price_in_cents = $yearly_price_in_cents;
    }
}
