# PHP Function Unexpected Behavior with Zero Arguments

This repository demonstrates a bug in a simple PHP function. The function `my_function` is intended to add two numbers. However, it exhibits unexpected behavior when both input arguments are zero.  The function should handle the case where both arguments are zero gracefully, but instead, it returns zero even when only one argument is zero.

## Bug Report

The bug lies in the logic of the function `my_function`. It checks if either `$a` or `$b` is zero and returns the other, which is incorrect when both are zero. 

## Solution

The provided solution addresses the bug by adding a check for both inputs being zero, allowing for a correct return value. The solution ensures the function returns zero only if both arguments are zero, otherwise it behaves as expected.
