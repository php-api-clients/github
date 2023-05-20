<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Checks\CreateSuite\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["head_sha"],"type":"object","properties":{"head_sha":{"type":"string","description":"The sha of the head commit."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"head_sha":"generated"}';

    /**
     * headSha: The sha of the head commit.
     */
    public function __construct(#[MapFrom('head_sha')] public string $headSha)
    {
    }
}
