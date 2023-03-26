<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CommunityProfile;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Files
{
    public const SCHEMA_JSON = '{"required":["code_of_conduct","code_of_conduct_file","license","contributing","readme","issue_template","pull_request_template"],"type":"object","properties":{"code_of_conduct":{"anyOf":[{"type":"null"},{"title":"Code Of Conduct Simple","required":["url","key","name","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/docs\\/community\\/code_of_conduct"]},"key":{"type":"string","examples":["citizen_code_of_conduct"]},"name":{"type":"string","examples":["Citizen Code of Conduct"]},"html_url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/github.com\\/github\\/docs\\/blob\\/main\\/CODE_OF_CONDUCT.md"]}},"description":"Code of Conduct Simple"}]},"code_of_conduct_file":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"contributing":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"readme":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"issue_template":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"pull_request_template":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code_of_conduct":null,"code_of_conduct_file":null,"license":null,"contributing":null,"readme":null,"issue_template":null,"pull_request_template":null}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('code_of_conduct')] public mixed $codeOfConduct, #[\EventSauce\ObjectHydrator\MapFrom('code_of_conduct_file')] public mixed $codeOfConductFile, public mixed $license, public mixed $contributing, public mixed $readme, #[\EventSauce\ObjectHydrator\MapFrom('issue_template')] public mixed $issueTemplate, #[\EventSauce\ObjectHydrator\MapFrom('pull_request_template')] public mixed $pullRequestTemplate)
    {
    }
}
