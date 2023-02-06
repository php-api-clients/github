<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateBlob\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"type":"string","description":"The new blob\'s content."},"encoding":{"type":"string","description":"The encoding used for `content`. Currently, `\\"utf-8\\"` and `\\"base64\\"` are supported.","default":"utf-8"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CreateBlob\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new blob's content.
     */
    public readonly string $content;
    /**
     * The encoding used for `content`. Currently, `"utf-8"` and `"base64"` are supported.
     */
    public readonly ?string $encoding;
    public function __construct(string $content, string $encoding)
    {
        $this->content = $content;
        $this->encoding = $encoding;
    }
}
