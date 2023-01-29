<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MergedUpstream
{
    public const SCHEMA_JSON = '{"title":"Merged upstream","type":"object","properties":{"message":{"type":"string"},"merge_type":{"enum":["merge","fast-forward","none"],"type":"string"},"base_branch":{"type":"string"}},"description":"Results of a successful merge upstream request"}';
    public const SCHEMA_TITLE = 'Merged upstream';
    public const SCHEMA_DESCRIPTION = 'Results of a successful merge upstream request';
    public readonly string $message;
    public readonly string $merge_type;
    public readonly string $base_branch;
    public function __construct(string $message, string $merge_type, string $base_branch)
    {
        $this->message = $message;
        $this->merge_type = $merge_type;
        $this->base_branch = $base_branch;
    }
}
