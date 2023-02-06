<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateCard\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["note"],"type":"object","properties":{"note":{"type":["string","null"],"description":"The project card\'s note","examples":["Update all gems"]}}},{"required":["content_id","content_type"],"type":"object","properties":{"content_id":{"type":"integer","description":"The unique identifier of the content associated with the card","examples":[42]},"content_type":{"type":"string","description":"The piece of content associated with the card","examples":["PullRequest"]}}}]}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CreateCard\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The project card's note
     */
    public readonly ?string $note;
    public function __construct(string $note)
    {
        $this->note = $note;
    }
}
