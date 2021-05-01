<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Schema;

final class TopicSearchResultItem
{
    public const SCHEMA_TITLE = 'Topic Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Topic Search Result Item';
    private string $name;
    private string $display_name;
    private string $short_description;
    private string $description;
    private string $created_by;
    private string $released;
    private string $created_at;
    private string $updated_at;
    private boolean $featured;
    private boolean $curated;
    private number $score;
    private int $repository_count;
    private string $logo_url;
    private array $text_matches;
    private array $related;
    private array $aliases;
    public function name() : string
    {
        return $this->name;
    }
    public function display_name() : string
    {
        return $this->display_name;
    }
    public function short_description() : string
    {
        return $this->short_description;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function created_by() : string
    {
        return $this->created_by;
    }
    public function released() : string
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
    public function featured() : boolean
    {
        return $this->featured;
    }
    public function curated() : boolean
    {
        return $this->curated;
    }
    public function score() : number
    {
        return $this->score;
    }
    public function repository_count() : int
    {
        return $this->repository_count;
    }
    public function logo_url() : string
    {
        return $this->logo_url;
    }
    public function text_matches() : array
    {
        return $this->text_matches;
    }
    public function related() : array
    {
        return $this->related;
    }
    public function aliases() : array
    {
        return $this->aliases;
    }
}
