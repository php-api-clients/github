<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C1Cf91De04Db5De155641012572117C37
{
    public const SCHEMA_JSON = '{"title":"Repository Vulnerability Alert Alert","required":["id","number","node_id","state","affected_range","affected_package_name","ghsa_id","severity","external_reference","external_identifier","created_at"],"type":"object","properties":{"affected_package_name":{"type":"string"},"affected_range":{"type":"string"},"created_at":{"type":"string"},"dismiss_reason":{"type":"string"},"dismissed_at":{"type":"string"},"dismisser":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"external_identifier":{"type":"string"},"external_reference":{"type":["string","null"],"format":"uri"},"fix_reason":{"type":"string"},"fixed_at":{"type":"string","format":"date-time"},"fixed_in":{"type":"string"},"ghsa_id":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"number":{"type":"integer"},"severity":{"type":"string"},"state":{"enum":["open","dismissed","fixed"],"type":"string"}},"description":"The security alert of the vulnerable dependency."}';
    public const SCHEMA_TITLE = 'Repository Vulnerability Alert Alert';
    public const SCHEMA_DESCRIPTION = 'The security alert of the vulnerable dependency.';
    private string $affected_package_name;
    private string $affected_range;
    private string $created_at;
    private ?string $dismiss_reason = null;
    private ?string $dismissed_at = null;
    private $dismisser;
    private string $external_identifier;
    private $external_reference;
    private ?string $fix_reason = null;
    private ?string $fixed_at = null;
    private ?string $fixed_in = null;
    private string $ghsa_id;
    private int $id;
    private string $node_id;
    private int $number;
    private string $severity;
    private string $state;
    public function affected_package_name() : string
    {
        return $this->affected_package_name;
    }
    public function affected_range() : string
    {
        return $this->affected_range;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function dismiss_reason() : ?string
    {
        return $this->dismiss_reason;
    }
    public function dismissed_at() : ?string
    {
        return $this->dismissed_at;
    }
    public function dismisser()
    {
        return $this->dismisser;
    }
    public function external_identifier() : string
    {
        return $this->external_identifier;
    }
    public function external_reference()
    {
        return $this->external_reference;
    }
    public function fix_reason() : ?string
    {
        return $this->fix_reason;
    }
    public function fixed_at() : ?string
    {
        return $this->fixed_at;
    }
    public function fixed_in() : ?string
    {
        return $this->fixed_in;
    }
    public function ghsa_id() : string
    {
        return $this->ghsa_id;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function severity() : string
    {
        return $this->severity;
    }
    public function state() : string
    {
        return $this->state;
    }
}
