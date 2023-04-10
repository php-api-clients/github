<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class CodeScanningAnalysisCommitSha
{
    public const SCHEMA_JSON = '{"maxLength":40,"minLength":40,"pattern":"^[0-9a-fA-F]+$","type":"string","description":"The SHA of the commit to which the analysis you are uploading relates."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The SHA of the commit to which the analysis you are uploading relates.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
