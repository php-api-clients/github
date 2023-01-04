<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookSecretScanningAlertResolved;

final class Alert
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"created_at":{"type":"string","description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri","readOnly":true},"locations_url":{"type":"string","description":"The REST API URL of the code locations for this alert.","format":"uri"},"number":{"type":"integer","description":"The security alert number.","readOnly":true},"push_protection_bypassed":{"type":["boolean","null"],"description":"Whether push protection was bypassed for the detected secret."},"push_protection_bypassed_at":{"type":["string","null"],"description":"The time that push protection was bypassed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"push_protection_bypassed_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"resolution":{"enum":[null,"false_positive","wont_fix","revoked","used_in_tests","pattern_deleted","pattern_edited"],"type":["string","null"],"description":"**Required when the `state` is `resolved`.** The reason for resolving the alert."},"resolved_at":{"type":["string","null"],"description":"The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"resolved_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"resolution_comment":{"type":["string","null"],"description":"An optional comment to resolve an alert."},"secret":{"type":"string","description":"The secret that was detected."},"secret_type":{"type":"string","description":"The type of secret that secret scanning detected."},"secret_type_display_name":{"type":"string","description":"User-friendly name for the detected secret, matching the `secret_type`.\\nFor a list of built-in patterns, see \\"[Secret scanning patterns](https:\\/\\/docs.github.com\\/github-ae@latest\\/code-security\\/secret-scanning\\/secret-scanning-patterns#supported-secrets-for-advanced-security).\\""},"state":{"enum":["open","resolved"],"type":"string","description":"Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`."},"updated_at":{"type":"string","description":"The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"url":{"type":"string","description":"The REST API URL of the alert resource.","format":"uri","readOnly":true}}}';
    public const SCHEMA_TITLE = 'WebhookSecretScanningAlertResolved\\Alert';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $created_at;
    /**
     * The GitHub URL of the alert resource.
     */
    private string $html_url;
    /**
     * The REST API URL of the code locations for this alert.
     */
    private string $locations_url;
    /**
     * The security alert number.
     */
    private int $number;
    /**
     * Whether push protection was bypassed for the detected secret.
     */
    private $push_protection_bypassed;
    /**
     * The time that push protection was bypassed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private $push_protection_bypassed_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Alert\PushProtectionBypassedBy::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Alert\PushProtectionBypassedBy $push_protection_bypassed_by;
    /**
     * **Required when the `state` is `resolved`.** The reason for resolving the alert.
     */
    private $resolution;
    /**
     * The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private $resolved_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Alert\ResolvedBy::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Alert\ResolvedBy $resolved_by;
    /**
     * An optional comment to resolve an alert.
     */
    private $resolution_comment;
    /**
     * The secret that was detected.
     */
    private string $secret;
    /**
     * The type of secret that secret scanning detected.
     */
    private string $secret_type;
    /**
    * User-friendly name for the detected secret, matching the `secret_type`.
    For a list of built-in patterns, see "[Secret scanning patterns](https://docs.github.com/github-ae@latest/code-security/secret-scanning/secret-scanning-patterns#supported-secrets-for-advanced-security)."
    */
    private string $secret_type_display_name;
    /**
     * Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
     */
    private string $state;
    /**
     * The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $updated_at;
    /**
     * The REST API URL of the alert resource.
     */
    private string $url;
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The GitHub URL of the alert resource.
     */
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The REST API URL of the code locations for this alert.
     */
    public function locations_url() : string
    {
        return $this->locations_url;
    }
    /**
     * The security alert number.
     */
    public function number() : int
    {
        return $this->number;
    }
    /**
     * Whether push protection was bypassed for the detected secret.
     */
    public function push_protection_bypassed()
    {
        return $this->push_protection_bypassed;
    }
    /**
     * The time that push protection was bypassed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function push_protection_bypassed_at()
    {
        return $this->push_protection_bypassed_at;
    }
    public function push_protection_bypassed_by() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Alert\PushProtectionBypassedBy
    {
        return $this->push_protection_bypassed_by;
    }
    /**
     * **Required when the `state` is `resolved`.** The reason for resolving the alert.
     */
    public function resolution()
    {
        return $this->resolution;
    }
    /**
     * The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function resolved_at()
    {
        return $this->resolved_at;
    }
    public function resolved_by() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Alert\ResolvedBy
    {
        return $this->resolved_by;
    }
    /**
     * An optional comment to resolve an alert.
     */
    public function resolution_comment()
    {
        return $this->resolution_comment;
    }
    /**
     * The secret that was detected.
     */
    public function secret() : string
    {
        return $this->secret;
    }
    /**
     * The type of secret that secret scanning detected.
     */
    public function secret_type() : string
    {
        return $this->secret_type;
    }
    /**
    * User-friendly name for the detected secret, matching the `secret_type`.
    For a list of built-in patterns, see "[Secret scanning patterns](https://docs.github.com/github-ae@latest/code-security/secret-scanning/secret-scanning-patterns#supported-secrets-for-advanced-security)."
    */
    public function secret_type_display_name() : string
    {
        return $this->secret_type_display_name;
    }
    /**
     * Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * The REST API URL of the alert resource.
     */
    public function url() : string
    {
        return $this->url;
    }
}
