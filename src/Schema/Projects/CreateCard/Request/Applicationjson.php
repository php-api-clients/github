<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Projects\CreateCard\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["note"],"type":"object","properties":{"note":{"type":["string","null"],"description":"The project card\'s note","examples":["Update all gems"]}}},{"required":["content_id","content_type"],"type":"object","properties":{"content_id":{"type":"integer","description":"The unique identifier of the content associated with the card","examples":[42]},"content_type":{"type":"string","description":"The piece of content associated with the card","examples":["PullRequest"]}}}]}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
