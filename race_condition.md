## Race Condition Explained ##
One race condition exists for the OTP system. If a hacker is listening via a keystroke logger while a user is authenticating, they may be able to listen to just enough of the OTP to enable them to brute force it before the user finishes typing it, allowing them to login as the user before the user finishes authenticating the session.

## RFC 2289 Race Condition Provision ##
Interestingly, rfc 2289 actually has a provision for this race condition and requires that it be guarded against in implementation in order to claim full compliance.

## RFC 2289 Race Condition Defense ##
The defense outlined in section 9.0 of the rfc is to deny multiple simultaneous sessions.

In other words, once a user initiates the authentication sequence all other attempts to authenticate with that user would be blocked until the authentication process has completed.

This could lead to a denial of service attack, so some sort of authentication timeout would be necessary.