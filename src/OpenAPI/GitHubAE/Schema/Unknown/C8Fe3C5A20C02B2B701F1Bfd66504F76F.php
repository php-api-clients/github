<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C8Fe3C5A20C02B2B701F1Bfd66504F76F
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":"string","description":"The discussion post\'s title."},"body":{"type":"string","description":"The discussion post\'s body text."}}}';
    public const SCHEMA_TITLE = 'c_8fe3c5a20c02b2b701f1bfd66504f76f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The discussion post's title.
     */
    private string $title;
    /**
     * The discussion post's body text.
     */
    private string $body;
    /**
     * The discussion post's title.
     */
    public function title() : string
    {
        return $this->title;
    }
    /**
     * The discussion post's body text.
     */
    public function body() : string
    {
        return $this->body;
    }
}
