<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class FileCommit
{
    public const SCHEMA_JSON = '{"title":"File Commit","required":["content","commit"],"type":"object","properties":{"content":{"type":["object","null"],"properties":{"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"size":{"type":"integer"},"url":{"type":"string"},"html_url":{"type":"string"},"git_url":{"type":"string"},"download_url":{"type":"string"},"type":{"type":"string"},"_links":{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}}},"commit":{"type":"object","properties":{"sha":{"type":"string"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"author":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"committer":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"message":{"type":"string"},"tree":{"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}}},"parents":{"type":"array","items":{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}},"verification":{"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}}}},"description":"File Commit"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'File Commit';
    public const SCHEMA_DESCRIPTION = 'File Commit';
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Content $content;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Commit $commit;
    public function __construct(?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Content $content, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Commit $commit)
    {
        $this->content = $content;
        $this->commit = $commit;
    }
}
