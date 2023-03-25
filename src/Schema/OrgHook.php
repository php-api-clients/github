<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class OrgHook
{
    public const SCHEMA_JSON = '{"title":"Org Hook","required":["id","url","type","name","active","events","config","ping_url","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[1]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1"]},"ping_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/pings"]},"deliveries_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/deliveries"]},"name":{"type":"string","examples":["web"]},"events":{"type":"array","items":{"type":"string"},"examples":["push","pull_request"]},"active":{"type":"boolean","examples":[true]},"config":{"type":"object","properties":{"url":{"type":"string","examples":["\\"http:\\/\\/example.com\\/2\\""]},"insecure_ssl":{"type":"string","examples":["\\"0\\""]},"content_type":{"type":"string","examples":["\\"form\\""]},"secret":{"type":"string","examples":["\\"********\\""]}}},"updated_at":{"type":"string","format":"date-time","examples":["2011-09-06T20:39:23Z"]},"created_at":{"type":"string","format":"date-time","examples":["2011-09-06T17:26:27Z"]},"type":{"type":"string"}},"description":"Org Hook"}';
    public const SCHEMA_TITLE = 'Org Hook';
    public const SCHEMA_DESCRIPTION = 'Org Hook';
    public const SCHEMA_EXAMPLE_DATA = '{"id":1,"url":"https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1","pingUrl":"https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/pings","deliveriesUrl":"https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/deliveries","name":"web","events":["push"],"active":true,"config":{"url":"\\"http:\\/\\/example.com\\/2\\"","insecureSsl":"\\"0\\"","contentType":"\\"form\\"","secret":"\\"********\\""},"updatedAt":"2011-09-06T20:39:23Z","createdAt":"2011-09-06T17:26:27Z","type":"generated_type_null"}';
    /**
     * @param array<string> $events
     */
    public function __construct(public int $id, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('ping_url')] public string $pingUrl, #[\EventSauce\ObjectHydrator\MapFrom('deliveries_url')] public ?string $deliveriesUrl, public string $name, public array $events, public bool $active, public Schema\OrgHook\Config $config, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public string $type)
    {
    }
}
