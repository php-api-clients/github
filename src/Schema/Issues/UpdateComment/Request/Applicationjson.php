<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Issues\UpdateComment\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The contents of the comment."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"generated_body"}';
    /**
     * body: The contents of the comment.
     */
    public function __construct(public ?string $body)
    {
    }
}
