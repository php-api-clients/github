<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Checks\CreateSuite\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["head_sha"],"type":"object","properties":{"head_sha":{"type":"string","description":"The sha of the head commit."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The sha of the head commit.
     */
    public ?string $head_sha;
    public function __construct(string $head_sha)
    {
        $this->head_sha = $head_sha;
    }
}
