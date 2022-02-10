<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MergedUpstream
{
    public const SCHEMA_TITLE = 'Merged upstream';
    public const SCHEMA_DESCRIPTION = 'Results of a successful merge upstream request';
    private string $message;
    private string $merge_type;
    private string $base_branch;
    public function message() : string
    {
        return $this->message;
    }
    public function merge_type() : string
    {
        return $this->merge_type;
    }
    public function base_branch() : string
    {
        return $this->base_branch;
    }
}
