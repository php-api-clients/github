<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C73A59Dd385Bf770Fa7334B0D2Fe30Fa1
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":["null","string","integer"],"oneOf":[{"type":"string"},{"type":"integer"}],"description":"The title of the issue."},"body":{"type":["string","null"],"description":"The contents of the issue."},"assignee":{"type":["string","null"],"description":"Login for the user that this issue should be assigned to. **This field is deprecated.**"},"state":{"enum":["open","closed"],"type":"string","description":"State of the issue. Either `open` or `closed`."},"milestone":{"type":["null","string","integer"],"oneOf":[{"type":"string"},{"type":"integer","description":"The `number` of the milestone to associate this issue with or `null` to remove current. _NOTE: Only users with push access can set the milestone for issues. The milestone is silently dropped otherwise._"}]},"labels":{"type":"array","items":{"oneOf":[{"type":"string"},{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":["string","null"]},"color":{"type":["string","null"]}}}]},"description":"Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._"},"assignees":{"type":"array","items":{"type":"string"},"description":"Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._"}}}';
    public const SCHEMA_TITLE = 'c_73a59dd385bf770fa7334b0d2fe30fa1';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The title of the issue.
     */
    private $title;
    /**
     * The contents of the issue.
     */
    private $body;
    /**
     * Login for the user that this issue should be assigned to. **This field is deprecated.**
     */
    private $assignee;
    /**
     * State of the issue. Either `open` or `closed`.
     */
    private string $state;
    private $milestone;
    /**
     * Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB7B30056611D2Cd25Cd2642Fd50D8151>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB7B30056611D2Cd25Cd2642Fd50D8151::class)
     */
    private array $labels = array();
    /**
     * Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $assignees = array();
    /**
     * The title of the issue.
     */
    public function title()
    {
        return $this->title;
    }
    /**
     * The contents of the issue.
     */
    public function body()
    {
        return $this->body;
    }
    /**
     * Login for the user that this issue should be assigned to. **This field is deprecated.**
     */
    public function assignee()
    {
        return $this->assignee;
    }
    /**
     * State of the issue. Either `open` or `closed`.
     */
    public function state() : string
    {
        return $this->state;
    }
    public function milestone()
    {
        return $this->milestone;
    }
    /**
     * Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CB7B30056611D2Cd25Cd2642Fd50D8151>
     */
    public function labels() : array
    {
        return $this->labels;
    }
    /**
     * Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function assignees() : array
    {
        return $this->assignees;
    }
}
