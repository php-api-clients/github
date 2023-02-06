<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UploadSarif\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["commit_sha","ref","sarif"],"type":"object","properties":{"commit_sha":{"maxLength":40,"minLength":40,"pattern":"^[0-9a-fA-F]+$","type":"string","description":"The SHA of the commit to which the analysis you are uploading relates."},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`."},"sarif":{"type":"string","description":"A Base64 string representing the SARIF file to upload. You must first compress your SARIF file using [`gzip`](http:\\/\\/www.gnu.org\\/software\\/gzip\\/manual\\/gzip.html) and then translate the contents of the file into a Base64 encoding string. For more information, see \\"[SARIF support for code scanning](https:\\/\\/docs.github.com\\/code-security\\/secure-coding\\/sarif-support-for-code-scanning).\\""},"checkout_uri":{"type":"string","description":"The base directory used in the analysis, as it appears in the SARIF file.\\nThis property is used to convert file paths from absolute to relative, so that alerts can be mapped to their correct location in the repository.","format":"uri","examples":["file:\\/\\/\\/github\\/workspace\\/"]},"started_at":{"type":"string","description":"The time that the analysis run began. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"tool_name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis. If this parameter is not used, the tool name defaults to \\"API\\". If the uploaded SARIF contains a tool GUID, this will be available for filtering using the `tool_guid` parameter of operations such as `GET \\/repos\\/{owner}\\/{repo}\\/code-scanning\\/alerts`."},"validate":{"type":"boolean","description":"Whether the SARIF file will be validated according to the code scanning specifications.\\nThis parameter is intended to help integrators ensure that the uploaded SARIF files are correctly rendered by code scanning."}}}';
    public const SCHEMA_EXAMPLE = '{"checkout_uri":"file:\\/\\/\\/github\\/workspace\\/"}';
    public const SCHEMA_TITLE = 'UploadSarif\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The SHA of the commit to which the analysis you are uploading relates.
     */
    public readonly string $commit_sha;
    /**
    * The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
    */
    public readonly string $ref;
    /**
     * A Base64 string representing the SARIF file to upload. You must first compress your SARIF file using [`gzip`](http://www.gnu.org/software/gzip/manual/gzip.html) and then translate the contents of the file into a Base64 encoding string. For more information, see "[SARIF support for code scanning](https://docs.github.com/code-security/secure-coding/sarif-support-for-code-scanning)."
     */
    public readonly string $sarif;
    /**
    * The base directory used in the analysis, as it appears in the SARIF file.
    This property is used to convert file paths from absolute to relative, so that alerts can be mapped to their correct location in the repository.
    */
    public readonly ?string $checkout_uri;
    /**
     * The time that the analysis run began. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly ?string $started_at;
    /**
     * The name of the tool used to generate the code scanning analysis. If this parameter is not used, the tool name defaults to "API". If the uploaded SARIF contains a tool GUID, this will be available for filtering using the `tool_guid` parameter of operations such as `GET /repos/{owner}/{repo}/code-scanning/alerts`.
     */
    public readonly ?string $tool_name;
    /**
    * Whether the SARIF file will be validated according to the code scanning specifications.
    This parameter is intended to help integrators ensure that the uploaded SARIF files are correctly rendered by code scanning.
    */
    public readonly ?bool $validate;
    public function __construct(string $commit_sha, string $ref, string $sarif, string $checkout_uri, string $started_at, string $tool_name, bool $validate)
    {
        $this->commit_sha = $commit_sha;
        $this->ref = $ref;
        $this->sarif = $sarif;
        $this->checkout_uri = $checkout_uri;
        $this->started_at = $started_at;
        $this->tool_name = $tool_name;
        $this->validate = $validate;
    }
}
