<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CA6C458Cb06A41796A61C9406D9040D20
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"maxLength":65535,"type":"string","description":"The comment text.","examples":["Body of the attachment"]}}}';
    public const SCHEMA_TITLE = 'c_a6c458cb06a41796a61c9406d9040d20';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The comment text.
     */
    private string $body;
    /**
     * The comment text.
     */
    public function body() : string
    {
        return $this->body;
    }
}
