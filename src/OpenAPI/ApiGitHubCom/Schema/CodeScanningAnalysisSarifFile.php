<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAnalysisSarifFile
{
    public const SCHEMA_TITLE = 'code-scanning-analysis-sarif-file';
    public const SPL_HASH = '00000000252f456a0000000029de5079';
    public const SCHEMA_DESCRIPTION = 'A Base64 string representing the SARIF file to upload. You must first compress your SARIF file using [`gzip`](http://www.gnu.org/software/gzip/manual/gzip.html) and then translate the contents of the file into a Base64 encoding string. For more information, see "[SARIF support for code scanning](https://docs.github.com/github/finding-security-vulnerabilities-and-errors-in-your-code/sarif-support-for-code-scanning)."';
}
