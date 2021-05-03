<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class CodeScanningAnalysisSarifFile
{
    public const SCHEMA_TITLE = 'code-scanning-analysis-sarif-file';
    public const SPL_HASH = '000000005f182cea00000000682da57f';
    public const SCHEMA_DESCRIPTION = 'A Base64 string representing the SARIF file to upload. You must first compress your SARIF file using [`gzip`](http://www.gnu.org/software/gzip/manual/gzip.html) and then translate the contents of the file into a Base64 encoding string. For more information, see "[SARIF support for code scanning](https://docs.github.com/enterprise-server@3.0/github/finding-security-vulnerabilities-and-errors-in-your-code/sarif-support-for-code-scanning)."';
}
