<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Enterprise
{
    public const SCHEMA_JSON = '{"title":"Enterprise","required":["id","node_id","name","slug","html_url","created_at","updated_at","avatar_url"],"type":"object","properties":{"description":{"type":["string","null"],"description":"A short description of the enterprise."},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/enterprises\\/octo-business"]},"website_url":{"type":["string","null"],"description":"The enterprise\'s website URL.","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the enterprise","examples":[42]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the enterprise.","examples":["Octo Business"]},"slug":{"type":"string","description":"The slug url identifier for the enterprise.","examples":["octo-business"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2019-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2019-01-26T19:14:43Z"]},"avatar_url":{"type":"string","format":"uri"}},"description":"An enterprise on GitHub."}';
    public const SCHEMA_EXAMPLE = '{"html_url":"https:\\/\\/github.com\\/enterprises\\/octo-business","id":42,"node_id":"MDEwOlJlcG9zaXRvcnkxMjk2MjY5","name":"Octo Business","slug":"octo-business","created_at":"2019-01-26T19:01:12Z","updated_at":"2019-01-26T19:14:43Z"}';
    public const SCHEMA_TITLE = 'Enterprise';
    public const SCHEMA_DESCRIPTION = 'An enterprise on GitHub.';
    /**
     * A short description of the enterprise.
     */
    public readonly ?string $description;
    public readonly string $html_url;
    /**
     * The enterprise's website URL.
     */
    public readonly ?string $website_url;
    /**
     * Unique identifier of the enterprise
     */
    public readonly int $id;
    public readonly string $node_id;
    /**
     * The name of the enterprise.
     */
    public readonly string $name;
    /**
     * The slug url identifier for the enterprise.
     */
    public readonly string $slug;
    public readonly ?string $created_at;
    public readonly ?string $updated_at;
    public readonly string $avatar_url;
    public function __construct(string $description, string $html_url, string $website_url, int $id, string $node_id, string $name, string $slug, string $created_at, string $updated_at, string $avatar_url)
    {
        $this->description = $description;
        $this->html_url = $html_url;
        $this->website_url = $website_url;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->name = $name;
        $this->slug = $slug;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->avatar_url = $avatar_url;
    }
}
