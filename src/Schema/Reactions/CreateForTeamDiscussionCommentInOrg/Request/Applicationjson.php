<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Reactions\CreateForTeamDiscussionCommentInOrg\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/rest\\/reference\\/reactions#reaction-types) to add to the team discussion comment."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"generated_content"}';
    /**
     * content: The [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types) to add to the team discussion comment.
     */
    public function __construct(public ?string $content)
    {
    }
}
