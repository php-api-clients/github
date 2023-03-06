<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class SecretScanningAlertState
{
    public const SCHEMA_JSON = '{"enum":["open","resolved"],"type":"string","description":"Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
