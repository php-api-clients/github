<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningAnalysisSarifFile
{
    public const SCHEMA_TITLE = 'code-scanning-analysis-sarif-file';
    public const SCHEMA_DESCRIPTION = 'A Base64 string representing the SARIF file to upload. You must first compress your SARIF file using [`gzip`](http://www.gnu.org/software/gzip/manual/gzip.html) and then translate the contents of the file into a Base64 encoding string. For more information, see "[SARIF support for code scanning](https://docs.github.com/github-ae@latest/code-security/secure-coding/sarif-support-for-code-scanning)."';
}
