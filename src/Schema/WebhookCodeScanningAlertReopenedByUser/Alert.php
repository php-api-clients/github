<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Alert
{
    public const SCHEMA_JSON         = '{"required":["number","created_at","url","html_url","state","dismissed_by","dismissed_at","dismissed_reason","rule","tool"],"type":"object","properties":{"created_at":{"type":"string","description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`","format":"date-time"},"dismissed_at":{"type":["null"],"description":"The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`."},"dismissed_by":{"type":["null"]},"dismissed_reason":{"type":["null"],"description":"The reason for dismissing or closing the alert. Can be one of: `false positive`, `won\'t fix`, and `used in tests`."},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri"},"most_recent_instance":{"title":"Alert Instance","required":["ref","analysis_key","environment","state"],"type":["object","null"],"properties":{"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed."},"classifications":{"type":"array","items":{"type":"string"}},"commit_sha":{"type":"string"},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"location":{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}},"message":{"type":"object","properties":{"text":{"type":"string"}}},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`."},"state":{"enum":["open","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."}}},"number":{"type":"integer","description":"The code scanning alert number."},"rule":{"required":["id","severity","description"],"type":"object","properties":{"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"id":{"type":"string","description":"A unique identifier for the rule used to detect the alert."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."}}},"state":{"enum":["open","fixed"],"type":"string","description":"State of a code scanning alert."},"tool":{"required":["name","version"],"type":"object","properties":{"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis alert."},"version":{"type":["string","null"],"description":"The version of the tool used to detect the alert."}}},"url":{"type":"string","format":"uri"}},"description":"The code scanning alert involved in the event."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The code scanning alert involved in the event.';
    public const SCHEMA_EXAMPLE_DATA = '{"created_at":"1970-01-01T00:00:00+00:00","dismissed_at":null,"dismissed_by":null,"dismissed_reason":null,"html_url":"https:\\/\\/example.com\\/","most_recent_instance":{"analysis_key":"generated_analysis_key_null","category":"generated_category_null","classifications":["generated_classifications_null"],"commit_sha":"generated_commit_sha_null","environment":"generated_environment_null","location":{"end_column":13,"end_line":13,"path":"generated_path_null","start_column":13,"start_line":13},"message":{"text":"generated_text_null"},"ref":"generated_ref_null","state":"open"},"number":13,"rule":{"description":"generated_description_null","id":"generated_id_null","severity":"none"},"state":"open","tool":{"name":"generated_name_null","version":"generated_version_null"},"url":"https:\\/\\/example.com\\/"}';

    /**
     * createdAt: The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`
     * dismissedAt: The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * dismissedReason: The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     * htmlUrl: The GitHub URL of the alert resource.
     * number: The code scanning alert number.
     * state: State of a code scanning alert.
     */
    public function __construct(#[MapFrom('created_at')] public string $createdAt, #[MapFrom('dismissed_at')] public mixed $dismissedAt, #[MapFrom('dismissed_by')] public mixed $dismissedBy, #[MapFrom('dismissed_reason')] public mixed $dismissedReason, #[MapFrom('html_url')] public string $htmlUrl, #[MapFrom('most_recent_instance')] public ?Schema\WebhookCodeScanningAlertReopenedByUser\Alert\MostRecentInstance $mostRecentInstance, public int $number, public Schema\WebhookCodeScanningAlertReopenedByUser\Alert\Rule $rule, public string $state, public Schema\WebhookCodeScanningAlertReopenedByUser\Alert\Tool $tool, public string $url)
    {
    }
}
