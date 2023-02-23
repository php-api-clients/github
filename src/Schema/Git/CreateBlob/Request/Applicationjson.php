<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Git\CreateBlob\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"type":"string","description":"The new blob\'s content."},"encoding":{"type":"string","description":"The encoding used for `content`. Currently, `\\"utf-8\\"` and `\\"base64\\"` are supported.","default":"utf-8"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new blob's content.
     */
    public ?string $content;
    /**
     * The encoding used for `content`. Currently, `"utf-8"` and `"base64"` are supported.
     */
    public string $encoding;
    public function __construct(string $content, string $encoding)
    {
        $this->content = $content;
        $this->encoding = $encoding;
    }
}
