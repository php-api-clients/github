<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CF773Bee07F76F051984Ad34340Ecfc74
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"commit_id":{"type":"string","description":"The SHA of the commit that needs a review. Not using the latest commit SHA may render your review comment outdated if a subsequent commit modifies the line you specify as the `position`. Defaults to the most recent commit in the pull request when you do not specify a value."},"body":{"type":"string","description":"**Required** when using `REQUEST_CHANGES` or `COMMENT` for the `event` parameter. The body text of the pull request review."},"event":{"enum":["APPROVE","REQUEST_CHANGES","COMMENT"],"type":"string","description":"The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. By leaving this blank, you set the review action state to `PENDING`, which means you will need to [submit the pull request review](https:\\/\\/docs.github.com\\/rest\\/pulls#submit-a-review-for-a-pull-request) when you are ready."},"comments":{"type":"array","items":{"required":["path","body"],"type":"object","properties":{"path":{"type":"string","description":"The relative path to the file that necessitates a review comment."},"position":{"type":"integer","description":"The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below."},"body":{"type":"string","description":"Text of the review comment."},"line":{"type":"integer","examples":[28]},"side":{"type":"string","examples":["RIGHT"]},"start_line":{"type":"integer","examples":[26]},"start_side":{"type":"string","examples":["LEFT"]}}},"description":"Use the following table to specify the location, destination, and contents of the draft review comment."}}}';
    public const SCHEMA_TITLE = 'c_f773bee07f76f051984ad34340ecfc74';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The SHA of the commit that needs a review. Not using the latest commit SHA may render your review comment outdated if a subsequent commit modifies the line you specify as the `position`. Defaults to the most recent commit in the pull request when you do not specify a value.
     */
    private string $commit_id;
    /**
     * **Required** when using `REQUEST_CHANGES` or `COMMENT` for the `event` parameter. The body text of the pull request review.
     */
    private string $body;
    /**
     * The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. By leaving this blank, you set the review action state to `PENDING`, which means you will need to [submit the pull request review](https://docs.github.com/rest/pulls#submit-a-review-for-a-pull-request) when you are ready.
     */
    private string $event;
    /**
     * Use the following table to specify the location, destination, and contents of the draft review comment.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9246Ed4Fb5E2E3Fd0F7Ef6C6Ae1265B7>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9246Ed4Fb5E2E3Fd0F7Ef6C6Ae1265B7::class)
     */
    private array $comments = array();
    /**
     * The SHA of the commit that needs a review. Not using the latest commit SHA may render your review comment outdated if a subsequent commit modifies the line you specify as the `position`. Defaults to the most recent commit in the pull request when you do not specify a value.
     */
    public function commit_id() : string
    {
        return $this->commit_id;
    }
    /**
     * **Required** when using `REQUEST_CHANGES` or `COMMENT` for the `event` parameter. The body text of the pull request review.
     */
    public function body() : string
    {
        return $this->body;
    }
    /**
     * The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. By leaving this blank, you set the review action state to `PENDING`, which means you will need to [submit the pull request review](https://docs.github.com/rest/pulls#submit-a-review-for-a-pull-request) when you are ready.
     */
    public function event() : string
    {
        return $this->event;
    }
    /**
     * Use the following table to specify the location, destination, and contents of the draft review comment.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C9246Ed4Fb5E2E3Fd0F7Ef6C6Ae1265B7>
     */
    public function comments() : array
    {
        return $this->comments;
    }
}
