<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\CreateTagProtection\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["pattern"],"type":"object","properties":{"pattern":{"type":"string","description":"An optional glob pattern to match against when enforcing tag protection."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An optional glob pattern to match against when enforcing tag protection.
     */
    public ?string $pattern;

    public function __construct(string $pattern)
    {
        $this->pattern = $pattern;
    }
}
