<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Pulls\UpdateReview\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The body text of the pull request review."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"generated"}';

    /**
     * body: The body text of the pull request review.
     */
    public function __construct(public string $body)
    {
    }
}
