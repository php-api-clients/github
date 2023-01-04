<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewDiscussion;

final class Category
{
    public const SCHEMA_JSON = '{"required":["id","repository_id","emoji","name","description","created_at","updated_at","slug","is_answerable"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"description":{"type":"string"},"emoji":{"type":"string"},"id":{"type":"integer"},"is_answerable":{"type":"boolean"},"name":{"type":"string"},"node_id":{"type":"string"},"repository_id":{"type":"integer"},"slug":{"type":"string"},"updated_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'NewDiscussion\\Category';
    public const SCHEMA_DESCRIPTION = '';
    private string $created_at;
    private string $description;
    private string $emoji;
    private int $id;
    private bool $is_answerable;
    private string $name;
    private ?string $node_id = null;
    private int $repository_id;
    private string $slug;
    private string $updated_at;
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function emoji() : string
    {
        return $this->emoji;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function is_answerable() : bool
    {
        return $this->is_answerable;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function repository_id() : int
    {
        return $this->repository_id;
    }
    public function slug() : string
    {
        return $this->slug;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
