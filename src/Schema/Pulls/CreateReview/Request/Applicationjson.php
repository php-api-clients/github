<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Pulls\CreateReview\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"commit_id":{"type":"string","description":"The SHA of the commit that needs a review. Not using the latest commit SHA may render your review comment outdated if a subsequent commit modifies the line you specify as the `position`. Defaults to the most recent commit in the pull request when you do not specify a value."},"body":{"type":"string","description":"**Required** when using `REQUEST_CHANGES` or `COMMENT` for the `event` parameter. The body text of the pull request review."},"event":{"enum":["APPROVE","REQUEST_CHANGES","COMMENT"],"type":"string","description":"The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. By leaving this blank, you set the review action state to `PENDING`, which means you will need to [submit the pull request review](https:\\/\\/docs.github.com\\/rest\\/pulls#submit-a-review-for-a-pull-request) when you are ready."},"comments":{"type":"array","items":{"required":["path","body"],"type":"object","properties":{"path":{"type":"string","description":"The relative path to the file that necessitates a review comment."},"position":{"type":"integer","description":"The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below."},"body":{"type":"string","description":"Text of the review comment."},"line":{"type":"integer","examples":[28]},"side":{"type":"string","examples":["RIGHT"]},"start_line":{"type":"integer","examples":[26]},"start_side":{"type":"string","examples":["LEFT"]}}},"description":"Use the following table to specify the location, destination, and contents of the draft review comment."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"commit_id":"generated_commit_id","body":"generated_body","event":"generated_event","comments":[{"path":"generated_path","position":13,"body":"generated_body","line":28,"side":"RIGHT","start_line":26,"start_side":"LEFT"}]}';
    /**
     * commit_id: The SHA of the commit that needs a review. Not using the latest commit SHA may render your review comment outdated if a subsequent commit modifies the line you specify as the `position`. Defaults to the most recent commit in the pull request when you do not specify a value.
     * body: **Required** when using `REQUEST_CHANGES` or `COMMENT` for the `event` parameter. The body text of the pull request review.
     * event: The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. By leaving this blank, you set the review action state to `PENDING`, which means you will need to [submit the pull request review](https://docs.github.com/rest/pulls#submit-a-review-for-a-pull-request) when you are ready.
     * comments: Use the following table to specify the location, destination, and contents of the draft review comment.
     * @param ?array<\ApiClients\Client\GitHub\Schema\Pulls\CreateReview\Request\Applicationjson\Comments> $comments
     */
    public function __construct(public ?string $commit_id, public ?string $body, public ?string $event, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Pulls\CreateReview\Request\Applicationjson\Comments::class)] public ?array $comments)
    {
    }
}
