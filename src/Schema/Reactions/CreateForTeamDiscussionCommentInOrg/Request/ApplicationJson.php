<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Reactions\CreateForTeamDiscussionCommentInOrg\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/rest\\/reference\\/reactions#reaction-types) to add to the team discussion comment."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"+1"}';

    /**
     * content: The [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types) to add to the team discussion comment.
     */
    public function __construct(public string $content)
    {
    }
}
