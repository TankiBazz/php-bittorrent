<?php
/**
 * PHP BitTorrent
 *
 * Copyright (c) 2011-2012, Christer Edvartsen <cogo@starzinger.net>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * * The above copyright notice and this permission notice shall be included in
 *   all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 *
 * @package Encoder
 * @author Christer Edvartsen <cogo@starzinger.net>
 * @copyright Copyright (c) 2011-2012, Christer Edvartsen <cogo@starzinger.net>
 * @license http://www.opensource.org/licenses/mit-license MIT License
 * @link https://github.com/christeredvartsen/php-bittorrent
 */

namespace PHP\BitTorrent;

/**
 * Interface for encoders
 *
 * @package Encoder
 * @author Christer Edvartsen <cogo@starzinger.net>
 * @copyright Copyright (c) 2011-2012, Christer Edvartsen <cogo@starzinger.net>
 * @license http://www.opensource.org/licenses/mit-license MIT License
 * @link https://github.com/christeredvartsen/php-bittorrent
 */
interface EncoderInterface {
    /**
     * Encode any encodable variable
     *
     * @param int|string|array $var The variable to encode
     * @return string Returns the encoded string
     * @throws \InvalidArgumentException
     */
    function encode($var);

    /**
     * Encode an integer
     *
     * @param int|string $integer The integer to encode. Strings are supported on 32-bit platforms
     * @return string Returns the encoded string
     * @throws \InvalidArgumentException
     */
    function encodeInteger($integer);

    /**
     * Encode a string
     *
     * @param string $string The string to encode
     * @return string Returns the encoded string
     * @throws \InvalidArgumentException
     */
    function encodeString($string);

    /**
     * Encode a list (numerically indexed array)
     *
     * @param array $list The array to encode
     * @return string Returns the encoded string
     * @throws \InvalidArgumentException
     */
    function encodeList($list);

    /**
     * Encode a dictionary (associative PHP array)
     *
     * @param array $dictionary The array to encode
     * @return string Returns the encoded string
     * @throws \InvalidArgumentException
     */
    function encodeDictionary($dictionary);
}
