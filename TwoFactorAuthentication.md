_See also: [Usage Scenarios](http://code.google.com/p/otpauth/wiki/usage_scenarios)_

## What is Two-Factor Authentication? ##

True two-factor authentication is a system wherein two different factors are used in combination to authenticate the user. Using two factors instead of one factor will deliver a higher level of authentication assurance. The combined factors could be


  1. Something the user knows (password or PIN)
  1. Something the user possesses (smartcard, PKI certificates, RSA SecurID)
  1. Something the user is or does (fingerprint, DNA sequence)


"Something the user knows" is the easy first choice. Passwords are ubiquitous for everything from logging in to your workstation to checking your bank account online. "Something the user is or does", which is usually some sort of biometric, is not a good choice for the web environment. "Something the user possesses" is the best second factor for authentication.


## The Trouble with Two-Factor Authentication ##
Getting true two-factor authentication in a web-based environment that doesn't cost a fortune (even a small one) can be a challenge.


Today, almost all web-based two-factor authentication solutions involve some form of hardware token, such as the RSA SecurID token. However, distributing these to users is neither cost-effective nor scalable in price. A company might be able to afford these for 1,000 users, but a little bit of success and it could find itself with 30,000 new users overnight. Requiring users to obtain a hardware token on their own is too much work for the vast majority of users. In addition, they have to be synced with special server software, which can often require its own license, thereby increasing the price even more.


## Enter: OTP (rfc 2289) - that old open source derivative of the Bellcorp S/key technology (rfc 1760). ##
For more information on **rfc2289, A One-Time Password System**, check out the wikipedia page at http://en.wikipedia.org/wiki/One-time_password or see the full spec at http://www.ietf.org/rfc/rfc2289.txt. The important point here is that, implemented correctly, OTP provides a less expensive two-factor authentication solution for web sites.

See the [Usage Scenarios](http://code.google.com/p/otpauth/wiki/usage_scenarios) section for more information about how.