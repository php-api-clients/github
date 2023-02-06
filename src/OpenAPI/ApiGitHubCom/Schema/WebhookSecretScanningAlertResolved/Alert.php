<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookSecretScanningAlertResolved;

final class Alert
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"created_at":{"type":"string","description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri","readOnly":true},"locations_url":{"type":"string","description":"The REST API URL of the code locations for this alert.","format":"uri"},"number":{"type":"integer","description":"The security alert number.","readOnly":true},"push_protection_bypassed":{"type":["boolean","null"],"description":"Whether push protection was bypassed for the detected secret."},"push_protection_bypassed_at":{"type":["string","null"],"description":"The time that push protection was bypassed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"push_protection_bypassed_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"resolution":{"enum":[null,"false_positive","wont_fix","revoked","used_in_tests","pattern_deleted","pattern_edited"],"type":["string","null"],"description":"**Required when the `state` is `resolved`.** The reason for resolving the alert."},"resolved_at":{"type":["string","null"],"description":"The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"resolved_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"resolution_comment":{"type":["string","null"],"description":"An optional comment to resolve an alert."},"secret":{"type":"string","description":"The secret that was detected."},"secret_type":{"type":"string","description":"The type of secret that secret scanning detected."},"secret_type_display_name":{"type":"string","description":"User-friendly name for the detected secret, matching the `secret_type`.\\nFor a list of built-in patterns, see \\"[Secret scanning patterns](https:\\/\\/docs.github.com\\/code-security\\/secret-scanning\\/secret-scanning-patterns#supported-secrets-for-advanced-security).\\""},"state":{"enum":["open","resolved"],"type":"string","description":"Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`."},"updated_at":{"type":"string","description":"The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"url":{"type":"string","description":"The REST API URL of the alert resource.","format":"uri","readOnly":true}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookSecretScanningAlertResolved\\Alert';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly string $created_at;
    /**
     * The GitHub URL of the alert resource.
     */
    public readonly string $html_url;
    /**
     * The REST API URL of the code locations for this alert.
     */
    public readonly string $locations_url;
    /**
     * The security alert number.
     */
    public readonly int $number;
    /**
     * Whether push protection was bypassed for the detected secret.
     */
    public readonly ?bool $push_protection_bypassed;
    /**
     * The time that push protection was bypassed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly ?string $push_protection_bypassed_at;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert\PushProtectionBypassedBy $push_protection_bypassed_by;
    /**
     * **Required when the `state` is `resolved`.** The reason for resolving the alert.
     */
    public readonly ?string $resolution;
    /**
     * The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly ?string $resolved_at;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert\ResolvedBy $resolved_by;
    /**
     * An optional comment to resolve an alert.
     */
    public readonly ?string $resolution_comment;
    /**
     * The secret that was detected.
     */
    public readonly string $secret;
    /**
     * The type of secret that secret scanning detected.
     */
    public readonly string $secret_type;
    /**
    * User-friendly name for the detected secret, matching the `secret_type`.
    For a list of built-in patterns, see "[Secret scanning patterns](https://docs.github.com/code-security/secret-scanning/secret-scanning-patterns#supported-secrets-for-advanced-security)."
    */
    public readonly string $secret_type_display_name;
    /**
     * Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
     */
    public readonly string $state;
    /**
     * The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly string $updated_at;
    /**
     * The REST API URL of the alert resource.
     */
    public readonly string $url;
    public function __construct(string $created_at, string $html_url, string $locations_url, int $number, bool $push_protection_bypassed, string $push_protection_bypassed_at, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert\PushProtectionBypassedBy $push_protection_bypassed_by, string $resolution, string $resolved_at, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Alert\ResolvedBy $resolved_by, string $resolution_comment, string $secret, string $secret_type, string $secret_type_display_name, string $state, string $updated_at, string $url)
    {
        $this->created_at = $created_at;
        $this->html_url = $html_url;
        $this->locations_url = $locations_url;
        $this->number = $number;
        $this->push_protection_bypassed = $push_protection_bypassed;
        $this->push_protection_bypassed_at = $push_protection_bypassed_at;
        $this->push_protection_bypassed_by = $push_protection_bypassed_by;
        $this->resolution = $resolution;
        $this->resolved_at = $resolved_at;
        $this->resolved_by = $resolved_by;
        $this->resolution_comment = $resolution_comment;
        $this->secret = $secret;
        $this->secret_type = $secret_type;
        $this->secret_type_display_name = $secret_type_display_name;
        $this->state = $state;
        $this->updated_at = $updated_at;
        $this->url = $url;
    }
}
