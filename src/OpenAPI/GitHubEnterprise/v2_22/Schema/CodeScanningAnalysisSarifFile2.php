<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CodeScanningAnalysisSarifFile2
{
    public const SCHEMA_TITLE = 'code-scanning-analysis-sarif-file-2';
    public const SCHEMA_DESCRIPTION = 'A Base64 string representing the SARIF file to upload. You must first compress your SARIF file using [`gzip`](http://www.gnu.org/software/gzip/manual/gzip.html) and then translate the contents of the file into a Base64 encoding string. For more information, see "[SARIF support for code scanning](https://docs.github.com/enterprise-server@2.22/github/finding-security-vulnerabilities-and-errors-in-your-code/integrating-with-code-scanning/sarif-support-for-code-scanning)."';
}
