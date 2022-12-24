<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C616F5E87864841Ebe8D2Daa2C2Fc1015
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["note"],"type":"object","properties":{"note":{"type":["string","null"],"description":"The project card\'s note","examples":["Update all gems"]}}},{"required":["content_id","content_type"],"type":"object","properties":{"content_id":{"type":"integer","description":"The unique identifier of the content associated with the card","examples":[42]},"content_type":{"type":"string","description":"The piece of content associated with the card","examples":["PullRequest"]}}}]}';
    public const SCHEMA_TITLE = 'c_616f5e87864841ebe8d2daa2c2fc1015';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The project card's note
     */
    private $note;
    /**
     * The project card's note
     */
    public function note()
    {
        return $this->note;
    }
}
