<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SubmitReview\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["event"],"type":"object","properties":{"body":{"type":"string","description":"The body text of the pull request review"},"event":{"enum":["APPROVE","REQUEST_CHANGES","COMMENT"],"type":"string","description":"The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. When you leave this blank, the API returns _HTTP 422 (Unrecognizable entity)_ and sets the review action state to `PENDING`, which means you will need to re-submit the pull request review using a review action."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'SubmitReview\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The body text of the pull request review
     */
    public readonly ?string $body;
    /**
     * The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. When you leave this blank, the API returns _HTTP 422 (Unrecognizable entity)_ and sets the review action state to `PENDING`, which means you will need to re-submit the pull request review using a review action.
     */
    public readonly string $event;
    public function __construct(string $body, string $event)
    {
        $this->body = $body;
        $this->event = $event;
    }
}
