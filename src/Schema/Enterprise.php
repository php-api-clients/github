<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Enterprise
{
    public const SCHEMA_JSON = '{"title":"Enterprise","required":["id","node_id","name","slug","html_url","created_at","updated_at","avatar_url"],"type":"object","properties":{"description":{"type":["string","null"],"description":"A short description of the enterprise."},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/enterprises\\/octo-business"]},"website_url":{"type":["string","null"],"description":"The enterprise\'s website URL.","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the enterprise","examples":[42]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the enterprise.","examples":["Octo Business"]},"slug":{"type":"string","description":"The slug url identifier for the enterprise.","examples":["octo-business"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2019-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2019-01-26T19:14:43Z"]},"avatar_url":{"type":"string","format":"uri"}},"description":"An enterprise on GitHub."}';
    public const SCHEMA_TITLE = 'Enterprise';
    public const SCHEMA_DESCRIPTION = 'An enterprise on GitHub.';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"generated_description","html_url":"https:\\/\\/github.com\\/enterprises\\/octo-business","website_url":"generated_website_url","id":42,"node_id":"MDEwOlJlcG9zaXRvcnkxMjk2MjY5","name":"Octo Business","slug":"octo-business","created_at":"2019-01-26T19:01:12Z","updated_at":"2019-01-26T19:14:43Z","avatar_url":"generated_avatar_url"}';
    /**
     * description: A short description of the enterprise.
     * website_url: The enterprise's website URL.
     * id: Unique identifier of the enterprise
     * name: The name of the enterprise.
     * slug: The slug url identifier for the enterprise.
     */
    public function __construct(public ?string $description, public ?string $html_url, public ?string $website_url, public ?int $id, public ?string $node_id, public ?string $name, public ?string $slug, public ?string $created_at, public ?string $updated_at, public ?string $avatar_url)
    {
    }
}
