<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet243E32E7\Tiet425E3FF1\TietF384E47B;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet16830F80
{
    public const SCHEMA_JSON         = '{"title":"Alert Instance","required":["ref","analysis_key","environment","state"],"type":["object","null"],"properties":{"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed."},"classifications":{"type":"array","items":{"type":"string"}},"commit_sha":{"type":"string"},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"location":{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}},"message":{"type":"object","properties":{"text":{"type":"string"}}},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`."},"state":{"enum":["open","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."}}}';
    public const SCHEMA_TITLE        = 'Alert Instance';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"analysis_key":"generated","category":"generated","classifications":["generated","generated"],"commit_sha":"generated","environment":"generated","location":{"end_column":10,"end_line":8,"path":"generated","start_column":12,"start_line":10},"message":{"text":"generated"},"ref":"generated","state":"open"}';

    /**
     * analysisKey: Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     * category: Identifies the configuration under which the analysis was executed.
     * environment: Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     * ref: The full Git reference, formatted as `refs/heads/<branch name>`.
     * state: State of a code scanning alert.
     */
    public function __construct(#[MapFrom('analysis_key')]
    public string $analysisKey, public string|null $category, public array|null $classifications, #[MapFrom('commit_sha')]
    public string|null $commitSha, public string $environment, public Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location|null $location, public Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Message|null $message, public string $ref, public string $state,)
    {
    }
}
