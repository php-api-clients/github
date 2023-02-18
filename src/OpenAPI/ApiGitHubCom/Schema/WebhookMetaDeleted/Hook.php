<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMetaDeleted;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMetaDeleted\Hook\Config;

final readonly class Hook
{
    public const SCHEMA_JSON        = '{"required":["type","id","name","active","events","config","updated_at","created_at"],"type":"object","properties":{"active":{"type":"boolean"},"config":{"required":["content_type","insecure_ssl","url"],"type":"object","properties":{"content_type":{"enum":["json","form"],"type":"string"},"insecure_ssl":{"type":"string"},"secret":{"type":"string"},"url":{"type":"string","format":"uri"}}},"created_at":{"type":"string"},"events":{"type":"array","items":{"minItems":1,"enum":["*","branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","create","delete","deployment","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","meta","milestone","organization","org_block","package","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","pull_request_review_thread","push","registry_package","release","repository","repository_import","repository_vulnerability_alert","secret_scanning_alert","secret_scanning_alert_location","security_and_analysis","star","status","team","team_add","watch","workflow_job","workflow_run","repository_dispatch","projects_v2_item"],"type":"string"}},"id":{"type":"integer"},"name":{"type":"string"},"type":{"type":"string"},"updated_at":{"type":"string"}},"description":"The modified webhook. This will contain different keys based on the type of webhook it is: repository, organization, business, app, or GitHub Marketplace."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The modified webhook. This will contain different keys based on the type of webhook it is: repository, organization, business, app, or GitHub Marketplace.';
    public ?bool $active;
    public ?Config $config;
    public ?string $created_at;
    public ?array $events;
    public ?int $id;
    public ?string $name;
    public ?string $type;
    public ?string $updated_at;

    public function __construct(bool $active, Config $config, string $created_at, array $events, int $id, string $name, string $type, string $updated_at)
    {
        $this->active     = $active;
        $this->config     = $config;
        $this->created_at = $created_at;
        $this->events     = $events;
        $this->id         = $id;
        $this->name       = $name;
        $this->type       = $type;
        $this->updated_at = $updated_at;
    }
}
