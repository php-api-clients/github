<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\GitTag;

final class Tagger
{
    public const SCHEMA_JSON = '{"required":["date","email","name"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'GitTag\\Tagger';
    public const SCHEMA_DESCRIPTION = '';
    private string $date;
    private string $email;
    private string $name;
    public function date() : string
    {
        return $this->date;
    }
    public function email() : string
    {
        return $this->email;
    }
    public function name() : string
    {
        return $this->name;
    }
}
