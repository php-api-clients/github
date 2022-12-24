<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C2B891Cd8673Ab76868860C2Cfd0Baf2A
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The text of the reply to the review comment."}}}';
    public const SCHEMA_TITLE = 'c_2b891cd8673ab76868860c2cfd0baf2a';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The text of the reply to the review comment.
     */
    private string $body;
    /**
     * The text of the reply to the review comment.
     */
    public function body() : string
    {
        return $this->body;
    }
}
