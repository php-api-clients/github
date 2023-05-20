<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Users\SetPrimaryEmailVisibilityForAuthenticatedUser\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["visibility"],"type":"object","properties":{"visibility":{"enum":["public","private"],"type":"string","description":"Denotes whether an email is publicly visible."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"visibility":"private"}';

    /**
     * visibility: Denotes whether an email is publicly visible.
     */
    public function __construct(public string $visibility)
    {
    }
}
