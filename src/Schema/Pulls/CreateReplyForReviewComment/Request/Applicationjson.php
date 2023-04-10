<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Pulls\CreateReplyForReviewComment\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The text of the review comment."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"generated_body_null"}';
    /**
     * body: The text of the review comment.
     */
    public function __construct(public string $body)
    {
    }
}
