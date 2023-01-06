<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListTags\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Tag","required":["name","node_id","commit","zipball_url","tarball_url"],"type":"object","properties":{"name":{"type":"string","examples":["v0.1"]},"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"zipball_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/zipball\\/v0.1"]},"tarball_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/tarball\\/v0.1"]},"node_id":{"type":"string"}},"description":"Tag"}}';
    public const SCHEMA_TITLE = 'ListTags\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
