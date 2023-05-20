<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\BranchProtection;

final readonly class RequiredSignatures
{
    public const SCHEMA_JSON         = '{"required":["url","enabled"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_signatures"]},"enabled":{"type":"boolean","examples":[true]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_signatures","enabled":true}';

    public function __construct(public string $url, public bool $enabled)
    {
    }
}
