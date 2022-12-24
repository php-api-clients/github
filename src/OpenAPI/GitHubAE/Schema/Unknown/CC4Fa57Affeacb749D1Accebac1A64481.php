<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CC4Fa57Affeacb749D1Accebac1A64481
{
    public const SCHEMA_JSON = '{"required":["number","created_at","url","html_url","state","dismissed_by","dismissed_at","dismissed_reason","rule","tool"],"type":"object","properties":{"created_at":{"type":["string","null"],"description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`","format":"date-time"},"dismissed_at":{"type":["null"],"description":"The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`."},"dismissed_by":{"type":["null"]},"dismissed_comment":{"maxLength":280,"type":["string","null"],"description":"The dismissal comment associated with the dismissal of the alert."},"dismissed_reason":{"type":["null"],"description":"The reason for dismissing or closing the alert. Can be one of: `false positive`, `won\'t fix`, and `used in tests`."},"fixed_at":{"type":["null"]},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri"},"instances_url":{"type":"string"},"most_recent_instance":{"title":"Alert Instance","required":["ref","analysis_key","environment","state"],"type":["object","null"],"properties":{"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"classifications":{"type":"array","items":{"type":"string"}},"commit_sha":{"type":"string"},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"location":{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}},"message":{"type":"object","properties":{"text":{"type":"string"}}},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`."},"state":{"enum":["open","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."}}},"number":{"type":"integer","description":"The code scanning alert number."},"rule":{"required":["id","severity","description"],"type":"object","properties":{"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string"},"help":{"type":["string","null"]},"help_uri":{"type":["string","null"],"description":"A link to the documentation for the rule used to detect the alert."},"id":{"type":"string","description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string"},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"tags":{"type":["array","null"],"items":{"type":"string"}}}},"state":{"enum":["open","dismissed"],"type":"string","description":"State of a code scanning alert."},"tool":{"required":["name","version"],"type":["object","null"],"properties":{"guid":{"type":["string","null"]},"name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis alert."},"version":{"type":["string","null"],"description":"The version of the tool used to detect the alert."}}},"updated_at":{"type":["string","null"]},"url":{"type":"string","format":"uri"}},"description":"The code scanning alert involved in the event."}';
    public const SCHEMA_TITLE = 'c_c4fa57affeacb749d1accebac1a64481';
    public const SCHEMA_DESCRIPTION = 'The code scanning alert involved in the event.';
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`
     */
    private $created_at;
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private $dismissed_at;
    private $dismissed_by;
    /**
     * The dismissal comment associated with the dismissal of the alert.
     */
    private $dismissed_comment;
    /**
     * The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     */
    private $dismissed_reason;
    private $fixed_at;
    /**
     * The GitHub URL of the alert resource.
     */
    private string $html_url;
    private ?string $instances_url = null;
    private $most_recent_instance;
    /**
     * The code scanning alert number.
     */
    private int $number;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C68F621Ca1Bc17E38E93Cd08Caddd8B6D::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C68F621Ca1Bc17E38E93Cd08Caddd8B6D $rule;
    /**
     * State of a code scanning alert.
     */
    private string $state;
    private $tool;
    private $updated_at;
    private string $url;
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ.`
     */
    public function created_at()
    {
        return $this->created_at;
    }
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function dismissed_at()
    {
        return $this->dismissed_at;
    }
    public function dismissed_by()
    {
        return $this->dismissed_by;
    }
    /**
     * The dismissal comment associated with the dismissal of the alert.
     */
    public function dismissed_comment()
    {
        return $this->dismissed_comment;
    }
    /**
     * The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     */
    public function dismissed_reason()
    {
        return $this->dismissed_reason;
    }
    public function fixed_at()
    {
        return $this->fixed_at;
    }
    /**
     * The GitHub URL of the alert resource.
     */
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function instances_url() : ?string
    {
        return $this->instances_url;
    }
    public function most_recent_instance()
    {
        return $this->most_recent_instance;
    }
    /**
     * The code scanning alert number.
     */
    public function number() : int
    {
        return $this->number;
    }
    public function rule() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C68F621Ca1Bc17E38E93Cd08Caddd8B6D
    {
        return $this->rule;
    }
    /**
     * State of a code scanning alert.
     */
    public function state() : string
    {
        return $this->state;
    }
    public function tool()
    {
        return $this->tool;
    }
    public function updated_at()
    {
        return $this->updated_at;
    }
    public function url() : string
    {
        return $this->url;
    }
}
