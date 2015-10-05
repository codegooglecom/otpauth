# Introduction #
To get started using this library, first download it at the download page. Once you have it locally, run the tests and make sure they check out. Then, run the demo app. It uses the sqlite library so assuming it has permission to write to the database files (demo\_auth\_db.sqlite, demo\_enterprise\_db.sqlite) it should run out-of-the-box.

If the demo app works correctly in your environment, you will then need to integrate it into your authentication solution. Check out the demo app and see how it handles authentication, race conditions, etc. Also, make sure you check out the API Documentation.


# API Documentation #
The OTPauth php library is a small set of functions, but they are well-documented. It is not class-based, but rather functional. Therefore, it will work with both php4 and php5. The API documentation can be found at http://code.google.com/p/otpauth/wiki/API

# Developer Integration #
Developer integration:
  1. Run generator() function in otp.php from administrative page to generate user list
  1. Use valid\_otp() function in otp.php at auth time to determine if auth is valid