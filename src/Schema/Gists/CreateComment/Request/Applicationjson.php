<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Gists\CreateComment\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"maxLength":65535,"type":"string","description":"The comment text.","examples":["Body of the attachment"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"Body of the attachment"}';
    /**
     * body: The comment text.
     */
    public function __construct(public ?string $body)
    {
    }
}
