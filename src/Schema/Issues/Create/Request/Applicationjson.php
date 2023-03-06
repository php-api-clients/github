<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Issues\Create\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["title"],"type":"object","properties":{"title":{"oneOf":[{"type":"string"},{"type":"integer"}],"description":"The title of the issue."},"body":{"type":"string","description":"The contents of the issue."},"assignee":{"type":["string","null"],"description":"Login for the user that this issue should be assigned to. _NOTE: Only users with push access can set the assignee for new issues. The assignee is silently dropped otherwise. **This field is deprecated.**_"},"milestone":{"type":["null","string","integer"],"oneOf":[{"type":"string"},{"type":"integer","description":"The `number` of the milestone to associate this issue with. _NOTE: Only users with push access can set the milestone for new issues. The milestone is silently dropped otherwise._"}]},"labels":{"type":"array","items":{"oneOf":[{"type":"string"},{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":["string","null"]},"color":{"type":["string","null"]}}}]},"description":"Labels to associate with this issue. _NOTE: Only users with push access can set labels for new issues. Labels are silently dropped otherwise._"},"assignees":{"type":"array","items":{"type":"string"},"description":"Logins for Users to assign to this issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":13,"body":"generated_body","assignee":"generated_assignee","milestone":13,"labels":[{"id":13,"name":"generated_name","description":"generated_description","color":"generated_color"}],"assignees":["generated_assignees"]}';
    /**
     * title: The title of the issue.
     * body: The contents of the issue.
     * assignee: Login for the user that this issue should be assigned to. _NOTE: Only users with push access can set the assignee for new issues. The assignee is silently dropped otherwise. **This field is deprecated.**_
     * labels: Labels to associate with this issue. _NOTE: Only users with push access can set labels for new issues. Labels are silently dropped otherwise._
     * @param array<\ApiClients\Client\GitHub\Schema\Issues\Create\Request\Applicationjson\Labels> $labels
     * assignees: Logins for Users to assign to this issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._
     * @param array<string> $assignees
     */
    public function __construct(public ?int $title, public string $body, public ?string $assignee, public int $milestone, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Issues\Create\Request\Applicationjson\Labels::class)] public array $labels, public array $assignees)
    {
    }
}
