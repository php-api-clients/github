<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

abstract readonly class Abstract8fe3c5a20c02b2b701f1bfd66504f76f
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"title":{"type":"string","description":"The discussion post\'s title."},"body":{"type":"string","description":"The discussion post\'s body text."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title_null","body":"generated_body_null"}';

    /**
     * title: The discussion post's title.
     * body: The discussion post's body text.
     */
    public function __construct(public ?string $title, public ?string $body)
    {
    }
}
