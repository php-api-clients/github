<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MarketplaceListingPlan
{
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
    private boolean $has_free_trial;
    private string $unit_name;
    private string $state;
    private array $bullets;
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
    public function has_free_trial() : boolean
    {
        return $this->has_free_trial;
    }
    public function unit_name() : string
    {
        return $this->unit_name;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function bullets() : array
    {
        return $this->bullets;
    }
}