<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag;

final class Tagger
{
    public const SCHEMA_JSON = '{"required":["date","email","name"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'GitTag\\Tagger';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $date;
    public readonly string $email;
    public readonly string $name;
    public function __construct(string $date, string $email, string $name)
    {
        $this->date = $date;
        $this->email = $email;
        $this->name = $name;
    }
}
