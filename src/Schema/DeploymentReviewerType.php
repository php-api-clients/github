<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
