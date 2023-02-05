<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewIssue;

final class Reactions
{
    public const SCHEMA_JSON = '{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Reactions';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?int $_PLUSES_1;
    public readonly ?int $_MINUS_1;
    public readonly int $confused;
    public readonly int $eyes;
    public readonly int $heart;
    public readonly int $hooray;
    public readonly int $laugh;
    public readonly int $rocket;
    public readonly int $total_count;
    public readonly string $url;
    public function __construct(int $_PLUSES_1, int $_MINUS_1, int $confused, int $eyes, int $heart, int $hooray, int $laugh, int $rocket, int $total_count, string $url)
    {
        $this->_PLUSES_1 = $_PLUSES_1;
        $this->_MINUS_1 = $_MINUS_1;
        $this->confused = $confused;
        $this->eyes = $eyes;
        $this->heart = $heart;
        $this->hooray = $hooray;
        $this->laugh = $laugh;
        $this->rocket = $rocket;
        $this->total_count = $total_count;
        $this->url = $url;
    }
}
