<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comments;

final class Reactions
{
    public const SCHEMA_JSON = '{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Reactions';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $_PLUSES_1 = null;
    private ?int $_MINUS_1 = null;
    private int $confused;
    private int $eyes;
    private int $heart;
    private int $hooray;
    private int $laugh;
    private int $rocket;
    private int $total_count;
    private string $url;
    public function _PLUSES_1() : ?int
    {
        return $this->_PLUSES_1;
    }
    public function _MINUS_1() : ?int
    {
        return $this->_MINUS_1;
    }
    public function confused() : int
    {
        return $this->confused;
    }
    public function eyes() : int
    {
        return $this->eyes;
    }
    public function heart() : int
    {
        return $this->heart;
    }
    public function hooray() : int
    {
        return $this->hooray;
    }
    public function laugh() : int
    {
        return $this->laugh;
    }
    public function rocket() : int
    {
        return $this->rocket;
    }
    public function total_count() : int
    {
        return $this->total_count;
    }
    public function url() : string
    {
        return $this->url;
    }
}
