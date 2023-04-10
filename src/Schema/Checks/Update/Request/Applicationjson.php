<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Checks\Update\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","anyOf":[{"required":["conclusion"],"properties":{"status":{"enum":["completed"]}},"additionalProperties":true},{"properties":{"status":{"enum":["queued","in_progress"]}},"additionalProperties":true}],"properties":{"name":{"type":"string","description":"The name of the check. For example, \\"code-coverage\\"."},"details_url":{"type":"string","description":"The URL of the integrator\'s site that has the full details of the check."},"external_id":{"type":"string","description":"A reference for the run on the integrator\'s system."},"started_at":{"type":"string","description":"This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The current status."},"conclusion":{"enum":["action_required","cancelled","failure","neutral","success","skipped","stale","timed_out"],"type":"string","description":"**Required if you provide `completed_at` or a `status` of `completed`**. The final conclusion of the check. \\n**Note:** Providing `conclusion` will automatically set the `status` parameter to `completed`. You cannot change a check run conclusion to `stale`, only GitHub can set this."},"completed_at":{"type":"string","description":"The time the check completed. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"output":{"required":["summary"],"type":"object","properties":{"title":{"type":"string","description":"**Required**."},"summary":{"maxLength":65535,"type":"string","description":"Can contain Markdown."},"text":{"maxLength":65535,"type":"string","description":"Can contain Markdown."},"annotations":{"maxItems":50,"type":"array","items":{"required":["path","start_line","end_line","annotation_level","message"],"type":"object","properties":{"path":{"type":"string","description":"The path of the file to add an annotation to. For example, `assets\\/css\\/main.css`."},"start_line":{"type":"integer","description":"The start line of the annotation. Line numbers start at 1."},"end_line":{"type":"integer","description":"The end line of the annotation."},"start_column":{"type":"integer","description":"The start column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values. Column numbers start at 1."},"end_column":{"type":"integer","description":"The end column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values."},"annotation_level":{"enum":["notice","warning","failure"],"type":"string","description":"The level of the annotation."},"message":{"type":"string","description":"A short description of the feedback for these lines of code. The maximum size is 64 KB."},"title":{"type":"string","description":"The title that represents the annotation. The maximum size is 255 characters."},"raw_details":{"type":"string","description":"Details about this annotation. The maximum size is 64 KB."}}},"description":"Adds information from your analysis to specific lines of code. Annotations are visible in GitHub\'s pull request UI. Annotations are visible in GitHub\'s pull request UI. The Checks API limits the number of annotations to a maximum of 50 per API request. To create more than 50 annotations, you have to make multiple requests to the [Update a check run](https:\\/\\/docs.github.com\\/rest\\/reference\\/checks#update-a-check-run) endpoint. Each time you update the check run, annotations are appended to the list of annotations that already exist for the check run. GitHub Actions are limited to 10 warning annotations and 10 error annotations per step. For details about annotations in the UI, see \\"[About status checks](https:\\/\\/docs.github.com\\/articles\\/about-status-checks#checks)\\"."},"images":{"type":"array","items":{"required":["alt","image_url"],"type":"object","properties":{"alt":{"type":"string","description":"The alternative text for the image."},"image_url":{"type":"string","description":"The full URL of the image."},"caption":{"type":"string","description":"A short image description."}}},"description":"Adds images to the output displayed in the GitHub pull request UI."}},"description":"Check runs can accept a variety of data in the `output` object, including a `title` and `summary` and can optionally provide descriptive details about the run."},"actions":{"maxItems":3,"type":"array","items":{"required":["label","description","identifier"],"type":"object","properties":{"label":{"maxLength":20,"type":"string","description":"The text to be displayed on a button in the web UI. The maximum size is 20 characters."},"description":{"maxLength":40,"type":"string","description":"A short explanation of what this action would do. The maximum size is 40 characters."},"identifier":{"maxLength":20,"type":"string","description":"A reference for the action on the integrator\'s system. The maximum size is 20 characters."}}},"description":"Possible further actions the integrator can perform, which a user may trigger. Each action includes a `label`, `identifier` and `description`. A maximum of three actions are accepted. See the [`actions` object](https:\\/\\/docs.github.com\\/rest\\/reference\\/checks#actions-object) description. To learn more about check runs and requested actions, see \\"[Check runs and requested actions](https:\\/\\/docs.github.com\\/rest\\/reference\\/checks#check-runs-and-requested-actions).\\""}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","details_url":"generated_details_url_null","external_id":"generated_external_id_null","started_at":"1970-01-01T00:00:00+00:00","status":"queued","conclusion":"action_required","completed_at":"1970-01-01T00:00:00+00:00","output":{"title":"generated_title_null","summary":"generated_summary_null","text":"generated_text_null","annotations":[{"path":"generated_path_null","start_line":13,"end_line":13,"start_column":13,"end_column":13,"annotation_level":"notice","message":"generated_message_null","title":"generated_title_null","raw_details":"generated_raw_details_null"}],"images":[{"alt":"generated_alt_null","image_url":"generated_image_url_null","caption":"generated_caption_null"}]},"actions":[{"label":"generated_label_null","description":"generated_description_null","identifier":"generated_identifier_null"}]}';
    /**
    * name: The name of the check. For example, "code-coverage".
    * detailsUrl: The URL of the integrator's site that has the full details of the check.
    * externalId: A reference for the run on the integrator's system.
    * startedAt: This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    * status: The current status.
    * conclusion: **Required if you provide `completed_at` or a `status` of `completed`**. The final conclusion of the check. 
    **Note:** Providing `conclusion` will automatically set the `status` parameter to `completed`. You cannot change a check run conclusion to `stale`, only GitHub can set this.
    * completedAt: The time the check completed. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    * output: Check runs can accept a variety of data in the `output` object, including a `title` and `summary` and can optionally provide descriptive details about the run.
    * actions: Possible further actions the integrator can perform, which a user may trigger. Each action includes a `label`, `identifier` and `description`. A maximum of three actions are accepted. See the [`actions` object](https://docs.github.com/rest/reference/checks#actions-object) description. To learn more about check runs and requested actions, see "[Check runs and requested actions](https://docs.github.com/rest/reference/checks#check-runs-and-requested-actions)."
    * @param ?array<\ApiClients\Client\Github\Schema\Checks\Update\Request\Applicationjson\Actions> $actions
    */
    public function __construct(public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('details_url')] public ?string $detailsUrl, #[\EventSauce\ObjectHydrator\MapFrom('external_id')] public ?string $externalId, #[\EventSauce\ObjectHydrator\MapFrom('started_at')] public ?string $startedAt, public ?string $status, public ?string $conclusion, #[\EventSauce\ObjectHydrator\MapFrom('completed_at')] public ?string $completedAt, public ?Schema\Checks\Update\Request\Applicationjson\Output $output, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Checks\Update\Request\Applicationjson\Actions::class)] public ?array $actions)
    {
    }
}
