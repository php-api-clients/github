<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Schema;

final class Release
{
    public const SCHEMA_TITLE = 'Release';
    public const SCHEMA_DESCRIPTION = 'A release.';
    private string $url;
    private string $html_url;
    private string $assets_url;
    private string $upload_url;
    private string $tarball_url;
    private string $zipball_url;
    private int $id;
    private string $node_id;
    /**The name of the tag.**/
    private string $tag_name;
    /**Specifies the commitish value that determines where the Git tag is created from.**/
    private string $target_commitish;
    private string $name;
    private string $body;
    /**true to create a draft (unpublished) release, false to create a published one.**/
    private boolean $draft;
    /**Whether to identify the release as a prerelease or a full release.**/
    private boolean $prerelease;
    private string $created_at;
    private string $published_at;
    /**Simple User**/
    private object $author;
    private array $assets;
    private string $body_html;
    private string $body_text;
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function assets_url() : string
    {
        return $this->assets_url;
    }
    public function upload_url() : string
    {
        return $this->upload_url;
    }
    public function tarball_url() : string
    {
        return $this->tarball_url;
    }
    public function zipball_url() : string
    {
        return $this->zipball_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function tag_name() : string
    {
        return $this->tag_name;
    }
    public function target_commitish() : string
    {
        return $this->target_commitish;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function body() : string
    {
        return $this->body;
    }
    public function draft() : boolean
    {
        return $this->draft;
    }
    public function prerelease() : boolean
    {
        return $this->prerelease;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function published_at() : string
    {
        return $this->published_at;
    }
    public function author() : object
    {
        return $this->author;
    }
    public function assets() : array
    {
        return $this->assets;
    }
    public function body_html() : string
    {
        return $this->body_html;
    }
    public function body_text() : string
    {
        return $this->body_text;
    }
}
