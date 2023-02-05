<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit;

final class Commit
{
    public const SCHEMA_JSON = '{"required":["author","committer","message","tree","url","comment_count","verification"],"type":"object","properties":{"author":{"allOf":[{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},{"required":["date"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}}]},"comment_count":{"type":"integer"},"committer":{"allOf":[{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},{"required":["date"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}}]},"message":{"type":"string"},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"},"verification":{"required":["verified","reason","signature","payload"],"type":"object","properties":{"payload":{"type":["string","null"]},"reason":{"enum":["expired_key","not_signing_key","gpgverify_error","gpgverify_unavailable","unsigned","unknown_signature_type","no_user","unverified_email","bad_email","unknown_key","malformed_signature","invalid","valid","bad_cert","ocsp_pending"],"type":"string"},"signature":{"type":["string","null"]},"verified":{"type":"boolean"}}}}}';
    public const SCHEMA_TITLE = 'Commit\\Commit';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Author $author;
    public readonly int $comment_count;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Committer $committer;
    public readonly string $message;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Tree $tree;
    public readonly string $url;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Verification $verification;
    public function __construct(mixed $author, int $comment_count, mixed $committer, string $message, object $tree, string $url, object $verification)
    {
        $this->author = $author;
        $this->comment_count = $comment_count;
        $this->committer = $committer;
        $this->message = $message;
        $this->tree = $tree;
        $this->url = $url;
        $this->verification = $verification;
    }
}
