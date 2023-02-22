<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class ReactionRollup
{
    public const SCHEMA_JSON = '{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Reaction Rollup';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $url;
    public ?int $total_count;
    public ?int $_PLUSES_1;
    public ?int $_MINUS_1;
    public ?int $laugh;
    public ?int $confused;
    public ?int $heart;
    public ?int $hooray;
    public ?int $eyes;
    public ?int $rocket;
    public function __construct(string $url, int $total_count, int $_PLUSES_1, int $_MINUS_1, int $laugh, int $confused, int $heart, int $hooray, int $eyes, int $rocket)
    {
        $this->url = $url;
        $this->total_count = $total_count;
        $this->_PLUSES_1 = $_PLUSES_1;
        $this->_MINUS_1 = $_MINUS_1;
        $this->laugh = $laugh;
        $this->confused = $confused;
        $this->heart = $heart;
        $this->hooray = $hooray;
        $this->eyes = $eyes;
        $this->rocket = $rocket;
    }
}
