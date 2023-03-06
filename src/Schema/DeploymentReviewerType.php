<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class DeploymentReviewerType
{
    public const SCHEMA_JSON = '{"enum":["User","Team"],"type":"string","description":"The type of reviewer.","examples":["User"]}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The type of reviewer.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
