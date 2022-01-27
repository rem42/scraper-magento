<?php

namespace Scraper\ScraperMagento\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\ScraperRequest;

/**
 * @Scraper(scheme="HTTPS", host="{host}", path="/api/rest")
 */
abstract class MagentoRestRequest extends ScraperRequest implements RequestHeaders
{
    private string $host;
    private string $consumerKey;
    private string $consumerSecret;
    private string $token;
    private string $tokenSecret;

    public function getHeaders(): array
    {
        $authorization = 'OAuth';
        $authorization .= ' oauth_consumer_key=' . $this->consumerKey;
        $authorization .= ' oauth_token=' . $this->token;
        $authorization .= ' oauth_signature_method=' . OAUTH_SIG_METHOD_HMACSHA1;
        $authorization .= ' oauth_timestamp=' . time();
        $authorization .= ' oauth_nonce=' . substr(md5(mt_rand()), 0, 10);
        $authorization .= ' oauth_version=1.0';
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => $authorization,
        ];
    }
}
