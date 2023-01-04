<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\From;

final class Organization
{
    public const SCHEMA_JSON = '{"title":"Organization","required":["login","id","node_id","url","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"events_url":{"type":"string","format":"uri"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"issues_url":{"type":"string","format":"uri"},"login":{"type":"string"},"members_url":{"type":"string","format":"uri-template"},"node_id":{"type":"string"},"public_members_url":{"type":"string","format":"uri-template"},"repos_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Organization';
    public const SCHEMA_DESCRIPTION = '';
    private string $avatar_url;
    private ?string $description;
    private string $events_url;
    private string $hooks_url;
    private ?string $html_url = null;
    private int $id;
    private string $issues_url;
    private string $login;
    private string $members_url;
    private string $node_id;
    private string $public_members_url;
    private string $repos_url;
    private string $url;
    public function avatar_url() : string
    {
        return $this->avatar_url;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function hooks_url() : string
    {
        return $this->hooks_url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function issues_url() : string
    {
        return $this->issues_url;
    }
    public function login() : string
    {
        return $this->login;
    }
    public function members_url() : string
    {
        return $this->members_url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function public_members_url() : string
    {
        return $this->public_members_url;
    }
    public function repos_url() : string
    {
        return $this->repos_url;
    }
    public function url() : string
    {
        return $this->url;
    }
}
