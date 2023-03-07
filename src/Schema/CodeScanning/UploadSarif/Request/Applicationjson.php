<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CodeScanning\UploadSarif\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["commit_sha","ref","sarif"],"type":"object","properties":{"commit_sha":{"maxLength":40,"minLength":40,"pattern":"^[0-9a-fA-F]+$","type":"string","description":"The SHA of the commit to which the analysis you are uploading relates."},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`."},"sarif":{"type":"string","description":"A Base64 string representing the SARIF file to upload. You must first compress your SARIF file using [`gzip`](http:\\/\\/www.gnu.org\\/software\\/gzip\\/manual\\/gzip.html) and then translate the contents of the file into a Base64 encoding string. For more information, see \\"[SARIF support for code scanning](https:\\/\\/docs.github.com\\/code-security\\/secure-coding\\/sarif-support-for-code-scanning).\\""},"checkout_uri":{"type":"string","description":"The base directory used in the analysis, as it appears in the SARIF file.\\nThis property is used to convert file paths from absolute to relative, so that alerts can be mapped to their correct location in the repository.","format":"uri","examples":["file:\\/\\/\\/github\\/workspace\\/"]},"started_at":{"type":"string","description":"The time that the analysis run began. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"tool_name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis. If this parameter is not used, the tool name defaults to \\"API\\". If the uploaded SARIF contains a tool GUID, this will be available for filtering using the `tool_guid` parameter of operations such as `GET \\/repos\\/{owner}\\/{repo}\\/code-scanning\\/alerts`."},"validate":{"type":"boolean","description":"Whether the SARIF file will be validated according to the code scanning specifications.\\nThis parameter is intended to help integrators ensure that the uploaded SARIF files are correctly rendered by code scanning."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"commit_sha":"generated_commit_sha","ref":"generated_ref","sarif":"generated_sarif","checkout_uri":"file:\\/\\/\\/github\\/workspace\\/","started_at":"generated_started_at","tool_name":"generated_tool_name","validate":false}';
    /**
    * commit_sha: The SHA of the commit to which the analysis you are uploading relates.
    * ref: The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
    * sarif: A Base64 string representing the SARIF file to upload. You must first compress your SARIF file using [`gzip`](http://www.gnu.org/software/gzip/manual/gzip.html) and then translate the contents of the file into a Base64 encoding string. For more information, see "[SARIF support for code scanning](https://docs.github.com/code-security/secure-coding/sarif-support-for-code-scanning)."
    * checkout_uri: The base directory used in the analysis, as it appears in the SARIF file.
    This property is used to convert file paths from absolute to relative, so that alerts can be mapped to their correct location in the repository.
    * started_at: The time that the analysis run began. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    * tool_name: The name of the tool used to generate the code scanning analysis. If this parameter is not used, the tool name defaults to "API". If the uploaded SARIF contains a tool GUID, this will be available for filtering using the `tool_guid` parameter of operations such as `GET /repos/{owner}/{repo}/code-scanning/alerts`.
    * validate: Whether the SARIF file will be validated according to the code scanning specifications.
    This parameter is intended to help integrators ensure that the uploaded SARIF files are correctly rendered by code scanning.
    */
    public function __construct(public ?string $commit_sha, public ?string $ref, public ?string $sarif, public string $checkout_uri, public string $started_at, public string $tool_name, public bool $validate)
    {
    }
}
