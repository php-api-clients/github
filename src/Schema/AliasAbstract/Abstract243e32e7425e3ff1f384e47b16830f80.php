<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
abstract readonly class Abstract243e32e7425e3ff1f384e47b16830f80
{
    public const SCHEMA_JSON = '{"title":"Alert Instance","required":["ref","analysis_key","environment","state"],"type":["object","null"],"properties":{"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed."},"classifications":{"type":"array","items":{"type":"string"}},"commit_sha":{"type":"string"},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"location":{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}},"message":{"type":"object","properties":{"text":{"type":"string"}}},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`."},"state":{"enum":["open","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."}}}';
    public const SCHEMA_TITLE = 'Alert Instance';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"analysis_key":"generated_analysis_key_null","category":"generated_category_null","classifications":["generated_classifications_null"],"commit_sha":"generated_commit_sha_null","environment":"generated_environment_null","location":{"end_column":13,"end_line":13,"path":"generated_path_null","start_column":13,"start_line":13},"message":{"text":"generated_text_null"},"ref":"generated_ref_null","state":"open"}';
    /**
     * analysisKey: Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     * category: Identifies the configuration under which the analysis was executed.
     * @param ?array<string> $classifications
     * environment: Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     * ref: The full Git reference, formatted as `refs/heads/<branch name>`.
     * state: State of a code scanning alert.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('analysis_key')] public string $analysisKey, public ?string $category, public ?array $classifications, #[\EventSauce\ObjectHydrator\MapFrom('commit_sha')] public ?string $commitSha, public string $environment, public ?Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location $location, public ?Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Message $message, public string $ref, public string $state)
    {
    }
}
