<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Alert
{
    public const SCHEMA_JSON         = '{"required":["number","created_at","url","html_url","state","dismissed_by","dismissed_at","dismissed_reason","rule","tool"],"type":"object","properties":{"created_at":{"type":["string","null"],"description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`","format":"date-time"},"dismissed_at":{"type":["null"],"description":"The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`."},"dismissed_by":{"type":["null"]},"dismissed_comment":{"maxLength":280,"type":["string","null"],"description":"The dismissal comment associated with the dismissal of the alert."},"dismissed_reason":{"type":["null"],"description":"The reason for dismissing or closing the alert. Can be one of: `false positive`, `won\'t fix`, and `used in tests`."},"fixed_at":{"type":["null"]},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri"},"instances_url":{"type":"string"},"most_recent_instance":{"title":"Alert Instance","required":["ref","analysis_key","environment","state"],"type":["object","null"],"properties":{"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed."},"classifications":{"type":"array","items":{"type":"string"}},"commit_sha":{"type":"string"},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"location":{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}},"message":{"type":"object","properties":{"text":{"type":"string"}}},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`."},"state":{"enum":["open","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."}}},"number":{"type":"integer","description":"The code scanning alert number."},"rule":{"required":["id","severity","description"],"type":"object","properties":{"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string"},"help":{"type":["string","null"]},"help_uri":{"type":["string","null"],"description":"A link to the documentation for the rule used to detect the alert."},"id":{"type":"string","description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string"},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"tags":{"type":["array","null"],"items":{"type":"string"}}}},"state":{"enum":["open","dismissed"],"type":"string","description":"State of a code scanning alert."},"tool":{"required":["name","version"],"type":["object","null"],"properties":{"guid":{"type":["string","null"]},"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis alert."},"version":{"type":["string","null"],"description":"The version of the tool used to detect the alert."}}},"updated_at":{"type":["string","null"]},"url":{"type":"string","format":"uri"}},"description":"The code scanning alert involved in the event."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The code scanning alert involved in the event.';
    public const SCHEMA_EXAMPLE_DATA = '{"created_at":"1970-01-01T00:00:00+00:00","dismissed_at":"generated","dismissed_by":"generated","dismissed_comment":"generated","dismissed_reason":"generated","fixed_at":"generated","html_url":"https:\\/\\/example.com\\/","instances_url":"generated","most_recent_instance":{"analysis_key":"generated","category":"generated","classifications":["generated","generated"],"commit_sha":"generated","environment":"generated","location":{"end_column":10,"end_line":8,"path":"generated","start_column":12,"start_line":10},"message":{"text":"generated"},"ref":"generated","state":"open"},"number":6,"rule":{"description":"generated","full_description":"generated","help":"generated","help_uri":"generated","id":"generated","name":"generated","severity":"error","tags":null},"state":"open","tool":{"guid":"generated","name":"generated","version":"generated"},"updated_at":"generated","url":"https:\\/\\/example.com\\/"}';

    /**
     * createdAt: The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`
     * dismissedAt: The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * dismissedComment: The dismissal comment associated with the dismissal of the alert.
     * dismissedReason: The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     * htmlUrl: The GitHub URL of the alert resource.
     * number: The code scanning alert number.
     * state: State of a code scanning alert.
     */
    public function __construct(#[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('dismissed_at')]
    public string $dismissedAt, #[MapFrom('dismissed_by')]
    public string $dismissedBy, #[MapFrom('dismissed_comment')]
    public string|null $dismissedComment, #[MapFrom('dismissed_reason')]
    public string $dismissedReason, #[MapFrom('fixed_at')]
    public string $fixedAt, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('instances_url')]
    public string|null $instancesUrl, #[MapFrom('most_recent_instance')]
    public Schema\WebhookCodeScanningAlertCreated\Alert\MostRecentInstance|null $mostRecentInstance, public int $number, public Schema\WebhookCodeScanningAlertCreated\Alert\Rule $rule, public string $state, public Schema\WebhookCodeScanningAlertCreated\Alert\Tool|null $tool, #[MapFrom('updated_at')]
    public string|null $updatedAt, public string $url,)
    {
    }
}
