<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListMatchingRefs\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Git Reference","required":["ref","node_id","url","object"],"type":"object","properties":{"ref":{"type":"string"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"object":{"required":["type","sha","url"],"type":"object","properties":{"type":{"type":"string"},"sha":{"maxLength":40,"minLength":40,"type":"string","description":"SHA for the reference","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}}},"description":"Git references within a repository"}}';
    public const SCHEMA_TITLE = 'ListMatchingRefs\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
