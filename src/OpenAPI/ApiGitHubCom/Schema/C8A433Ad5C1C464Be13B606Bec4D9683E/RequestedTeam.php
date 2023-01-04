<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C8A433Ad5C1C464Be13B606Bec4D9683E;

final class RequestedTeam
{
    public const SCHEMA_JSON = '{"title":"Team","required":["name","id","node_id","slug","description","privacy","url","html_url","members_url","repositories_url","permission"],"type":"object","properties":{"deleted":{"type":"boolean"},"description":{"type":["string","null"],"description":"Description of the team"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the team"},"members_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"Name of the team"},"node_id":{"type":"string"},"parent":{"required":["name","id","node_id","slug","description","privacy","url","html_url","members_url","repositories_url","permission"],"type":["object","null"],"properties":{"description":{"type":["string","null"],"description":"Description of the team"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the team"},"members_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"Name of the team"},"node_id":{"type":"string"},"permission":{"type":"string","description":"Permission that the team will have for its repositories"},"privacy":{"enum":["open","closed","secret"],"type":"string"},"repositories_url":{"type":"string","format":"uri"},"slug":{"type":"string"},"url":{"type":"string","description":"URL for the team","format":"uri"}}},"permission":{"type":"string","description":"Permission that the team will have for its repositories"},"privacy":{"enum":["open","closed","secret"],"type":"string"},"repositories_url":{"type":"string","format":"uri"},"slug":{"type":"string"},"url":{"type":"string","description":"URL for the team","format":"uri"}},"description":"Groups of organization members that gives permissions on specified repositories."}';
    public const SCHEMA_TITLE = 'Team';
    public const SCHEMA_DESCRIPTION = 'Groups of organization members that gives permissions on specified repositories.';
    private ?bool $deleted = null;
    /**
     * Description of the team
     */
    private $description;
    private string $html_url;
    /**
     * Unique identifier of the team
     */
    private int $id;
    private string $members_url;
    /**
     * Name of the team
     */
    private string $name;
    private string $node_id;
    private $parent;
    /**
     * Permission that the team will have for its repositories
     */
    private string $permission;
    private string $privacy;
    private string $repositories_url;
    private string $slug;
    /**
     * URL for the team
     */
    private string $url;
    public function deleted() : ?bool
    {
        return $this->deleted;
    }
    /**
     * Description of the team
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
     * Unique identifier of the team
     */
    public function id() : int
    {
        return $this->id;
    }
    public function members_url() : string
    {
        return $this->members_url;
    }
    /**
     * Name of the team
     */
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function parent()
    {
        return $this->parent;
    }
    /**
     * Permission that the team will have for its repositories
     */
    public function permission() : string
    {
        return $this->permission;
    }
    public function privacy() : string
    {
        return $this->privacy;
    }
    public function repositories_url() : string
    {
        return $this->repositories_url;
    }
    public function slug() : string
    {
        return $this->slug;
    }
    /**
     * URL for the team
     */
    public function url() : string
    {
        return $this->url;
    }
}
