<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Language
{
    public const SCHEMA_JSON = '{"title":"Language","type":"object","description":"Language","additionalProperties":{"type":"integer"}}';
    public const SCHEMA_TITLE = 'Language';
    public const SCHEMA_DESCRIPTION = 'Language';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
