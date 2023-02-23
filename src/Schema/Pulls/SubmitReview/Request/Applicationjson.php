<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Pulls\SubmitReview\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["event"],"type":"object","properties":{"body":{"type":"string","description":"The body text of the pull request review"},"event":{"enum":["APPROVE","REQUEST_CHANGES","COMMENT"],"type":"string","description":"The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. When you leave this blank, the API returns _HTTP 422 (Unrecognizable entity)_ and sets the review action state to `PENDING`, which means you will need to re-submit the pull request review using a review action."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The body text of the pull request review
     */
    public string $body;
    /**
     * The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. When you leave this blank, the API returns _HTTP 422 (Unrecognizable entity)_ and sets the review action state to `PENDING`, which means you will need to re-submit the pull request review using a review action.
     */
    public ?string $event;
    public function __construct(string $body, string $event)
    {
        $this->body = $body;
        $this->event = $event;
    }
}
