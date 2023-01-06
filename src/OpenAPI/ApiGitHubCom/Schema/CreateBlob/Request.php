<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateBlob;

final class Request
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"type":"string","description":"The new blob\'s content."},"encoding":{"type":"string","description":"The encoding used for `content`. Currently, `\\"utf-8\\"` and `\\"base64\\"` are supported.","default":"utf-8"}}}';
    public const SCHEMA_TITLE = 'CreateBlob\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new blob's content.
     */
    private string $content;
    /**
     * The encoding used for `content`. Currently, `"utf-8"` and `"base64"` are supported.
     */
    private ?string $encoding = null;
    /**
     * The new blob's content.
     */
    public function content() : string
    {
        return $this->content;
    }
    /**
     * The encoding used for `content`. Currently, `"utf-8"` and `"base64"` are supported.
     */
    public function encoding() : ?string
    {
        return $this->encoding;
    }
}
