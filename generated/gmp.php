<?php

namespace Safe;

use Safe\Exceptions\GmpException;

/**
 * Export a GMP number to a binary string
 *
 * @param \GMP|string|int $gmpnumber The GMP number being exported
 * @param int $word_size Default value is 1. The number of bytes in each chunk of binary data. This is mainly used in conjunction with the options parameter.
 * @param int $options Default value is GMP_MSW_FIRST | GMP_NATIVE_ENDIAN.
 * @return string Returns a string .
 * @throws GmpException
 *
 */
function gmp_export(\GMP $gmpnumber, int $word_size = 1, int $options = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN): string
{
    error_clear_last();
    $result = \gmp_export($gmpnumber, $word_size, $options);
    if ($result === false) {
        throw GmpException::createFromPhpError();
    }
    return $result;
}


/**
 * Import a GMP number from a binary string
 *
 * @param string $data The binary string being imported
 * @param int $word_size Default value is 1. The number of bytes in each chunk of binary data. This is mainly used in conjunction with the options parameter.
 * @param int $options Default value is GMP_MSW_FIRST | GMP_NATIVE_ENDIAN.
 * @return \GMP Returns a GMP number .
 * @throws GmpException
 *
 */
function gmp_import(string $data, int $word_size = 1, int $options = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN): \GMP
{
    error_clear_last();
    $result = \gmp_import($data, $word_size, $options);
    if ($result === false) {
        throw GmpException::createFromPhpError();
    }
    return $result;
}


/**
 *
 *
 * @param \GMP|string|int $seed The seed to be set for the gmp_random,
 * gmp_random_bits, and
 * gmp_random_range functions.
 *
 * Either a GMP number resource in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @return \GMP Returns NULL on success .
 * @throws GmpException
 *
 */
function gmp_random_seed($seed): void
{
    error_clear_last();
    $result = \gmp_random_seed($seed);
    if ($result === false) {
        throw GmpException::createFromPhpError();
    }
}
