<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class FileCommit
{
    public const SCHEMA_JSON = '{"title":"File Commit","required":["content","commit"],"type":"object","properties":{"content":{"type":["object","null"],"properties":{"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"size":{"type":"integer"},"url":{"type":"string"},"html_url":{"type":"string"},"git_url":{"type":"string"},"download_url":{"type":"string"},"type":{"type":"string"},"_links":{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}}},"commit":{"type":"object","properties":{"sha":{"type":"string"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"author":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"committer":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"message":{"type":"string"},"tree":{"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}}},"parents":{"type":"array","items":{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}},"verification":{"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}}}},"description":"File Commit"}';
    public const SCHEMA_TITLE = 'File Commit';
    public const SCHEMA_DESCRIPTION = 'File Commit';
    public const SCHEMA_EXAMPLE_DATA = '{"content":{"name":"generated_name","path":"generated_path","sha":"generated_sha","size":13,"url":"generated_url","html_url":"generated_html_url","git_url":"generated_git_url","download_url":"generated_download_url","type":"generated_type","_links":{"self":"generated_self","git":"generated_git","html":"generated_html"}},"commit":{"sha":"generated_sha","node_id":"generated_node_id","url":"generated_url","html_url":"generated_html_url","author":{"date":"generated_date","name":"generated_name","email":"generated_email"},"committer":{"date":"generated_date","name":"generated_name","email":"generated_email"},"message":"generated_message","tree":{"url":"generated_url","sha":"generated_sha"},"parents":[{"url":"generated_url","html_url":"generated_html_url","sha":"generated_sha"}],"verification":{"verified":false,"reason":"generated_reason","signature":"generated_signature","payload":"generated_payload"}}}';
    public function __construct(public ?Schema\FileCommit\Content $content, public ?Schema\FileCommit\Commit $commit)
    {
    }
}
