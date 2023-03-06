<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PagesHealthCheck;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class AltDomain
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"host":{"type":"string"},"uri":{"type":"string"},"nameservers":{"type":"string"},"dns_resolves":{"type":"boolean"},"is_proxied":{"type":["boolean","null"]},"is_cloudflare_ip":{"type":["boolean","null"]},"is_fastly_ip":{"type":["boolean","null"]},"is_old_ip_address":{"type":["boolean","null"]},"is_a_record":{"type":["boolean","null"]},"has_cname_record":{"type":["boolean","null"]},"has_mx_records_present":{"type":["boolean","null"]},"is_valid_domain":{"type":"boolean"},"is_apex_domain":{"type":"boolean"},"should_be_a_record":{"type":["boolean","null"]},"is_cname_to_github_user_domain":{"type":["boolean","null"]},"is_cname_to_pages_dot_github_dot_com":{"type":["boolean","null"]},"is_cname_to_fastly":{"type":["boolean","null"]},"is_pointed_to_github_pages_ip":{"type":["boolean","null"]},"is_non_github_pages_ip_present":{"type":["boolean","null"]},"is_pages_domain":{"type":"boolean"},"is_served_by_pages":{"type":["boolean","null"]},"is_valid":{"type":"boolean"},"reason":{"type":["string","null"]},"responds_to_https":{"type":"boolean"},"enforces_https":{"type":"boolean"},"https_error":{"type":["string","null"]},"is_https_eligible":{"type":["boolean","null"]},"caa_error":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"host":"generated_host","uri":"generated_uri","nameservers":"generated_nameservers","dns_resolves":false,"is_proxied":false,"is_cloudflare_ip":false,"is_fastly_ip":false,"is_old_ip_address":false,"is_a_record":false,"has_cname_record":false,"has_mx_records_present":false,"is_valid_domain":false,"is_apex_domain":false,"should_be_a_record":false,"is_cname_to_github_user_domain":false,"is_cname_to_pages_dot_github_dot_com":false,"is_cname_to_fastly":false,"is_pointed_to_github_pages_ip":false,"is_non_github_pages_ip_present":false,"is_pages_domain":false,"is_served_by_pages":false,"is_valid":false,"reason":"generated_reason","responds_to_https":false,"enforces_https":false,"https_error":"generated_https_error","is_https_eligible":false,"caa_error":"generated_caa_error"}';
    public function __construct(public ?string $host, public ?string $uri, public ?string $nameservers, public ?bool $dns_resolves, public ?bool $is_proxied, public ?bool $is_cloudflare_ip, public ?bool $is_fastly_ip, public ?bool $is_old_ip_address, public ?bool $is_a_record, public ?bool $has_cname_record, public ?bool $has_mx_records_present, public ?bool $is_valid_domain, public ?bool $is_apex_domain, public ?bool $should_be_a_record, public ?bool $is_cname_to_github_user_domain, public ?bool $is_cname_to_pages_dot_github_dot_com, public ?bool $is_cname_to_fastly, public ?bool $is_pointed_to_github_pages_ip, public ?bool $is_non_github_pages_ip_present, public ?bool $is_pages_domain, public ?bool $is_served_by_pages, public ?bool $is_valid, public ?string $reason, public ?bool $responds_to_https, public ?bool $enforces_https, public ?string $https_error, public ?bool $is_https_eligible, public ?string $caa_error)
    {
    }
}
