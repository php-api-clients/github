<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory;

final readonly class Cvss
{
    public const SCHEMA_JSON = '{"required":["vector_string","score"],"type":"object","properties":{"score":{"type":"number"},"vector_string":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $score;
    public ?string $vector_string;
    public function __construct(int $score, string $vector_string)
    {
        $this->score = $score;
        $this->vector_string = $vector_string;
    }
}
