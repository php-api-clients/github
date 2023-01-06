<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListLabelsOnIssue\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Label","required":["id","node_id","url","name","description","color","default"],"type":"object","properties":{"id":{"type":"integer","format":"int64","examples":[208045946]},"node_id":{"type":"string","examples":["MDU6TGFiZWwyMDgwNDU5NDY="]},"url":{"type":"string","description":"URL for the label","format":"uri","examples":["https:\\/\\/api.github.com\\/repositories\\/42\\/labels\\/bug"]},"name":{"type":"string","description":"The name of the label.","examples":["bug"]},"description":{"type":["string","null"],"examples":["Something isn\'t working"]},"color":{"type":"string","description":"6-character hex code, without the leading #, identifying the color","examples":["FFFFFF"]},"default":{"type":"boolean","examples":[true]}},"description":"Color-coded labels help you categorize and filter your issues (just like labels in Gmail)."}}';
    public const SCHEMA_TITLE = 'ListLabelsOnIssue\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
