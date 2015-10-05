## RFC 2289 Short Word Specification ##
The [rfc 2289](http://tools.ietf.org/html/rfc2289) specification for the One-Time Password system suggests that you convert your lengthy one-time passwords (66-bit hash string) to a series of six short words which are less prone to typing errors. They also suggest using the standard ISO-646 short word dictionary.

## The Problem with ISO-646 ##
A word of warning to any who use the ISO-646 dictionary: you could end up with some pretty inappropriate phrases.&nbsp; Some of the "words" in the ISO-646 dictionary are names, such as "MEG", "JIM", or "KIRK" while other "words" in the ISO-646 dictionary are partial words or slang, such as "MAYO" or "CHUB".&nbsp;

Inadvertently issuing a user a passphrase like "SLY MEG RODE LION CHUB AMEN" could end up in a lawsuit.&nbsp;

## The Solution ##
Thankfully, RFC 2289 also allows for providing your own dictionary.&nbsp; For my implementation I chose to take the ISO-646 dictionary and replace all the risk words with more benign ones.