<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Actions\ListRepoWorkflows\Response\Applicationjson;

final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","workflows"],"type":"object","properties":{"total_count":{"type":"integer"},"workflows":{"type":"array","items":{"title":"Workflow","required":["id","node_id","name","path","state","url","html_url","badge_url","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[5]},"node_id":{"type":"string","examples":["MDg6V29ya2Zsb3cxMg=="]},"name":{"type":"string","examples":["CI"]},"path":{"type":"string","examples":["ruby.yaml"]},"state":{"enum":["active","deleted","disabled_fork","disabled_inactivity","disabled_manually"],"type":"string","examples":["active"]},"created_at":{"type":"string","format":"date-time","examples":["2019-12-06T14:20:20.000Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2019-12-06T14:20:20.000Z"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/actions\\/setup-ruby\\/workflows\\/5"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/actions\\/setup-ruby\\/blob\\/master\\/.github\\/workflows\\/ruby.yaml"]},"badge_url":{"type":"string","examples":["https:\\/\\/github.com\\/actions\\/setup-ruby\\/workflows\\/CI\\/badge.svg"]},"deleted_at":{"type":"string","format":"date-time","examples":["2019-12-06T14:20:20.000Z"]}},"description":"A GitHub Actions workflow"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $total_count;
    public ?array $workflows;
    public function __construct(int $total_count, array $workflows)
    {
        $this->total_count = $total_count;
        $this->workflows = $workflows;
    }
}
