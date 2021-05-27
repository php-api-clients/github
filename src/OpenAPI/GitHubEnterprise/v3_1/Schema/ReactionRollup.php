<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ReactionRollup
{
    public const SCHEMA_TITLE = 'Reaction Rollup';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $url = null;
    private ?int $total_count = null;
    private ?int $_PLUSES_1 = null;
    private ?int $_MINUS_1 = null;
    private ?int $laugh = null;
    private ?int $confused = null;
    private ?int $heart = null;
    private ?int $hooray = null;
    private ?int $eyes = null;
    private ?int $rocket = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function total_count() : ?int
    {
        return $this->total_count;
    }
    public function _PLUSES_1() : ?int
    {
        return $this->_PLUSES_1;
    }
    public function _MINUS_1() : ?int
    {
        return $this->_MINUS_1;
    }
    public function laugh() : ?int
    {
        return $this->laugh;
    }
    public function confused() : ?int
    {
        return $this->confused;
    }
    public function heart() : ?int
    {
        return $this->heart;
    }
    public function hooray() : ?int
    {
        return $this->hooray;
    }
    public function eyes() : ?int
    {
        return $this->eyes;
    }
    public function rocket() : ?int
    {
        return $this->rocket;
    }
}
