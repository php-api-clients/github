<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SimpleCommitStatus
{
    public const SCHEMA_JSON = '{"title":"Simple Commit Status","required":["description","id","node_id","state","context","target_url","avatar_url","url","created_at","updated_at"],"type":"object","properties":{"description":{"type":["string","null"]},"id":{"type":"integer"},"node_id":{"type":"string"},"state":{"type":"string"},"context":{"type":"string"},"target_url":{"type":["string","null"],"format":"uri"},"required":{"type":["boolean","null"]},"avatar_url":{"type":["string","null"],"format":"uri"},"url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Simple Commit Status';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?string $description;
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $state;
    public readonly string $context;
    public readonly ?string $target_url;
    public readonly ?bool $required;
    public readonly ?string $avatar_url;
    public readonly string $url;
    public readonly string $created_at;
    public readonly string $updated_at;
    public function __construct(string $description, int $id, string $node_id, string $state, string $context, string $target_url, bool $required, string $avatar_url, string $url, string $created_at, string $updated_at)
    {
        $this->description = $description;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->state = $state;
        $this->context = $context;
        $this->target_url = $target_url;
        $this->required = $required;
        $this->avatar_url = $avatar_url;
        $this->url = $url;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
