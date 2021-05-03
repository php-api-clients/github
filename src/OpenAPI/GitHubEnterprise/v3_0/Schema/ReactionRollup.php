<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ReactionRollup
{
    public const SCHEMA_TITLE = 'Reaction Rollup';
    public const SPL_HASH = '000000001f1e282f000000004be6709d';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private int $total_count;
    private int $+1;
    private int $-1;
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
    public function +1() : int
    {
        return $this->+1;
    }
    public function -1() : int
    {
        return $this->-1;
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
