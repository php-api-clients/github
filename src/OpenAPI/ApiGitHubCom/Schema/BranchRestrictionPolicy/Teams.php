<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy;

final class Teams
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"name":{"type":"string"},"slug":{"type":"string"},"description":{"type":["string","null"]},"privacy":{"type":"string"},"permission":{"type":"string"},"members_url":{"type":"string"},"repositories_url":{"type":"string"},"parent":{"type":["string","null"]}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'BranchRestrictionPolicy\\Teams';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $url;
    public readonly string $html_url;
    public readonly string $name;
    public readonly string $slug;
    public readonly ?string $description;
    public readonly string $privacy;
    public readonly string $permission;
    public readonly string $members_url;
    public readonly string $repositories_url;
    public readonly ?string $parent;
    public function __construct(int $id, string $node_id, string $url, string $html_url, string $name, string $slug, string $description, string $privacy, string $permission, string $members_url, string $repositories_url, string $parent)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->name = $name;
        $this->slug = $slug;
        $this->description = $description;
        $this->privacy = $privacy;
        $this->permission = $permission;
        $this->members_url = $members_url;
        $this->repositories_url = $repositories_url;
        $this->parent = $parent;
    }
}
