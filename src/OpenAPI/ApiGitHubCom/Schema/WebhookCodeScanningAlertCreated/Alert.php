<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCodeScanningAlertCreated;

final class Alert
{
    public const SCHEMA_JSON = '{"required":["number","created_at","url","html_url","state","dismissed_by","dismissed_at","dismissed_reason","rule","tool"],"type":"object","properties":{"created_at":{"type":["string","null"],"description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`","format":"date-time"},"dismissed_at":{"type":["null"],"description":"The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`."},"dismissed_by":{"type":["null"]},"dismissed_comment":{"maxLength":280,"type":["string","null"],"description":"The dismissal comment associated with the dismissal of the alert."},"dismissed_reason":{"type":["null"],"description":"The reason for dismissing or closing the alert. Can be one of: `false positive`, `won\'t fix`, and `used in tests`."},"fixed_at":{"type":["null"]},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri"},"instances_url":{"type":"string"},"most_recent_instance":{"title":"Alert Instance","required":["ref","analysis_key","environment","state"],"type":["object","null"],"properties":{"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"classifications":{"type":"array","items":{"type":"string"}},"commit_sha":{"type":"string"},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"location":{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}},"message":{"type":"object","properties":{"text":{"type":"string"}}},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`."},"state":{"enum":["open","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."}}},"number":{"type":"integer","description":"The code scanning alert number."},"rule":{"required":["id","severity","description"],"type":"object","properties":{"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string"},"help":{"type":["string","null"]},"help_uri":{"type":["string","null"],"description":"A link to the documentation for the rule used to detect the alert."},"id":{"type":"string","description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string"},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"tags":{"type":["array","null"],"items":{"type":"string"}}}},"state":{"enum":["open","dismissed"],"type":"string","description":"State of a code scanning alert."},"tool":{"required":["name","version"],"type":["object","null"],"properties":{"guid":{"type":["string","null"]},"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis alert."},"version":{"type":["string","null"],"description":"The version of the tool used to detect the alert."}}},"updated_at":{"type":["string","null"]},"url":{"type":"string","format":"uri"}},"description":"The code scanning alert involved in the event."}';
    public const SCHEMA_TITLE = 'WebhookCodeScanningAlertCreated\\Alert';
    public const SCHEMA_DESCRIPTION = 'The code scanning alert involved in the event.';
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`
     */
    public readonly ?string $created_at;
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly mixed $dismissed_at;
    public readonly mixed $dismissed_by;
    /**
     * The dismissal comment associated with the dismissal of the alert.
     */
    public readonly ?string $dismissed_comment;
    /**
     * The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     */
    public readonly mixed $dismissed_reason;
    public readonly mixed $fixed_at;
    /**
     * The GitHub URL of the alert resource.
     */
    public readonly string $html_url;
    public readonly ?string $instances_url;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert\MostRecentInstance $most_recent_instance;
    /**
     * The code scanning alert number.
     */
    public readonly int $number;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert\Rule $rule;
    /**
     * State of a code scanning alert.
     */
    public readonly string $state;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert\Tool $tool;
    public readonly ?string $updated_at;
    public readonly string $url;
    public function __construct(string $created_at, mixed $dismissed_at, mixed $dismissed_by, string $dismissed_comment, mixed $dismissed_reason, mixed $fixed_at, string $html_url, string $instances_url, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert\MostRecentInstance $most_recent_instance, int $number, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert\Rule $rule, string $state, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert\Tool $tool, string $updated_at, string $url)
    {
        $this->created_at = $created_at;
        $this->dismissed_at = $dismissed_at;
        $this->dismissed_by = $dismissed_by;
        $this->dismissed_comment = $dismissed_comment;
        $this->dismissed_reason = $dismissed_reason;
        $this->fixed_at = $fixed_at;
        $this->html_url = $html_url;
        $this->instances_url = $instances_url;
        $this->most_recent_instance = $most_recent_instance;
        $this->number = $number;
        $this->rule = $rule;
        $this->state = $state;
        $this->tool = $tool;
        $this->updated_at = $updated_at;
        $this->url = $url;
    }
}
