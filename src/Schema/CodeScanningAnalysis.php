<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CodeScanningAnalysis
{
    public const SCHEMA_JSON = '{"required":["ref","commit_sha","analysis_key","environment","error","created_at","results_count","rules_count","id","url","sarif_id","tool","deletable","warning"],"type":"object","properties":{"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`."},"commit_sha":{"maxLength":40,"minLength":40,"pattern":"^[0-9a-fA-F]+$","type":"string","description":"The SHA of the commit to which the analysis you are uploading relates."},"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which this analysis was performed."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code."},"error":{"type":"string","examples":["error reading field xyz"]},"created_at":{"type":"string","description":"The time that the analysis was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"results_count":{"type":"integer","description":"The total number of results in the analysis."},"rules_count":{"type":"integer","description":"The total number of rules used in the analysis."},"id":{"type":"integer","description":"Unique identifier for this analysis."},"url":{"type":"string","description":"The REST API URL of the analysis resource.","format":"uri","readOnly":true},"sarif_id":{"type":"string","description":"An identifier for the upload.","examples":["6c81cd8e-b078-4ac3-a3be-1dad7dbd0b53"]},"tool":{"type":"object","properties":{"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis."},"version":{"type":["string","null"],"description":"The version of the tool used to generate the code scanning analysis."},"guid":{"type":["string","null"],"description":"The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data."}}},"deletable":{"type":"boolean"},"warning":{"type":"string","description":"Warning generated when processing the analysis","examples":["123 results were ignored"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated_ref_null","commit_sha":"generated_commit_sha_null","analysis_key":"generated_analysis_key_null","environment":"generated_environment_null","category":"generated_category_null","error":"error reading field xyz","created_at":"1970-01-01T00:00:00+00:00","results_count":13,"rules_count":13,"id":13,"url":"https:\\/\\/example.com\\/","sarif_id":"6c81cd8e-b078-4ac3-a3be-1dad7dbd0b53","tool":{"name":"generated_name_null","version":"generated_version_null","guid":"generated_guid_null"},"deletable":false,"warning":"123 results were ignored"}';
    /**
    * ref: The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
    * commitSha: The SHA of the commit to which the analysis you are uploading relates.
    * analysisKey: Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
    * environment: Identifies the variable values associated with the environment in which this analysis was performed.
    * category: Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.
    * createdAt: The time that the analysis was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
    * resultsCount: The total number of results in the analysis.
    * rulesCount: The total number of rules used in the analysis.
    * id: Unique identifier for this analysis.
    * url: The REST API URL of the analysis resource.
    * sarifId: An identifier for the upload.
    * warning: Warning generated when processing the analysis
    */
    public function __construct(public string $ref, #[\EventSauce\ObjectHydrator\MapFrom('commit_sha')] public string $commitSha, #[\EventSauce\ObjectHydrator\MapFrom('analysis_key')] public string $analysisKey, public string $environment, public ?string $category, public string $error, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('results_count')] public int $resultsCount, #[\EventSauce\ObjectHydrator\MapFrom('rules_count')] public int $rulesCount, public int $id, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('sarif_id')] public string $sarifId, public Schema\CodeScanningAnalysisTool $tool, public bool $deletable, public string $warning)
    {
    }
}
