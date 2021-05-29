<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningAnalysisAnalysisKey
{
    public const SCHEMA_TITLE       = 'code-scanning-analysis-analysis-key';
    public const SCHEMA_DESCRIPTION = 'Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.';
}
