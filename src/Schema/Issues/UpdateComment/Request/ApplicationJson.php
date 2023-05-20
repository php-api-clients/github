<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Issues\UpdateComment\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The contents of the comment."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"generated"}';

    /**
     * body: The contents of the comment.
     */
    public function __construct(public string $body)
    {
    }
}
