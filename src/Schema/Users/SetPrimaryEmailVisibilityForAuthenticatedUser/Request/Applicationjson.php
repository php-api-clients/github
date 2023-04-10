<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Users\SetPrimaryEmailVisibilityForAuthenticatedUser\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["visibility"],"type":"object","properties":{"visibility":{"enum":["public","private"],"type":"string","description":"Denotes whether an email is publicly visible."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"visibility":"public"}';
    /**
     * visibility: Denotes whether an email is publicly visible.
     */
    public function __construct(public string $visibility)
    {
    }
}
