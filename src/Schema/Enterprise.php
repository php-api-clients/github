<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Enterprise
{
    public const SCHEMA_JSON = '{"title":"Enterprise","required":["id","node_id","name","slug","html_url","created_at","updated_at","avatar_url"],"type":"object","properties":{"description":{"type":["string","null"],"description":"A short description of the enterprise."},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/enterprises\\/octo-business"]},"website_url":{"type":["string","null"],"description":"The enterprise\'s website URL.","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the enterprise","examples":[42]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the enterprise.","examples":["Octo Business"]},"slug":{"type":"string","description":"The slug url identifier for the enterprise.","examples":["octo-business"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2019-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2019-01-26T19:14:43Z"]},"avatar_url":{"type":"string","format":"uri"}},"description":"An enterprise on GitHub."}';
    public const SCHEMA_TITLE = 'Enterprise';
    public const SCHEMA_DESCRIPTION = 'An enterprise on GitHub.';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"generated_description_null","html_url":"https:\\/\\/github.com\\/enterprises\\/octo-business","website_url":"https:\\/\\/example.com\\/","id":42,"node_id":"MDEwOlJlcG9zaXRvcnkxMjk2MjY5","name":"Octo Business","slug":"octo-business","created_at":"2019-01-26T19:01:12Z","updated_at":"2019-01-26T19:14:43Z","avatar_url":"https:\\/\\/example.com\\/"}';
    /**
     * description: A short description of the enterprise.
     * websiteUrl: The enterprise's website URL.
     * id: Unique identifier of the enterprise
     * name: The name of the enterprise.
     * slug: The slug url identifier for the enterprise.
     */
    public function __construct(public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('website_url')] public ?string $websiteUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $name, public string $slug, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt, #[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public string $avatarUrl)
    {
    }
}
