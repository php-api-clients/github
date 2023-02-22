<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion;

final readonly class Reactions
{
    public const SCHEMA_JSON = '{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Reactions';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $_PLUSES_1;
    public ?int $_MINUS_1;
    public ?int $confused;
    public ?int $eyes;
    public ?int $heart;
    public ?int $hooray;
    public ?int $laugh;
    public ?int $rocket;
    public ?int $total_count;
    public ?string $url;
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
