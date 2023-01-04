<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C958D4Fe06219E11E77B36A4610982263
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":["null","string","integer"],"oneOf":[{"type":"string"},{"type":"integer"}],"description":"The title of the issue."},"body":{"type":["string","null"],"description":"The contents of the issue."},"assignee":{"type":["string","null"],"description":"Login for the user that this issue should be assigned to. **This field is deprecated.**"},"state":{"enum":["open","closed"],"type":"string","description":"State of the issue. Either `open` or `closed`."},"state_reason":{"enum":["completed","not_planned","reopened",null],"type":["string","null"],"description":"The reason for the current state","examples":["not_planned"]},"milestone":{"type":["null","string","integer"],"oneOf":[{"type":"string"},{"type":"integer","description":"The `number` of the milestone to associate this issue with or `null` to remove current. _NOTE: Only users with push access can set the milestone for issues. The milestone is silently dropped otherwise._"}]},"labels":{"type":"array","items":{"oneOf":[{"type":"string"},{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":["string","null"]},"color":{"type":["string","null"]}}}]},"description":"Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._"},"assignees":{"type":"array","items":{"type":"string"},"description":"Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._"}}}';
    public const SCHEMA_TITLE = 'c_958d4fe06219e11e77b36a4610982263';
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
    /**
     * The reason for the current state
     */
    private $state_reason;
    private $milestone;
    /**
     * Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C958D4Fe06219E11E77B36A4610982263\Labels>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C958D4Fe06219E11E77B36A4610982263\Labels::class)
     */
    private array $labels = array();
    /**
     * Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C958D4Fe06219E11E77B36A4610982263\Assignees>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C958D4Fe06219E11E77B36A4610982263\Assignees::class)
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
    /**
     * The reason for the current state
     */
    public function state_reason()
    {
        return $this->state_reason;
    }
    public function milestone()
    {
        return $this->milestone;
    }
    /**
     * Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C958D4Fe06219E11E77B36A4610982263\Labels>
     */
    public function labels() : array
    {
        return $this->labels;
    }
    /**
     * Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C958D4Fe06219E11E77B36A4610982263\Assignees>
     */
    public function assignees() : array
    {
        return $this->assignees;
    }
}
