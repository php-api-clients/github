<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MarketplaceListingPlan
{
    public const SCHEMA_TITLE = 'Marketplace Listing Plan';
    public const SPL_HASH = '00000000084e0a9b0000000020f58f84';
    public const SCHEMA_DESCRIPTION = 'Marketplace Listing Plan';
    private ?string $url = null;
    private ?string $accounts_url = null;
    private ?int $id = null;
    private ?int $number = null;
    private ?string $name = null;
    private ?string $description = null;
    private ?int $monthly_price_in_cents = null;
    private ?int $yearly_price_in_cents = null;
    private ?string $price_model = null;
    private ?bool $has_free_trial = null;
    private ?string $unit_name = null;
    private ?string $state = null;
    private array $bullets = array();
    public function url() : ?string
    {
        return $this->url;
    }
    public function accounts_url() : ?string
    {
        return $this->accounts_url;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function number() : ?int
    {
        return $this->number;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function monthly_price_in_cents() : ?int
    {
        return $this->monthly_price_in_cents;
    }
    public function yearly_price_in_cents() : ?int
    {
        return $this->yearly_price_in_cents;
    }
    public function price_model() : ?string
    {
        return $this->price_model;
    }
    public function has_free_trial() : ?bool
    {
        return $this->has_free_trial;
    }
    public function unit_name() : ?string
    {
        return $this->unit_name;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function bullets() : array
    {
        return $this->bullets;
    }
}
