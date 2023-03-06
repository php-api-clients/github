<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Alert
{
    public const SCHEMA_JSON = '{"required":["number","created_at","url","html_url","state","dismissed_by","dismissed_at","dismissed_reason","rule","tool"],"type":"object","properties":{"created_at":{"type":"string","description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`","format":"date-time"},"dismissed_at":{"type":["null"],"description":"The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`."},"dismissed_by":{"type":["null"]},"dismissed_reason":{"type":["null"],"description":"The reason for dismissing or closing the alert. Can be one of: `false positive`, `won\'t fix`, and `used in tests`."},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri"},"most_recent_instance":{"title":"Alert Instance","required":["ref","analysis_key","environment","state"],"type":["object","null"],"properties":{"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"classifications":{"type":"array","items":{"type":"string"}},"commit_sha":{"type":"string"},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"location":{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}},"message":{"type":"object","properties":{"text":{"type":"string"}}},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`."},"state":{"enum":["open","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."}}},"number":{"type":"integer","description":"The code scanning alert number."},"rule":{"required":["id","severity","description"],"type":"object","properties":{"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"id":{"type":"string","description":"A unique identifier for the rule used to detect the alert."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."}}},"state":{"enum":["open","fixed"],"type":"string","description":"State of a code scanning alert."},"tool":{"required":["name","version"],"type":"object","properties":{"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis alert."},"version":{"type":["string","null"],"description":"The version of the tool used to detect the alert."}}},"url":{"type":"string","format":"uri"}},"description":"The code scanning alert involved in the event."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The code scanning alert involved in the event.';
    public const SCHEMA_EXAMPLE_DATA = '{"created_at":"generated_created_at","dismissed_at":null,"dismissed_by":null,"dismissed_reason":null,"html_url":"generated_html_url","most_recent_instance":{"analysis_key":"generated_analysis_key","classifications":["generated_classifications"],"commit_sha":"generated_commit_sha","environment":"generated_environment","location":{"end_column":13,"end_line":13,"path":"generated_path","start_column":13,"start_line":13},"message":{"text":"generated_text"},"ref":"generated_ref","state":"generated_state"},"number":13,"rule":{"description":"generated_description","id":"generated_id","severity":"generated_severity"},"state":"generated_state","tool":{"name":"generated_name","version":"generated_version"},"url":"generated_url"}';
    /**
     * created_at: The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`
     * dismissed_at: The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * dismissed_reason: The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     * html_url: The GitHub URL of the alert resource.
     * number: The code scanning alert number.
     * state: State of a code scanning alert.
     */
    public function __construct(public ?string $created_at, public mixed $dismissed_at, public mixed $dismissed_by, public mixed $dismissed_reason, public ?string $html_url, public ?Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance $most_recent_instance, public ?int $number, public ?Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Rule $rule, public ?string $state, public ?Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Tool $tool, public ?string $url)
    {
    }
}
