<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ActionsEnabled
{
    public const SCHEMA_JSON = '{"type":"boolean","description":"Whether GitHub Actions is enabled on the repository."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Whether GitHub Actions is enabled on the repository.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
