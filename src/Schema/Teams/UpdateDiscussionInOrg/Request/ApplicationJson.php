<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Teams\UpdateDiscussionInOrg\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"title":{"type":"string","description":"The discussion post\'s title."},"body":{"type":"string","description":"The discussion post\'s body text."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated","body":"generated"}';

    /**
     * title: The discussion post's title.
     * body: The discussion post's body text.
     */
    public function __construct(public ?string $title, public ?string $body)
    {
    }
}
