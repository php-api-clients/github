<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\GitTag;

final readonly class Tagger
{
    public const SCHEMA_JSON = '{"required":["date","email","name"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $date;
    public ?string $email;
    public ?string $name;
    public function __construct(string $date, string $email, string $name)
    {
        $this->date = $date;
        $this->email = $email;
        $this->name = $name;
    }
}
