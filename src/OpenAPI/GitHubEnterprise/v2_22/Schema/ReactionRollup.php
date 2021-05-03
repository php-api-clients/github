<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ReactionRollup
{
    public const SCHEMA_TITLE = 'Reaction Rollup';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $url = null;
    private ?int $total_count = null;
    private ?int $+1 = null;
    private ?int $-1 = null;
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
    public function +1() : ?int
    {
        return $this->+1;
    }
    public function -1() : ?int
    {
        return $this->-1;
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
