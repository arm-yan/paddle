<?php

namespace Omnipay\Paddle\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;

/**
 * Class PurchaseResponse
 * @package Omnipay\Paddle\Message
 */
class PurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{
    /**
     * Gateway endpoint
     * @var string
     */
    protected $endpoint = '#';

    /**
     * Set successful to false, as transaction is not completed yet
     * @return bool
     */
    public function isSuccessful()
    {
        return true;
    }

    /**
     * Mark purchase as redirect type
     * @return bool
     */
    public function isRedirect()
    {
        return !empty($this->data['redirect']);
    }

    /**
     * Get redirect URL
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->endpoint;
    }

    /**
     * Get redirect method
     * @return string
     */
    public function getRedirectMethod()
    {
        return 'POST';
    }

    /**
     * Get redirect data
     * @return array|mixed
     */
    public function getRedirectData()
    {
        return $this->data;
    }
}