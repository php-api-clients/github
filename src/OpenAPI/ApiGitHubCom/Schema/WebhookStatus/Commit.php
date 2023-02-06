<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookStatus;

final class Commit
{
    public const SCHEMA_JSON = '{"required":["sha","node_id","commit","url","html_url","comments_url","author","committer","parents"],"type":"object","properties":{"author":{"title":"User","type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"comments_url":{"type":"string","format":"uri"},"commit":{"required":["author","committer","message","tree","url","comment_count","verification"],"type":"object","properties":{"author":{"allOf":[{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},{"required":["date"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}}]},"comment_count":{"type":"integer"},"committer":{"allOf":[{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},{"required":["date"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}}]},"message":{"type":"string"},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"},"verification":{"required":["verified","reason","signature","payload"],"type":"object","properties":{"payload":{"type":["string","null"]},"reason":{"enum":["expired_key","not_signing_key","gpgverify_error","gpgverify_unavailable","unsigned","unknown_signature_type","no_user","unverified_email","bad_email","unknown_key","malformed_signature","invalid","valid","bad_cert","ocsp_pending"],"type":"string"},"signature":{"type":["string","null"]},"verified":{"type":"boolean"}}}}},"committer":{"title":"User","type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"html_url":{"type":"string","format":"uri"},"node_id":{"type":"string"},"parents":{"type":"array","items":{"required":["sha","url","html_url"],"type":"object","properties":{"html_url":{"type":"string","format":"uri"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}}},"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookStatus\\Commit';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Author $author;
    public readonly string $comments_url;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Commit $commit;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Committer $committer;
    public readonly string $html_url;
    public readonly string $node_id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Parents>
     */
    public readonly array $parents;
    public readonly string $sha;
    public readonly string $url;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Parents> $parents
     */
    public function __construct(?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Author $author, string $comments_url, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Commit $commit, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit\Committer $committer, string $html_url, string $node_id, array $parents, string $sha, string $url)
    {
        $this->author = $author;
        $this->comments_url = $comments_url;
        $this->commit = $commit;
        $this->committer = $committer;
        $this->html_url = $html_url;
        $this->node_id = $node_id;
        $this->parents = $parents;
        $this->sha = $sha;
        $this->url = $url;
    }
}
