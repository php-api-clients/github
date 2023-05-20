<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Pulls\CreateReplyForReviewComment\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The text of the review comment."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"generated"}';

    /**
     * body: The text of the review comment.
     */
    public function __construct(public string $body)
    {
    }
}
