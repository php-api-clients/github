<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookWorkflowDispatch;

final readonly class Inputs
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string"},"number":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $name;
    public ?string $number;
    public function __construct(string $name, string $number)
    {
        $this->name = $name;
        $this->number = $number;
    }
}
