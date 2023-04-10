<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class CodeScanningAlertEnvironment
{
    public const SCHEMA_JSON = '{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
