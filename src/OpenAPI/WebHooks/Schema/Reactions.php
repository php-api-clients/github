<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Reactions
{
    public const SCHEMA_TITLE = 'Reactions';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private int $total_count;
    private ?int $_PLUSES_1 = null;
    private ?int $_MINUS_1 = null;
    private int $laugh;
    private int $hooray;
    private int $confused;
    private int $heart;
    private int $rocket;
    private int $eyes;
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
    public function hooray() : int
    {
        return $this->hooray;
    }
    public function confused() : int
    {
        return $this->confused;
    }
    public function heart() : int
    {
        return $this->heart;
    }
    public function rocket() : int
    {
        return $this->rocket;
    }
    public function eyes() : int
    {
        return $this->eyes;
    }
}
