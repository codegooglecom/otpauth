# Submitting a patch #
  * Make the changes in a Subversion (or git-svn) checkout
  * Run the test suit, using php (hit tests/all\_tests.php from a browser, or type "php tests/all\_tests.php"
  * Make sure the test results are the same or better as before your changes. You can check this by looking at the currently published unit tests page at http://code.google.com/p/otpauth/wiki/Unit_Tests
  * Use "svn diff" to generate a diff (or git-svn diff)
  * Create a new issue in the [Issue Tracker](http://code.google.com/p/otpauth/issues/list) if necessary
  * Wait for review from one of the current committers, and make any necessary changes after review
  * Once complete, a committer will add your patch to Subversion
  * Once you commit, you will be added to the [List of Contributors](http://code.google.com/p/otpauth/wiki/Contributors)


# Committer process #
If you're a committer on the project, **welcome!** Largely, the guidelines for committers are similar to external patches.  This means we would like major changes to be submitted through the issue tracker so they can be peer-reviewed before commit.

If your patch is "trivial", then you should feel free to commit it without review. Changes which modify under 5-10 lines can be trivial, but are not always. It depends on the area of the code. Use your best judgement. For example, adding a convenience function does not require a review, but modifying any of core otp functions even a little bit **always** does.

As we expand the OTPauth library to cover multiple platforms, we will develop more control for individual platform maintainers.

## Commit details ##
Commit logs messages should have a first line with the format "issue: <issue number>", followed by (on a separate line) very short summary (try to stay < 80 characters). If you're committing someone else's patch, use the form (John Doe) to say who submitted the patch.

In the details, try to describe **why** you changed something, not restate **what** changed (because that can be seen in the diff). If the reason for the change is obvious, you don't need to explain why. For example, you don't need to mention adding a comment.

## Example 1: multiple people worked on a patch) ##
```
Issue: 28
Added support for improved random numbers on Mac OSX (james.barkley, tcavena)
```

## Example 2: your own patch ##
```
Issue: 151
Added cut-lines to excel download sheet
```