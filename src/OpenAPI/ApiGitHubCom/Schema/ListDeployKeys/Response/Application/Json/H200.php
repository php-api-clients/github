<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListDeployKeys\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Deploy Key","required":["id","key","url","title","verified","created_at","read_only"],"type":"object","properties":{"id":{"type":"integer"},"key":{"type":"string"},"url":{"type":"string"},"title":{"type":"string"},"verified":{"type":"boolean"},"created_at":{"type":"string"},"read_only":{"type":"boolean"},"added_by":{"type":["string","null"]},"last_used":{"type":["string","null"]}},"description":"An SSH key granting access to a single repository."}}';
    public const SCHEMA_TITLE = 'ListDeployKeys\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
