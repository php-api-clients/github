<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TopicSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"Topic Search Result Item","required":["name","display_name","short_description","description","created_by","released","created_at","updated_at","featured","curated","score"],"type":"object","properties":{"name":{"type":"string"},"display_name":{"type":["string","null"]},"short_description":{"type":["string","null"]},"description":{"type":["string","null"]},"created_by":{"type":["string","null"]},"released":{"type":["string","null"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"featured":{"type":"boolean"},"curated":{"type":"boolean"},"score":{"type":"number"},"repository_count":{"type":["integer","null"]},"logo_url":{"type":["string","null"],"format":"uri"},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"related":{"type":["array","null"],"items":{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}},"aliases":{"type":["array","null"],"items":{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}}},"description":"Topic Search Result Item"}';
    public const SCHEMA_TITLE = 'Topic Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Topic Search Result Item';
    private string $name;
    private $display_name;
    private $short_description;
    private $description;
    private $created_by;
    private $released;
    private string $created_at;
    private string $updated_at;
    private bool $featured;
    private bool $curated;
    private int $score;
    private $repository_count;
    private $logo_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TopicSearchResultItem\TextMatches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TopicSearchResultItem\TextMatches::class)
     */
    private array $text_matches = array();
    private $related;
    private $aliases;
    public function name() : string
    {
        return $this->name;
    }
    public function display_name()
    {
        return $this->display_name;
    }
    public function short_description()
    {
        return $this->short_description;
    }
    public function description()
    {
        return $this->description;
    }
    public function created_by()
    {
        return $this->created_by;
    }
    public function released()
    {
        return $this->released;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function featured() : bool
    {
        return $this->featured;
    }
    public function curated() : bool
    {
        return $this->curated;
    }
    public function score() : int
    {
        return $this->score;
    }
    public function repository_count()
    {
        return $this->repository_count;
    }
    public function logo_url()
    {
        return $this->logo_url;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TopicSearchResultItem\TextMatches>
     */
    public function text_matches() : array
    {
        return $this->text_matches;
    }
    public function related()
    {
        return $this->related;
    }
    public function aliases()
    {
        return $this->aliases;
    }
}
