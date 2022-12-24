<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C7D5B1B6A98B2196Eb0Ac0E51D816D254
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The text of the review comment."}}}';
    public const SCHEMA_TITLE = 'c_7d5b1b6a98b2196eb0ac0e51d816d254';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The text of the review comment.
     */
    private string $body;
    /**
     * The text of the review comment.
     */
    public function body() : string
    {
        return $this->body;
    }
}
