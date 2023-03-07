<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ReleaseAsset
{
    public const SCHEMA_JSON = '{"title":"Release Asset","required":["id","name","content_type","size","state","url","node_id","download_count","label","uploader","browser_download_url","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"browser_download_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string","description":"The file name of the asset.","examples":["Team Environment"]},"label":{"type":["string","null"]},"state":{"enum":["uploaded","open"],"type":"string","description":"State of the release asset."},"content_type":{"type":"string"},"size":{"type":"integer"},"download_count":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"uploader":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]}},"description":"Data related to a release."}';
    public const SCHEMA_TITLE = 'Release Asset';
    public const SCHEMA_DESCRIPTION = 'Data related to a release.';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","browser_download_url":"generated_browser_download_url","id":13,"node_id":"generated_node_id","name":"Team Environment","label":"generated_label","state":"generated_state","content_type":"generated_content_type","size":13,"download_count":13,"created_at":"generated_created_at","updated_at":"generated_updated_at","uploader":null}';
    /**
     * name: The file name of the asset.
     * state: State of the release asset.
     */
    public function __construct(public ?string $url, public ?string $browser_download_url, public ?int $id, public ?string $node_id, public ?string $name, public ?string $label, public ?string $state, public ?string $content_type, public ?int $size, public ?int $download_count, public ?string $created_at, public ?string $updated_at, public mixed $uploader)
    {
    }
}
