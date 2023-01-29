<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeOfConductSimple
{
    public const SCHEMA_JSON = '{"title":"Code Of Conduct Simple","required":["url","key","name","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/docs\\/community\\/code_of_conduct"]},"key":{"type":"string","examples":["citizen_code_of_conduct"]},"name":{"type":"string","examples":["Citizen Code of Conduct"]},"html_url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/github.com\\/github\\/docs\\/blob\\/main\\/CODE_OF_CONDUCT.md"]}},"description":"Code of Conduct Simple"}';
    public const SCHEMA_TITLE = 'Code Of Conduct Simple';
    public const SCHEMA_DESCRIPTION = 'Code of Conduct Simple';
    public readonly string $url;
    public readonly string $key;
    public readonly string $name;
    public readonly ?string $html_url;
    public function __construct(string $url, string $key, string $name, string $html_url)
    {
        $this->url = $url;
        $this->key = $key;
        $this->name = $name;
        $this->html_url = $html_url;
    }
}
