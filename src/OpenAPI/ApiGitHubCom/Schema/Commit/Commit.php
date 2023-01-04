<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit;

final class Commit
{
    public const SCHEMA_JSON = '{"required":["author","committer","message","tree","url","comment_count","verification"],"type":"object","properties":{"author":{"allOf":[{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},{"required":["date"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}}]},"comment_count":{"type":"integer"},"committer":{"allOf":[{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},{"required":["date"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}}]},"message":{"type":"string"},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"},"verification":{"required":["verified","reason","signature","payload"],"type":"object","properties":{"payload":{"type":["string","null"]},"reason":{"enum":["expired_key","not_signing_key","gpgverify_error","gpgverify_unavailable","unsigned","unknown_signature_type","no_user","unverified_email","bad_email","unknown_key","malformed_signature","invalid","valid","bad_cert","ocsp_pending"],"type":"string"},"signature":{"type":["string","null"]},"verified":{"type":"boolean"}}}}}';
    public const SCHEMA_TITLE = 'Commit\\Commit';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Author::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Author $author;
    private int $comment_count;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Committer::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Committer $committer;
    private string $message;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Tree::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Tree $tree;
    private string $url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Verification::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Verification $verification;
    public function author() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Author
    {
        return $this->author;
    }
    public function comment_count() : int
    {
        return $this->comment_count;
    }
    public function committer() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Committer
    {
        return $this->committer;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function tree() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Tree
    {
        return $this->tree;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function verification() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Verification
    {
        return $this->verification;
    }
}
