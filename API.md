# Files #

  * **alphanums.php** - contains only a lookup table of alphanumeric characters
  * **iso-646.ivcs.php** - array definition of iso-646 2048 short word dictionary and reverse lookup table
  * **iso-646.ivcs.clean.php** - array definition of iso-646 2048 short word dictionary and reverse lookup table. **Loaded words replaced** ([see why this is necessary](http://domain/page)).
  * **nutils.php** - various numeric utilities. left shift unsigned long numbers, etc.
  * **otp.php** - core OTP functions, such as generate().
  * **otp\_io.php** - i/o functions that are application specific. For instance, store\_hash() may **be specific** to your database.
  * **readme** - simple readme text file
  * **demo/** - contains a demo login application using the library
  * **tests/** - various unit tests, etc.

# Constants & Globals #

<table cellpadding='10' border='1' cellspacing='1'>
<tr><th>TYPE</th><th>NAME</th><th>VALUE</th><th>DEFINITION</th></tr>
<tr><td>define</td><td>CN_OTPSIZE</td><td>50</td><td>size of otp lists produced</td></tr>
</table>


# Functions #

## Core OTP Functions ##
/*** FUNCTION          : validate\_otp($otp)
  * LAST UPDATED      : February 2005
  * PARAMS            :
  * $otp               a six-word format OTP, typically from user input.
  * 
  * DESCRIPTION       : Checks to see if the input OTP is valid based on hash of previous.
  ***/

/*** FUNCTION          : generate\_otp\_list\_and\_store()
  * LAST UPDATED      : Frvrmnrt 2008
  * PARAMS            : none
  * 
  * DESCRIPTION       : returns a six-word format list of N OTPs, and stores the first hash
  * in the database.
  ***/

/*** FUNCTION          : generate\_otp\_list()
  * LAST UPDATED      : February 2005
  * PARAMS            : none
  * 
  * DESCRIPTION       : returns a six-word format list of N OTPs, and stores the first hash
  * in the database.
  * 
  ***/



/*** FUNCTION          : simplifiedInitialStep()
  * LAST UPDATED      : February 2005
  * PARAMS            : none
  * 
  * DESCRIPTION       : Creates the initial hash based off random seed
  * 
  ***/


/*** FUNCTION          : computationStep($S, $numberOfOTPs)
  * LAST UPDATED      : February 2005
  * PARAMS            :
  * $S                 $initial hash
  * $numberOfOTPs      $size of list to create
  * 
  * DESCRIPTION       : This function takes an initial hash and the number of OTPs to create
  * and returns a list of size $numberOfOTPs
  * 
  ***/



/*** FUNCTION          : ivcs\_transform\_array\_to($otpList)
  * LAST UPDATED      : December 2008
  * PARAMS            :
  * $otpList           An array of OTPs of variable size
  * 
  * DESCRIPTION       : This function takes an otp list and returns the same list in
  * six-word format. Invalid otps in the list are return as nulls.
  * 
  * UPDATE            : Added exception throwing for certain error conditions
  * 
  ***/

/*** FUNCTION          : ivcs\_transform\_to($hex)
  * LAST UPDATED      : February 2005
  * PARAMS            :
  * $hex              a string representation of a hex number
  * 
  * DESCRIPTION       : Takes $hex and returns an ivcs word form of the number
  * 
  ***/




/*** FUNCTION          : ivcs\_transform\_from($six\_word)
  * LAST UPDATED      : February 2005
  * PARAMS            :
  * $six\_word         An array or whitespace separated string of six-words in the ivcs list
  * 
  * DESCRIPTION       : Takes six-word ivcs format and returns a hex representation
  * 
  ***/


/*** FUNCTION          : otp\_hash($hexstr)
  * LAST UPDATED      : February 2005
  * PARAMS            :
  * $hexstr           a hex-string
  * 
  * DESCRIPTION       : Breaks $hexstr (a hex string) into five 32-bit/4-byte values.
  * This is 160 bits total, and is ALWAYS the size of a sha1 hash value
  * regardless of hash input. Applies folding algorithm to condense
  * into 64-bit hash.
  * 
  ***/


/*** FUNCTION          : rfc2289\_checksum($boolArr)
  * LAST UPDATED      : February 2005
  * PARAMS            :
  * $boolArr
  * 
  * DESCRIPTION       : Calculates checksum per RFC2289 spec.  Returns 2 lsb's of checksum
  * in an array.
  * 
  ***/



## Numeric and Random Functions ##
/*** FUNCTION          : ulong2hexstr($ulong, $padLength=-1)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $ulong          : machine-packed unsigned long number
  * $padLength      : amount of left '0' pad to be applied (-1 is default and results in none)
  * 
  * DESCRIPTION       : takes a packed, unsigned long number and returns a hex string
  * that represents that number.
  * 
  * PRECONDITION      : function is given a machine-packed, 32-bit (4-byte) number
  * 
  * POSTCONDITION     : function returns a hexadecimal string representation of the number
  * 
  ***/


/*** FUNCTION          : hexstr2int($string)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $string         : string representation of hex number
  * 
  * DESCRIPTION       : takes a string hex number and returns a numeric integer representation
  * note that strings prefixed with 0x are not handled.
  * Here are some examples:
  * 0xFF = 255
  * aBcD = 43981
  * FFFF = 65535
  * FFFFFF = 16777215
  * FFFFFFFF = 4294967295
  * FFFFFFFFFF = 1099511627775
  * FFFFFFFFFFFF = 2.8147497671066E+14
  * fffffffffffffffffffffffffFFFFFFFFFFFFFFFFFFFFFFF = 6.2771017353867E+57
  * 0x00 = 0
  * 0x0j = false
  * 
  * PRECONDITION      : function is passed a string that is a hexadecimal numeric format
  * 
  * POSTCONDITION     : function returns an integer value equivalent to the value of the
  * hex number passed in or throws exception and returns false on error
  * 
  ***/



/*** FUNCTION          : binstr2int($string)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $string         : string or array representation of binary number
  * 
  * DESCRIPTION       : convert a string or array of binary numbers to numeric integer value
  * Examples:
  * "01101101010"
  * $string[0](0.md) = "0", $string[1](1.md) = "1", ..., $string[31](31.md) = "0"
  * 
  * PRECONDITION      : $string is a string or array consisting of only 1 and 0 values and
  * possibly ending with a 'b'
  * 
  * POSTCONDITION     : returns a numeric representation of the string as an integer
  * 
  * NOTE              : This is a pretty naive algorithm - there is probably a better way
  * to compute this without chewing up so much CPU cycles
  * 
  ***/


/*** FUNCTION          : strbin2ulong($value)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $value          : a string or array representation of a binary number
  * 
  * DESCRIPTION       : ingests a string or array representation of a binary number
  * and returns a machine-native packed unsigned long integer.
  * Standard size here is 32-bit (4-byte) value returned.  Note
  * that big/little endian byte-order is not enforced.
  * Examples:
  * "01101101010"
  * $string[0](0.md) = "0", $string[1](1.md) = "1", ..., $string[31](31.md) = "0"
  * returns a numeric representation of the string
  * as a machine-packed, unsigned ulong.
  * 
  * PRECONDITION      : $value is a string or array consisting of only 1 and 0 values
  * and possibly ending with a 'b'
  * 
  * POSTCONDITION     : returns a native-machine format packed binary number of
  * the value repesented by $value in binary
  * 
  * NOTES             : WARNING, unpacking a ulong number greater than 31 bits in length
  * will result in overflow to a negative number.  PHP does not
  * handle unsigned ints or signed ones greater than 31 bits in length.
  * 
  ***/



/*** FUNCTION          : str2arr($string)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $string         : a string of any size or characters
  * 
  * DESCRIPTION       : ingests a string and returns and returns an ordered array of the string
  * accepts a string, returns an ordered array
  * with each character being one array element
  * 
  * PRECONDITION      : $string is a string variable of any size or characters
  * 
  * POSTCONDITION     : returns a numbered array (ordered 0 through (n-1) where n is the
  * length of the string)
  * 
  * 
  ***/


/*** FUNCTION          : readbit\_ulong($val, $bit)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $val            : a machine-packed, unsigned long int (32-bit/4-byte)
  * $bit            : a integer representing a bit position from 0 to 31.  bit 0 is
  * most significant
  * 
  * DESCRIPTION       :  accepts a machine-packed, unsigned long int
  * and a bit position and returns the value
  * of the bit at that position of the integer as a character
  * value of either '0' or '1'
  * - note the difference
  * between '1' and 1 and also the difference
  * between '0' and 0)
  * 
  * PRECONDITION      : $val is a machine-packed, unsigned long int (32-bit/4-byte)
  * and $bit is an int from 0 to 31
  * 
  * POSTCONDITION     : returns a '0' character or a '1' character representing the bit
  * at $bit of $val
  * 
  ***/


/**accepts a machine-packed, unsigned long int
> and a bit position and a set value (either 'ON' or 'OFF').
/** 
    * FUNCTION          : writebit\_ulong($val, $bit, $set = 'ON')
    * LAST UPDATED      : 06 December 2008
    * PARAMS            :
    * $val            : a machine-packed, unsigned long int (32-bit/4-byte)
    * $bit            : a integer representing a bit position from 0 to 31.  bit 0 is
    * most significant
    * $set            : either "ON" or "OFF". Tells function which way to flip the bigt
    * 
    * DESCRIPTION       :  accepts a machine-packed, unsigned long int
    * and a bit position and a set value (either 'ON or 'OFF').
    * Function sets the value of the bit at that position of the integer
    * Bit 1 is most significant.
    * 
    * PRECONDITION      : $val is a machine-packed, unsigned long int (32-bit/4-byte),
    * $bit is an int from 0 to 31,
    * $set is either "ON" or "OFF"
    * 
    * POSTCONDITION     : sets a '0' character or a '1' character representing the bit
    * at $bit of $val
    * 
    *  **/**




/**helper function for writebit\_ulong - sets a bit to 1**/
/*** FUNCTION          : writebit\_ulong\_set($val, $bit)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $val            : a machine-packed, unsigned long int (32-bit/4-byte)
  * $bit            : a integer representing a bit position from 0 to 31.  bit 0 is
  * most significant
  * 
  * DESCRIPTION       :  accepts a machine-packed, unsigned long int
  * and a bit position and a set value (either 'ON or 'OFF').
  * Function sets the value of the bit at that position of the integer
  * to a 1. Bit 1 is most significant.
  * 
  * PRECONDITION      : $val is a machine-packed, unsigned long int (32-bit/4-byte),
  * $bit is an int from 0 to 31,
  * 
  * POSTCONDITION     : sets a 1 representing the bit
  * at $bit of $val
  * 
  ***/


/*** FUNCTION          : writebit\_ulong\_unset($val, $bit)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $val            : a machine-packed, unsigned long int (32-bit/4-byte)
  * $bit            : a integer representing a bit position from 0 to 31.  bit 0 is
  * most significant
  * 
  * DESCRIPTION       :  accepts a machine-packed, unsigned long int
  * and a bit position and a set value (either 'ON or 'OFF').
  * Function sets the value of the bit at that position of the integer
  * to a 0. Bit 1 is most significant.
  * 
  * PRECONDITION      : $val is a machine-packed, unsigned long int (32-bit/4-byte),
  * $bit is an int from 0 to 31,
  * 
  * POSTCONDITION     : sets a 0 representing the bit
  * at $bit of $val
  * 
  ***/



/*** FUNCTION          : ulong2binstr($val)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $val            : a machine-packed, unsigned long int (32-bit/4-byte)
  * 
  * DESCRIPTION       :  accepts a machine-packed, unsigned long int
  * and returns a string representation of the
  * binary entity (e.g. 10110010101....)
  * 
  * PRECONDITION      : $val is a machine-packed, unsigned long int (32-bit/4-byte),
  * 
  * POSTCONDITION     : returns a string representation of the ulong
  * 
  ***/


/*** FUNCTION          : rshft\_ulong($ulong, $amount, $wrap = 0)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $ulong          : a machine-packed, unsigned long int (32-bit/4-byte)
  * $amount         : an integer representing the number of bits to shift
  * $wrap           : a binary (1 or 0) value indicating whether or not the shift
  * should wrap the numbers that are moved out to the other side
  * of the ulong or if it should be filled with zeroes.
  * 
  * DESCRIPTION       :  accepts a machine-packed, unsigned long int, shift amount, and wrap.
  * PHP does not support these types of operations for 32-bit unsigned
  * integers.  This function shifts $ulong by $amount and fills in newly
  * shifted in positions to $wrap.
  * 
  * Example 1:
  * rshft\_ulong(pack("L",0x0), 31, 0) results in:
  * original value:  1000 0000 0000 0000 0000 0000 0000 0000
  * returned value:  0000 0000 0000 0000 0000 0000 0000 0001
  * 
  * Example 2:
  * rshft\_ulong(pack("L", 5), 2, 1) results in:
  * original value:  0000 0000 0000 0000 0000 0000 0000 0101
  * returned value:  1100 0000 0000 0000 0000 0000 0000 0001
  * 
  * PRECONDITION      : $val is a machine-packed, unsigned long int (32-bit/4-byte),
  * $amount is an integer, and $wrap is a binary
  * 
  * POSTCONDITION     : returns $ulong shifted by $amount with wrapped digits or zeroed
  * 
  ***/

/*** FUNCTION          : lshft\_ulong($ulong, $amount, $wrap = 0)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $ulong          : a machine-packed, unsigned long int (32-bit/4-byte)
  * $amount         : an integer representing the number of bits to shift
  * $wrap           : a binary (1 or 0) value indicating whether or not the shift
  * should wrap the numbers that are moved out to the other side
  * of the ulong or if it should be filled with zeroes.
  * 
  * DESCRIPTION       :  accepts a machine-packed, unsigned long int, shift amount, and wrap.
  * PHP does not support these types of operations for 32-bit unsigned
  * integers.  This function shifts $ulong by $amount and fills in newly
  * shifted in positions to $wrap.
  * 
  * PRECONDITION      : $val is a machine-packed, unsigned long int (32-bit/4-byte),
  * $amount is an integer, and $wrap is a binary
  * 
  * POSTCONDITION     : returns $ulong shifted right by $amount with wrapped digits or zeroed
  * 
  ***/


/*** FUNCTION          : hexString\_2\_booleanArray($hex)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $hex            : a string representing a hex number
  * 
  * DESCRIPTION       : This routine takes a hex string and transforms it into
  * a boolean array
  * 
  * PRECONDITION      : $hex is a hex string
  * 
  * POSTCONDITION     : returns an array representing a binary unsigned long, with
  * each position of the array set as a 1 or a 0
  * 
  * NOTES             : This routine is much faster than the routine it replaces (see
  * commented out code) and is general purpose.
  * 
  ***/

/*** FUNCTION          : booleanArray\_2\_hexString($boolArr)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $boolArr        : a boolean array that represents an unsigned int
  * 
  * DESCRIPTION       : This routine takes a boolean array transforms it into
  * a hex string
  * 
  * PRECONDITION      : $boolArr is an array representation of a binary entity
  * 
  * POSTCONDITION     : returns an string of hex digits that is equal numerically
  * to the binary number it ingested
  * 
  * NOTES             : WARNING, This consumes 4 bit nibbles and ignores any trailing bits.
  * 
  * 
  ***/



> /*** FUNCTION          : randomBooleanArray($numBits)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $numBits        : an integer representing the amount of random data in bits
  * you want returned
  * 
  * DESCRIPTION       : This routine takes an integer and returns a random
  * boolean array of that many bits
  * 
  * PRECONDITION      : $numBits is a positive integer
  * 
  * POSTCONDITION     : returns an array of bools representing a random binary number
  * 
  * 
  ***/


> /*** FUNCTION          : randomBytes($numBits)
  * LAST UPDATED      : 17 March 2005
  * PARAMS            :
  * $numBits        : an integer representing the amount of random data in bits
  * you want returned
  * 
  * DESCRIPTION       : This routine takes an integer and returns a random string
  * of bytes
  * 
  * PRECONDITION      : $numBits is a positive integer
  * 
  * POSTCONDITION     : returns an string $numBites of bits in length
  * 
  * 
  ***/





## Miscellaneous Functions ##