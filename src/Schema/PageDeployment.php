<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PageDeployment
{
    public const SCHEMA_JSON = '{"title":"GitHub Pages","required":["status_url","page_url"],"type":"object","properties":{"status_url":{"type":"string","description":"The URI to monitor GitHub Pages deployment status.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages\\/deployments\\/4fd754f7e594640989b406850d0bc8f06a121251\\/status"]},"page_url":{"type":"string","description":"The URI to the deployed GitHub Pages.","format":"uri","examples":["hello-world.github.io"]},"preview_url":{"type":"string","description":"The URI to the deployed GitHub Pages preview.","format":"uri","examples":["monalisa-1231a2312sa32-23sda74.drafts.github.io"]}},"description":"The GitHub Pages deployment status."}';
    public const SCHEMA_TITLE = 'GitHub Pages';
    public const SCHEMA_DESCRIPTION = 'The GitHub Pages deployment status.';
    public const SCHEMA_EXAMPLE_DATA = '{"status_url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages\\/deployments\\/4fd754f7e594640989b406850d0bc8f06a121251\\/status","page_url":"hello-world.github.io","preview_url":"monalisa-1231a2312sa32-23sda74.drafts.github.io"}';
    /**
     * statusUrl: The URI to monitor GitHub Pages deployment status.
     * pageUrl: The URI to the deployed GitHub Pages.
     * previewUrl: The URI to the deployed GitHub Pages preview.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('status_url')] public string $statusUrl, #[\EventSauce\ObjectHydrator\MapFrom('page_url')] public string $pageUrl, #[\EventSauce\ObjectHydrator\MapFrom('preview_url')] public ?string $previewUrl)
    {
    }
}
