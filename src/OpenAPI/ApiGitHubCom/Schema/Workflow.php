<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Workflow
{
    public const SCHEMA_JSON = '{"title":"Workflow","required":["id","node_id","name","path","state","url","html_url","badge_url","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[5]},"node_id":{"type":"string","examples":["MDg6V29ya2Zsb3cxMg=="]},"name":{"type":"string","examples":["CI"]},"path":{"type":"string","examples":["ruby.yaml"]},"state":{"enum":["active","deleted","disabled_fork","disabled_inactivity","disabled_manually"],"type":"string","examples":["active"]},"created_at":{"type":"string","format":"date-time","examples":["2019-12-06T14:20:20.000Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2019-12-06T14:20:20.000Z"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/actions\\/setup-ruby\\/workflows\\/5"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/actions\\/setup-ruby\\/blob\\/master\\/.github\\/workflows\\/ruby.yaml"]},"badge_url":{"type":"string","examples":["https:\\/\\/github.com\\/actions\\/setup-ruby\\/workflows\\/CI\\/badge.svg"]},"deleted_at":{"type":"string","format":"date-time","examples":["2019-12-06T14:20:20.000Z"]}},"description":"A GitHub Actions workflow"}';
    public const SCHEMA_EXAMPLE = '{"id":5,"node_id":"MDg6V29ya2Zsb3cxMg==","name":"CI","path":"ruby.yaml","state":"active","created_at":"2019-12-06T14:20:20.000Z","updated_at":"2019-12-06T14:20:20.000Z","url":"https:\\/\\/api.github.com\\/repos\\/actions\\/setup-ruby\\/workflows\\/5","html_url":"https:\\/\\/github.com\\/actions\\/setup-ruby\\/blob\\/master\\/.github\\/workflows\\/ruby.yaml","badge_url":"https:\\/\\/github.com\\/actions\\/setup-ruby\\/workflows\\/CI\\/badge.svg","deleted_at":"2019-12-06T14:20:20.000Z"}';
    public const SCHEMA_TITLE = 'Workflow';
    public const SCHEMA_DESCRIPTION = 'A GitHub Actions workflow';
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $name;
    public readonly string $path;
    public readonly string $state;
    public readonly string $created_at;
    public readonly string $updated_at;
    public readonly string $url;
    public readonly string $html_url;
    public readonly string $badge_url;
    public readonly ?string $deleted_at;
    public function __construct(int $id, string $node_id, string $name, string $path, string $state, string $created_at, string $updated_at, string $url, string $html_url, string $badge_url, string $deleted_at)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->name = $name;
        $this->path = $path;
        $this->state = $state;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->badge_url = $badge_url;
        $this->deleted_at = $deleted_at;
    }
}
