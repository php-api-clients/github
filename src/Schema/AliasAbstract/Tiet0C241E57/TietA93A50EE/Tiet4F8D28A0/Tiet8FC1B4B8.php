<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet0C241E57\TietA93A50EE\Tiet4F8D28A0;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet8FC1B4B8
{
    public const SCHEMA_JSON         = '{"required":["name","id","node_id","slug","description","privacy","url","html_url","members_url","repositories_url","permission"],"type":["object","null"],"properties":{"description":{"type":["string","null"],"description":"Description of the team"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the team"},"members_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"Name of the team"},"node_id":{"type":"string"},"permission":{"type":"string","description":"Permission that the team will have for its repositories"},"privacy":{"enum":["open","closed","secret"],"type":"string"},"repositories_url":{"type":"string","format":"uri"},"slug":{"type":"string"},"url":{"type":"string","description":"URL for the team","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"generated","html_url":"https:\\/\\/example.com\\/","id":2,"members_url":"generated","name":"generated","node_id":"generated","permission":"generated","privacy":"open","repositories_url":"https:\\/\\/example.com\\/","slug":"generated","url":"https:\\/\\/example.com\\/"}';

    /**
     * description: Description of the team
     * id: Unique identifier of the team
     * name: Name of the team
     * permission: Permission that the team will have for its repositories
     * url: URL for the team
     */
    public function __construct(public string|null $description, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, #[MapFrom('members_url')]
    public string $membersUrl, public string $name, #[MapFrom('node_id')]
    public string $nodeId, public string $permission, public string $privacy, #[MapFrom('repositories_url')]
    public string $repositoriesUrl, public string $slug, public string $url,)
    {
    }
}
