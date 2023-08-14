<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Reactions\CreateForRelease\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","laugh","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/rest\\/reactions\\/reactions#about-reactions) to add to the release."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"+1"}';

    /**
     * content: The [reaction type](https://docs.github.com/rest/reactions/reactions#about-reactions) to add to the release.
     */
    public function __construct(public string $content)
    {
    }
}
