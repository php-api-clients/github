<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion;

final readonly class Category
{
    public const SCHEMA_JSON = '{"required":["id","repository_id","emoji","name","description","created_at","updated_at","slug","is_answerable"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"description":{"type":"string"},"emoji":{"type":"string"},"id":{"type":"integer"},"is_answerable":{"type":"boolean"},"name":{"type":"string"},"node_id":{"type":"string"},"repository_id":{"type":"integer"},"slug":{"type":"string"},"updated_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $created_at;
    public ?string $description;
    public ?string $emoji;
    public ?int $id;
    public ?bool $is_answerable;
    public ?string $name;
    public string $node_id;
    public ?int $repository_id;
    public ?string $slug;
    public ?string $updated_at;
    public function __construct(string $created_at, string $description, string $emoji, int $id, bool $is_answerable, string $name, string $node_id, int $repository_id, string $slug, string $updated_at)
    {
        $this->created_at = $created_at;
        $this->description = $description;
        $this->emoji = $emoji;
        $this->id = $id;
        $this->is_answerable = $is_answerable;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->repository_id = $repository_id;
        $this->slug = $slug;
        $this->updated_at = $updated_at;
    }
}
