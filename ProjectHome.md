# What is OTPauth? #
OTPauth is an **open source, php-based, code library that is a two-factor authentication solution based on RFC 2289 - The One-Time Password.** Many sites are already using this type of solution - including many banks in Europe - but there are few open source implementations. For more information see our [wiki page on two factor authentication and why one-time passwords are a good poor man's solution](http://code.google.com/p/otpauth/wiki/TwoFactorAuthentication?ts=1230685302&updated=TwoFactorAuthentication) as well as our wiki page on [Usage Scenarios](http://code.google.com/p/otpauth/wiki/usage_scenarios).

What makes it a "poor-man's solution" ? Rather than having the one-time token be expensive token generating devices (such as RSA SecurID) it is distributed using POP (Plain Old Paper). See the screenshot at the bottom of this page for a quick understanding.

This codebase is simple and I have seen it run without incident for years in a site with about 1,000 users.

# Getting Started with OTPauth #
So you want to get started using OTPauth? You've come to the right place. First, check out our [Getting Started Guide](http://code.google.com/p/otpauth/wiki/GettingStarted). Also, take a look at our demo app.

# Demo #
A bare bones demo application has been developed and is fully working. It is available at https://otpauth.com/~otpauthc/demo/login.php. Simply login, navigate to the "settings" page, generate an OTP list, enable OTP authentication, logout, and try to log back in again. (If you don't have the list you can use the 'reset' link)

To run the demo on your own server, just download the latest release or check out the source repository and navigate to the "demo" directory for your web browser.

Make sure to check our [Project Roadmap](http://code.google.com/p/otpauth/wiki/Roadmap) for more information on the demo and other upcoming topics.

# OTPauth Communication #
General discussion happens on the [OTPauth Group](http://groups.google.com/group/otpauth-group). For patches though, please follow [Contributing](http://code.google.com/p/otpauth/wiki/Contributing). Otherwise, feel free to contact the project lead, [james.barkley](http://code.google.com/u/james.barkley/) (at g mail), directly.



# Testing and Issue tracking #
Unit tests are now being written using the [SimpleTest](http://www.lastcraft.com/simple_test.php) framework and can be run by checking out the source and running from command line or browser "otpauth/tests/all\_tests.php".

Current test results are available at http://code.google.com/p/otpauth/wiki/Unit_Tests

Check out the roadmap [Project Roadmap](http://code.google.com/p/otpauth/wiki/Roadmap) for more information on future testing tasks.


There are a handful of bugs, but the list is, of course, available to all. http://code.google.com/p/otpauth/issues/list


# OTPauth Development #
So you want to start hacking on OTPauth? You've come to the right place! We are happy to accept contributions of all kinds, whether it be patch submission, testing, internationalization, or documentation.

First, take a look at the demo app to get started.

Other important pages are [Contributing](http://code.google.com/p/otpauth/wiki/Contributing).


# Example Screenshot #
![http://otpauth.googlecode.com/svn/trunk/docs/otp_login_figure2_mid.png](http://otpauth.googlecode.com/svn/trunk/docs/otp_login_figure2_mid.png)


