_See also: [Two Factor Authentication and why one-time passwords are a good poor man's solution](http://code.google.com/p/otpauth/wiki/TwoFactorAuthentication)_

# Scenario A: Helpdesk-Assisted OTP #
For those who have ever worked on a system with onerous security requirements, here is a cheap, true two-factor authentication solution that adds a minimal effort to your helpdesk staff workload. The trick here is to distribute a list of One-Time Passwords using POP (Plain-Old-Paper).

A helpdesk technician with administrative privileges on the web site hits an administrative page that generates a wallet-sized list of 30 OTP number/key pairs. This list is then hand-delivered to the user. It now becomes something the user possesses - the second factor - and because it was never transmitted electronically, there is an added level of security.&nbsp; If a site doesn't mind electronic transmission within its trusted domains, then it might consider the possibility of faxing or even emailing the list to the user. When the user hits the site from that cafe in Amsterdam, she will first enter their username and password.&nbsp; If this is successful, the server poses a challenge that requires a response with the correct corresponding OTP. If the login is successful, the OTP is immediately invalidated for future use and/or replay attack.<br>

<h1>Scenario B: User Self-Service OTP</h1>

This second scenario is for people or companies who run sites and may want to offer a higher level of authentication assurance for it's more paranoid users (ever heard of tinfoilhat linux?). Imagine, for instance, a bank that wants to encourage good security practices, but cannot insist that all of its users login with two-factor authentication without scaring away half of its customers or running up their costs too high. However, some of those users will ''want ''two-factor authentication.&nbsp; The goal is to support these responsible technologists and early adopters without endangering the business model by forcing constraints on unwilling users.&nbsp; <br>

<br>

Imagine one of these high-security-demanding users logs into the bank from a trusted home or office location.&nbsp; The user visits his user preferences page and specifies that the site must require two-factor authentication when logging in from computers other than the current one he is using. The user then generates a personal, wallet-sized list of 30 OTP number/key pairs from his user preferences page.&nbsp; The next time the user is at an untrusted location, say a friend's house, he can login to his bank and check his balance even without knowing whether that computer is safe.&nbsp; When the user hits the site, once he successfully enters his username and password, there is a challenge posed that requires a response with the corresponding OTP. Once the the challenge is passed, then the user must enter their username and password. If the login is successful, the OTP is immediately invalidated for future use and/or replay attack.&nbsp; <br>

<br>

Of course, there will be some small number of users who enable OTP and then lose their list, but this additional burden should be minimal for existing support staff.&nbsp; Other than that, the risks are the same as in Scenario A.<br>



<h1><br>Scenario C: User On-Demand OTP</h1>

In this scenario, a user can associate a cell phone number with their account and then enable OTP. When she is in a place whose security she don't trust, she can enter a username and password, and then the system will send them a text message with a single OTP that must be used in order to authenticate the user's identity.&nbsp; This is similar to Scenario B, except that instead of having to carry around a list of OTP's that they might lose, they request a single one on-demand every time she visits the site from an untrusted location.&nbsp; However, if the user loses her cell phone, or the attacker is able to intercept the SMS message, then the account could be compromised.<br>
<br>
<br>

<h1>Scenario D: User Client On-Demand OTP</h1>

This scenario is similar to scenario C, in that the user's cell phone is used.&nbsp; The difference is that here the user downloads an application onto his PDA. After that, he can programmatically generate his own OTPs on-demand. An added advantage to this scenario is that the implementation can even make the OTP time-based which times out after 60 seconds, much like the RSA SecurID solution, although this would require the user syncing his PDA application with the server to initialize it. A serious disadavantage of this scenario is that there are a wide range of mobile platforms which will require different programs to be written for each.&nbsp; In addition, this is more difficult for helpdesk staff to troubleshoot.&nbsp; This approach has been tried several times in the past but has not been successful, mostly because it is so impractical.<br>
<br>
<br>