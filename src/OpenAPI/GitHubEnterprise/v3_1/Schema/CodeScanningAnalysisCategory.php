<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CodeScanningAnalysisCategory
{
    public const SCHEMA_TITLE       = 'code-scanning-analysis-category';
    public const SCHEMA_DESCRIPTION = 'Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.';
}