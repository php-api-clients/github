<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListContributors\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Contributor","required":["contributions","type"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"contributions":{"type":"integer"},"email":{"type":"string"},"name":{"type":"string"}},"description":"Contributor"}}';
    public const SCHEMA_TITLE = 'ListContributors\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
