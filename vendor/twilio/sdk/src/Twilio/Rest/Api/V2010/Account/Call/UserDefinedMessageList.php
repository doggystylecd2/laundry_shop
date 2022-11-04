<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Call;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

class UserDefinedMessageList extends ListResource {
    /**
     * Construct the UserDefinedMessageList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid Account Sid.
     * @param string $callSid Call Sid.
     */
    public function __construct(Version $version, string $accountSid, string $callSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'callSid' => $callSid, ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Calls/' . \rawurlencode($callSid) . '/UserDefinedMessages.json';
    }

    /**
     * Create the UserDefinedMessageInstance
     *
     * @param string $content A unique string value to identify API call. This
     *                        should be a unique string value per API call and can
     *                        be a randomly generated.
     * @param array|Options $options Optional Arguments
     * @return UserDefinedMessageInstance Created UserDefinedMessageInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $content, array $options = []): UserDefinedMessageInstance {
        $options = new Values($options);

        $data = Values::of(['Content' => $content, 'IdempotencyKey' => $options['idempotencyKey'], ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new UserDefinedMessageInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['callSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Api.V2010.UserDefinedMessageList]';
    }
}