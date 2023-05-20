<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\BranchWithProtection;

final readonly class Links
{
    public const SCHEMA_JSON         = '{"required":["html","self"],"type":"object","properties":{"html":{"type":"string"},"self":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":"generated","self":"https:\\/\\/example.com\\/"}';

    public function __construct(public string $html, public string $self)
    {
    }
}
