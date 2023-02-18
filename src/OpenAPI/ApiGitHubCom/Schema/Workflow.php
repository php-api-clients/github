<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class Workflow
{
    public const SCHEMA_JSON        = '{"title":"Workflow","required":["id","node_id","name","path","state","url","html_url","badge_url","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[5]},"node_id":{"type":"string","examples":["MDg6V29ya2Zsb3cxMg=="]},"name":{"type":"string","examples":["CI"]},"path":{"type":"string","examples":["ruby.yaml"]},"state":{"enum":["active","deleted","disabled_fork","disabled_inactivity","disabled_manually"],"type":"string","examples":["active"]},"created_at":{"type":"string","format":"date-time","examples":["2019-12-06T14:20:20.000Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2019-12-06T14:20:20.000Z"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/actions\\/setup-ruby\\/workflows\\/5"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/actions\\/setup-ruby\\/blob\\/master\\/.github\\/workflows\\/ruby.yaml"]},"badge_url":{"type":"string","examples":["https:\\/\\/github.com\\/actions\\/setup-ruby\\/workflows\\/CI\\/badge.svg"]},"deleted_at":{"type":"string","format":"date-time","examples":["2019-12-06T14:20:20.000Z"]}},"description":"A GitHub Actions workflow"}';
    public const SCHEMA_TITLE       = 'Workflow';
    public const SCHEMA_DESCRIPTION = 'A GitHub Actions workflow';
    public ?int $id;
    public ?string $node_id;
    public ?string $name;
    public ?string $path;
    public ?string $state;
    public ?string $created_at;
    public ?string $updated_at;
    public ?string $url;
    public ?string $html_url;
    public ?string $badge_url;
    public string $deleted_at;

    public function __construct(int $id, string $node_id, string $name, string $path, string $state, string $created_at, string $updated_at, string $url, string $html_url, string $badge_url, string $deleted_at)
    {
        $this->id         = $id;
        $this->node_id    = $node_id;
        $this->name       = $name;
        $this->path       = $path;
        $this->state      = $state;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->url        = $url;
        $this->html_url   = $html_url;
        $this->badge_url  = $badge_url;
        $this->deleted_at = $deleted_at;
    }
}
