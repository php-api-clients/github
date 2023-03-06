<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CodeScanningAlertInstance
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`."},"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code."},"state":{"enum":["open","closed","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."},"commit_sha":{"type":"string"},"message":{"type":"object","properties":{"text":{"type":"string"}}},"location":{"type":"object","properties":{"path":{"type":"string"},"start_line":{"type":"integer"},"end_line":{"type":"integer"},"start_column":{"type":"integer"},"end_column":{"type":"integer"}},"description":"Describe a region within a file for the alert."},"html_url":{"type":"string"},"classifications":{"type":"array","items":{"enum":["source","generated","test","library",null],"type":["string","null"],"description":"A classification of the file. For example to identify it as generated."},"description":"Classifications that have been applied to the file that triggered the alert.\\nFor example identifying it as documentation, or a generated file."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated_ref","analysis_key":"generated_analysis_key","environment":"generated_environment","category":"generated_category","state":"generated_state","commit_sha":"generated_commit_sha","message":{"text":"generated_text"},"location":{"path":"generated_path","start_line":13,"end_line":13,"start_column":13,"end_column":13},"html_url":"generated_html_url","classifications":["generated_classifications"]}';
    /**
    * ref: The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
    * analysis_key: Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
    * environment: Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
    * category: Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.
    * state: State of a code scanning alert.
    * location: Describe a region within a file for the alert.
    * classifications: Classifications that have been applied to the file that triggered the alert.
    For example identifying it as documentation, or a generated file.
    * @param ?array<string> $classifications
    */
    public function __construct(public ?string $ref, public ?string $analysis_key, public ?string $environment, public ?string $category, public ?string $state, public ?string $commit_sha, public ?Schema\CodeScanningAlertInstance\Message $message, public ?Schema\CodeScanningAlertLocation $location, public ?string $html_url, public ?array $classifications)
    {
    }
}
