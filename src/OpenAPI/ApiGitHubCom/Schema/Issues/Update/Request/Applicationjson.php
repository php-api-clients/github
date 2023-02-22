<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issues\Update\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":["null","string","integer"],"oneOf":[{"type":"string"},{"type":"integer"}],"description":"The title of the issue."},"body":{"type":["string","null"],"description":"The contents of the issue."},"assignee":{"type":["string","null"],"description":"Username to assign to this issue. **This field is deprecated.**"},"state":{"enum":["open","closed"],"type":"string","description":"The open or closed state of the issue."},"state_reason":{"enum":["completed","not_planned","reopened",null],"type":["string","null"],"description":"The reason for the state change. Ignored unless `state` is changed.","examples":["not_planned"]},"milestone":{"type":["null","string","integer"],"oneOf":[{"type":"string"},{"type":"integer","description":"The `number` of the milestone to associate this issue with or use `null` to remove the current milestone. Only users with push access can set the milestone for issues. Without push access to the repository, milestone changes are silently dropped."}]},"labels":{"type":"array","items":{"oneOf":[{"type":"string"},{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":["string","null"]},"color":{"type":["string","null"]}}}]},"description":"Labels to associate with this issue. Pass one or more labels to _replace_ the set of labels on this issue. Send an empty array (`[]`) to clear all labels from the issue. Only users with push access can set labels for issues. Without push access to the repository, label changes are silently dropped."},"assignees":{"type":"array","items":{"type":"string"},"description":"Usernames to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this issue. Send an empty array (`[]`) to clear all assignees from the issue. Only users with push access can set assignees for new issues. Without push access to the repository, assignee changes are silently dropped."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The title of the issue.
     */
    public mixed $title;
    /**
     * The contents of the issue.
     */
    public ?string $body;
    /**
     * Username to assign to this issue. **This field is deprecated.**
     */
    public ?string $assignee;
    /**
     * The open or closed state of the issue.
     */
    public ?string $state;
    /**
     * The reason for the state change. Ignored unless `state` is changed.
     */
    public ?string $state_reason;
    public mixed $milestone;
    /**
     * Labels to associate with this issue. Pass one or more labels to _replace_ the set of labels on this issue. Send an empty array (`[]`) to clear all labels from the issue. Only users with push access can set labels for issues. Without push access to the repository, label changes are silently dropped.
     */
    public ?array $labels;
    /**
     * Usernames to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this issue. Send an empty array (`[]`) to clear all assignees from the issue. Only users with push access can set assignees for new issues. Without push access to the repository, assignee changes are silently dropped.
     */
    public ?array $assignees;
    public function __construct(mixed $title, string $body, string $assignee, string $state, string $state_reason, mixed $milestone, array $labels, array $assignees)
    {
        $this->title = $title;
        $this->body = $body;
        $this->assignee = $assignee;
        $this->state = $state;
        $this->state_reason = $state_reason;
        $this->milestone = $milestone;
        $this->labels = $labels;
        $this->assignees = $assignees;
    }
}
