<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAlertItems
{
    public const SCHEMA_JSON = '{"required":["number","created_at","url","html_url","instances_url","state","dismissed_by","dismissed_at","dismissed_reason","rule","tool","most_recent_instance"],"type":"object","properties":{"number":{"type":"integer","description":"The security alert number.","readOnly":true},"created_at":{"type":"string","description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"updated_at":{"type":"string","description":"The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"url":{"type":"string","description":"The REST API URL of the alert resource.","format":"uri","readOnly":true},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri","readOnly":true},"instances_url":{"type":"string","description":"The REST API URL for fetching the list of instances for an alert.","format":"uri","readOnly":true},"state":{"enum":["open","closed","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."},"fixed_at":{"type":["string","null"],"description":"The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"dismissed_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"dismissed_at":{"type":["string","null"],"description":"The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"dismissed_reason":{"enum":[null,"false positive","won\'t fix","used in tests"],"type":["string","null"],"description":"**Required when the state is dismissed.** The reason for dismissing or closing the alert."},"dismissed_comment":{"maxLength":280,"type":["string","null"],"description":"The dismissal comment associated with the dismissal of the alert."},"rule":{"type":"object","properties":{"id":{"type":["string","null"],"description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string","description":"The name of the rule used to detect the alert."},"tags":{"type":["array","null"],"items":{"type":"string"},"description":"A set of tags applicable for the rule."},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"description":{"type":"string","description":"A short description of the rule used to detect the alert."}}},"tool":{"type":"object","properties":{"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis."},"version":{"type":["string","null"],"description":"The version of the tool used to generate the code scanning analysis."},"guid":{"type":["string","null"],"description":"The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data."}}},"most_recent_instance":{"type":"object","properties":{"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`."},"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code."},"state":{"enum":["open","closed","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."},"commit_sha":{"type":"string"},"message":{"type":"object","properties":{"text":{"type":"string"}}},"location":{"type":"object","properties":{"path":{"type":"string"},"start_line":{"type":"integer"},"end_line":{"type":"integer"},"start_column":{"type":"integer"},"end_column":{"type":"integer"}},"description":"Describe a region within a file for the alert."},"html_url":{"type":"string"},"classifications":{"type":"array","items":{"enum":["source","generated","test","library",null],"type":["string","null"],"description":"A classification of the file. For example to identify it as generated."},"description":"Classifications that have been applied to the file that triggered the alert.\\nFor example identifying it as documentation, or a generated file."}}}}}';
    public const SCHEMA_TITLE = 'code-scanning-alert-items';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The security alert number.
     */
    public readonly int $number;
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly string $created_at;
    /**
     * The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly ?string $updated_at;
    /**
     * The REST API URL of the alert resource.
     */
    public readonly string $url;
    /**
     * The GitHub URL of the alert resource.
     */
    public readonly string $html_url;
    /**
     * The REST API URL for fetching the list of instances for an alert.
     */
    public readonly string $instances_url;
    /**
     * State of a code scanning alert.
     */
    public readonly string $state;
    /**
     * The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly ?string $fixed_at;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertItems\DismissedBy $dismissed_by;
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly ?string $dismissed_at;
    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     */
    public readonly ?string $dismissed_reason;
    /**
     * The dismissal comment associated with the dismissal of the alert.
     */
    public readonly ?string $dismissed_comment;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertRuleSummary $rule;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAnalysisTool $tool;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertInstance $most_recent_instance;
    public function __construct(int $number, string $created_at, string $updated_at, string $url, string $html_url, string $instances_url, string $state, string $fixed_at, mixed $dismissed_by, string $dismissed_at, string $dismissed_reason, string $dismissed_comment, object $rule, object $tool, object $most_recent_instance)
    {
        $this->number = $number;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->instances_url = $instances_url;
        $this->state = $state;
        $this->fixed_at = $fixed_at;
        $this->dismissed_by = $dismissed_by;
        $this->dismissed_at = $dismissed_at;
        $this->dismissed_reason = $dismissed_reason;
        $this->dismissed_comment = $dismissed_comment;
        $this->rule = $rule;
        $this->tool = $tool;
        $this->most_recent_instance = $most_recent_instance;
    }
}
