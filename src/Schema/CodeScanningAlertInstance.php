<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CodeScanningAlertInstance
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`."},"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code."},"state":{"enum":["open","closed","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."},"commit_sha":{"type":"string"},"message":{"type":"object","properties":{"text":{"type":"string"}}},"location":{"type":"object","properties":{"path":{"type":"string"},"start_line":{"type":"integer"},"end_line":{"type":"integer"},"start_column":{"type":"integer"},"end_column":{"type":"integer"}},"description":"Describe a region within a file for the alert."},"html_url":{"type":"string"},"classifications":{"type":"array","items":{"enum":["source","generated","test","library",null],"type":["string","null"],"description":"A classification of the file. For example to identify it as generated."},"description":"Classifications that have been applied to the file that triggered the alert.\\nFor example identifying it as documentation, or a generated file."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated_ref_null","analysisKey":"generated_analysis_key_null","environment":"generated_environment_null","category":"generated_category_null","state":"open","commitSha":"generated_commit_sha_null","message":{"text":"generated_text_null"},"location":{"path":"generated_path_null","startLine":13,"endLine":13,"startColumn":13,"endColumn":13},"htmlUrl":"generated_html_url_null","classifications":["generated_classifications_null"]}';
    /**
    * ref: The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
    * analysisKey: Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
    * environment: Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
    * category: Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.
    * state: State of a code scanning alert.
    * location: Describe a region within a file for the alert.
    * classifications: Classifications that have been applied to the file that triggered the alert.
    For example identifying it as documentation, or a generated file.
    * @param ?array<string> $classifications
    */
    public function __construct(public ?string $ref, #[\EventSauce\ObjectHydrator\MapFrom('analysis_key')] public ?string $analysisKey, public ?string $environment, public ?string $category, public ?string $state, #[\EventSauce\ObjectHydrator\MapFrom('commit_sha')] public ?string $commitSha, public ?Schema\CodeScanningAlertInstance\Message $message, public ?Schema\CodeScanningAlertLocation $location, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?array $classifications)
    {
    }
}
