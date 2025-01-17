<?php

namespace XD\OTPAuthenticator\Extensions;

use SilverStripe\Control\HTTPRequest;
use SilverStripe\MFA\Authenticator\LoginHandler;

/**
 * @property LoginHandler owner
 */
class LoginHandlerExtension extends OTPExtension
{
    private static $url_handlers = [
        'POST mfa/otp/registerto' => 'handleRegisterTo',
        'GET mfa/otp/resendcode' => 'handleResendCode',
    ];

    private static $allowed_actions = [
        'handleRegisterTo',
        'handleResendCode',
    ];

    public function handleRegisterTo(HTTPRequest $request)
    {
        return parent::handleRegisterTo($request);
    }

    public function handleResendCode(HTTPRequest $request)
    {
        return parent::handleResendCode($request);
    }
}
