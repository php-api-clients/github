<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Teams\CreateDiscussionCommentInOrg\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The discussion comment\'s body text."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"generated"}';

    /**
     * body: The discussion comment's body text.
     */
    public function __construct(public string $body)
    {
    }
}
