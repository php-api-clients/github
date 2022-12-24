<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C8C7417Cb08B593A169C0D2A998Ca13C8
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Org Hook","required":["id","url","type","name","active","events","config","ping_url","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[1]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1"]},"ping_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/pings"]},"deliveries_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/deliveries"]},"name":{"type":"string","examples":["web"]},"events":{"type":"array","items":{"type":"string"},"examples":["push","pull_request"]},"active":{"type":"boolean","examples":[true]},"config":{"type":"object","properties":{"url":{"type":"string","examples":["\\"http:\\/\\/example.com\\/2\\""]},"insecure_ssl":{"type":"string","examples":["\\"0\\""]},"content_type":{"type":"string","examples":["\\"form\\""]},"secret":{"type":"string","examples":["\\"********\\""]}}},"updated_at":{"type":"string","format":"date-time","examples":["2011-09-06T20:39:23Z"]},"created_at":{"type":"string","format":"date-time","examples":["2011-09-06T17:26:27Z"]},"type":{"type":"string"}},"description":"Org Hook"}}';
    public const SCHEMA_TITLE = 'c_8c7417cb08b593a169c0d2a998ca13c8';
    public const SCHEMA_DESCRIPTION = '';
}
