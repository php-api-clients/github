<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Integration
{
    public const SCHEMA_JSON = '{"title":"GitHub app","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at","permissions","events"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the GitHub app","examples":[37]},"slug":{"type":"string","description":"The slug name of the GitHub app","examples":["probot-owners"]},"node_id":{"type":"string","examples":["MDExOkludGVncmF0aW9uMQ=="]},"owner":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"name":{"type":"string","description":"The name of the GitHub app","examples":["Probot Owners"]},"description":{"type":["string","null"],"examples":["The description of the app."]},"external_url":{"type":"string","format":"uri","examples":["https:\\/\\/example.com"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/apps\\/super-ci"]},"created_at":{"type":"string","format":"date-time","examples":["2017-07-08T16:18:44-04:00"]},"updated_at":{"type":"string","format":"date-time","examples":["2017-07-08T16:18:44-04:00"]},"permissions":{"type":"object","properties":{"issues":{"type":"string"},"checks":{"type":"string"},"metadata":{"type":"string"},"contents":{"type":"string"},"deployments":{"type":"string"}},"description":"The set of permissions for the GitHub app","example":{"issues":"read","deployments":"write"},"additionalProperties":{"type":"string"}},"events":{"type":"array","items":{"type":"string"},"description":"The list of events for the GitHub app","examples":["label","deployment"]},"installations_count":{"type":"integer","description":"The number of installations associated with the GitHub app","examples":[5]},"client_id":{"type":"string","examples":["\\"Iv1.25b5d1e65ffc4022\\""]},"client_secret":{"type":"string","examples":["\\"1d4b2097ac622ba702d19de498f005747a8b21d3\\""]},"webhook_secret":{"type":["string","null"],"examples":["\\"6fba8f2fc8a7e8f2cca5577eddd82ca7586b3b6b\\""]},"pem":{"type":"string","examples":["\\"-----BEGIN RSA PRIVATE KEY-----\\\\nMIIEogIBAAKCAQEArYxrNYD\\/iT5CZVpRJu4rBKmmze3PVmT\\/gCo2ATUvDvZTPTey\\\\nxcGJ3vvrJXazKk06pN05TN29o98jrYz4cengG3YGsXPNEpKsIrEl8NhbnxapEnM9\\\\nJCMRe0P5JcPsfZlX6hmiT7136GRWiGOUba2X9+HKh8QJVLG5rM007TBER9\\/z9mWm\\\\nrJuNh+m5l320oBQY\\/Qq3A7wzdEfZw8qm\\/mIN0FCeoXH1L6B8xXWaAYBwhTEh6SSn\\\\nZHlO1Xu1JWDmAvBCi0RO5aRSKM8q9QEkvvHP4yweAtK3N8+aAbZ7ovaDhyGz8r6r\\\\nzhU1b8Uo0Z2ysf503WqzQgIajr7Fry7\\/kUwpgQIDAQABAoIBADwJp80Ko1xHPZDy\\\\nfcCKBDfIuPvkmSW6KumbsLMaQv1aGdHDwwTGv3t0ixSay8CGlxMRtRDyZPib6SvQ\\\\n6OH\\/lpfpbMdW2ErkksgtoIKBVrDilfrcAvrNZu7NxRNbhCSvN8q0s4ICecjbbVQh\\\\nnueSdlA6vGXbW58BHMq68uRbHkP+k+mM9U0mDJ1HMch67wlg5GbayVRt63H7R2+r\\\\nVxcna7B80J\\/lCEjIYZznawgiTvp3MSanTglqAYi+m1EcSsP14bJIB9vgaxS79kTu\\\\noiSo93leJbBvuGo8QEiUqTwMw4tDksmkLsoqNKQ1q9P7LZ9DGcujtPy4EZsamSJT\\\\ny8OJt0ECgYEA2lxOxJsQk2kI325JgKFjo92mQeUObIvPfSNWUIZQDTjniOI6Gv63\\\\nGLWVFrZcvQBWjMEQraJA9xjPbblV8PtfO87MiJGLWCHFxmPz2dzoedN+2Coxom8m\\\\nV95CLz8QUShuao6u\\/RYcvUaZEoYs5bHcTmy5sBK80JyEmafJPtCQVxMCgYEAy3ar\\\\nZr3yv4xRPEPMat4rseswmuMooSaK3SKub19WFI5IAtB\\/e7qR1Rj9JhOGcZz+OQrl\\\\nT78O2OFYlgOIkJPvRMrPpK5V9lslc7tz1FSh3BZMRGq5jSyD7ETSOQ0c8T2O\\/s7v\\\\nbeEPbVbDe4mwvM24XByH0GnWveVxaDl51ABD65sCgYB3ZAspUkOA5egVCh8kNpnd\\\\nSd6SnuQBE3ySRlT2WEnCwP9Ph6oPgn+oAfiPX4xbRqkL8q\\/k0BdHQ4h+zNwhk7+h\\\\nWtPYRAP1Xxnc\\/F+jGjb+DVaIaKGU18MWPg7f+FI6nampl3Q0KvfxwX0GdNhtio8T\\\\nTj1E+SnFwh56SRQuxSh2gwKBgHKjlIO5NtNSflsUYFM+hyQiPiqnHzddfhSG+\\/3o\\\\nm5nNaSmczJesUYreH5San7\\/YEy2UxAugvP7aSY2MxB+iGsiJ9WD2kZzTUlDZJ7RV\\\\nUzWsoqBR+eZfVJ2FUWWvy8TpSG6trh4dFxImNtKejCR1TREpSiTV3Zb1dmahK9GV\\\\nrK9NAoGAbBxRLoC01xfxCTgt5BDiBcFVh4fp5yYKwavJPLzHSpuDOrrI9jDn1oKN\\\\nonq5sDU1i391zfQvdrbX4Ova48BN+B7p63FocP\\/MK5tyyBoT8zQEk2+vWDOw7H\\/Z\\\\nu5dTCPxTIsoIwUw1I+7yIxqJzLPFgR2gVBwY1ra\\/8iAqCj+zeBw=\\\\n-----END RSA PRIVATE KEY-----\\\\n\\""]}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."}';
    public const SCHEMA_TITLE = 'GitHub app';
    public const SCHEMA_DESCRIPTION = 'GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.';
    /**
     * Unique identifier of the GitHub app
     */
    private int $id;
    /**
     * The slug name of the GitHub app
     */
    private ?string $slug = null;
    private string $node_id;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217 $owner;
    /**
     * The name of the GitHub app
     */
    private string $name;
    private $description;
    private string $external_url;
    private string $html_url;
    private string $created_at;
    private string $updated_at;
    /**
     * The set of permissions for the GitHub app
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C8733E483F8F0565888D07C5E61D7100F::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C8733E483F8F0565888D07C5E61D7100F $permissions;
    /**
     * The list of events for the GitHub app
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $events = array();
    /**
     * The number of installations associated with the GitHub app
     */
    private ?int $installations_count = null;
    private ?string $client_id = null;
    private ?string $client_secret = null;
    private $webhook_secret;
    private ?string $pem = null;
    /**
     * Unique identifier of the GitHub app
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The slug name of the GitHub app
     */
    public function slug() : ?string
    {
        return $this->slug;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function owner() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217
    {
        return $this->owner;
    }
    /**
     * The name of the GitHub app
     */
    public function name() : string
    {
        return $this->name;
    }
    public function description()
    {
        return $this->description;
    }
    public function external_url() : string
    {
        return $this->external_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * The set of permissions for the GitHub app
     */
    public function permissions() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C8733E483F8F0565888D07C5E61D7100F
    {
        return $this->permissions;
    }
    /**
     * The list of events for the GitHub app
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function events() : array
    {
        return $this->events;
    }
    /**
     * The number of installations associated with the GitHub app
     */
    public function installations_count() : ?int
    {
        return $this->installations_count;
    }
    public function client_id() : ?string
    {
        return $this->client_id;
    }
    public function client_secret() : ?string
    {
        return $this->client_secret;
    }
    public function webhook_secret()
    {
        return $this->webhook_secret;
    }
    public function pem() : ?string
    {
        return $this->pem;
    }
}