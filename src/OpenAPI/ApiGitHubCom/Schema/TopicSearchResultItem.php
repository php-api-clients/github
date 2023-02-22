<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class TopicSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"Topic Search Result Item","required":["name","display_name","short_description","description","created_by","released","created_at","updated_at","featured","curated","score"],"type":"object","properties":{"name":{"type":"string"},"display_name":{"type":["string","null"]},"short_description":{"type":["string","null"]},"description":{"type":["string","null"]},"created_by":{"type":["string","null"]},"released":{"type":["string","null"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"featured":{"type":"boolean"},"curated":{"type":"boolean"},"score":{"type":"number"},"repository_count":{"type":["integer","null"]},"logo_url":{"type":["string","null"],"format":"uri"},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"related":{"type":["array","null"],"items":{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}},"aliases":{"type":["array","null"],"items":{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}}},"description":"Topic Search Result Item"}';
    public const SCHEMA_TITLE = 'Topic Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Topic Search Result Item';
    public ?string $name;
    public ?string $display_name;
    public ?string $short_description;
    public ?string $description;
    public ?string $created_by;
    public ?string $released;
    public ?string $created_at;
    public ?string $updated_at;
    public ?bool $featured;
    public ?bool $curated;
    public ?int $score;
    public ?int $repository_count;
    public ?string $logo_url;
    public array $text_matches;
    public ?array $related;
    public ?array $aliases;
    public function __construct(string $name, string $display_name, string $short_description, string $description, string $created_by, string $released, string $created_at, string $updated_at, bool $featured, bool $curated, int $score, int $repository_count, string $logo_url, array $text_matches, array $related, array $aliases)
    {
        $this->name = $name;
        $this->display_name = $display_name;
        $this->short_description = $short_description;
        $this->description = $description;
        $this->created_by = $created_by;
        $this->released = $released;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->featured = $featured;
        $this->curated = $curated;
        $this->score = $score;
        $this->repository_count = $repository_count;
        $this->logo_url = $logo_url;
        $this->text_matches = $text_matches;
        $this->related = $related;
        $this->aliases = $aliases;
    }
}
