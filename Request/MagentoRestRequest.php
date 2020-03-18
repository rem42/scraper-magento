<?php

namespace Scraper\ScraperMagento\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Request\RequestOauth;

/**
 * Class MagentoRequest
 *
 * @UrlAnnotation(baseUrl="{urlWebsite}/api/rest/")
 */
abstract class MagentoRestRequest extends RequestOauth
{
    /**
     * @var string
     */
    protected $urlWebsite;
    /**
     * @var string
     */
    protected $consumerKey;
    /**
     * @var string
     */
    protected $consumerSecret;
    /**
     * @var string
     */
    protected $token;
    /**
     * @var string
     */
    protected $tokenSecret;
    /**
     * @var array
     */
    protected $urlParameters = [];

    /**
     * MagentoRequest constructor.
     */
    public function __construct()
    {
        $this->timestamp = time();
        $this->nonce     = substr(md5(mt_rand()), 0, 10);
    }

    public function getParameters()
    {
        return $this->urlParameters;
    }

    public function getBody()
    {
        return [];
    }

    public function getHeaders()
    {
        $authorization = 'OAuth';
        $authorization .= ' oauth_consumer_key=' . $this->consumerKey;
        $authorization .= ' oauth_token=' . $this->token;
        $authorization .= ' oauth_signature_method=' . $this->getSignatureMethod();
        $authorization .= ' oauth_timestamp=' . $this->timestamp;
        $authorization .= ' oauth_nonce=' . $this->nonce;
        $authorization .= ' oauth_version=1.0';
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => $authorization,
        ];
    }

    public function getSignatureMethod(): string
    {
        return OAUTH_SIG_METHOD_HMACSHA1;
    }

    public function getAuthType(): string
    {
        return OAUTH_AUTH_TYPE_AUTHORIZATION;
    }

    /**
     * @return string
     */
    public function getUrlWebsite(): string
    {
        return $this->urlWebsite;
    }

    /**
     * @param string $urlWebsite
     *
     * @return $this
     */
    public function setUrlWebsite(?string $urlWebsite)
    {
        $this->urlWebsite = $urlWebsite;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsumerKey(): string
    {
        return $this->consumerKey;
    }

    /**
     * @param string $consumerKey
     *
     * @return $this
     */
    public function setConsumerKey(?string $consumerKey)
    {
        $this->consumerKey = $consumerKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsumerSecret(): string
    {
        return $this->consumerSecret;
    }

    /**
     * @param string $consumerSecret
     *
     * @return $this
     */
    public function setConsumerSecret(?string $consumerSecret)
    {
        $this->consumerSecret = $consumerSecret;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function setToken(?string $token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getTokenSecret(): string
    {
        return $this->tokenSecret;
    }

    /**
     * @param string $tokenSecret
     *
     * @return $this
     */
    public function setTokenSecret(?string $tokenSecret)
    {
        $this->tokenSecret = $tokenSecret;
        return $this;
    }

    /**
     * @return array
     */
    public function getUrlParameters(): ?array
    {
        return $this->urlParameters;
    }

    /**
     * @param array $urlParameters
     *
     * @return $this
     */
    public function setUrlParameters(?array $urlParameters)
    {
        $this->urlParameters = $urlParameters;
        return $this;
    }
}
