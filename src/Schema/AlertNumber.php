<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class AlertNumber
{
    public const SCHEMA_JSON = '{"type":"integer","description":"The security alert number.","readOnly":true}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The security alert number.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
