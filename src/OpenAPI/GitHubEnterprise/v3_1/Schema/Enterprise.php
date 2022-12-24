<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Enterprise
{
    public const SCHEMA_JSON = '{"title":"Enterprise","required":["id","node_id","name","slug","html_url","created_at","updated_at","avatar_url"],"type":"object","properties":{"description":{"type":["string","null"],"description":"A short description of the enterprise."},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/enterprises\\/octo-business"]},"website_url":{"type":["string","null"],"description":"The enterprise\'s website URL.","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the enterprise","examples":[42]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the enterprise.","examples":["Octo Business"]},"slug":{"type":"string","description":"The slug url identifier for the enterprise.","examples":["octo-business"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2019-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2019-01-26T19:14:43Z"]},"avatar_url":{"type":"string","format":"uri"}},"description":"An enterprise account"}';
    public const SCHEMA_TITLE = 'Enterprise';
    public const SCHEMA_DESCRIPTION = 'An enterprise account';
    /**
     * A short description of the enterprise.
     */
    private $description;
    private string $html_url;
    /**
     * The enterprise's website URL.
     */
    private $website_url;
    /**
     * Unique identifier of the enterprise
     */
    private int $id;
    private string $node_id;
    /**
     * The name of the enterprise.
     */
    private string $name;
    /**
     * The slug url identifier for the enterprise.
     */
    private string $slug;
    private $created_at;
    private $updated_at;
    private string $avatar_url;
    /**
     * A short description of the enterprise.
     */
    public function description()
    {
        return $this->description;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The enterprise's website URL.
     */
    public function website_url()
    {
        return $this->website_url;
    }
    /**
     * Unique identifier of the enterprise
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The name of the enterprise.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The slug url identifier for the enterprise.
     */
    public function slug() : string
    {
        return $this->slug;
    }
    public function created_at()
    {
        return $this->created_at;
    }
    public function updated_at()
    {
        return $this->updated_at;
    }
    public function avatar_url() : string
    {
        return $this->avatar_url;
    }
}
