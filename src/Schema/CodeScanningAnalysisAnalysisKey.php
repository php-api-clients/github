<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class CodeScanningAnalysisAnalysisKey
{
    public const SCHEMA_JSON = '{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.';
    public function __construct()
    {
    }
}
