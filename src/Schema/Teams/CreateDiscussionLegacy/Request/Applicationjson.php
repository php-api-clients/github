<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Teams\CreateDiscussionLegacy\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["title","body"],"type":"object","properties":{"title":{"type":"string","description":"The discussion post\'s title."},"body":{"type":"string","description":"The discussion post\'s body text."},"private":{"type":"boolean","description":"Private posts are only visible to team members, organization owners, and team maintainers. Public posts are visible to all members of the organization. Set to `true` to create a private post.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title_null","body":"generated_body_null","private":false}';
    /**
     * title: The discussion post's title.
     * body: The discussion post's body text.
     * private: Private posts are only visible to team members, organization owners, and team maintainers. Public posts are visible to all members of the organization. Set to `true` to create a private post.
     */
    public function __construct(public string $title, public string $body, public ?bool $private)
    {
    }
}
