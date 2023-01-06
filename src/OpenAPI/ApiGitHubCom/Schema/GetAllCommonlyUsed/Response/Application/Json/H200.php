<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GetAllCommonlyUsed\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}}';
    public const SCHEMA_TITLE = 'GetAllCommonlyUsed\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
