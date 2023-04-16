<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class FileCommit
{
    public const SCHEMA_JSON         = '{"title":"File Commit","required":["content","commit"],"type":"object","properties":{"content":{"type":["object","null"],"properties":{"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"size":{"type":"integer"},"url":{"type":"string"},"html_url":{"type":"string"},"git_url":{"type":"string"},"download_url":{"type":"string"},"type":{"type":"string"},"_links":{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}}},"commit":{"type":"object","properties":{"sha":{"type":"string"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"author":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"committer":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"message":{"type":"string"},"tree":{"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}}},"parents":{"type":"array","items":{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}},"verification":{"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}}}},"description":"File Commit"}';
    public const SCHEMA_TITLE        = 'File Commit';
    public const SCHEMA_DESCRIPTION  = 'File Commit';
    public const SCHEMA_EXAMPLE_DATA = '{"content":{"name":"generated_name_null","path":"generated_path_null","sha":"generated_sha_null","size":13,"url":"generated_url_null","html_url":"generated_html_url_null","git_url":"generated_git_url_null","download_url":"generated_download_url_null","type":"generated_type_null","_links":{"self":"generated_self_null","git":"generated_git_null","html":"generated_html_null"}},"commit":{"sha":"generated_sha_null","node_id":"generated_node_id_null","url":"generated_url_null","html_url":"generated_html_url_null","author":{"date":"generated_date_null","name":"generated_name_null","email":"generated_email_null"},"committer":{"date":"generated_date_null","name":"generated_name_null","email":"generated_email_null"},"message":"generated_message_null","tree":{"url":"generated_url_null","sha":"generated_sha_null"},"parents":[{"url":"generated_url_null","html_url":"generated_html_url_null","sha":"generated_sha_null"}],"verification":{"verified":false,"reason":"generated_reason_null","signature":"generated_signature_null","payload":"generated_payload_null"}}}';

    public function __construct(public ?Schema\FileCommit\Content $content, public Schema\FileCommit\Commit $commit)
    {
    }
}
