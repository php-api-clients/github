<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPageBuild;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\AnswerChosenBy;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild\Error;

final readonly class Build
{
    public const SCHEMA_JSON        = '{"required":["url","status","error","pusher","commit","duration","created_at","updated_at"],"type":"object","properties":{"commit":{"type":["string","null"]},"created_at":{"type":"string"},"duration":{"type":"integer"},"error":{"required":["message"],"type":"object","properties":{"message":{"type":["string","null"]}}},"pusher":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"status":{"type":"string"},"updated_at":{"type":"string"},"url":{"type":"string","format":"uri"}},"description":"The [List GitHub Pages builds](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#list-github-pages-builds) itself."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The [List GitHub Pages builds](https://docs.github.com/rest/reference/repos#list-github-pages-builds) itself.';
    public ?string $commit;
    public ?string $created_at;
    public ?int $duration;
    public ?Error $error;
    public ?AnswerChosenBy $pusher;
    public ?string $status;
    public ?string $updated_at;
    public ?string $url;

    public function __construct(string $commit, string $created_at, int $duration, Error $error, AnswerChosenBy $pusher, string $status, string $updated_at, string $url)
    {
        $this->commit     = $commit;
        $this->created_at = $created_at;
        $this->duration   = $duration;
        $this->error      = $error;
        $this->pusher     = $pusher;
        $this->status     = $status;
        $this->updated_at = $updated_at;
        $this->url        = $url;
    }
}
