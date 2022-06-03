<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ReactionRollup
{
    public const SCHEMA_TITLE = 'Reaction Rollup';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private int $total_count;
    private ?int $_PLUSES_1 = null;
    private ?int $_MINUS_1 = null;
    private int $laugh;
    private int $confused;
    private int $heart;
    private int $hooray;
    private int $eyes;
    private int $rocket;
    public function url() : string
    {
        return $this->url;
    }
    public function total_count() : int
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
    public function laugh() : int
    {
        return $this->laugh;
    }
    public function confused() : int
    {
        return $this->confused;
    }
    public function heart() : int
    {
        return $this->heart;
    }
    public function hooray() : int
    {
        return $this->hooray;
    }
    public function eyes() : int
    {
        return $this->eyes;
    }
    public function rocket() : int
    {
        return $this->rocket;
    }
}
