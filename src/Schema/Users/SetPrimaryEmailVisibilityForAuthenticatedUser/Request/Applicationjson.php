<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Users\SetPrimaryEmailVisibilityForAuthenticatedUser\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["visibility"],"type":"object","properties":{"visibility":{"enum":["public","private"],"type":"string","description":"Denotes whether an email is publicly visible."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Denotes whether an email is publicly visible.
     */
    public ?string $visibility;
    public function __construct(string $visibility)
    {
        $this->visibility = $visibility;
    }
}
