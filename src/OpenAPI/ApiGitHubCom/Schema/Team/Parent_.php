<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Team;

final class Parent_
{
    public const SCHEMA_JSON = '{"required":["name","id","node_id","slug","description","privacy","url","html_url","members_url","repositories_url","permission"],"type":["object","null"],"properties":{"description":{"type":["string","null"],"description":"Description of the team"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the team"},"members_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"Name of the team"},"node_id":{"type":"string"},"permission":{"type":"string","description":"Permission that the team will have for its repositories"},"privacy":{"enum":["open","closed","secret"],"type":"string"},"repositories_url":{"type":"string","format":"uri"},"slug":{"type":"string"},"url":{"type":"string","description":"URL for the team","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Team\\Parent';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Description of the team
     */
    public readonly ?string $description;
    public readonly string $html_url;
    /**
     * Unique identifier of the team
     */
    public readonly int $id;
    public readonly string $members_url;
    /**
     * Name of the team
     */
    public readonly string $name;
    public readonly string $node_id;
    /**
     * Permission that the team will have for its repositories
     */
    public readonly string $permission;
    public readonly string $privacy;
    public readonly string $repositories_url;
    public readonly string $slug;
    /**
     * URL for the team
     */
    public readonly string $url;
    public function __construct(string $description, string $html_url, int $id, string $members_url, string $name, string $node_id, string $permission, string $privacy, string $repositories_url, string $slug, string $url)
    {
        $this->description = $description;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->members_url = $members_url;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->permission = $permission;
        $this->privacy = $privacy;
        $this->repositories_url = $repositories_url;
        $this->slug = $slug;
        $this->url = $url;
    }
}
